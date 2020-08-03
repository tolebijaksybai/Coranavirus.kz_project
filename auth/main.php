<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page_2</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1><a href="admin/admin_panel.php">Панель Администратора </a> <a href="../index.php">Главная</a></h1>
    <div class="container" id="container">

        <?php
            if($_COOKIE['user'] == ''):
        ?>
        <div class="form-container sign-up-container">

            <form action="include/sign_up.php" method="post">
                <h1>Регистрация</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-vk fa-2x" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fab fa-github fa-2x"></i></a>
                    <a href="#" class="social"><i class="fab fa-telegram fa-2x"></i></a>
                </div>
                <span>Или используйте свой адрес электронной почты для регистрации</span>
                <input type="text" name="name" placeholder="Имя" />
                <input type="email" name="email" placeholder="Email" value="<?php echo @$data['email']; ?>"/>
                <input type="password" name="password" placeholder="Пароль" value="<?php echo @$data['password']; ?>"/>
                <button type="submit" name="do_signup">Отправить</button>
                <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg font-weight-bold text-danger">'. $_SESSION['message'] .'</p>';
                    }
                    unset($_SESSION['message']);
                 ?>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action="include/sign_in.php" method="POST">
                <h1>Войти в систему</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-vk fa-2x" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fab fa-github fa-2x" aria-hidden="true"></i></a>
                    <a href="#" class="social"><i class="fab fa-telegram fa-2x" aria-hidden="true"></i></a>
                </div>
                <span>Или используйте свой аккаунт</span>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Пароль" />
                <!-- <a href="#">Забыли Ваш пароль?</a> -->
                <button type="submit">Войти</button>
                <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg font-weight-bold text-danger">'. $_SESSION['message'] .'</p>';
                    }
                    unset($_SESSION['message']);
                 ?>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Добро пожаловать назад!</h1>
                    <p>Чтобы оставаться на связи с нами, пожалуйста, войдите с вашей личной информацией</p>
                    <button class="ghost" id="signIn">Войти</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Привет !</h1>
                    <p>Введите свои личные данные и узнайте все информация о короновирусе 2020 году!</p>
                    <button class="ghost" id="signUp" type="submit">Регистрация</button>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p>Привет <?=$_COOKIE['Uuser']?>. Чтобы выйти нажимайте <a href="/index.php">здесь</a></p>
        <?php endif; ?>
    </div>


    <script src="js/main.js"></script>

</body>

</html>
