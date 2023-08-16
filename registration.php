<?php
    error_reporting(E_ALL);
    ini_set("display_error", "on");
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $host='localhost';
    $user='root';
    $pass='';
    $name='proGameDB';

    $link=mysqli_connect($host, $user, $pass, $name);

    function normalize($text){
        $text = trim($text);
        $text = stripslashes($text);
        $text = htmlspecialchars($text);

        return $text;
    }

    function validate($link, $loginName, $name, $email, $number, $password){ // Проверка полей формы на валидность
        $validationErrors=[];

        $loginNameLen=strlen($loginName);

        if($loginNameLen<5 || $loginNameLen>32){
            array_push($validationErrors,"Длина логина должна быть от 5 до 32 символов");
        }
        if(!preg_match("~^[a-zA-Zа-яА-Я0-9-_]+[\s]{0,1}[a-zA-Zа-яА-Я0-9-_]*$~",$loginName)){
            array_push($validationErrors,"Логин должен содержать только латинские буквы и цифры");
        }

        $checkLogin = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE login = '".$loginName."' "));

        if($checkLogin != null){
            array_push($validationErrors,"Логин занят, выберите другой");
        };

        if(!preg_match("/[0-9a-z]+@[a-z]/",$email)){
            array_push($validationErrors,"Введите корректную почту");
        }
        if(strlen($email)>32){
            array_push($validationErrors,"Слиишком длинный email, введите до 32х символов");
        }


        $checkEmail = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE email = '".$email."' "));

        if($checkEmail != null){
            array_push($validationErrors,"К данной почте уже привязан аккаунт");
        };

        if(!preg_match("/^[0-9]{10,11}+$/", $number)){
            array_push($validationErrors,"Телефон задан в неверном формате");
        }

        $checkNumber = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE tel = '".$number."' "));

        if($checkNumber != null){
            array_push($validationErrors,"К этому номеру телефона уже привязан аккаунт");
        };

        
        if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,16}$/",$password)){
            array_push($validationErrors,"Пароль должен состоять из латинских букв и иметь как минимум одну цифру, одну маленькую букву и одну большую букву. Длина должна быть от 8 до 16 символов");
        }
        if($loginName){}

        return $validationErrors;
    } 
    $isPosted=$_SERVER['REQUEST_METHOD'] === 'POST';  //Проверка метода, которым мы пришли на страницу
    $isValid=true;
    $validationErrors=[];

    if($isPosted){ // Проводтит проверку формы
        $loginNameReg=normalize($_POST['loginNameReg']);
        $nameReg=normalize($_POST['nameReg']);
        $emailReg=normalize($_POST['emailReg']);
        $numberReg=normalize($_POST['numberReg']);
        $passwordReg=normalize($_POST['passwordReg']);

        $validationErrors=validate($link, $loginNameReg, $nameReg, $emailReg, $numberReg, $passwordReg);
        $isValid=count($validationErrors)===0;
    
        
        if($isValid){
           try{
            $sql="INSERT INTO `users` (`login`, `tel`, `email`, `name`, `password`) VALUES (? , ? , ? , ? , ? )";
            $command=$link->prepare($sql);
            $command->bind_param("sssss", $loginNameReg, $numberReg,$emailReg, $nameReg, md5($passwordReg));
            $command->execute();
            mysqli_close($link);
            header("Location: /autorize.php");
            die();
         } 
        catch(Exception $e){
            print_r($e);
        }}
    };



?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style9.css">
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
        </div>
    </header>


    <div class="container">

    <div class="formsLogReg">


        <div class="changeForm">
            <div class=pContainer>
            <p class="regP">РЕГИСТРАЦИЯ</p>
            </div>
        </div>


    <div class="formReg">
        <form action="" id="formRegister" method="POST">
            <input type="text" name="loginNameReg" id="loginNameReg" placeholder="ЛОГИН">
            <input type="text" name="nameReg" id="nameReg"  placeholder="ИМЯ">
            <input type="email" name="emailReg" id="emailReg"  placeholder="E-MAIL">
            <input type="number" name="numberReg" id="numberReg"  placeholder="НОМЕР ТЕЛЕФОНА, НАЧИНАЯ С 8">
            <input type="password" name="passwordReg" id="passwordReg" placeholder="ПАРОЛЬ">
            <input type="submit" value="ЗАРЕГЕСТРИРОВАТЬСЯ" name="register" id="register">
        </form>
        <?php
        foreach ($validationErrors as $errorMessage) { ?> 
        <p>
            <?php echo $errorMessage ?> 
        </p>
            <?php
        }
        ?>
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
                <textarea name="" id="" cols="23" rows="3" class="inputFeedback"
                    placeholder="Введите сообщение"></textarea>
                <button id="btnFeedback">Отправить</button>
            </form>
        </div>
    </div>


    <script src="script.js"></script>
    <script src=header.js></script>
</body>

</html>