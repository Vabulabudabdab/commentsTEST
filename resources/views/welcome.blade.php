<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>
</head>
<body>
<form action="/post" method="post">
    {{csrf_field()}}
    username
    <input type="text" name="username">
    <br>comments
    <input type="text" name="comment">
    <br>
    <button type="submit">Submit</button>
</form>
@foreach($posts as $comm)

    @if($comm->post_id == $comm->post_id)
        {{$comm->post_id}}
        {{$comm->comment}}
        <br>


    @endif


@endforeach
</body>
</html>
