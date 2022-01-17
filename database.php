


<?php
//Insert data in mysql database
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$phone = $_POST['phone'];
$idnumber = $_POST['idnumber'];
$passengers = $_POST['passengers'];
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$date = $_POST['date'];


    $conn = @mysqli_connect("localhost","root","","customers");
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO booking (firstname,secondname,phone,idnumber,passengers,origin,destination,date) Values (?,?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($sql);
    $stmt->bind_param( $_POST['firstname'], $_POST['secondname'], $_POST['phone'], $_POST['idnumber'], $_POST['passengers'], $_POST['origin'], $_POST['destination'], $_POST['date']);
    $stmt->execute();

    if(!mysqli_query($conn, $sql))
    {
        echo "Not Inserted!";
    }
    else
    {
        echo "Inserted";
    }



$conn->close();