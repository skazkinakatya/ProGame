<?php
error_reporting(E_ALL);
ini_set("display_error", "off");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //включаем сообщение об ошибках

require("connect.php");

$newslistQuery = "SELECT * FROM publications  WHERE type=1 ORDER BY createdOn DESC LIMIT 0,6"; //запрос на выборку новостей

$newsListData = [];
$queryResult = mysqli_query($link, $newslistQuery);
$resultRow = mysqli_fetch_assoc($queryResult); //создаём ассоциативный массив из строки запроса

while ($resultRow) { // перекладывем данные из результатов БД в массив

    $dataRow = [];
    $dataRow['id'] = $resultRow['id'];
    $dataRow['title'] = $resultRow['title'];
    $dataRow['picture'] = $resultRow['picture'];
    $dataRow['createdOn'] = $resultRow['createdOn'];

    array_push($newsListData, $resultRow);

    $resultRow = mysqli_fetch_assoc($queryResult);
}


$articlesQuery = "SELECT * FROM publications  WHERE type=2 ORDER BY createdOn DESC LIMIT 0,5"; //запрос на выборку статей

$articlesData = [];
$queryResult = mysqli_query($link, $articlesQuery);
$resultRow = mysqli_fetch_assoc($queryResult); //создаёт ассоциативный массив из строки запроса в БД

while ($resultRow) {

    $dataRow = [];
    $dataRow['id'] = $resultRow['id'];
    $dataRow['title'] = $resultRow['title'];
    $dataRow['picture'] = $resultRow['picture'];
    $dataRow['createdOn'] = $resultRow['createdOn'];

    array_push($articlesData, $resultRow);

    $resultRow = mysqli_fetch_assoc($queryResult); // достаём след.строку из результатов запроса
} // переложили данные из результатов БД в массив

?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProGame</title>
    <link rel="stylesheet" href="style.css">
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

        <div class="popularH">
            <img src="img/fire.png" alt="" width="34px">
            <p>Популярное</p>
            <span id="popularChange"> за день</span>
        </div>


        <div class="popularImg">
            <a href="article1.php" class="popularImg1">
                <span class="popularImgSpan">
                «Новая игра +» в Starfield и мысли о TESVI — главное из интервью с Тоддом Говардом
                </span>
            </a>
            <a href="article2.php" class="popularImg2">
                <span class="popularImgSpan">
                Assassin’s Creed про Древний Китай теперь называется Assassin’s Creed Jade. Смотрите трейлер
                </span>
            </a>
            <a href="article3.php" class="popularImg3">
                <span class="popularImgSpan">
                Официально: S.T.A.L.K.E.R. 2 отложили до начала 2024-го. Смотрите трейлер
                </span>
            </a>
            <a href="article4.php" class="popularImg4">
                <span class="popularImgSpan">
                Вампирский сезон Diablo IV стартует 17 октября
                </span>
            </a>
        </div>


        <div class="news">
            <div class="newsH">
                <p>Новости киберспорта и игр</p>
            </div>
            <div class="newsBlocks">

                <?php
                for ($i = 0; $i < count($newsListData); $i++) {
                    $newsItem = $newsListData[$i];
                ?>

                    <a href="<?php echo "/news.php?id=" . $newsItem['id'] ?>" class="newsBlock">

                        <p><?php echo $newsItem['title'] ?></p>
                        <span><?php echo $newsItem['createdOn'] ?></span>
                    </a>

                <?php } ?>

            </div>
            <input type="button" value="БОЛЬШЕ НОВОСТЕЙ" class="newsBtn" onclick="document.location='newslist.php'">
        </div>


        <div class="article">
            <div class="articleH">
                <p>Статьи</p>
            </div>
            <div class="articleBlocks">

                <?php
                for ($i = 0; $i < count($articlesData); $i++) {
                    $article = $articlesData[$i];
                ?>
                    <a href="<?php echo "/article.php?id=" . $article['id'] ?>" class="articleBlock">
                        <img src="<?php echo "img/articles/" . $article['picture'] . ".jpg" ?>" alt="" style="width: 300px; height: 200px;">
                        <div class="articleText">
                            <p><?php echo $article['title'] ?></p>
                            <span><?php echo $article['createdOn'] ?></span>
                        </div>
                    </a>
                <?php } ?>

            </div>

        </div>

        <input type="button" value="БОЛЬШЕ СТАТЕЙ" class="articleBtn" onclick="document.location='articles.php'">


        <div class="cosplay">
            <div class="cosplayH">
                <p id="p1">Косплей</p>
                <p id="p2">Подборки косплея</p>
            </div>
            <div class="cosplayBlocks">
                <div class="cosplayBlock1">
                    <div class="cosplayGirls">
                        <div class="cosplayGirl1">
                            <p class="userName"><a href="">@itlookslikekilled</a></p>
                        </div>
                        <div class="cosplayGirl2">
                            <p class="userName"><a href="">@usagi_lunnaya</a></p>
                        </div>
                    </div>
                    <input type="button" value="БОЛЬШЕ КОСПЛЕЯ" class="moreCosplay" onclick="document.location='cosplay.php'">

                </div>
                <div class="cosplayBlock2">
                    <div class="cosplayCompilations">
                        <a href="" class="cosplayCompilation">
                            <p>Российская модель похвасталась рельефным прессом в косплее на Скарлет из Mortal Kombat 9</p>
                            <span>55 минут назад</span>
                        </a>
                        <a href="" class="cosplayCompilation">
                            <p>Авторы Atomic Heart показали горячий косплей Элеоноры в латексном платье</p>
                            <span>55 минут назад</span>
                        </a>
                        <a href="" class="cosplayCompilation">
                            <p>Косплей: близняшка из Atomic Heart, которую сложно отличить от кадров из игры</p>
                            <span>55 минут назад</span>
                        </a>
                        <a href="" class="cosplayCompilation">
                            <p>Нейросеть нарисовала «правильную» Эйприл О'Нил</p>
                            <span>55 минут назад</span>
                        </a>


                    </div>
                    <input type="button" value="БОЛЬШЕ ПОДБОРОК" class="moreCompilation">
                </div>
            </div>

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
            <form class="inputs" method="POST">
                <input type="text" class="inputFeedback" id="nameFeedback" placeholder="Имя">
                <input type="email" name="" id="emailFeedback" class="inputFeedback" placeholder="E-mail">
                <textarea name="" id="textFeedback" cols="23" rows="3" class="inputFeedback" placeholder="Введите сообщение"></textarea>
                <input type="submit" id="btnFeedback" value="Отправить">
            </form>
        </div>
    </div>


    <footer>
        <div class="footerContent">
            <img src="img/logo.png" alt="">
            <span>Все права защищены ©</span>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="header.js"></script>
</body>

</html>