<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function multipliedBy5($array, $factor)
        {
            for($i = 0; $i < count($array); $i++)
            {
                $array[$i] *= 5;
                $array[$i] *= $factor;
                echo $array[$i] . "<br>";
            }
            return $array;
        }
        $testArray = array(7, 16, 25, 34, 43, 52, 61, 70, 79, 88, 97);
        $test = multipliedBy5($testArray, 7);
        var_dump($test);
    ?>
</body>
</html>