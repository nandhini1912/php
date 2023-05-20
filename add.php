<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
     echo(rand());
    ?>
    </title>
</head>
<body>
    <form action="add.php" method="POST">
    <input type="text" name="value1" id="">
    <input type="text" name="value2">
    <button type="submit">Add</button>
    </form>
    <p>The added Value is</p>
    <?php
    $a=intval($_POST["value1"]);
    $b=intval($_POST["value2"]);
    $c=$a+$b;
    echo $c;
    ?>
    
</body>
</html>