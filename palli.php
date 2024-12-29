
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    
<?php
function palindrome($num){
    $numstr=(string)$num;
    $length=strlen($numstr);
    
    for($i=0;$i<$length/2;$i++){
        if($numstr[$i]!==$numstr[$length-$i-1]){
            return false;
        }
    }
    return true;
}
$num=121;
if(palindrome($num)){
    echo "$num is a palindrome.";
}
else{
    echo "$num is not palindrome.";
}
?>
    
</body>
</html>