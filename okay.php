<?php

    $myemail = "wantutre@gmail.com";
    $mypass = "0987654321";

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $rmmbr =$_POST['remember'];

        if($email == $myemail and $pass == $mypass){
            // $rmmbr = $_POST['remember'];
            if(isset($_POST['remember'])) {
                setcookie('email',$email, time()+60*60*7);
                setcookie('pass',$pass, time()+60*60*7);
            }
            session_start();
            $_SESSION['email'] = $email;
            header("location: welcome.php");
        } else {
            echo "Email or Password is Invalid. <br> Click <a href='prax.php'> try again</a>";
        }
        
    } else {
        header("location: prax.php");
    }

?>
