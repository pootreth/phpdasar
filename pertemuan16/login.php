<?php 
session_start();

if( isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

require 'functions.php';

    if( isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

        // cek username
        if (mysqli_num_rows($result) === 1) {
            
            // cek password
            $input = mysqli_fetch_assoc($result);
            if (password_verify($password, $input["password"])) {

                // set session
                $_SESSION["login"] = true;


                header("Location: index.php");
                exit;
            }
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    
<h2>Login</h2>

<?php if (isset($error) ) : ?>
    <p style="color: red; font-style: italic;">Username / password salah</p>
<?php endif; ?>

<form action="" method="POST">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" autocomplete="off"><br><br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br><br>

    <button type="submit" name="login">Login</button><br><br>

    <label for="daftar dulu">Belum punya akun?</label>
    <a href="registrasi.php">Daftar</a>
</form>

</body>
</html>