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

    $stmt = $conn->prepare("INSERT into ClubMembers values(?,?)");

    $stmt->bind_param("ii",$club_id,$student);
    $club_id=$_POST['club_id'];
    $student=$_POST['student_id'];

    if($stmt->execute())
    {
      $_SESSION['message_to_add_club_member'] = "Club member has been added";
    }
    else {
      $_SESSION['message_to_add_club_member'] = "Unable to add club member to the table.";
    }

    header("location: addclubmember.php");

}
 ?>
