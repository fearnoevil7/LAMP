<?php 
    session_start();
    if(!isset($_SESSION['totalGold'])){
        $_SESSION['totalGold'] = 0;
    }
    if(!isset($_SESSION['transactions'])){
        $_SESSION['transactions'] = array();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST">
        <input type="hidden" name="action" value="Restart">
        <input type="submit" value="Restart Game">
    </form>
    <h3>Your Gold: <?php echo $_SESSION['totalGold']; ?></h3>

    <div>
        <h5>Farm</h5>
        <p>(earns 10-20 gold)</p>
        <form action="process.php" method="POST">
            <input type="hidden" name="action" value="Farm">
            <input type="submit" value="Farm">
        </form>
    </div>

    <div>
        <h5>Cave</h5>
        <p>(earns 5-10 gold)</p>
        <form action="process.php" method="POST">
        <input type="hidden" name="action" value="Cave">
        <input type="submit" value="Cave">
    </form>
    </div>

    <div>
        <h5>House</h5>
        <p>(earns 2-5 gold)</p>
        <form action="process.php" method="POST">
        <input type="hidden" name="action" value="House">
        <input type="submit" value="House">
    </form>
    </div>

    <div>
        <h5>Casino</h5>
        <p>(earns/takes 0-50 gold)</p>
        <form action="process.php" method="POST">
        <input type="hidden" name="action" value="Casino">
        <input type="submit" value="Casino">
    </form>
    </div>

    <?php 
        if(isset($_SESSION['transactions'])){
            for($i = 0; $i < count($_SESSION['transactions']); $i++) {
                echo $_SESSION['transactions'][$i];
            }
        }
    ?>
</body>
</html>