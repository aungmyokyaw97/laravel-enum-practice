<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    @foreach ($order as $row)
        <div>ID : {{$row->id}}</div>        
        <div>Status : {{$row->status}}</div>        
        <div>Color : {{$row->status->color()}}</div>
        <hr>
    @endforeach
    </div>
</body>
</html>