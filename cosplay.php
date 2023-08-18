<?php
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host='localhost';
$user='root';
$pass='';
$name='proGameDB';

$link=mysqli_connect($host, $user, $pass, $name);
$cosplayQuery="SELECT * FROM publications  WHERE type=4 ORDER BY  createdOn DESC LIMIT 0,9";

$cosplayData=[];
$queryResult=mysqli_query($link, $cosplayQuery);
$resultRow=mysqli_fetch_assoc($queryResult); //создаёт ассоциативный массив из строки запроса в БД

while($resultRow){
    $dataRow=[];
    $dataRow['id']=$resultRow['id'];
    $dataRow['picture']=$resultRow['picture'];
    array_push($cosplayData, $resultRow);
    $resultRow=mysqli_fetch_assoc($queryResult); // достаём след.строку из результатов запроса
} // переложили данные из результатов БД в массив


?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="styleGeneral.css">
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

            <div class="login" id="divLogin">
                <a href="autorize.php"><p>Войти</p></a>
                <span>/</span>
                <a href="registration.php"><p>Зарегестрироваться</p></a>
            </div>
            <div class="login displayNone" id="divUser">
                <p id="userName"></p>
                <span>/</span>
                <a href="logout.php"><p>Выйти</p></a>
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

        <div class="compilationCosplayH">
            <p>Подборки косплея</p>
        </div>

        
    <div class="compilationCosplay">
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
    </div>

    <div class="newsFeedH">
        <p>Лента косплея</p>
    </div>
    <div class="newsFeeds">

     <?php
    foreach ($cosplayData as $row) {    
    ?>

        <div class="newsFeed" style="background-image: <?php echo "url('img/cosplay/".$row['picture'].".jpg')"?>">
        <img src="img/heart (1).png" alt="">
        </div>

        <?php } ?>
        
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
    <script src="header.js"></script>
</body>

</html>