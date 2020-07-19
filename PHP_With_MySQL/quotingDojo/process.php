<?php
    session_start();
    $errors = array();
    $name = str_split($_POST['Name']);
    $quote = str_split($_POST['Quote']);
    if(empty($_POST['Name'])){
        $errors[] = "Name must be included!";
    }
    if(empty($_POST['Quote'])){
        $errors[] = "Quote must be included!";
    }
    if(count($name) < 2){
        $errors[] = "Name must be atleast 2 characters.";
    }
    if(count($quote) < 5){
        $errors[] = "Quote must be atleast 5 characters long.";
    }
    if(count($errors) == 0){
        require_once('connection.php');
        $query = "INSERT INTO Quotes (Name, Quote, CreatedAt)
                VALUES('{$_POST['Name']}', '{$_POST['Quote']}', NOW())";
        if(run_mysql_query($query)){
            $_SESSION['message'] = "Quote has been successfully added!";
        }
        else
        {
            $_SESSION['errors'] = $errors;
            $_SESSION['message'] = "Quate failed to be added to database!";
            header('Location: index.php');
        }
    }
    else
    {
        $_SESSION['errors'] = $errors;
    }
    header('Location: main.php');
?>