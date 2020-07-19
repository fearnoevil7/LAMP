<?php
    session_start();
    if(isset($_POST['action']) && $_POST['action'] == 'Register'){
        $errors = array();
        $ValidateFirstName = str_split($_POST['FirstName']);
        $ValidateLastName = str_split($_POST['LastName']);
        $ValidatePassword = str_split($_POST['Password']);

        if(empty($_POST['FirstName'])){
            $errors[] = "First name must not be left blank!";
        }
        if(empty($_POST['LastName'])){
            $errors[] = "Last name must not be left blank!";
        }
        if(empty($_POST['Password'])){
            $errors[] = "Password must not be left blank!";
        }
        if(empty($_POST['Email'])){
            $errors[] = "Email must not be left blank!";
        }
        if($_POST['ConfirmPassword'] != $_POST['Password']){
            $errors[] = "Password and the confirmation password must match!";
        }
        if(count($ValidateFirstName) < 2){
            $errors[] = "First name input must be atleast 2 characters long!";
        }
        if(count($ValidateLastName) < 2){
            $errors[] = "Last name input must be atleast 2 characters long!";
        }
        if(count($ValidatePassword) < 8){
            $errors[] = "Password must be atleast 8 characters long!";
        }
        if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) == false){
            $errors[] = "Input email must be a valid email address!";
        }
        foreach($ValidateFirstName as $char){
            if ($char === '0' || $char === '1' || $char === '2'|| $char === '3'|| $char === '4'|| $char === '5'|| $char === '6'|| $char === '7'|| $char === '8'|| $char === '9'){
                $errors[] = "First name input must not have any numbers in it!";
            }
        }
        foreach($ValidateLastName as $char){
            if ($char === '0' || $char === '1' || $char === '2'|| $char === '3'|| $char === '4'|| $char === '5'|| $char === '6'|| $char === '7'|| $char === '8'|| $char === '9'){
                $errors[] = "Last name input must not have any numbers in it!";
            }
        }
        $Salt = bin2hex(openssl_random_pseudo_bytes(22));
        $EncryptedPassword = md5($_POST['Password'] . '' . $Salt);

        if(count($errors) == 0){
            require_once('connection.php');
            $query = "INSERT INTO Users (FirstName, LastName, Email, Password, Salt, CreatedAt, UpdatedAt)
                        VALUES('{$_POST['FirstName']}', '{$_POST['LastName']}', '{$_POST['Email']}', '{$EncryptedPassword}', '{$Salt}', NOW(), NOW())";
            if(run_mysql_query($query)){
                $_SESSION['message'] = "User has been successfully registered";
                header('Location: register.php');
            }
            else
            {
                $_SESSION['errors'] = $errors;
                $_SESSION['message'] = "User registration has failed!";
            }
        }
        if(count($errors) > 0){
            $_SESSION['errors'] = $errors;
            header('Location: register.php');
        }
    }
    if(isset($_POST['action']) && $_POST['action'] == 'Login'){
        $errors = array();
        if(empty($_POST['Password'])){
            $errors[] = "Password must not be left blank!";
        }
        if(empty($_POST['Email'])){
            $errors[] = "Email must not be left blank!";
        }
        if(count($errors) == 0){
            require_once('connection.php');
            $query = "SELECT * FROM Users WHERE Users.Email = '{$_POST['Email']}'";
            $current_user = fetch_record($query);
            if(!empty($current_user)){
                $EncryptedPassword = md5($_POST['Password'] . '' . $current_user['Salt']);
                if($current_user['Password'] == $EncryptedPassword){
                    $_SESSION['UserId'] == $current_user['UserId'];
                    header('Location: dashboard.php');
                }
                else
                {
                    $_SESSION['loginmessage'] = 'Password is incorrect!';
                    header('Location: register.php');
                }
            }
            else
            {
                $_SESSION['loginmessage'] = 'Could not find your account. Are you sure you registered?';
                header('Location: register.php');
            }
        }
    }
?>