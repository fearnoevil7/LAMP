<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function get_array_values($Array) {
            $li = "<li>";
            $li1 = "</li>";
            $HTML_Return = array();
            for($i = 0; $i < count($Array); $i++) {
                array_push($HTML_Return, $li);
                array_push($HTML_Return, $Array[$i]);
                array_push($HTML_Return, $li1);
            }
            // $HTML_String = "";
            // for($j = 0; $j < count($HTML_Return); $i++) {
            //     $HTML_String . "" . $HTML_Return[$j];
            // }
            return "<ul>" . implode($HTML_Return) . "</ul>";
        }
        $TestArray = array(7, 16, 25, 34, 43, 52, 61, 70, 79, 88, 97, 106);
        $Test = get_array_values($TestArray);
        echo $Test;
        
    ?>
</body>
</html>