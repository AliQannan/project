<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="margin: 100px auto ; width:400px ; height:400px;  border:2px solid red; background-color:yellow; text-align:center; ">
        @foreach ( $articals as $item)
            <h1>
               {{$item->title}} 
            </h1>
            <p>{{$item->content}}</p>
        @endforeach

    </div>
    
</body>
</html>