<?php
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host='localhost';
$user='root';
$pass='';
$name='proGameDB';

$link=mysqli_connect($host, $user, $pass, $name);

$articlesQuery="SELECT * FROM publications  WHERE type=2";
if(isset($_GET['gameId'])){
    $articlesQuery=$articlesQuery."  AND gameId=".$_GET['gameId'];
}
$articlesQuery=$articlesQuery."  ORDER BY createdOn DESC";

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
    <link rel="stylesheet" href="style2.css">
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
            <p>Статьи</p>
        </div>       

        <div class="articleBtns">
           <input type="button" value="Все статьи" id="allArticle">
           <input type="button" value="Подборки игр" id="changeArticle">
        </div>


            <div class="articleContent">

                <div class="articleBlocks">
                <?php
                    for ($i=0; $i < count($articlesData); $i++) { 
                        $article=$articlesData[$i];     
                ?>

                    <a href="<?php echo "/article.php?id=".$article['id']?>" class="publication articleBlock <?php if($i>=5) echo "displayNone"?>">
                        <img src="<?php echo "img/articles/".$article['picture'].".jpg"?>" alt="" style="width: 300px; height: 200px;">
                        <div class="articleText">
                            <p><?php echo $article['title']?></p>
                            <span><?php echo $article['createdOn']?></span>
                        </div>
                    </a> 
                    
                    <?php } ?>

                    <input type="button" value="БОЛЬШЕ СТАТЕЙ" class="articleBtn" id="moreBtn">

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
                                <a href="<?php echo "/articles.php?gameId=".$game['id']?>">
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
                <input type="text" class="inputFeedback" placeholder="Имя">
                <input type="email" name="" id="" class="inputFeedback" placeholder="E-mail">
                <textarea name="" id="" cols="23" rows="3" class="inputFeedback" placeholder="Введите сообщение"></textarea>
                <button id="btnFeedback">Отправить</button>
            </form>
        </div>
    </div>
    <script src="more.js"></script>
    <script src="script.js"></script>
    <script src="header.js"></script>
</body>
</html>