<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style9.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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
                <p>Войти</p>
                <span>/</span>
                <p>Зарегестрироваться</p>
            </div>
        </div>
    </header>


    <div class="container">

    <div class="formsLogReg">


        <div class="changeForm">
            <div class=pContainer>
            <p class="enterP">ВХОД</p>
            <p class="regP">РЕГИСТРАЦИЯ</p>
            </div>

            <div class="closeForm"></div>
        </div>

    <div class="">
        <form action="" id="formEnter" method="POST">
            <input type="number" name="numberEnter" id="loginEnter" placeholder="НОМЕР ТЕЛЕФОНА">
            <input type="password" name="passwordEnter" id="passwordEnter"  placeholder="ПАРОЛЬ">
            <input type="submit" value="ВОЙТИ" name="Enter" id="Enter">
        </form>
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
                <textarea name="" id="" cols="23" rows="3" class="inputFeedback"
                    placeholder="Введите сообщение"></textarea>
                <button id="btnFeedback">Отправить</button>
            </form>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>