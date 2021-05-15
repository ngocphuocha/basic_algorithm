<?php
include "html.php";

$table = new html\Table();
$row = new html\Row();

$table->title = "my table";
$table->numRows = 5;

$row->numCells = 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>
</body>
</html>