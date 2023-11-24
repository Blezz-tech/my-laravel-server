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

              languages.javascript = {
                enable = true;
                package = pkgs.nodejs_20;
              };

              languages.php = {
                enable = true;
                version = "8.1";
              };

              # certificates = [
              #   "example.com"
              # ];

              # hosts = {
              #   "example.app" = "127.0.0.1";
              # };

              services.nginx = {
                enable = true;
                httpConfig = ''
                  server {
                    listen 8080;

                    server_name example.app;

                    charset utf-8;

                    root /home/jenya/git-repos/my-laravel-server;

                    location / {
                      autoindex on;
                      autoindex_localtime on;
                      autoindex_exact_size off;
                    }
                  }
                '';
              };

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
                  mysqld = {
                    "bind_address" = "localhost";
                  };
                };
              };

              scripts = {
                EnvClearAll.exec = "rm -rf ./.devenv ./.direnv";
                EnvClearStatic.exec = "rm -rf ./.devenv/state";
              };
            }];
          };
        });
    };
}
