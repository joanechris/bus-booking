<?php
include_once 'db.php'
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

		.title{
			position: absolute;
			top: 50%;
			left: 50%
			transform:translate(-50%,-50%);
		}
		.h1{
			color: #fff;
			font-size: 70px;
		}
		

		.btn{
			width: 20%;
			height: 5%
			font-weight: bold;
			align-self: center;
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
<h1>NORTH RIFT SHUTTLE</h1>
<h2>BOOKING REPORT</h2>
 <nav>
        <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
        <a href="home.html"><i class="fas fa-sign-out-alt"></i>home</a>
        </nav>

<div class="container">
	<form action=" " method="POST">
		<table class="text-center pt-5">
			<tr>
				<th>First name</th>
				<th>Second name</th>
				<th>Phone</th>
				<th>ID number</th>
				<th>Passengers</th>
				<th>Origin</th>
				<th>Destination</th>
				<th>Date</th>
				
			</tr>
		<input type="submit" class="btn" name="search" value="SEARCH DATA">

	</form>
	

		<?php

		
$sql = "SELECT * FROM customers; ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


    	if($resultCheck > 0 ){
    		while ($row = mysqli_fetch_array ($result)) {
    			?>
    			<tr>
                <td><?php echo $row ['firstname']; ?> </td>
                <td><?php echo $row ['secondname']; ?> </td>
                <td> <?php echo $row['phone'] ?> </td>
    			<td> <?php echo $row['idnumber'] ?> </td>
    			<td> <?php echo $row['passengers'] ?> </td>
    			<td> <?php echo $row['origin'] ?> </td>
    			<td> <?php echo $row['destination'] ?> </td>
    			<td> <?php echo $row['date'] ?> </td>
    			 
	    		 
	    		
  
 
 <?php
 }
                  

}
else
{
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
<?php
    		
    	

    	
?>
    

</center>
</div>
           <div class="text-center pt-5">
            <button onclick="window.print()" class="btn btn-primary" >print</button>
              </div>
</body>
</html>