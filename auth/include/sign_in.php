<?php
    session_start();
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

    $password = md5($password."qwerty");

    $mysql = new mysqli('localhost', 'root', 'root', 'coronavirus_infomation');

    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    $user = $result->fetch_assoc();

    if (count($user) == 0) {
        $_SESSION['message'] = 'Такой пользователь не найдено!';
        header('Location: ../main.php');
        // echo "Такой пользоват ../main.phpель не найдено!";
        exit();
    }

    setcookie('user', $user['name'], time() + 1, "/");


    $mysql->close();

    header('Location: ../index.php');

    // $_SESSION['message'] = 'Регистрация прошла успешна!';
    // header('Location: ../main.php');

?>
