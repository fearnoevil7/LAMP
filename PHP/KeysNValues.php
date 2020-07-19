<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $users = array("first_name" => "Jonathon", "last_name" => "Song");
        function keysNvalues($Array) {
            
            echo "There are " . count($Array) . " keys in this array:<br>";
            foreach($Array as $key => $value) {
                echo $key . "<br>";
            }
            foreach($Array as $key => $value) {
                echo "The value in the key " . $key . " is ". $value . "<br>";
            }
        }
        $Test = keysNvalues($users);
    ?>
</body>
</html>