<?php

    try {
        $db = new PDO("mysql:host=localhost;dbname=logowanie", "root", "");
    } catch (PDOException $err) {
        echo $err->getMessage();
        exit;
    }