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

  $club = $_POST['club_id'];
  $user_id = $_SESSION['user_id'];


  $stmt = $conn->prepare("DELETE FROM ClubMembers WHERE club_id = ? AND student_id = ?");
  $stmt->bind_param("ii", $club, $user_id);
  $stmt->execute();

  header("location: leave_club.php");
}
?>
