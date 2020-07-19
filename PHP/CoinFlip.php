<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function coin_flip() {
            echo "Initializing program!";
            $AttemptCount = 0;
            $HeadCount = 0;
            $TailsCount = 0;
            for($i = 1; $i < 5000; $i++) {
                $flip = rand(0,100);
                $result = "";
                $AttemptCount ++;
                if ($flip <= 50) {
                    $result == "Tails";
                    $TailsCount ++;
                    echo "<br>Attempt # " . $AttemptCount . " Flipping a coin... It's " . $result . "!... Got " . $HeadCount . " number of flips landing on heads so far and " . $TailsCount . " number of flips landing on tails so far.";
                }
                else if ($flip > 50) {
                    $result == "Heads";
                    $HeadCount ++;
                    echo "<br>Attempt # " . $AttemptCount . " Flipping a coin... It's " . $result . "!... Got " . $HeadCount . " number of flips landing on heads so far and " . $TailsCount . " number of flips landing on tails so far.";
                }
            }
            echo "<br> Program is finished thank you!";
        }
        $Test = coin_flip();
    ?>
</body>
</html>