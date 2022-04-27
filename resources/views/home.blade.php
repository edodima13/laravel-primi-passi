<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        $names = ['edoardo', 'simone', 'gianluca', 'filippo']
    @endphp
    @foreach ($names as $name)
        <li>nome utente:{{ $name }}</li>
    @endforeach
</body>
</html>