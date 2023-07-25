<?php
require 'inc/config.php';
$query = $con->query('select * from directions  ORDER BY id DESC  LIMIT 1');
$fetch = $query->fetch_assoc();

//the above code for selecting the last data on the table
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Direction</title>
</head>
<body>
<!-- print the last data & if the table is empty print 'null' -->
<div class="center">
    <p class="text">The last trend added in the database: <span class="direction"><?php echo $fetch['direction'] ?? 'NULL'?></span></p>
</div>


</body>
</html>