<?php
    session_start();
    require "db.php";
    // $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    // $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    // $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
    //
    //
    // $password = md5($password."qwerty");
    //
    // $mysql = new mysqli('localhost', 'root', 'root', 'coronavirus_infomation');
    // $mysql->query("INSERT INTO `users` ( `name`, `email`, `password`) VALUES ( '$name', '$email', '$password')");
    //
    //
    // $mysql->close();
    // $_SESSION['message'] = 'Регистрация прошла успешна!';
    // header('Location: /main.php');

    $data = $_POST;
    if(isset($data['do_signup'])){
        $errors = array();
        if (trim($data['name'] == '')) {
            $errors[] = 'Введите имя';
        }
        if ($data['email'] == '') {
            $errors[] = 'Введите Email!';
        }
        if ($data['password'] == '') {
            $errors[] = 'Введите пароль!';
        }
        if (empty($errors)) {
            $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
            $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
            $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);
           $password = md5($password."qwerty");

           $mysql = new mysqli('localhost', 'root', 'root', 'coronavirus_infomation');
           $mysql->query("INSERT INTO `users` ( `name`, `email`, `password`) VALUES ( '$name', '$email', '$password')");

           $mysql->close();
            $_SESSION['message'] = 'Регистрация успешна выполнена!';
            header('Location: ../main.php');
        } else {
            $_SESSION['message'] = 'Регистрация не было успешно!  '.array_shift($errors);
            header('Location: ../auth/main.php');
        }
    }
?>
