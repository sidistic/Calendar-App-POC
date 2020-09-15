<?php

  session_start();
  include('db_config.php');
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT into Room values(?,?,?)");

    $stmt->bind_param("isi",$room_no,$building,$capacity);
    $room_no=$_POST['room_no'];
    $building=$_POST['building'];
    $capacity=$_POST['capacity'];

    if($stmt->execute())
    {
      $_SESSION['message_to_add_room'] = "room has been added";
    }
    else {
      $_SESSION['message_to_add_room'] = "Unable to add to the table.";
    }

    header("location: addroom.php");

}
 ?>
