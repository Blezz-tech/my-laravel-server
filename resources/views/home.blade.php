<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hello, world from view</h1>
    <p>The paramets are: {{ $num }} and {{ $str }}</p>
    <table>

            @foreach ($photos as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                </tr>
            @endforeach

    </table>
</body>

</html>
