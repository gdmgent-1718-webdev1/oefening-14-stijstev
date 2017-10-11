<?php
    for ($i = 1; $i < 13; $i++){
        if ($i > 9) {
            echo "<a href='patroon-{$i}.php'>{$i}</a><br>";
        } else {
            echo "<a href='patroon-0{$i}.php'>{$i}</a><br>";
        }
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>