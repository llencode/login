<?php
session_start();

include("connection.php");

$username = $_POST['username'];
$password = md5($_POST['passwd']);

$sql = "SELECT * FROM user WHERE email = '$username' AND passwd = '$password' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $username;
    $_SESSION['passwd'] = $password;

    header('Location:home.php');
    exit();
} else {
    echo 'gagal';
}

?>