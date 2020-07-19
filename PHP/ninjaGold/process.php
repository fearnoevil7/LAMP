<?php 
    session_start();

    if($_POST['action'] && $_POST['action'] == 'Farm') {
        $gold = rand(10, 20);
        $dateTime = new DateTime();
        $_SESSION['totalGold'] += $gold;
        array_push($_SESSION['transactions'], "<p>You entered a farm and earned " . $gold . " gold. (" . date_format($dateTime, 'Y-m-d H:i:s') . ")</p>");
    }

    if($_POST['action'] && $_POST['action'] == 'Cave') {
        $gold = rand(5, 10);
        $dateTime = new DateTime();
        $_SESSION['totalGold'] += $gold;
        array_push($_SESSION['transactions'], "<p>You entered a cave and earned " . $gold . " gold. (" . date_format($dateTime, 'Y-m-d H:i:s') . ")</p>");
    }

    if($_POST['action'] && $_POST['action'] == 'House') {
        $gold = rand(2, 5);
        $dateTime = new DateTime();
        $_SESSION['totalGold'] += $gold;
        array_push($_SESSION['transactions'], "<p>You entered your house and earned " . $gold . " gold. (" . date_format($dateTime, 'Y-m-d H:i:s') . ")</p>");
    }

    if($_POST['action'] && $_POST['action'] == 'Casino') {
        $gold = rand(-50, 50);
        $dateTime = new DateTime();
        $_SESSION['totalGold'] += $gold;
        if ($gold > 0) {
            array_push($_SESSION['transactions'], "<p>You entered a casino and earned " . $gold . " gold. (" . date_format($dateTime, 'Y-m-d H:i:s') . ")</p>");
        } else {
            array_push($_SESSION['transactions'], "<p>You entered a casino and loss " . $gold . " gold. (" . date_format($dateTime, 'Y-m-d H:i:s') . ")</p>");
        }
    }

    if($_POST['action'] && $_POST['action'] == 'Restart') {
        session_destroy();
    }

    header('Location: index.php');
?>