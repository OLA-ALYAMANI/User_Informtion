<?php
$db_host="localhost";
$db_uset="root";
$db_passwre="";
$database="iser_infotrmation";
$connect = mysqli_connect($db_host,$db_uset,$db_passwre,$database) or die(mysqli_error($connect));


if (isset($_POST['seve'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone_numb'];

	$mysqli->query("INSERT INTO data (name, phone) VALUES('$name', '$phone')") or die($mysqli->error);
}
	
?>