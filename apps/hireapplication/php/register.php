<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $login = htmlspecialchars($_POST["login"], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars(md5(md5($_POST["password"])), ENT_QUOTES, 'UTF-8');
    $sql = "SELECT login, password FROM users WHERE login = '$login' AND password = '$password'";
    $result = $cnn->query($sql);
    if ($result->num_rows > 0) {
        echo "Profil již existuje";
    } else {
        $sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
        if ($cnn->query($sql) === TRUE) {
            session_start();
            $_SESSION['login'] = stripslashes($login);
            $_SESSION['id'] = $login;
        } else {
            echo "Error: " . $sql . "<br>" . $cnn->error;
        }
    }

    $cnn->close();

    header("Location: ../index.php");
    die();
}
