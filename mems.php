<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style6.css">
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
                <a href="autorize.php"><p>Войти</p></a>
                <span>/</span>
                <a href="registration.php"><p>Зарегестрироваться</p></a>
            </div>
            <div class="login displayNone" id="divUser">
                <p id="userName"></p>
                <span>/</span>
                <a href="logout.php"><p>Выйти</p></a>
            </div>
            
        </div>
    </header>


    <div class="container">


    <div class="memH">
        <p>Мемы</p>
    </div>
    <div class="memes">

        <div class="mem1 mem">
        <img src="img/heart (1).png" alt="">
        </div>
        <div class="mem2 mem">
            <img src="img/heart (1).png" alt="">
        </div>
        <div class="mem3 mem">
            <img src="img/heart (1).png" alt="">
        </div>
        <div class="mem4 mem">
            <img src="img/heart (1).png" alt="">
        </div>
        <div class="mem5 mem">
            <img src="img/heart (1).png" alt="">
        </div>
        <div class="mem6 mem">
            <img src="img/heart (1).png" alt="">
        </div>
        <div class="mem7 mem">
            <img src="img/heart (1).png" alt="">
        </div>
        <div class="mem8 mem">
            <img src="img/heart (1).png" alt="">
        </div>
        <div class="mem9 mem">
            <img src="img/heart (1).png" alt="">
        </div>

    </div>
    
    <div class="testsH">
        <p>Тесты</p>
    </div>

    <div class="tests">

        <a href="TitulTest.html">
        <div class="test1 test">
            <div class="testImg1 testImg"></div>
            <div class="testH"> 
                <p>Кто ты из APEX?</p>
            </div>
        </div>
        </a>
        <a href="">
        <div class="test2 test">
            <div class="testImg2 testImg"></div>
            <div class="testH"> 
                <p>Кто ты из DOTA?</p>
            </div>
        </div>
    </a>

    <a href="">
        <div class="test3 test">
            <div class="testImg3 testImg"></div>
            <div class="testH"> 
                <p>Кто ты из Genshin Impact?</p>
            </div>
        </div>
    </a>
    </div>


    </div>



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


    <footer>
        <div class="footerContent">
            <img src="img/logo.png" alt="">
            <span>Все права защищены ©</span>
        </div>
    </footer>
    <script src=header.js></script>
</body>

</html>