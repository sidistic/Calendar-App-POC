<?php

session_start();

include('db_config.php');
 var_dump($_POST);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  echo "nin amman";
  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }
 

  $from_id = $_SESSION['user_id'];
  $to_id = $_POST['to_id'];
  $body = $_POST['body'];
  $status=0;
  // $time=CURRENT_TIMESTAMP();
  
    //foreach ($names as $to_id) {
      echo $to_id .",".$from_id."," $body;
      $stmt = $conn->prepare("INSERT INTO message values (?,?,CURRENT_TIMESTAMP,?,0)");
      $stmt->bind_param("iis", $from_id, $to_id, $body);
      $stmt->execute();
     
    //} 
  header("location: sendmessage.php");
}
 ?>
