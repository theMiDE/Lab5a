<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
<?php
$students = array(
    array("id" => "1", "name" => "Ali", "age" => 20),
    array("id" => "2", "name" => "Siti", "age" => 22),
    array("id" => "3", "name" => "Abu", "age" => 21)
);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?php echo $student['id']; ?></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['age']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>