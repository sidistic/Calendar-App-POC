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
    $stmt = $conn->prepare("SELECT * FROM User WHERE user_name = ? AND password = ?");

    $stmt->bind_param("ss",$user,$user_password);

    $user = $_POST['user_name'];
    $user_password = $_POST['password'];

    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows == 0)
    {
      $error = "Your Login Name or Password is invalid. Please try again.";
      echo "<script>alert(\"".$error."\")</script>";
      $_SESSION['invalid_login'] = $error;
      header("location: index.php");
    }
    else
    {
      $_SESSION['user'] = $_POST['user_name'];
      while($row = $result->fetch_assoc())
      {
        $_SESSION['user_id'] = $row['user_id'];
      }
      $_SESSION['logged_in'] = "yes";
      echo $_SESSION['user_id'];
      header("location: redirect.php");
    }
  }

?>
