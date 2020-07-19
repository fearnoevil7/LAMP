<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        for($i = 5; $i <= 1000000; $i++) {
            if ($i % 5 == 0) {
                echo "         ";
                echo $i;
            }
        }
    ?>
</body>
</html>