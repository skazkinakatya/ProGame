<?php
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host='localhost';
$user='root';
$pass='';
$name='proGameDB';

$link=mysqli_connect($host, $user, $pass, $name);
$articlesQuery="SELECT * FROM publications  WHERE type=2 ORDER BY createdOn DESC";

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
    <link rel="stylesheet" href="style2.css">
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

                    <a href="<?php echo "/article.php?id=".$article['id']?>" class="articleBlock <?php if($i>=5) echo "displayNone"?>">
                        <img src="<?php echo "img/articles/".$article['picture'].".jpg"?>" alt="" style="width: 300px; height: 200px;">
                        <div class="articleText">
                            <p><?php echo $article['title']?></p>
                            <span><?php echo $article['createdOn']?></span>
                        </div>
                    </a> 
                    
                    <?php } ?>

                    <input type="button" value="БОЛЬШЕ СТАТЕЙ" class="articleBtn">

                </div>

                <div class="articleChange">

                    <div class="category">

                        <div class="categoryH">
                            <p>Игры</p>
                        </div>

                        <div class="categoryContent">
                            <div class="games">
                                <div class="game">
                                    <img src="img/apex-legends-logo-41861.png" alt="">
                                    <p>APEX</p>
                                </div>
                                <div class="game">
                                    <img src="img/cs.png" alt="">
                                    <p>Counter-Strike</p>
                                </div>
                                <div class="game">
                                    <img src="img/pubg.png" alt="">
                                    <p>PUBG</p>
                                </div>
                                <div class="game">
                                    <img src="img/wot.png" alt="">
                                    <p>WOT</p>
                                </div>
                                <div class="game">
                                    <img src="img/Genshin_Impact.png" alt="">
                                    <p>Genshin Impact</p>
                                </div>
                                <div class="game">
                                    <img src="img/dota-2.png" alt="">
                                    <p>DOTA</p>
                                </div>
                                <div class="game">
                                    <img src="img/Valorant-Logo.png" alt="">
                                    <p>Valorant</p>
                                </div>
                                <div class="game">
                                    <img src="img/Rust-Logo.png" alt="">
                                    <p>RUST</p>
                                </div>
                                <div class="game">
                                    <img src="img/fortnite.png" alt="">
                                    <p>FORTNITE</p>
                                </div>
                                <div class="game">
                                    <img src="img/GTA.png" alt="">
                                    <p>GTA</p>
                                </div>
                            </div>

                            <input type="text" name="" placeholder="Введите название игры" id="gameName">
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
    <script src=header.js></script>
</body>
</html>