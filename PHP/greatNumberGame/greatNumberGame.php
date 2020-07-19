<?php 
    session_start();
    if($_POST['action'] && $_POST['action'] == 'Guess'){
        if($_POST['guess'] == $_SESSION['selectedNumber']) {
            $result = $_SESSION['selectedNumber'] . " was the number!";
            $_SESSION['success'] = $result;
            $_SESSION['correct?'] = true;
        } 
        if($_POST['guess'] > $_SESSION['selectedNumber']) {
            $result = "Your guess " . $_POST['guess'] . " Too High! The number is " . $_SESSION['selectedNumber'];
            $_SESSION['failure'] = $result;
            $_SESSION['correct?'] = false;
        }
        if($_POST['guess'] < $_SESSION['selectedNumber']) {
            $result = "Your guess " . $_POST['guess'] . " Too low! The number is " . $_SESSION['selectedNumber'];
            $_SESSION['failure'] = $result;
            $_SESSION['correct?'] = false;
        }
    }

    if($_POST['action'] && $_POST['action'] == 'playAgain'){
        session_destroy();
        $_SESSION['selectedNumber'] = rand(1, 100);
    }
    header('Location: greatNumberGameForm.php');
?>