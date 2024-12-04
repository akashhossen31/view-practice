<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>i am blade home page</h1>
    <h1>the sum is : {{ $result }}</h1>
    <h1>the number:{{ 4*4 }}</h1>
<h3>start if condition</h3>
    @if ($result>=100)
     <h1>the result is getter than 100</h1>
     @elseif ($result<=100)
     <h1>the result is less than 100</h1>
    @else
    <h1>enter the result</h1>
    @endif
 <h3>End if condition</h3>
 <h3>start switch case</h3>
    @switch($result)
        @case(100)
            <p>the result is hundred</p>
            @break
        @case(1000)
        <p>the result is thusand</p>
        @break
        @case(100000)
        <p>the result is lacks</p>
        @break
        @default
        <p>the number is not my range</p>

    @endswitch
    <h3>end switch case</h3>


</body>
</html>
