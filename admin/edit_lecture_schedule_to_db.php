<?php

  session_start();
  include('db_config.php');
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $start_slot_id=$_POST['start_slot_id'];

    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT into LectureSchedule values(?,?,?,?,?,?,?)");

    $stmt->bind_param("siiisii",$course_id,$start_slot_id,$end_slot_id,$room_id,$day,$year,$semester);
    $course_id=$_POST['course_id'];
    $start_slot_id=$_POST['start_slot_id'];
    $end_slot_id=$_POST['end_slot_id'];
    $room_id=$_POST['room_id'];
    $day=$_POST['day'];
    $year=$_POST['year'];
    $semester=$_POST['semester'];

    if($stmt->execute())
    {
      $_SESSION['message_to_add_user'] = "User has been added";
    }
    else {
      $_SESSION['message_to_add_user'] = "Unable to add to the table. user_id or user_name may already exist. Please contact support if issue persists";
    }

   // header("location: edit_lecture_schedule.php");

}
 ?>
