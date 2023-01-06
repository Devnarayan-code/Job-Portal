<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-image: url('background-signup.jpg');
            background-size: cover;
        }

        form {
            /* background-color: transparent;
            margin-top: 6em;
            margin-left: 30em;
            margin-right: 10em;
            padding: 30px; */

            background-color: transparent;
            margin-top: 5em;
            margin-left: 10em;
            margin-right: 30em;

        }
    </style>
    <title>Register</title>
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="exampleInputNumber" name="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
            </div>

            <button type="submit" class="btn btn-primary" name="signup">Submit</button>
            <br>
            Already Registered ? <a href="Login.php" style="text-decoration: none;">Login</a>
        </form>
    </div>
</body>

</html>