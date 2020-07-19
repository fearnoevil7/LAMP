<?php
    header("Content-type: text/css; charset: UTF-8");
    $color = "";
    $num = rand (1, 100); 
    if($num > 50){
        $color = "aqua;";
    }
    else
    {
        $color = "blue;";
    }

?>
h1{
    color: <?php echo $color ?>
}