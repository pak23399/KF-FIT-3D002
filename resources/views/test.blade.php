<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php
        $arrayAnimal = ['Meo','Cho','Ca','Gau'];
    @endphp
    @foreach($arrayAnimal as $key => $animal)
        @if(($key+1) % 2 === 0)
        {!! "<span style='color:red'>".$animal."</span><br>"!!}
        @else
        {!! "<span style='color:green'>".$animal."</span><br>"!!}
        @endif
    @endforeach
</body>
</html>