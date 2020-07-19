<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
    <?php 
        $users = array( 
            array('first_name' => 'Michael', 'last_name' => 'Choi'),
            array('first_name' => 'John', 'last_name' => 'Supsupin'),
            array('first_name' => 'Mark', 'last_name' => 'Guillen'),
            array('first_name' => 'KB', 'last_name' => 'Tonel') 
        );
        function html_table($Array) {
            $Html_return = array(
                "<thead>", 
                "<tr>", 
                "<td>User #</td>", 
                "<td>First Name</td>",
                "<td>Last Name</td>",
                "<td>Full Name</td>",
                "<td>Full Name in upper case</td>",
                "<td>Length of full name</td>",
                "</tr>",
                "</thead>",
                "<tbody>",
                "<tr>"
                );
            foreach ($Array as $key => $value ) {
                foreach($value as $key => $value){
                $first_name = "";
                $last_name = "";
                $full_name = "";
                $full_name_array = array();
                $uppercased = "";
                $length = 0;
                if ($key == "first_name") {
                    $first_name = $value;
                    array_push($full_name_array, $first_name);
                    echo "firstname: " . $first_name . "<br>";
                }
                if ($key == "last_name") {
                    $last_name = $value;
                    echo "lastname: " . $last_name . "<br>";
                    array_push($full_name_array, $last_name);
                    $full_name = implode($full_name_array);
                    echo "fullname: " . $full_name . "<br>";
                    $uppercased = strtoupper($full_name);
                    echo "upper: " . $uppercased . "<br>";
                    $length += strlen($full_name);
                    echo "len: " . $length . "<br>";
                    array_push($Html_return, "<td>" . $first_name . "</td><br><td>" . $last_name . "</td><br><td>" . $full_name . "</td><br><td>" . $uppercased . "</td><br><td>" . $length . "</td><br>");
                }
                // echo $key . "<br>" . $value . "<br>";
            }
        }
            array_push($Html_return, "</tr></tbody>");
            return "<table>" . implode($Html_return) . "</table>";
    }
    $Test = html_table($users);
    print($Test);
    ?>
</body>
</html>