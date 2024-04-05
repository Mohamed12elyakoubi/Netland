<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Media</th>
                    <th>Actors</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($media as $medium)
                    <tr>
                        <td>{{$medium->title}}</td>
                        <td>
                            <ul>
                                @foreach ($medium->actors as $actor)
                                    <li>{{$actor->first_name}} {{$actor->last_name}}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
