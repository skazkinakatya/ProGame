<?php
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'proGameDB';

$link = mysqli_connect($host, $user, $pass, $name);
$newslistQuery = "SELECT * FROM publications  WHERE type=1 ORDER BY createdOn DESC LIMIT 0,6";

$newsListData = [];
$queryResult = mysqli_query($link, $newslistQuery);
$resultRow = mysqli_fetch_assoc($queryResult); //создаёт ассоциативный массив из строки запроса в БД

while ($resultRow) {

    $dataRow = [];
    $dataRow['id'] = $resultRow['id'];
    $dataRow['title'] = $resultRow['title'];
    $dataRow['picture'] = $resultRow['picture'];
    $dataRow['createdOn'] = $resultRow['createdOn'];

    array_push($newsListData, $resultRow);

    $resultRow = mysqli_fetch_assoc($queryResult); // достаём след.строку из результатов запроса
} // переложили данные из результатов БД в массив


$articlesQuery="SELECT * FROM publications  WHERE type=2 ORDER BY createdOn DESC LIMIT 0,5";

$articlesData=[];
$queryResult=mysqli_query($link, $articlesQuery);
$resultRow=mysqli_fetch_assoc($queryResult); //создаёт ассоциативный массив из строки запроса в БД

while($resultRow){

    $dataRow=[];
    $dataRow['id']=$resultRow['id'];
    $dataRow['title']=$resultRow['title'];
    $dataRow['picture']=$resultRow['picture'];
    $dataRow['createdOn']=$resultRow['createdOn'];

    array_push($articlesData, $resultRow);

    $resultRow=mysqli_fetch_assoc($queryResult); // достаём след.строку из результатов запроса
} // переложили данные из результатов БД в массив

?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleGeneral.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
            <a href="" class="popularImg1">
                <span class="popularImgSpan">
                    Нет дыма без огня: новый геймплейный трейлер Mortal Kombat 1 <br>
                    подтвердил возвращение двух любимцев фанатов
                </span>
            </a>
            <a href="" class="popularImg2">
                <span class="popularImgSpan">
                    В CS2 нашли способ стать бессмертным — <br>
                    для этого нужно застрять в дверях
                </span>
            </a>
            <a href="" class="popularImg3">
                <span class="popularImgSpan">
                    Балийский мейджор приближается
                </span>
            </a>
            <a href="" class="popularImg4">
                <span class="popularImgSpan">
                    Рабочие промокоды для Genshin Impact <br>
                    на июль 2023 года
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
            <input type="button" value="БОЛЬШЕ НОВОСТЕЙ" class="newsBtn">
        </div>


        <div class="article">
            <div class="articleH">
                <p>Статьи</p>
            </div>
            <div class="articleBlocks">

            <?php
                    for ($i=0; $i < count($articlesData); $i++) { 
                        $article=$articlesData[$i];     
                ?>
                <a href="<?php echo "/article.php?id=".$article['id']?>" class="articleBlock">
                <img src="<?php echo "img/articles/".$article['picture'].".jpg"?>" alt="" style="width: 300px; height: 200px;">
                    <div class="articleText">
                    <p><?php echo $article['title']?></p>
                    <span><?php echo $article['createdOn']?></span>
                    </div>
                </a>
                <?php } ?>
                
            </div>

        </div>

        <input type="button" value="БОЛЬШЕ СТАТЕЙ" class="articleBtn">


        <div class="cosplay">
            <div class="cosplayH">
                <p id="p1">Косплей</p>
                <p id="p2">Подборки косплея</p>
            </div>
            <div class="cosplayBlocks">
                <div class="cosplayBlock1">
                    <div class="cosplayGirls">
                        <div class="cosplayGirl1">
                            <img src="img/girl 1.png" alt="">
                            <p class="userName"><a href="">@username</a></p>
                        </div>
                        <div class="cosplayGirl2">
                            <img src="img/girl 2.png" alt="">
                            <p class="userName"><a href="">@username</a></p>
                        </div>
                    </div>
                    <input type="button" value="БОЛЬШЕ КОСПЛЕЯ" class="moreCosplay">

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

    <script src="script.js"></script>
    <script src="header.js"></script>
</body>

</html>