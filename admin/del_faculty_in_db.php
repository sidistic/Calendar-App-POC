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

     if (count($_POST["del_id"]) > 0 ) {
      $all = implode(",", $_POST["del_id"]);
      $query1="DELETE FROM Takes WHERE 1 AND faculty_id IN($all)";
      $query="DELETE FROM Faculty WHERE 1 AND user_id IN($all)";
      if(mysqli_query($conn,$query1) && mysqli_query($conn,$query) ){
          $_SESSION['message_to_del_faculty'] = 'Faculties have been deleted successfully.';
      }
    }else{
        $_SESSION['message_to_del_faculty'] = 'Select checkbox to delete Faculties.';
    }
    header("Location:deletefaculty.php");

}
 ?>
