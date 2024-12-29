<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime number</title>
</head>
<body>
    <form method="POST">
        <input type="text" name ="data">
        <input type="submit" value ="click">
    </form>
    <?php
        $n=$_POST['data'];
        for($x=$n;$x<=$n*10;$x++){
            if($x%$n==0){
                echo $x."<br>";
            }
        }
    
    ?>
</body>
</html>