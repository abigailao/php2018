<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Opdrachten</title>
    <style>

    </style>
</head>
<body>
<?php
$aantal = 2;
$leden = 5;
$img = array("zwemclubs.jpg");

if($aantal == $leden) {
    $leden = $img;

    foreach ($img as $zwemclub)
    echo "<img src='img/".$zwemclub."'>";
}

?>
</body>
</html>