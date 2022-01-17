<?php
include_once'db.php';
 error_reporting(0);

 $id=$_GET['rn'];
 $sql = "DELETE FROM CUSTOMERS WHERE ID = '$id' ";

 $result = mysqli_query($conn, $sql);

 if($result)
 {
 	echo "<font color='red'>Record deleted successfuly";

 }
else 
{
	echo "<font color='red'>failed";
}
?>