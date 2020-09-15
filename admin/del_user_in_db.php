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
      // $query1="DELETE FROM Message WHERE 1 AND from_id IN($all)";
      // $query2="DELETE FROM Message WHERE 1 AND to_id IN($all)";
      // $query1="DELETE FROM Student WHERE 1 AND user_id IN($all)";
      // $query1="DELETE FROM Student WHERE 1 AND user_id IN($all)";
      // $query1="DELETE FROM Student WHERE 1 AND user_id IN($all)";

      $query3="DELETE FROM Student WHERE 1 AND user_id IN($all)";
      $query4="DELETE FROM Faculty WHERE 1 AND user_id IN($all)";
      $query="DELETE FROM User WHERE 1 AND user_id IN($all)";

      if( mysqli_query($conn,$query3) &&  mysqli_query($conn,$query4) &&  mysqli_query($conn,$query)){
          $_SESSION['message_to_del_user'] = 'Users have been deleted successfully.';
      }
    }else{
        $_SESSION['message_to_del_user'] = 'Select checkbox to delete user.';
    }
    header("Location:deleteuser.php");

}
 ?>
