<?php
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require("connect.php");

$newslistQuery="SELECT * FROM publications  WHERE type=1";
if(isset($_GET['gameId'])){
    $newslistQuery=$newslistQuery."  AND gameId=".$_GET['gameId'];
}
$newslistQuery=$newslistQuery."  ORDER BY createdOn DESC";


$newsListData=[];
$queryResult=mysqli_query($link, $newslistQuery);
$resultRow=mysqli_fetch_assoc($queryResult); //создаёт ассоциативный массив из строки запроса в БД


while($resultRow){

    $dataRow=[];
    $dataRow['id']=$resultRow['id'];
    $dataRow['title']=$resultRow['title'];
    $dataRow['picture']=$resultRow['picture'];
    $dataRow['createdOn']=$resultRow['createdOn'];

    array_push($newsListData, $resultRow);

    $resultRow=mysqli_fetch_assoc($queryResult); // достаём след.строку из результатов запроса
} // переложили данные из результатов БД в массив


$gamesQuery="SELECT * FROM games";

$gamesData=[];
$queryResult=mysqli_query($link, $gamesQuery);
$resultRow=mysqli_fetch_assoc($queryResult); //создаёт ассоциативный массив из строки запроса в БД

while($resultRow){

    $dataRow=[];
    $dataRow['id']=$resultRow['id'];
    $dataRow['title']=$resultRow['title'];
    $dataRow['picture']=$resultRow['picture'];

    array_push($gamesData, $resultRow);

    $resultRow=mysqli_fetch_assoc($queryResult); // достаём след.строку из результатов запроса
} // переложили данные из результатов БД в массив

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newslist.css">
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

        <div class="articleH">
            <p>Новости</p>
        </div>       



            <div class="articleContent">

                <div class="articleBlocks">

                <?php
                    for ($i=0; $i < count($newsListData); $i++) { 
                        $newsItem=$newsListData[$i];     
                ?>

                    <a href="<?php echo "/news.php?id=".$newsItem['id']?>" class="publication articleBlock <?php if($i>=5) echo "displayNone"?>">
                       
                        <div class="articleText">
                            <p><?php echo $newsItem['title']?></p>
                            <span><?php echo $newsItem['createdOn']?></span>
                        </div>
                    </a>
                    
                    <?php } ?>

                    <input type="button" value="БОЛЬШЕ НОВОСТЕЙ" class="articleBtn" id="moreBtn">
                </div>

                <div class="articleChange">

                    <div class="category">

                        <div class="categoryH">
                            <p>Игры</p>
                        </div>

                        <div class="categoryContent">
                            <div class="games">

                                <?php 
                                foreach ($gamesData as $game) {?>
                                <a href="<?php echo "/newslist.php?gameId=".$game['id']?>" class="gamesA">
                                <div class="game">
                                    <img src="<?php echo "img/games/".$game['picture'].".png"?>" alt="">
                                    <p><?php echo $game['title'] ?></p>
                                </div>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

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
                <input type="text" class="inputFeedback" placeholder="Имя" id="nameFeedback">
                <input type="email" name="" id="emailFeedback" class="inputFeedback"  placeholder="E-mail">
                <textarea name="" id="textFeedback" cols="23" rows="3" class="inputFeedback" placeholder="Введите сообщение"></textarea>
                <span id="errorFeedback"></span>
                <input type="button" id="btnFeedback" value="Отправить">
            </form>
        </div>
    </div>
    
    <script src="more.js"></script>
    <script src="createFeedback.js"></script>
    <script src="script.js"></script>
    <script src="header.js"></script>
</body>
</html>