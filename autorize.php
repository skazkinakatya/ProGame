<?php
error_reporting(E_ALL);
ini_set("display_error", "on");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require("connect.php");

$isPosted = $_SERVER['REQUEST_METHOD'] === 'POST';  //Проверка метода, которым мы пришли на страницу

$loginError = "";


function normalize($text)
{
    $text = trim($text);
    $text = stripslashes($text);
    $text = htmlspecialchars($text);

    return $text;
}

if ($isPosted) { // Проводит проверку формы
    $loginEnter = mysqli_real_escape_string($link, normalize($_POST['loginEnter']));
    $passwordEnter = normalize($_POST['passwordEnter']);

    $userData = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE (login = '" . $loginEnter . "'    OR tel = '" . $loginEnter . "'    OR email = '" . $loginEnter . "')"));
    if (!$userData) {
        $loginError = "Неверное имя пользователя";
    } else {
        if (password_verify($passwordEnter, $userData['password'])) {
            $userInfo = [];
            $userInfo['id'] = $userData['id'];
            $userInfo['login'] = $userData['login'];
            $userInfoJson = json_encode($userInfo, JSON_UNESCAPED_UNICODE);
            session_start();
            $_SESSION['userId'] = $userData['id'];
            setcookie('user', $userInfoJson, time() + 60 * 60 * 24 * 14);
            header("Location: /index.php");
            die();
        } else {
            $loginError = "Неверное имя пользователя или пароль";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Войти</title>
    <link rel="stylesheet" href="styleGeneral.css">
    <link rel="stylesheet" href="style9.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/icons8-visual-game-boy-color-pixels-120.png" type="image/x-icon">
</head>

<body>


    <header>
        <div class="header">
            <div class="navContainer">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt="" style="width: 40px;"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="newslist.php">Новости</a></li>
                        <li><a href="articles.php">Статьи</a></li>
                        <li><a href="cosplay.php">Косплей</a></li>
                        <li><a href="mems.php">Развлечения</a></li>
                    </ul>
                </nav>
            </div>

            <div class="login">
                <a href="autorize.php">
                    <p>Войти</p>
                </a>
                <span>/</span>
                <a href="registration.php">
                    <p>Зарегестрироваться</p>
                </a>
            </div>

        </div>
    </header>


    <div class="container">

        <div class="formsLogReg">


            <div class="changeForm">
                <div class=pContainer>
                    <p class="enterP">ВХОД</p>
                    <a href="registration.php">
                        <p class="regP">РЕГИСТРАЦИЯ</p>
                    </a>
                </div>
            </div>

            <div class="">
                <form action="" id="formEnter" method="POST">
                    <input type="text" name="loginEnter" id="loginEnter" placeholder="Введите логин, номер телефона или email">
                    <input type="password" name="passwordEnter" id="passwordEnter" placeholder="ПАРОЛЬ">
                    <input type="submit" value="ВОЙТИ" name="Enter" id="Enter">
                </form>
                <?php if ($loginError != "") { ?>
                    <p class="errors"> <?php echo $loginError ?>
                    </p>
                <?php
                }
                ?>
            </div>
        </div>


    </div>


    <footer>
        <div class="footerContent">
            <img src="img/logo.png" alt="">
            <span>Все права защищены ©</span>
        </div>
    </footer>
    <div class="feedback">
        <div class="feedbackH">
            <span>Обратная связь</span>
        </div>
        <div class="feedbackContainer">
            <div class="feedbackContainerH">
                <span>Обратная связь</span>
                <div class="close"></div>
            </div>
            <form class="inputs">
                <input type="text" class="inputFeedback" placeholder="Имя">
                <input type="email" name="" id="" class="inputFeedback" placeholder="E-mail">
                <textarea name="" id="" cols="23" rows="3" class="inputFeedback" placeholder="Введите сообщение"></textarea>
                <button id="btnFeedback">Отправить</button>
            </form>
        </div>
    </div>


    <script src="script.js"></script>

</body>

</html>