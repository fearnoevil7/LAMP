<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        
    
    <table>
    <?php
        for($i=1; $i<=9; $i++) 
    { ?>
        <tr>
        <?php 
            for($j = 1; $j<=9; $j++)
        { ?>
            <?php if($i %2 == 1) { ?>
                <td><div style="background-color: blue"><?=  $i * $j?></div></td>
            <?php } else { ?>
                <td><div style="background-color: pink"><?= $i * $j ?></div></td>
            <?php }?>
        <?php }?>
        </tr>
    <?php } ?>
    </table>
</body>
</html>