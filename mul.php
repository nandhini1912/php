<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="mul.php" method="POST">
        <input type="text" name ="value1">
        <input type="text" name ="value2">
        <button type="submit">mul</button>

    </form>
    <p>The mul value is</p>
    <?php
    $l=intval($_POST["value1"]);
    $m=intval($_POST["value2"]);
    $n=$l*$m;
    echo $n;
    ?>
</body>
</html>