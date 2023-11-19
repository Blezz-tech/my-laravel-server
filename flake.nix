{
  inputs = {
    nixpkgs.url = "github:nixos/nixpkgs/nixos-23.05";
    systems.url = "github:nix-systems/default";
    devenv.url = "github:cachix/devenv/v0.6.3";
  };

  outputs = { self, nixpkgs, devenv, systems, ... }@inputs:
    let forEachSystem = nixpkgs.lib.genAttrs (import systems);
    in {
      devShells = forEachSystem (system:
        let pkgs = nixpkgs.legacyPackages.${system};
        in {
          default = devenv.lib.mkShell {
            inherit inputs pkgs;
            modules = [{

              languages = {
                javascript.enable = true;
                javascript.package = pkgs.nodejs_20;

                php.enable = true;
                php.package = pkgs.php81.buildEnv {
                  extensions = { all, enabled }: with all; enabled ++ [ redis ];
                  extraConfig = ''
                    memory_limit = 256m
                  '';
                };
              };

              packages = with pkgs; [
                # mariadb
              ];
              # https://devenv.sh/reference/options/
              services.mysql = {
                enable = true;
                package = pkgs.mariadb;
                initialDatabases = [{ name = "my-laravel-server-db"; }];
                ensureUsers = [
                  {
                    name = "root";
                    password = "";
                    ensurePermissions = { "root.*" = "ALL PRIVILEGES"; };
                  }
                ];
                settings = {
                  # mysql = {
                  #   user = "username";
                  #   password = "test";
                  # };
                  mysqld = {
                    # "sql_require_primary_key" = "on";
                    "bind_address" = "localhost";
                  };
                };
              };
              scripts.envclear.exec = ''
              rm -rf ./.devenv ./.direnv
              '';
            }];
          };
        });
    };
}
