<?php

session_start();
include('db_config.php');
// var_dump($_POST);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }

  $names = $_POST['names'];
  $agenda = $_POST['agenda'];
  $time_slot_start = $_POST['time_slot_start'];
  $time_slot_end = $_POST['time_slot_end'];
  $day = $_POST['day'];
  $room_no = $_POST['room'];

  // foreach ($names as $key) {
  //   echo $key . " \n ";
  // }

  // echo  $names . "<br>" . $agenda . " , " . $time_slot_start . " , " . $time_slot_end;


  $initiator_id = $_SESSION['user_id'];

  // $stmt->bind_param($)
  foreach ($names as $with_id) {
    $stmt = $conn->prepare("INSERT INTO Events values(?,?,'meeting',?,?,?,?,?,0,CURRENT_TIMESTAMP)");
    $stmt->bind_param("iiiiiss",$initiator_id,$with_id,$time_slot_start,$time_slot_end,$room_no,$day,$agenda);
    $stmt->execute();
  }
  header("location: set_up_new_meeting.php");
}

?>
