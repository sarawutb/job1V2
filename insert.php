<?php
include("connect/connect.php")

$query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]',
'$_POST[price]','$_POST[dop]')";
$result = pg_query($query);

?>
