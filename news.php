<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
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

        <div class="navigation">
            <p><a href="">Главная ></a></p>
            <p><a href="">Новости ></a></p>
            <p><a href="">В S.T.A.L.K.E.R. 2 дадут сыграть этим летом, но не всем</a></p>
        </div>

        <div class="newsH">
            <p>В S.T.A.L.K.E.R. 2 дадут сыграть этим летом, но не всем</p>
        </div>
        <div class="newsTime">
            <span> 7 часов назад</span>
        </div>

        <div class="newsContent">
            <p>
                Классический текст Lorem Ipsum, используемый с XVI века
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>

            <div class="imgAndP">
                <img src="img/st4.jpg" alt="">
                <p>"At vero eos et accusamus et iusto odio dignissimos ducimus
                    qui blanditiis praesentium voluptatum deleniti atque corrupti
                    quos dolores et quas molestias excepturi sint occaecati cupiditate
                    non provident, similique sunt in culpa qui officia deserunt mollitia
                    animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis
                    est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                    eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                    possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                    quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet
                    ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum
                    rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores
                    alias consequatur aut perferendis doloribus asperiores repellat."

                    "On the other hand, we denounce with
                    righteous indignation and dislike men who are so beguiled
                    and demoralized by the charms of pleasure of the moment, so blinded by desire
                    , that they cannot foresee the pain and trouble that are bound to ensue;
                    and equal blame belongs to those who fail in their duty through weakness of will
                    , which is the same as saying through shrinking from toil and pain.
                    These cases are perfectly simple and easy to distinguish. In a free hour, when our power
                    of choice is untrammelled and when nothing prevents our being able to do what we like best
                </p>
            </div>
        </div>

        <div class="discussion">
            <div class="count">
               <p>0 комментариев</p>
            </div>
            <input type="text" name="" id="comment" placeholder="Введите сообщение">
            <input type="button" value="Отправить" id="sendComment">
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
    <script src=header.js></script>
</body>

</html>