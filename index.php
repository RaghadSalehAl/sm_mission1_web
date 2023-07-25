<?php
require 'inc/form.php';

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Directions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
</head>


<body>


<?php
if (isset($successfully)){
    ?>
    <script>
    Swal.fire(
        'Direction added successfully',
        '',
        'success'
    )
</script>
<?php
}
?>

<!-- link the php page & create five buttons for the directions -->
<form method="POST" action="index.php">
    <div class="container">
        <button value="Forward" name="direction" class="forward btn">forward</button>
        <button value="Backword" name="direction" class="backword btn">Backword</button>
        <button value="Stop" name="direction" class="stop btn">stop</button>
        <button value="Right" name="direction" class="right btn">right</button>
        <button value="Left" name="direction" class="left btn">left</button>

    </div>
</body>
</html>