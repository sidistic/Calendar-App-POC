<?php

session_start();

include('db_config.php');
var_dump($_POST);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }


  $user_id = $_SESSION['user_id'];
  $date = $_POST['date'];
  $description = $_POST['description'];
  $time_slot_end = $_POST['time_slot_end'];
  $time_slot_start = $_POST['time_slot_start'];



  $stmt = $conn->prepare("INSERT INTO Events values(?,?,'personal',?,?,0,?,?,1,CURRENT_TIMESTAMP)");

  $stmt->bind_param("iiiiss" ,$user_id,$user_id,$time_slot_start,$time_slot_end,$date,$description);

  $stmt->execute();

  header("location: add_personal_event.php");
}
 ?>
