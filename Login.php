<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-image: url('background-login.jpg');
            background-size: cover;
        }

        h4 {
            padding-bottom: 20px;
        }

        form {
            /* background-color: #fff;
            margin-top: 6em;
            margin-left: 30em;
            margin-right: 10em;
            
            box-shadow: 10px 10px 8px 10px #888888; */
            background-color: transparent;
            margin-top: 16em;
            margin-left: 30em;
            margin-right: 10em;



        }
    </style>
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <h4>Login</h4>
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <a href="career.php"> <button type="submit" class="btn btn-primary" name="login">Submit</button></a>

            <br>
            <p style="text-align: center;"> New User?<br>Create Account <a href="register.php" style="text-decoration: none;">Sign Up</a></p>
        </form>
    </div>
</body>

</html>