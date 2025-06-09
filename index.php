<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="../login/src/main.css">

<body>
    <div class="container-fluid d-flex 
         align-items-center 
         justify-content-center 
         min-vh-100">
        <form action="function_login.php" method="POST">
            <h1>Login</h1>
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="user">

            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" name="passwd" class="form-control" id="inputPassword">
            <br>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>