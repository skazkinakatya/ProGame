<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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

            <div class="login">
                <p>Войти</p>
                <span>/</span>
                <p>Зарегестрироваться</p>
            </div>
        </div>
    </header>
    <div class="formsLogReg">
        <div class="pLogReg">
            <p class="enterP">ВХОД</p>
            <p>РЕГИСТРАЦИЯ</p>
            <div class="closeForm"></div>
        </div>
    <div class="formReg">
        <form action="" id="formRegister">
            <input type="text" name="loginNameReg" id="loginNameReg" placeholder="ЛОГИН">
            <input type="text" name="nameReg" id="nameReg"  placeholder="ИМЯ">
            <input type="email" name="emailReg" id="emailReg"  placeholder="E-MAIL">
            <input type="number" name="numberReg" id="numberReg"  placeholder="НОМЕР ТЕЛЕФОНА">
            <input type="password" name="passwordReg" id="passwordReg" placeholder="ПАРОЛЬ">
            <input type="button" value="ЗАРЕГЕСТРИРОВАТЬСЯ" name="register" id="register">
        </form>
    </div>
    <div class="">
        <form action="" id="formEnter">
            <input type="number" name="numberEnter" id="loginEnter" placeholder="НОМЕР ТЕЛЕФОНА">
            <input type="password" name="passwordEnter" id="passwordEnter"  placeholder="ПАРОЛЬ">
            <input type="button" value="ВОЙТИ" name="Enter" id="Enter">
        </form>
    </div>
</div>


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
                <a href="" class="newsBlock">
                    <p>Авторы Apex Legends показали трейлер в честь сезона «Воскрешение»</p>
                    <span>55 минут назад</span>
                </a>
                <a href="" class="newsBlock">
                    <p>Blizzard улучшит езду на лошадях в Diablo 4</p>
                    <span>55 минут назад</span>
                </a>
                <a href="" class="newsBlock">
                    <p>В России стартовали предзаказы физических изданий EA Sports FC 24 для консолей</p>
                    <span>55 минут назад</span>
                </a>
                <a href="" class="newsBlock">
                    <p>Стартовала бета обновления для PS5 с поддержкой <br> накопителей до 8 ТБ</p>
                    <span>55 минут назад</span>
                </a>
                <a href="" class="newsBlock">
                    <p>Релиз Helldivers 2 может состояться уже в этом октябре</p>
                    <span>55 минут назад</span>
                </a>
                <a href="" class="newsBlock">
                    <p>Team Spirit выиграла Riyadh Masters 2023 по Dota 2</p>
                    <span>55 минут назад</span>
                </a>
            </div>
            <input type="button" value="БОЛЬШЕ НОВОСТЕЙ" class="newsBtn">
        </div>


        <div class="article">
            <div class="articleH">
                <p>Статьи</p>
            </div>
            <div class="articleBlocks">
                <a href="" class="articleBlock">
                    <img src="img/st1.jpg" alt="" style="width: 300px; height: 200px;">
                    <div class="articleText">
                        <p>The Legend of Heroes: Trails into Reverie: Обзор</p>
                        <p>Неидеальный, но красивый эпилог</p>
                        <span>2 дня назад</span>
                    </div>
                </a>
                <a href="" class="articleBlock">
                    <img src="img/st1.jpg" alt="" style="width: 300px; height: 200px;">
                    <div class="articleText">
                        <p>Punch Club 2: Fast Forward: Обзор</p>
                        <p>Бойцовский клуб в киберпанке</p>
                        <span>2 дня назад</span>
                    </div>
                </a>
                <a href="" class="articleBlock">
                    <img src="img/st1.jpg" alt="" style="width: 300px; height: 200px;">
                    <div class="articleText">
                        <p>Xenonauts 2: Превью по ранней версии</p>
                        <p>Слишком ранний доступ</p>
                        <span>2 дня назад</span>
                    </div>
                </a>
                <a href="" class="articleBlock">
                    <img src="img/st1.jpg" alt="" style="width: 300px; height: 200px;">
                    <div class="articleText">
                        <p>The Crew Motorfest: Превью по бета-версии</p>
                        <p>Вот теперь достойный конкурент</p>
                        <span>2 дня назад</span>
                    </div>
                </a>
                <a href="" class="articleBlock">
                    <img src="img/st1.jpg" alt="" style="width: 300px; height: 200px;">
                    <div class="articleText">
                        <p>Мир The Elder Scrolls: пляски каджитов на Лунной Решётке</p>
                        <p>Всё, что вы хотели узнать, но боялись спросить о самой запутанной игровой вселенной</p>
                        <span>2 дня назад</span>
                    </div>
                </a>
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
                            <p  class="userName"><a href="">@username</a></p>
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
</body>

</html>