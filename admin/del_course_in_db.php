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
      echo "$all[0],$all[1],$all[2]";
      $stmt1=$conn->prepare("DELETE FROM Takes WHERE course_id=? and year=? and semester=?");
      $stmt2=$conn->prepare("DELETE FROM LectureSchedule WHERE course_id=? and year=? and semester=?");
      $stmt=$conn->prepare("DELETE FROM Course WHERE course_id=? and year=? and semester=?");
      $stmt1->bind_param("sii", $all[0],$all[1],$all[2]);
      $stmt2->bind_param("sii", $all[0],$all[1],$all[2]);
      $stmt->bind_param("sii", $all[0],$all[1],$all[2]);
      // $stmt1->execute();
      // $stmt2->execute();
      // $stmt->execute();
      if($stmt1->execute() && $stmt2->execute() && $stmt->execute()){
          $_SESSION['message_to_del_course'] = 'courses have been deleted successfully.';
      }
    else{
        $_SESSION['message_to_del_course'] = 'select checkbox to delete course.';
    }
   

} header("Location:deletecourse.php");
}
 ?>
