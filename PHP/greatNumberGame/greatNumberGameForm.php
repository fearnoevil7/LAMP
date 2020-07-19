<?php 
    session_start(); 
    if(!isset($_SESSION['selectedNumber'])){
        $_SESSION['selectedNumber'] = rand(1, 100);
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><b>Welcome To The Great Number Game!</b></h1>
    <h6><i>I am thinking of a number between 1 and 100!</i></h6>
    <form action="greatNumberGame.php" method="POST">
        <input type="hidden" name="action" value="Guess">
        <input type="number" name="guess">
        <input type="submit" value="Guess?">
    </form>
    <?php 
        if(isset($_SESSION['failure']) && $_SESSION['correct?'] == false){
            echo $_SESSION['failure'];
        } 
        
        if (isset($_SESSION['success']) && $_SESSION['correct?'] == true){
            echo $_SESSION['success'];
            echo "<form action = greatNumberGame.php method = POST><input type = hidden name = action value = playAgain /><input type = submit value = Play Again /></form>";
        }
    ?>
</body>
</html>