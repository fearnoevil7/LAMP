<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $oddNumbers = array();
        for($i = 0; $i <= 20000; $i++) {
            if ($i % 2 == 1) {
                array_push($oddNumbers, $i);
            }
        }
        var_dump($oddNumbers);
    ?>
</body>
</html>