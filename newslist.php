<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style8.css">
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
                <p>Войти</p>
                <span>/</span>
                <p>Зарегестрироваться</p>
            </div>
        </div>
    </header>

    <div class="container">

        <div class="articleH">
            <p>Новости</p>
        </div>       



            <div class="articleContent">

                <div class="articleBlocks">
                    <a href="" class="articleBlock">
                       
                        <div class="articleText">
                            <p>Создатели Dark and Darker выпустили игру в раннем доступе</p>
                        <span>2 дня назад</span>
                        </div>
                    </a>
                    <a href="" class="articleBlock">
                       
                        <div class="articleText">
                            <p>Новый трейлер сезона «Воскрешение» для Apex Legends посвятили боевому пропуску</p>

                        <span>2 дня назад</span>
                        </div>
                    </a>
                    <a href="" class="articleBlock">
                       
                        <div class="articleText">
                            <p>Успех запуска Baldurs Gate 3 превзошел все ожидания Larian</p>
                        <span>2 дня назад</span>
                        </div>
                    </a>
                    <a href="" class="articleBlock">
                       
                        <div class="articleText">
                            <p>Создатели Remnant 2 пообещали кроссплей и новые архетипы в DLC</p>
                        <span>2 дня назад</span>
                        </div>
                    </a>
                    <a href="" class="articleBlock">
                       
                        <div class="articleText">
                            <p>Косплеер показала нежную эльфийку из World of Warcraft</p>
                        <span>2 дня назад</span>
                        </div>
                    </a>
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
</body>
</html>