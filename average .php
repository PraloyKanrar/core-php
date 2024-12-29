<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Numbers</title>
</head>
<body>

<?php



// 6. Print the average of numbers from 1 to 10





$sum= 0;

for($i=1; $i<=200; $i++)
{ 
                            // using for loop
     $sum += $i;
}
$avg = $sum / 10 ;
echo "The Average is ".$avg."<br/>";

?>
    
</body>
</html>