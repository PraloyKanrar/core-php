<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    <?php
    $a=0;
    $b=1;
    echo "fibonacci series for 10 elements are : </br>";
    echo $a.' '.$b;
    for($n=1;$n<=10;$n++)
    {
        $next=$a+$b;
        echo ' '.$next;
        $a=$b;
        $b=$next;
    }
    
        
    
    ?>
</body>
</html>