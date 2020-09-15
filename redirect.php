<?php
  session_start();
  if(!isset($_SESSION['logged_in']))
  {
    header("Location: index.php");
  }
  include('db_config.php');

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->$connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }

  $valid=-1;

  //to check if the user is of type student
  $stmt = $conn->prepare("SELECT * FROM Student where user_id = ?");
  $stmt->bind_param("i",$user_id);
  $user_id = $_SESSION['user_id'];
  $stmt->execute();

  $result = $stmt->get_result();

  if($result->num_rows > 0)
  {
    $valid = 1;
    header("location: student/index.html");
  }

  $stmt = $conn->prepare("SELECT * FROM Faculty where user_id = ?");
  $stmt->bind_param("i",$user_id);
  $user_id = $_SESSION['user_id'];
  $stmt->execute();

  $result = $stmt->get_result();

  if($result->num_rows > 0)
  {
    $valid = 1;
    header("location: faculty/index.html");
  }

  $stmt = $conn->prepare("SELECT * FROM Admin where user_id = ?");
  $stmt->bind_param("i",$user_id);
  $user_id = $_SESSION['user_id'];
  $stmt->execute();

  $result = $stmt->get_result();

  if($result->num_rows > 0)
  {
    $valid = 1;
    header("location: admin/index.html");
  }

  if($valid == -1)
  {
    $error = "You haven't been assigned a roll yet. Please contact the admin";
    echo "<script>alert(\"".$error."\")</script>";
    // header("location: index.php");
  }


?>
