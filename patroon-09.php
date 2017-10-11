<?php
    for ($j = 9; $j > 0; $j--) {
        $currentColor = 'blue';
        for ($i = 0; $i < 9; $i++) {
            if ($j == $i + 1 || $j + $i == 9) {
                echo "<div class='bubble bubble__red'></div>"; 
                if ($i > $j) {
                    $currentColor = 'blue';
                } else {
                    $currentColor = 'green';
                }
            } else {
                echo "<div class='bubble bubble__{$currentColor}'></div>"; 
            }
        }
        echo '<br>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .bubble {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin: 2px;
            display: inline-block;
        }
        .bubble__green {
            background-color: green;
        }
        .bubble__red {
            background-color: red;
        }
        .bubble__blue {
            background-color: blue;
        }
    </style>

</head>
<body>
    
</body>
</html>