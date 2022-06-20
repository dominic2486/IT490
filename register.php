<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <meta name="description" content="test">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="Logo.png" alt="Logo" height="36">&nbsp Trivia
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Signup</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    
<div id="r-form">
    <form method="post" id="reg-test" action="registeruser.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" value="<?php if (!isset($_POST["fname"])) {
            echo '';
        } else {
            echo $_POST["fname"];
        } ?>" required />
        <br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" value="<?php if (!isset($_POST["lname"])) {
            echo '';
        } else {
            echo $_POST["lname"];
        } ?>" required />
        <br>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?php if (!isset($_POST["username"])) {
            echo '';
        } else {
            echo $_POST["username"];
        } ?>" required />
        <br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php if (!isset($_POST["email"])) {
            echo '';
        } else {
            echo $_POST["email"];
        } ?>" required />
        <br>
        <label for="bday">Birthday</label>
        <input type="date" id="bday" name="bday" value="<?php if (!isset($_POST["bday"])) {
            echo '';
        } else {
            echo $_POST["bday"];
        } ?>" required />
        <br>
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required />
        <br>
        <label for="pass1">Confirm Password</label>
        <input type="password" id="pass1" name="pass1" required />
        <br>
        <input type="submit" id="r_submit" name="submit" value="Register" />
    </form>
</div>
</div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Login</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Sign Up</a></li>
        </ul>
        <p1 class="text-center text-muted">&copy;2022 Copyright@JiaZhong</p1>
    </footer>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<?php
//require_once('path.inc');
//require_once('get_host_info.inc');
//require_once('rabbitMQLib.inc');
require_once(__DIR__ ."/lib/helpers.php");


    ?>


</body>

</html>
