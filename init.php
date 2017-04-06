<?php  
//  INITIALISING CONNECTION TO THE DATABSAE
$db_name = "times_vending";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";


if (!$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name)) {
	echo "connection unsuccessfull";
}
?>