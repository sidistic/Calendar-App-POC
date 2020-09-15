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

  $club = $_POST['club'];
  $user_id = $_SESSION['user_id'];


  $stmt = $conn->prepare("INSERT INTO ClubMembers values(?,?)");
  $stmt->bind_param("ii", $club, $user_id);
  $stmt->execute();

  header("location: join_club.php");
}

?>
