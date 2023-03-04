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
        echo (bool)("Hello PHP");
        echo '<br>';
        echo gettype( + (bool)("Hello PHP"));
        
        // Needed Output
        // 1
        // integer

?>
</body>
</html>