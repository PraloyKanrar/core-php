
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    
<?php
function arms($num){
    $numstr=(string)$num;
    $numdigit=strlen($numstr);
    $sum=0;
    
    for($i=0;$i<$numdigit;$i++){
        $sum+=pow($numstr[$i],$numdigit);
    }
    return $sum==$num;
}
$num=153;
if(arms($num)){
    echo"$num is an armstrong";
}
else{
    echo"$num is not armstrong";
}
?>
    
</body>
</html>