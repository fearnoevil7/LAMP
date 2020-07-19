<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function draw_stars($Array) {
            for ($i = 0; $i < count($Array); $i++) {
                if (is_numeric($Array[$i]) == true){
                    for ($j = 0; $j < $Array[$i]; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                else
                {
                    for ($j = 0; $j < strlen($Array[$i]); $j++) {
                        echo $Array[$i][0];
                    }
                    
                    // $string = $Array[$i][0];
                    // $letter = substr($Array[$i], 0);
                    echo "<br>";
                }
            }
        }
        $TestArray = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
        $Test = draw_stars($TestArray);
        print($Test);
    ?>
</body>
</html>