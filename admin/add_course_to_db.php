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

    $stmt = $conn->prepare("INSERT into Course values(?,?,?,?,?) ");

    $stmt->bind_param("sssii",$course_id,$title,$department,$year,$semester);
    $course_id=$_POST['course_id'];
    $title=$_POST['title'];
    $year=$_POST['year'];
    $department=$_POST['department'];
    $semester=$_POST['semester'];

    if($stmt->execute())
    {
      $_SESSION['message_to_add_course'] = "course has been added";
    }
    else {
      $_SESSION['message_to_add_course'] = "Unable to add to the table. Please contact support if issue persists.".mysql_error()." mysql error";
    }

    header("location: addcourse.php");

}
 ?>
