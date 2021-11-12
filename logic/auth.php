<?php

function auth($s){
    if(!isset($s)){
        header("Location: ../index.php");
        return false;
        exit;
    } else {
        return true;
    }
}
