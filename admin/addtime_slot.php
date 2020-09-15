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

    $stmt = $conn->prepare("SELECT * FROM TimeSlot");

    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0)
    {
      echo "<table title=\"User Table\">
        <tr>
          <th>slot_id</th>
          <th>end_time</th>
          <th>start_time</th>
        </tr>";

      while($row = $result->fetch_assoc())
      {
        echo "<tr>
          <td>" . $row['slot_id'] . "</td> 
          <td>" . $row['end_time'] . "</td>
          <td>" . $row['start_time'] . "</td>
          </tr>";
      }
      echo "</table>";

    }
?>
  <form action="add_club_to_db.php" method="post">
    <input type="number" name="slot_id" min=0 required/>
    <input type= name="end_time" required pattern=.*\S.* />
    <input type="number" name="start_time" min=0 required pattern=.*\S.* />
    <input type="submit" value="Submit">
  </form>
  <?php
  if(isset($_SESSION['message_to_add_club']))
  {
    echo $_SESSION['message_to_add_club'];
    unset($_SESSION['message_to_add_club']);
  }
   ?>
  </center>
</body>
</html>
