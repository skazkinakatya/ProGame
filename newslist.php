<?php
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host='localhost';
$user='root';
$pass='';
$name='proGameDB';

$link=mysqli_connect($host, $user, $pass, $name);
$newslistQuery="SELECT * FROM publications  WHERE type=1 ORDER BY createdOn DESC";

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


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newslist.css">
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
            <p>Новости</p>
        </div>       



            <div class="articleContent">

                <div class="articleBlocks">

                <?php
                    for ($i=0; $i < count($newsListData); $i++) { 
                        $newsItem=$newsListData[$i];     
                ?>

                    <a href="<?php echo "/news.php?id=".$newsItem['id']?>" class="articleBlock <?php if($i>=5) echo "displayNone"?>">
                       
                        <div class="articleText">
                            <p><?php echo $newsItem['title']?></p>
                            <span><?php echo $newsItem['createdOn']?></span>
                        </div>
                    </a>
                    
                    <?php } ?>

                    <input type="button" value="БОЛЬШЕ НОВОСТЕЙ" class="articleBtn">
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