<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статья</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="styleGeneral.css">
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

            <div class="login" id="divLogin">
                <a href="autorize.php">
                    <p>Войти</p>
                </a>
                <span>/</span>
                <a href="registration.php">
                    <p>Зарегестрироваться</p>
                </a>
            </div>
            <div class="login displayNone" id="divUser">
                <p id="userName"></p>
                <span>/</span>
                <a href="logout.php">
                    <p>Выйти</p>
                </a>
            </div>
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="menu">
                <div class=navBurger>
                    <ul>
                        <li><a href="newslist.php">Новости</a></li>
                        <li><a href="articles.php">Статьи</a></li>
                        <li><a href="cosplay.php">Косплей</a></li>
                        <li><a href="mems.php">Развлечения</a></li>
                    </ul>

                </div>
            </div>

        </div>
    </header>


    <div class="container">

        <div class="navigation">
            <p><a href="index.php">Главная ></a></p>
            <p><a href="articles.php">Статьи ></a></p>
            <p><a href="">Assassin’s Creed про Древний Китай теперь называется Assassin’s Creed Jade</a></p>
        </div>
        <div class="imgArticle" style="background-image:url(img/assas.jpg)">
            <div class="wrapper"></div>
            <div class="articleH">
                <p>Assassin’s Creed про Древний Китай теперь называется Assassin’s Creed Jade. Смотрите трейлер</p>
            </div>
        </div>


        <div class="articleContent">
            <p>Ubisoft и Level Infinite объявили итоговое название мобильной Codename Jade. Особо изощряться не стали, поэтому у разработчиков получилась просто Assassin’s Creed Jade. Также вышел свежий трейлер.

Напомним, действие Jade разворачивается в Китае третьего века до нашей эры. В эту эпоху торговля и культурный обмен между Востоком и Западом только начинаются, вместе с чем появляются и новые угрозы. Главный герой, которого разрешат создать на свой вкус, будет противостоять кочевникам Хуннам и рушить заговоры. Также предстоит исследовать большой открытый мир и разгадывать загадки. Например, можно узнать секрет терракотовой армии.

Assassin’s Creed Jade будет распространяться на мобильных устройствах по условно-бесплатной схеме. Если верить Ubisoft, скоро начнётся вторая закрытая «бета».</p>
        </div>

        <div class="discussion">
            <div class="count">
                <span>Колличество комментариев: </span>
                <span id="countComment">0</span>
            </div>
            <input type="text" name="" id="comment" placeholder="Введите сообщение">
            <input type="hidden" name="" id="publicationId" value="<?php echo $articleId ?>"> <!--Создаём скрытое поле с id публикации-->
            <input type="button" value="Отправить" id="sendComment">
            <p id="noComment"></p>
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
                <textarea name="" id="" cols="23" rows="3" class="inputFeedback" placeholder="Введите сообщение"></textarea>
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
    <script src="header.js"></script>
    <script src="script.js"></script>
    <script src="createComment.js"></script>

</body>

</html>