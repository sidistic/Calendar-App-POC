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
      $stmt = $conn->prepare("INSERT into Faculty values(?,?,?)");

      $stmt->bind_param("iss",$faculty_id,$name,$department);
      $faculty_id=$value;
      $name=$_POST['name'.$value];
      $department=$_POST['department'.$value];
      if($stmt->execute())
      {
        $_SESSION['message_to_add_faculty'] = $_SESSION['message_to_add_faculty']." ".$value." added";
      }
      else {
        $_SESSION['message_to_add_faculty'] = $_SESSION['message_to_add_faculty']." ".$value." not added some error";
      }

    } 
    header("location: addfaculty.php");

}
 ?>
