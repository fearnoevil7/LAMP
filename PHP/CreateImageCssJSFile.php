<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.php">
    <title>Document</title>
</head>
<body>
    <?php
        $num3 = rand (1,5);
    ?>
    <h1>Hello World!</h1>
    <img src = <?php if ($num3 == 1) {
        "images/cake5.jpg";
        } elseif ($num3 == 2) {
            "images/cake4.jpg";
            } elseif ($num3 = 3) { 
                "images/cake2.jpeg";
                } elseif ($num3 == 4 ) { 
                    "images/Cake1.jpg"; 
                    } else {"images/cat5.jpg";}?>/>
    <script src="javascript/main.js.php"></script> 
</body>
</html>