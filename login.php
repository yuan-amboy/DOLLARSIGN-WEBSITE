<?php
session_start();

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        $error_message = "All fields are required.";
    } else {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user["Password"])) {
            $_SESSION["users"] = [
                'First_Name' => $user["First_Name"],
                'Last_Name' => $user["Last_Name"],
                'email' => $user["email"]
            ];

            header("Location: index.php");
            exit();
        } else {
            $error_message = "Invalid email or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | DOLLARSIGN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
    <div class="brand-name">DOLLARSIGN</div>

    <h1 class="form-title">LOGIN</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        if (empty($email) || empty($password)) {
            echo "<div class='alert alert-danger'>All fields are required</div>";
        } else {
            require_once "database.php";

            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);

            if ($user && password_verify($password, $user["Password"])) {
                $_SESSION["users"] = "yes";
                header("Location: index.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Invalid email or password</div>";
            }
        }
    }
?>

<form action="login.php" method="post">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="form-btn">
        <input type="submit" value="LOGIN" name="login" class="btn-login">
    </div>
</form>
<div><p>Don't have an account yet? <a href="registration.php">Create one.</a></p></div>
</body>
