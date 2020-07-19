<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
$array = array("var_dump", "and", "echo", "helps", "debug");
echo "<h2> Fix all the errors to show the page </h2>";

for($i = 0; $i < count($array); $i++)
{
    "The value of the i index is " . $i;
}
"<h3>isset function determines if a variable is set and is not NULL</h3>";
$error = "";
if(isset($error)) 
{
    echo "Is an empty string NULL? Also, think of an operator that we can use to return a true value to a variable that is not set yet!!!!!";
}
if(isset($array["hi"]))
{
    var_dump($array);
}
?>
</body>
</html>