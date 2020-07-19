<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $States = array('CA', 'WA', 'VA', 'UT', 'AZ');
        function display_states($Array) {
            $option = "<option>";
            $option1 = "</option>";
            $HTML_Return = array();
            $HTML_Return2 = array();
            $HTML_Return3 = array();
            for($z = 0; $z < count($Array); $z++) {
                array_push($HTML_Return, $option);
                array_push($HTML_Return, $Array[$z]);
                array_push($HTML_Return, $option1);
            }
            // echo "<select>" . implode($HTML_Return) . "</select>";
            foreach($Array as $key => $value) {
                array_push($HTML_Return2, $option);
                $input = $key . ": " . $value;
                array_push($HTML_Return2, $input);
                array_push($HTML_Return2, $option1);
            }
            array_push($Array, "NJ");
            array_push($Array, "NY");
            array_push($Array, "DE");
            foreach($Array as $key => $value) {
                array_push($HTML_Return3, $option);
                $input = $key . ": " . $value;
                array_push($HTML_Return3, $input);
                array_push($HTML_Return3, $option1);
            }
            // echo $HTML_Return;
            // echo $HTML_Return2;
            // echo $HTML_Return3;
            return "<select>" . implode($HTML_Return) . "</select><br><select>" . implode($HTML_Return2) . "</select><br><select>" . implode($HTML_Return3) . "</select>";
        }
        $Test = display_states($States);
        print($Test);
    ?>
</body>
</html>