<?php
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require("connect.php");
$memsQuery="SELECT * FROM publications  WHERE type=3 ORDER BY  createdOn DESC LIMIT 0,9";

$memData=[];
$queryResult=mysqli_query($link, $memsQuery);
$resultRow=mysqli_fetch_assoc($queryResult); //создаёт ассоциативный массив из строки запроса в БД

while($resultRow){
    $dataRow=[];
    $dataRow['id']=$resultRow['id'];
    $dataRow['picture']=$resultRow['picture'];
    array_push($memData, $resultRow);
    $resultRow=mysqli_fetch_assoc($queryResult); // достаём след.строку из результатов запроса
} // переложили данные из результатов БД в массив


?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Развлечения</title>
    <link rel="stylesheet" href="style6.css">
    <link rel="stylesheet" href="styleGeneral.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
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


    <div class="memH">
        <p>Мемы</p>
    </div>
    <div class="memes">

    <?php
    foreach ($memData as $row) {    
    ?>
    

        <div class="mem" style="background-image: <?php echo "url('img/memes/".$row['picture'].".jpg')"?>">
        </div>

        <?php } ?>

    </div>
    
    <div class="testsH">
        <p>Тесты</p>
    </div>

    <div class="tests">

        <a href="TitulTest.php">
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
    <script src="like.js"></script>
    <script src="script.js"></script>
    <script src="header.js"></script>
</body>

</html>