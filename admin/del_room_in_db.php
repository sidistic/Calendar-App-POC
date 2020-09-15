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
    $count=count($_POST["del_id"]);
    $del_id=$_POST['del_id'];
    echo "$count,   $del_id";
    if (count($_POST["del_id"]) > 0 ) 
      foreach ($del_id as $value){ 
        $all = explode(",", $value);
    $stmt = $conn->prepare("DELETE from Room WHERE room_no=? AND building = ? ");

      $stmt->bind_param("is",$all[0],$all[1]);
      $room_no=$_POST['room_no'];
      $building=$_POST['building'];
      $stmt->execute();
      }
      echo "$room_no";
      echo "$building";
     
   header("location: deleteroom.php");

}
 ?>
