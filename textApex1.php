<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест</title>
    <link rel="stylesheet" href="style7.css">
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
        <div class="test">
            <p>Какая ты легенда из APEX?</p>
            <div class="testButtons">
            <article class="testUl">
            <ul>
            
                <li>Какой твой любимый цвет?
                    <ul>
                        <li><label><input type="radio" name="q1" value="Зелёный">Зелёный</label></li>
                        <li><label><input type="radio" name="q1" value="Красный">Красный</label></li>
                        <li><label><input type="radio" name="q1" value="Жёлтый">Жёлтый</label></li>
                        <li><label><input type="radio" name="q1" value="Чёрный">Чёрный</label></li>                       
                    </ul>
                </li>
                
                <li>Часто ли ты разговариваешь сам с собой?
                    <ul>
                        <li><label><input type="radio" name="q2" value="Частенько бывает">Частенько бывает</label></li>
                        <li><label><input type="radio" name="q2" value="Бывает, но редко">Бывает, но редко</label></li>         
                        <li><label><input type="radio" name="q2" value="Никогда не разговариваю">Никогда не разговариваю</label></li>                 
                    </ul>
                </li>
                
                <li>Какое твое тотемное животное?
                    <ul>
                        <li><label><input type="radio" name="q3" value="Летучая мышь">Летучая мышь</label></li>
                        <li><label><input type="radio" name="q3" value="Ворон">Ворон</label></li>
                        <li><label><input type="radio" name="q3" value="Кот">Кот</label></li>
                        <li><label><input type="radio" name="q3" value="Собака">Собака</label></li>          
                        <li><label><input type="radio" name="q3" value="Медведь">Медведь</label></li>                
                    </ul>
                </li>
                <li>Часто ли ты проявляешь агрессию к другим людям?
                    <ul>
                        <li><label><input type="radio" name="q4" value="Постоянно">Постоянно</label></li>
                        <li><label><input type="radio" name="q4" value="Редко">Редко</label></li>
                        <li><label><input type="radio" name="q4" value="Не проявляю">Не проявляю</label></li>              
                    </ul>
                </li>
                <li>Какой тактики на матч ты придерживаешься?
                    <ul>
                        <li><label><input type="radio" name="q5" value="Пушу всех подряд">Пушу всех подряд</label></li>
                        <li><label><input type="radio" name="q5" value="Сбалансированная тактика">Сбалансированная тактика</label></li>
                        <li><label><input type="radio" name="q5" value="Обороняюсь до последнего">Обороняюсь до последнего</label></li>              
                    </ul>
                </li>
                <li>Какое качество из перечисленных подходит тебе больше всего?
                    <ul>
                        <li><label><input type="radio" name="q6" value="Лень">Лень</label></li>
                        <li><label><input type="radio" name="q6" value="Гнев">Гнев</label></li>
                        <li><label><input type="radio" name="q6" value="Безэмоциональность">Безэмоциональность</label></li> 
                        <li><label><input type="radio" name="q6" value="Замкнутость">Замкнутость</label></li>                        
                    </ul>
                </li>
                <li>Что тебя ждет после смерти?
                    <ul>
                        <li><label><input type="radio" name="q7" value="Вальгалла">Вальгалла</label></li>
                        <li><label><input type="radio" name="q7" value="Ничего не ждёт">Ничего не ждёт</label></li>
                        <li><label><input type="radio" name="q7" value="Перерождение">Перерождение</label></li>                      
                    </ul>
                </li>
                <li>Твой любимый тип оружия в игре?
                    <ul>
                        <li><label><input type="radio" name="q8" value="Пистолет">Пистолет</label></li>
                        <li><label><input type="radio" name="q8" value="Пистолет-пулемёт">Пистолет-пулемёт</label></li>
                        <li><label><input type="radio" name="q8" value="Ручной пулемёт">Ручной пулемёт</label></li>   
                        <li><label><input type="radio" name="q8" value="Снайперская винтовка">Снайперская винтовка</label></li>
                        <li><label><input type="radio" name="q8" value="Дробовик">Дробовик</label></li>
                        <li><label><input type="radio" name="q8" value="Штурмовая винтовка">Штурмовая винтовка</label></li>   
                        <li><label><input type="radio" name="q8" value="Оружие Марксман">Оружие Марксман</label></li>   

                    </ul>
                </li>
                <li>Какова твоя стихия?
                    <ul>
                        <li><label><input type="radio" name="q9" value="Вода">Вода</label></li>
                        <li><label><input type="radio" name="q9" value="Огонь">Огонь</label></li>
                        <li><label><input type="radio" name="q9" value="Земля">Земля</label></li>   
                        <li><label><input type="radio" name="q9" value="Воздух">Воздух</label></li>

                    </ul>
                </li>
                
            </ul>
        </article>

            </div>
        </div>
        <div class="testBtn">
            <input type="submit" value="УЗНАТЬ" id="button">
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
    <script src="script.js"></script>
    <script src="TEST.js"></script>
    <script src="header.js"></script>
</body>

</html>