<?php
    session_start();
    if (isset($_POST['action']) && $_POST['action'] == 'Register'){
        $errors = array();
        $firstName = str_split($_POST['FirstName']);
        $lastName = str_split($_POST['LastName']);
        $password = str_split($_POST['Password']);
        $isCorrect = false;
        $Birthday = explode("-", $_POST['Birthday']);
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["ProfilePic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $file_name = $_FILES['ProfilePic']['name'];
        $file_tmp = $_FILES['ProfilePic']['tmp_name'];
        if(empty($_POST['LastName'])){
            $errors[] = "Last Name must be included!";
        }
        if(empty($_POST['FirstName'])){
            $errors[] = "First Name must be included!";
        }
        if(empty($_POST['Email'])){
            $errors[] = "Email must be included!";
        }
        if(empty($_POST['ConfirmPassword'])){
            $errors[] = "Password confirmation must be included";
        }
        if(empty($_POST['Password'])){
            $errors[] = "Password must be included";
        }
        if(count($password) < 6){
            $errors[] = "Password must be atleast 6 characters!";
        }
        if($_POST['Password'] != $_POST['ConfirmPassword']){
            $errors[] = "Password and the Confirmation inputed must match!";
        }
        foreach ($firstName as $char) {
            if ($char === '0' || $char === '1' || $char === '2'|| $char === '3'|| $char === '4'|| $char === '5'|| $char === '6'|| $char === '7'|| $char === '8'|| $char === '9'){
                $errors[] = "First Name must not have any numbers in it!";
            }
        }
        foreach ($lastName as $char) {
            if ($char === '0' || $char === '1' || $char === '2'|| $char === '3'|| $char === '4'|| $char === '5'|| $char === '6'|| $char === '7'|| $char === '8'|| $char === '9'){
                $errors[] = "Last Name must not have any numbers in it!";
            }
        }
        if(count($errors) == 0){
            $_SESSION['success'] = "Thanks for submitting your information";
            $isCorrect = true;
        }
        if(checkdate($Birthday[0], $Birthday[1], $Birthday[2]) == false) {
            $errors[] = "Not a valid date!";
        }

        move_uploaded_file($_FILES['ProfilePic']['tmp_name'], $target_file);
        $_SESSION['Birthday'] = $_POST['Birthday'];
        $_SESSION['errors'] = $errors;
        $_SESSION['Correct?'] = $isCorrect;
        header('Location: index.php');
    }
?>