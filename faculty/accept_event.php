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

  $initiator_id = $_POST['initiator_id'];
  $with_id = $_POST['with_id'];
  $type = $_POST['type'];
  $description = $_POST['description'];
  $date = $_POST['date'];
  $time_of_setup = $_POST['time_of_setup'];

  $stmt = $conn->prepare("UPDATE Events SET status = 1 WHERE initiator_id = ? and with_id = ? and type = ? and description = ? and date = ? and time_of_setup = ?");
  $stmt->bind_param("iissss", $initiator_id, $with_id, $type, $description, $date, $time_of_setup);
  $stmt->execute();

  $stmt = $conn->prepare("INSERT INTO message values(?,?,?,0,CURRENT_TIMESTAMP)");
  $message = "I will be available to come for \"$type\" on $date for \"$description\"";
  $stmt->bind_param("iis",$with_id,$initiator_id,$message);
  $stmt->execute();

  header("location: accept_decline_events.php");

}
?>
