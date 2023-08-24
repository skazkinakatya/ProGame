<?php 
error_reporting(E_ALL);
ini_set("display_error", "on");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $isPosted=$_SERVER['REQUEST_METHOD'] === 'POST';


    $postData = file_get_contents('php://input'); //Вычитывает тело запроса
    $data = json_decode($postData, true); //Преобразует JSON текст в объект

    function normalize($text){
        $text = trim($text);
        $text = stripslashes($text);
        $text = htmlspecialchars($text);

        return $text;
    }

    if($isPosted && $data){ //Обратились через POST и получили данные

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        require("connect.php");

        $userName=mysqli_real_escape_string($link, $data['userName']);
        $userEmail=mysqli_real_escape_string($link, $data['email']);
        $normalText=mysqli_real_escape_string($link, normalize($data['text']));
        $sql="INSERT INTO `feedback` (`name`, `email`, `text`) VALUES (? , ? , ? )";
        $command=$link->prepare($sql);
    
        $command->bind_param("sss", $userName, $userEmail, $normalText);
        $command->execute();
        mysqli_close($link);
    }
    else{
        http_response_code(422);
    }
 ?>