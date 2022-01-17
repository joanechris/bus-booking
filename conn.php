
<?php


  $firstname = $_POST['firstname'];
  $secondname = $_POST['secondname'];
  $phone = $_POST['phone'];
  $idnumber = $_POST['idnumber'];
  $passengers = $_POST['passengers'];
  $origin = $_POST['origin'];
  $destination = $_POST['destination'];
  $date = $_POST['date'];

      $sql = "INSERT INTO customers(firstname, secondname, phone, idnumber, passengers, origin, destination, date) VALUES('$firstname', '$secondname', '$phone', '$idnumber', ' $passengers', '$origin', '$destination', '$date');";
      mysqli_query($conn, $sql);
      header("location: pic.html? Booking=success");
      ?>

$capacity = $_POST['capacity'];
  $driver = $_POST['driver'];
  $route = $_POST['route'];
  $date = $_POST['date'];


       if(isset($_POST['submited'])){