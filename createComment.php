<?php 
    error_reporting(E_ALL);
    ini_set("display_error", "on");



    $time = date('Y-m-d H:i:s');
    $isPosted=$_SERVER['REQUEST_METHOD'] === 'POST';


    $postData = file_get_contents('php://input'); //Вычитывает тело запроса
    $data = json_decode($postData, true); //Преобразует JSON текст в объект

    function normalize($text){
        $text = trim($text);
        $text = stripslashes($text);
        $text = htmlspecialchars($text);

        return $text;
    }

    if($isPosted && $data){

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $host='localhost';
        $user='root';
        $pass='';
        $name='proGameDB';
    
        $link=mysqli_connect($host, $user, $pass, $name);
        $sql="INSERT INTO `comments` (`publicationId`, `userId`, `createdOn`, `text`) VALUES (? , ? , ? , ? )";
        $command=$link->prepare($sql);
        $normalText=normalize($data['comment']);
        $command->bind_param("ssss", $data['publicationId'], $data['userId'],$time, $normalText);
        $command->execute();
        mysqli_close($link);
    }
    else{
        http_response_code(422);
    }
 ?>