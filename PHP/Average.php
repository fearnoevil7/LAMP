<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sum = 0;
        $numbers = array(1, 2, 5, 10, 255, 3);
        for($i = 0; $i < count($numbers); $i++) {
            $sum += $numbers[$i];
        }
        echo $average = $sum/count($numbers);
    ?>
</body>
</html>