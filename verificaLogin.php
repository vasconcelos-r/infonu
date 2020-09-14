<?php
//session_start();
//$_SESSION['user_email']
if(!$_SESSION['user_email']){
    header('Location: index.php');
    exit();
}
