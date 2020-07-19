<?php
    session_start();
    $errors = array();
    if(empty($_POST['Email'])){
        $errors[] = "Email must be included!";
    }
    if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) == false){
        $errors[] = "Input email must be a valid email address!";
    }
    if(count($errors) == 0){
        require_once('connection.php');
        $query = "INSERT INTO Emails (Email, Created_At)
                    VALUES('{$_POST['Email']}', NOW())";
        if(run_mysql_query($query)){
            $_SESSION['message'] = "Email has been successfully added!";
            header('Location: success.php');
        }
        else
        {
            $_SESSION['errors'] = $errors;
            $_SESSION['message'] = "Email failed to be added to database!";
            header('Location: index.php');
        }
    }
    else
    {
        $_SESSION['errors'] = $errors;
    }
    header('Location: success.php');
?>