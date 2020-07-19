<?php
header("Content-type: text/javascript;");
    $num1 = rand (1, 100);
    $num2 = rand (1, 100);
    $result = $num2 * $num1;
?>
alert("<?php echo $num2 . " * " . $num1 . " = " . $result ?>");