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

    $stmt = $conn->prepare("SELECT * FROM Event where current_timestamp() > setup_timestamp ");

    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0)
    {
      echo "<table title=\"User Table\">
        <tr>
          <th>initiator_id</th>
          <th>with_id</th>
          <th>type</th>
          <th>check if want to alter event</th>
          <th>type</th>
          <th>type</th>
          <th>type</th>
          <th>type</th>
        </tr>";

      while($row = $result->fetch_assoc())
      {
        echo "<tr>
          <td>" . $row['initiator_id'] . "</td>
          <td>" . $row['with_id'] . "</td>
          <td>" . $row['type'] . "</td>
          <td><input type=\"checkbox\" name= \"add_id[] \"value=". $row['user_id'] ."></td>
          <td>" . $row['type'] . "</td>
          <td>" . $row['type'] . "</td>
          <td>" . $row['type'] . "</td>

          </tr>";
      }
      echo "</table>";

    }
?>
  <form action="alter_event_in_db.php" method="post">
    <input type="number" name="initiator_id"  required/>
    <input type="number" name="with_id" required pattern=.*\S.* />
    <input type="text" name="type"  required pattern=.*\S.* />
    <input type="text" name="type"  required pattern=.*\S.* />
    <input type="text" name="type"  required pattern=.*\S.* />
    <input type="text" name="type"  required pattern=.*\S.* />
    <input type="submit" value="Submit">
  </form>
  <?php
  if(isset($_SESSION['message_to_alter_event'))
  {
    echo $_SESSION['message_to_alter_event'];
    unset($_SESSION['message_to_alter_event']);
  }
   ?>
  </center>
</body>
</html>
