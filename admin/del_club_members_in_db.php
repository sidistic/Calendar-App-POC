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
      echo "$all[1]";
        $stmt=$conn->prepare("DELETE FROM ClubMembers WHERE club_id= ? and student_id=?");
        $stmt->bind_param("ii",$all[0],$all[1]);
        
        if($stmt->execute()){
          $_SESSION['message_to_del_clubmembers'] = 'Students have been deleted successfully.';
        
      }else{
        $_SESSION['message_to_del_clubmembers'] = 'Select checkbox to delete Student.';
      }
    }
  header("Location:deleteclubmember.php");
       

}
 ?>
