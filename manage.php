<?php   
 include 'db.php';  
  
 ?>  


<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color: lightgreen;

		}
		table,th,td{
			border:1px solid black;
			width: 1100px;
			background-color: lightblue;

		}
		.btn{
			width: 20%;
			height: 5%
			font-weight: bold;
			align-self: center;
		}
		.btn{
			background: #fff;
			color: darkred;
			font-size: 1.2emp;
			padding: 5px 30px;
			text-decoration: none;
		}
		 .btn:hover{
		 	background: darkred;
		 	color: #fff;
		 }

	</style>
	<title>Customer info</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<center>
<body>
<h1>CUSTOMER INFO</h1>
<h2>BOOKING REPORT</h2>
 <nav>
        <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
        <a href="home.html"><i class="fas fa-sign-out-alt"></i>home</a>
        </nav>

<div class="container">
	<form action=" " method="POST">
		<table >
			<tr>
				<th>order</th>
				<th>First name</th>
				<th>Second name</th>
				<th>Phone</th>
				<th>ID number</th>
				<th>Passengers</th>
				<th>Origin</th>
				<th>Destination</th>
				<th>Date</th>
				<th>Delete</th>
			</tr>
		<input type="submit" class="btn" name="search" value="SEARCH DATA">

	</form>




	
		<?php  

	$sql = "SELECT * FROM customers; ";
       $result = mysqli_query($conn, $sql);
       $resultCheck = mysqli_num_rows($result);
    	if($resultCheck > 0 ){
    	while ($row = mysqli_fetch_assoc ($result)) {
    		
    			echo "
    			<tr>
    		<td> ".$row ['id']. " </td>
                <td>".$row  ['firstname']. "</td>
                <td>".$row ['secondname']." </td>
                <td>". $row['phone']." </td>
    		  <td>" .$row['idnumber']." </td>
    		<td>".$row['passengers']." </td>
    		<td>". $row['origin']."</td>
    		<td>".$row['destination']." </td>
    		<td>".$row['date']."</td>
    		<td> <a href = 'delete.php?rn=$row[id]'> Delete </a></td>
    		
    	</tr> ";
 }
}
?>



 <?php

?>

</center>
</div>
</body>
</html>