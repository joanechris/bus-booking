<?php
  

  if(isset($_POST['submited'])){ 
    include_once'db.php';
    

  $firstname = $_POST['firstname'];
  $secondname = $_POST['secondname'];
  $phone = $_POST['phone'];
  $idnumber = $_POST['idnumber'];
  $passengers = $_POST['passengers'];
  $origin = $_POST['origin'];
  $destination = $_POST['destination'];
  $date = $_POST['date'];

      $sql = "INSERT INTO customers (firstname, secondname, phone, idnumber, passengers, origin, destination, date) VALUES('$firstname', '$secondname', '$phone', '$idnumber', ' $passengers', '$origin', '$destination', '$date');";
      mysqli_query($conn, $sql);
      }
       
  
      ?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>PIC</title>
	<style>

    .booking-form-box{

  max-width:350px;
  border: 1px solid #ced4da;
  margin: 10% auto 0;

}
   .booking-form 
{
  padding: 0 20px 20px;
}
.booking-form label
{
	margin-bottom: 5px
	margin-top: 10px;
	font-size: 12px;
	color:#fff;
}
input::placeolder{
	color:#fff;
}
.input-grp
{
	width: 151px;
	display: inline-block;
}
		
	</style>
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<form action= "insert.php" method="POST">
	<input type="hidden" name="submited" value="true"/>

<body style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/pic 2.PNG') no-repeat; background-size: 100%;">
	<div class="booking-form-box">

    <div class= "booking-form">
    	<label>First Name</label>
      <input type="text"  name="firstname" class="form-control" placeholder="" required="firstname">
      <label>Second Name</label>
      <input type="text" name="secondname" class="form-control" placeholder=""required>
      <label>Phone</label>
      <input type="tel"  name="phone" class="form-control" placeholder=""required>
      <label>ID number</label>
      <input type="value"  name="idnumber" class="form-control" placeholder=""required>
      <label>Passengers</label>
      <input type="number" name="passengers" class="form-control" placeholder=""required>
      <label>Amount</label>
      <input type="value" name="amount" class="form-control" placeholder=""required>
      
    <div class="input-grp">
    <label>Origin</label>
    <select class="custom-select" name="origin">
  <option value="Nairobi">Nairobi</option>
  <option value="Nakuru">Nakuru</option>
  <option value="Kitale">kitale</option>
  <option value="Eldoret">Eldoret</option>
<option value="Bungoma">Bungoma</option>
  <option value="Kisumu">Kisumu</option>
</select>
</div>
 <div class="input-grp">
   <label>Destination</label><br>
<select class="custom-select" name="destination">
  <option value="Nairobi">Nairobi</option>
  <option value="Nakuru">Nakuru</option>
  <option value="Kitale">kitale</option>
  <option value="Eldoret">Eldoret</option>
<option value="Bungoma">Bungoma</option>
  <option value="Kisumu">Kisumu</option>
</select>
</div>

<div class="input-grp">
    <label>Date</label>
<input type="date" name="date" class="form-control select-date">
      </div>

      <script type = "text/javascript">
            function fun() {


               alert ("booking successfull ");
            }
            </script> 

      <div class="input-grp">
        <button onclick="myFunction()" type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
</dv>

<button onclick="myFunction()">confirm</button>

<script>
function myFunction() {
  alert("booking successfull");
}
</script>

</body>
</html>
        
      </div> 
      </div> 
      
         

  </div> <!-- /.form-group -->
</form>


</body>
</html>