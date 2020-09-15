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

    $stmt = $conn->prepare("INSERT into User values(?,?,?)");

    $stmt->bind_param("iss",$id,$uname,$pass);
    $id=$_POST['user_id'];
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];

    if($stmt->execute())
    {
      $_SESSION['message_to_add_user'] = "User has been added";
    }
    else {
      $_SESSION['message_to_add_user'] = "Unable to add to the table. user_id or user_name may already exist. Please contact support if issue persists";
    }

    header("location: adduser.php");

}
 ?>
