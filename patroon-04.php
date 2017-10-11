<?php
    for ($j = 0; $j < 10; $j++) {
        for ($i = 10; $i > $j; $i--) {
            echo '<div class="bubble bubble__red"></div>';
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