<?php
    require_once "../db/conn.php";

    session_start();    

    $user = $db->prepare("SELECT nazwa, haslo FROM urzytkownicy WHERE nazwa = :n AND haslo = :p");
    $user->bindParam(':n', $_POST['name'], PDO::PARAM_STR, 24);
    $user->bindParam(':p', $_POST['password'], PDO::PARAM_STR, 24);
    $user -> execute();
    echo $_POST['name'];
    echo $_POST['password'];
    $user_res = $user->fetchAll(PDO::FETCH_ASSOC);

    if($user->rowCount() == 1){
        $_SESSION['login'] = $user_res[0]['nazwa'];
        header("Location: ../views/chats.php");
        exit;
    } else {
        header('Location: ../index.php?login=false');
        exit;
    }


