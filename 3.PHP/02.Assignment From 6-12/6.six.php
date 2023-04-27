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
    $something = "Programming";
    echo <<<code
        Hello \PHP\
        We Love $something
    code;
    
    // [1] Fix The Error
    // [2] Remove 2 Characters To Get The Output
    
    // Needed Output
    // Hello \PHP\ We Love Programming

?>
</body>
</html>