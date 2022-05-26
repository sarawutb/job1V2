<?php
// $host="192.168.65.19";//
// $pg_port="5432";//
// $pg_user="postgres";//
// $pg_pw="postgres";//
// $pg_db="ubontest";//
$host="localhost";//
$pg_port="5432";//
$pg_user="postgres";//
$pg_pw="1234";//
$pg_db="ubon1";//
$conn = pg_connect("host=".$host." port=".$pg_port." dbname=".$pg_db." user=".$pg_user." password=".$pg_pw);
if (!$conn) {
		echo "An error occured.\n";
    exit;
}
// else{
// 	echo "OK";
// }
?>
<!-- <h1>List of all actors in the table</h1> -->
<?php
// $result = pg_query($conn,"SELECT * FROM cen_form");
// echo "<table style='border :1px solid red'>";
// while($row=pg_fetch_assoc($result)){echo "<tr>";
// echo "<td align='center' width='200'>" . $row['name1'] . "</td>";
// echo "<td align='center' width='200'>" . $row['name1'] . "</td>";
// echo "</tr>";}echo "</table>";
?>
