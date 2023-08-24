<?php
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require("connect.php");
$newsId=mysqli_real_escape_string($link, $_GET['id']);
$newsQuery="SELECT * FROM publications  WHERE type=1 AND id=".$newsId." ORDER BY createdOn DESC";

$queryResult=mysqli_query($link, $newsQuery);
$resultRow=mysqli_fetch_assoc($queryResult); //создаёт ассоциативный массив из строки запроса в БД


$commentsQuery="SELECT comments.*,users.login FROM comments INNER JOIN users ON comments.userId=users.id WHERE publicationId=".$newsId."  ORDER BY createdOn DESC";

$commentsData=[];
$queryResult=mysqli_query($link, $commentsQuery);
$commentRow=mysqli_fetch_assoc($queryResult); //создаёт ассоциативный массив из строки запроса в БД

while($commentRow){

    $dataRow=[];
    $dataRow['id']=$commentRow['id'];
    $dataRow['userId']=$commentRow['userId'];
    $dataRow['login']=$commentRow['login'];
    $dataRow['text']=$commentRow['text'];
    $dataRow['createdOn']=$commentRow['createdOn'];

    array_push($commentsData, $dataRow);

    $commentRow=mysqli_fetch_assoc($queryResult); // достаём след.строку из результатов запроса
} // переложили данные из результатов БД в массив


?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $resultRow['title'] ?></title>
    <link rel="stylesheet" href="style4.css">
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

        <div class="navigation">
            <p><a href="">Главная ></a></p>
            <p><a href="">Новости ></a></p>
            <p><a href=""><?php echo $resultRow['title'] ?></a></p>
        </div>

        <div class="newsH">
            <p><?php echo $resultRow['title'] ?></p>
        </div>
        <div class="newsTime">
            <span><?php echo $resultRow['createdOn']?></span>
        </div>

        <div class="newsContent">
            <div class="imgAndP">
            <img src="<?php echo "img/news/".$resultRow['picture'].".jpg"?>" alt="">
                <p><?php echo $resultRow['text'] ?>
                </p>
            </div>
        </div>

        <div class="discussion">
            <div class="count">
                <span>Колличество комментариев:  </span>
                <span id="countComment"><?php echo count($commentsData)?></span>
            </div>
            <input type="text" name="" id="comment" placeholder="Введите сообщение">
            <input type="hidden" name="" id="publicationId" value="<?php echo $newsId ?>"> <!--Создаём скрытое поле с id публикации-->
            <input type="button" value="Отправить" id="sendComment">
        </div>


        <div class="comments" id="comments">
        <?php
                    foreach ($commentsData as $comment) {
                     
                ?>
            <div class="comment">

<div class="containerComment">
<p class="timeComment"><?php echo $comment['createdOn'] ?></p>
<p class="loginComment"><?php echo $comment['login'] ?></p>

</div>
<p class="textComment"><?php echo $comment['text'] ?></p>
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
    <script src="script.js"></script>
    <script src="createComment.js"></script>
    <script src="createFeedback.php"></script>
</body>

</html>