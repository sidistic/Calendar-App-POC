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

    $stmt = $conn->prepare("INSERT into Club values(?,?,?)");

    $stmt->bind_param("iss",$club_id,$club_name,$secy);
    $club_id=$_POST['club_id'];
    $club_name=$_POST['club_name'];
    $secy=$_POST['secy_id'];

    if($stmt->execute())
    {
      $_SESSION['message_to_add_club'] = "Club has been added";
    }
    else {
      $_SESSION['message_to_add_club'] = "Unable to add to the table.";
    }

    header("location: addclub.php");

}
 ?>
