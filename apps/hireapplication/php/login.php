<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = htmlspecialchars($_POST["login"], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST["password"], ENT_QUOTES, 'UTF-8');
    $md5password = md5(md5($password));
    $sql = "SELECT login, password FROM users WHERE login = '$login' AND password = '$md5password'";
    $result = $cnn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['login'] = stripslashes($login);
        $_SESSION['id'] = $login;
        header("Location: ../add-offer.php");
        die();
    } else {
        header("Location: ../login.php");
    }
    $conn->close();
}
