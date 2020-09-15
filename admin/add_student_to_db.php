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
    $saved=$_POST["add_id"];
    foreach($saved as $value) {
      $stmt = $conn->prepare("INSERT into Student values(?,?,?,?,?)");

      $stmt->bind_param("issii",$student_id,$name,$department,$year,$roll_no);
      $student_id=$value;
      $name=$_POST['name'.$value];
      $department=$_POST['department'.$value];
      $year=$_POST['year'.$value];
      $roll_no=$_POST['roll_no'.$value];
      if($stmt->execute())
      {
        $_SESSION['message_to_add_student'] = $_SESSION['message_to_add_student']." ".$value." added";
      }
      else {
        $_SESSION['message_to_add_student'] = $_SESSION['message_to_add_student']." ".$value." not added some error";
      }

    } 
    header("location: addstudent.php");

}
 ?>
