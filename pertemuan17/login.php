<?php 
session_start();
require 'functions.php';

// cek cookie
// tanpa keamanan
// if (isset($_COOKIE['login']) ) {
//     if ($_COOKIE['login']=='true') {
//         $_SESSION['login'] = true;
//     }
// }

if (isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($db, "SELECT username FROM users WHERE id = $id");
    $input = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $input['username']) ) {
            $_SESSION['login'] = true;
    }
}

if( isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

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

                // cek remember me
                if (isset($_POST['remember'])) {
                    // buat cookie
                    setcookie('id',$input['id'], time()+60);
                    setcookie('key', hash('sha256', $input['username']), time()+60);

                }


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

    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Remember Me</label><br><br>

    <button type="submit" name="login">Login</button><br><br>

    <label for="daftar dulu">Belum punya akun?</label>
    <a href="registrasi.php">Daftar</a>
</form>

</body>
</html>