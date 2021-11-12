<?php 

    session_start();
    include_once "../logic/auth.php";
    auth($_SESSION['login']);

?>
