<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/forgot_password') }}" method="post">
    
    @csrf
    <input type="email" name="email" id="email">
    <button type="submit" name="Submit"></button>
    </form>
</body>
</html>