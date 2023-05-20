<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form action="div.php" method="POST">
    <input type="text" name="value1">
    <input type="text" name="value2">
    <button type="submit">div</button>
</form>
<p>The div value is</p>
<?php
$s=intval($_POST["value1"]);
$t=intval($_POST["value2"]);
$u=$s/$t;
echo $u;
?>
</body>
</html>