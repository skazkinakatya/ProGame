<?php 

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

    if($isPosted && $data){ //Если обратились через POST и получили данные

        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        require("connect.php");
        
        $publicationId=mysqli_real_escape_string($link, $data['publicationId']);
        $userId=mysqli_real_escape_string($link, $data['userId']);
        $normalText=mysqli_real_escape_string($link, normalize($data['comment']));

       
        $sql="INSERT INTO `comments` (`publicationId`, `userId`, `createdOn`, `text`) VALUES (? , ? , ? , ? )";
        $command=$link->prepare($sql);
        
        $command->bind_param("ssss", $publicationId, $userId, $time, $normalText);
        $command->execute();
        mysqli_close($link);
    }
    else{
        http_response_code(422);
    }
 ?>