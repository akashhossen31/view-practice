<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop</title>
</head>
<body>
    <ul>
    @for ($i=0;$i<10;$i=$i+1)
        <li>{{ $i }}</li>
    @endfor
    <h1>Start Foreach loop</h1>
    @foreach ($users as $user)
        <p>user name is: {{ $user["name"] }} and he is from : {{ $user["city"] }} </p>
    @endforeach
</ul>
</body>
</html>
