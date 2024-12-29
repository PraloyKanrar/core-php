<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    <?php
    $reverse=0;
    $number=998902;
    while($number>1){
        $reverse = $reverse * 10;
        $reverse = $reverse + $number % 10;
        $number = $number / 10;

    }
    echo $reverse;
    
    
    ?>
</body>
</html>