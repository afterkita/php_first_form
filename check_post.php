<?php
    /*
    $name = $_POST['username'];
    $email = $_POST['email'];
    $mesage_text = $_POST['mesage'];

    if(trim($name) == "")
        echo "Вы не ввели имя пользователя";
    else if(strlen(trim($name))<= 1)
        echo "Такого имени не существует";
    else {
        echo "<h1>Форма успешно принята</h1><p>Отправленные данные:</p><p>$name</p><p>$email</p><p>$mesage_text</p>";
        $st = strval(date('l-jS-\of-F-Y-h:i:s-A')."\nUser name:".$name."\nEmail: ".$email."\nMesage: ".$mesage_text."\n----------\n");
        $file = fopen("out.txt","a");

        fwrite($file,$st);


        fclose($file);
    }*/
    session_start();

    $user_name = htmlspecialchars(trim($_POST['username']));
    $from = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['username'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['message'] = $message;

    if(strlen($user_name) <= 1){
        $_SESSION['error_username'] = "Введите корректное имя";
    }
    else if (strlen($from)<5 || strpos($from,"@")== false) {
        $_SESSION['error_email'] = "Вы ввели некоректный email";
    }
    else if(strlen($message)<= 10)
    {
        $_SESSION['error_message'] = "Сообщение не менее 10 символов";
    }
    else{
        $_SESSION['error_username'] = "";
        $_SESSION['error_message'] = "";
        $_SESSION['error_email'] = "";
    }



