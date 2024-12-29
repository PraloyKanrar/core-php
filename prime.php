<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    <?php
    $n=7;
    $f=0;
    for($i=2;$i<$n;$i++){
        if($n%$i==0)
        {
            $f=1;
            break;
        }
    }
    if($f==0){
        echo "prime";
    }else{
        echo " not prime";
    }
    ?>
</body>
</html>