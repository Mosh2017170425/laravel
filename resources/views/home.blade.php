<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>
<body>
    <div>
        <h1>Student Data</h1>
        <form action="/register" method="POST">
             @csrf
            <input name="name" type="text" placeholder="Enter your Name" />
            <br/>
            <input name="email" type="text" placeholder="Enter your Email" />

            <br/>
            <input name="password" type="password" placeholder="Enter your password" />
            <button>Register</button>
        </form>
    </div>
</body>
</html>