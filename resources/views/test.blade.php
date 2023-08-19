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
        $arrayPoint = [2,5,7,8];
    @endphp
    @foreach($arrayAnimal as $animal)
        @if($loop->even)
        {!! $loop->iteration.'.'."<span style='color:red'>".$animal."</span><br>"!!}
        @elseif($loop->odd)
        {!! $loop->iteration.'.'."<span style='color:green'>".$animal."</span><br>"!!}
        @endif
    @endforeach
    @foreach ( $arrayPoint as $point )
        {{$point}}<br>
    @endforeach
</body>
</html>
