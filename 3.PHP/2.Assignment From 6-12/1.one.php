<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
            echo (int)(15.2 + 14.7 + (10.5 + 10.5)); // 50
            echo "<br>";
            echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))); // Integer
        ?>
    
</body>
</html>