<html>
<body>
  <center>
<?php

  session_start();
  include('db_config.php');
  echo "mama";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM Takes ");

    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0)
    {
      echo "<table title=\"Course Table\">
        <tr>
          <th>student_id</th>
          <th>faculty_id</th>
          <th>course_id</th>
          <th>year</th>
          <th>semester</th>
        </tr>";

      
      echo"  <form action=\"edit_takes_in_db.php\" method=\"post\">";

      while($row = $result->fetch_assoc())
      {
        echo "<tr>
          <td><input type=\"checkbox\" name= \"del_id[]\"value=". $row['student_id'] .",". $row['faculty_id'] .",". $row['time'] ."></td>
          <td>" . $row['student_id'] . "</td>
          <td>" . $row['faculty_id'] . "</td>
          <td>" . $row['course_id'] . "</td>
          <td>" . $row['status'] . "</td>
          </tr>";
      }
      echo "</table>";

    }
?>
  <form action="add_course_to_db.php" method="post">
    <input type="text" name="course_id" required/>
    <input type="text" name="title" required pattern=.*\S.* />
    <input type="text" name="department" required pattern=.*\S.* />
    <input type="number" name="year" min=0 required pattern=.*\S.* />
    <input type="number" name="semester" min=0 required pattern=.*\S.* />
    <input type="submit" value="Add course">
  </form>
  <?php
  if(isset($_SESSION['message_to_add_course']))
  {
    echo $_SESSION['message_to_add_course'];
    unset($_SESSION['message_to_add_course']);
  }
   ?>
  </center>
</body>
</html>
