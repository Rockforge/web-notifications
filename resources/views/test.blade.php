<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
</head>
<body>


    <form action="{{url('like')}}" method="POST">
        @csrf
        <input type="text" name="name">    
        <button type="submit">Click me to send notifcation</button>
    </form>

</body>
</html>