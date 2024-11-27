<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lab 5a Q3</title>
</head>
<body>
<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$length = 5;
$width = 3;
$area = calculateArea($length, $width);
?>

<p>Rectangle Area Calculation:</p>
<p>Length: <?php echo $length; ?></p>
<p>Width: <?php echo $width; ?></p>
<p>Area: <?php echo $area; ?> square units</p>
</body>
</html>