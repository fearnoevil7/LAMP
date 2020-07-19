<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function minAndmax($Array) {
            $Max = 0;
            $Min = 0;
            for ($i = 0; $i <= count($Array) - 1; $i++) {
                if($i == 0) {
                    $Min = $Array[$i];
                    $Max = $Array[$i];
                }
                else
                {
                    if ($Array[$i] > $Max) {
                        $Max = $Array[$i];
                    }
                    if ($Array[$i] < $Min) {
                        $Min = $Array[$i];
                    }
                }
            }
            echo "Max: " . $Max;
            echo "Min: " . $Min;
        }
        $TestArray = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
        $Test = minAndmax($TestArray);
        print($Test);
    ?>
</body>
</html>