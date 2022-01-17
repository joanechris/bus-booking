<?php


if(isset($_POST['submited'])){ 

    include_once'db.php';
  $plate = $_POST['plate'];
  $capacity = $_POST['capacity'];
  $driver = $_POST['driver'];
  $route = $_POST['route'];
  $date = $_POST['date'];

  
      $sql = "INSERT INTO busses (plate, capacity, driver, route, date) 
      VALUES('$plate', '$capacity', '$driver', '$route', ' $date');";
      mysqli_query($conn, $sql);

     
  }
      ?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BUSSES</title>
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
	font-size: 15px;
	color:#fff;
}
input::placeolder{
	color:#fff;
}
.input-grp
{
	width: 151px;
}
		
	</style>
		
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<form action= "alocation.php" method="POST">
  <input type="hidden" name="submited" value="true"/>
<body style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/bus2.jpg') no-repeat; background-size: 100%;">
<div>
  <nav>
        <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
        <a href="home.html"><i class="fas fa-sign-out-alt"></i>home</a>
        </nav>

<div class="booking-form-box">

    <div class= "booking-form">
      <label>Capacity</label>
      <input type="text" name="capacity" class="form-control" placeholder="" required>
    	<label>Buss plate</label>
      <select class="custom-select" name="plate" required>
  <option value="KBB 124D">KBB 124D</option>
  <option value="KCB 234C">KCB 234C</option>
  <option value="KCD 453E">KCD 453E</option>
  <option value="KBA 234E">KBA 234E</option>
</select>
      
      <label>Driver</label>
      <label>Buss plate</label>
      <select class="custom-select" name="driver" required>
  <option value="JAKE ORANGI">JAKE ORANGI</option>
  <option value="DAVID MAINA">DAVID MAINA</option>
  <option value="WILSON KIMANI">WILSON KIMANI </option>
  <option value="PURITY ANDELA">PURITY ANDELA</option>
  <option value="Ndungu Simon">Ndungu Simon</option>

</select>
      
      
    <div class="input-grp">
    <label>Route</label>
    <select class="custom-select" name="route" required>
  <option value="Nairobi - Kisumu">Nairobi - Kisumu</option>
  <option value="Nairobi - Nakuru">Nakuru - Nairobi</option>
  <option value="Nairobi - Kitale">Nairobi - Kitale</option>
  <option value="Nairobi - Eldoret">Nairobi- Eldoret</option>
  <option value="Nairobi - Bungoma">Nairobi - Bungoma</option>
  <option value="Nairobi - Kisumu">Nakuru - Kisumu</option>
  <option value="Nairobi - Nakuru">Kisumu - Nakuru</option>
  <option value="Nairobi - Kitale">Nakuru - Kitale</option>
  <option value="Nairobi - Eldoret">kisumu- Eldoret</option>
  <option value="Nairobi - Bungoma">Nakuru - Bungoma</option>
  
  
</select>
</div>

<div class="input-grp">
    <label>Date</label>
<input type="date"  name="date" class="form-control select-date">
      </div>
  </div>
  <script type = "text/javascript">
            function fun() {


               alert ("booking successfull ");
            }
            </script> 

      <div class="input-grp">
        <button onclick="myFunction()" type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
</dv>



<script>

  </div>

          </div>         
        </div>
      </div>
  </div>

  </div> <!-- /.form-group -->
</form>

</body>
</html>