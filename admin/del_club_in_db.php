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
      $query1="DELETE from ClubMembers WHERE club_id IN($all) ";
      $query="DELETE FROM Club WHERE 1 AND club_id IN($all)";
      if(mysqli_query($conn,$query1) && (mysqli_query($conn,$query))){
          $_SESSION['message_to_del_club'] = 'Clubs have been deleted successfully.';
      }
    }else{
        $_SESSION['message_to_del_club'] = 'Select checkbox to delete club.';
    }
    header("Location:deleteclub.php");

}
 ?>
