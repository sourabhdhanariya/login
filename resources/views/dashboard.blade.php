<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, User</h2>    
    @php 
        $email = Session::get('email');
        echo "Email: $email";
    @endphp
    <br>
    <a href='logout'>Logout</a>
</body>
</html>
