<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <br>
    <table>
        <?php for($i=1; $i<=9; $i++)
            { ?>
            <tr>
        <?php    for($j=1; $j<=9; $j++)
                { ?>
                <?php if($i % 2 == 1) { ?>
                <td style="background-color: grey;"><?= $i * $j ?></td>
                <?php } else { ?>
                <td><?= $i * $j ?></td>
                <?php } ?>
        <?php    } ?>
            </tr>
        <?php } ?>
    </table>
    <br>
    <table>
    <?php for($i=1; $i<=9; $i++)
        { ?>
        <tr>
    <?php for($j=1; $j<=9; $j++)
            { ?>
            <?php if($i % 2 == 1) { ?>
            <td style="background-color: grey;"><?= $i * $j ?></td>
            <?php } else { ?>
            <td><?= $i * $j ?></td>
            <?php } ?>
    <?php    } ?>
        </tr>
    <?php } ?>
</table>

</body>
</html>