<html>
<body>
  <center>
<?php

  session_start();
  include('db_config.php');
  echo "view messages";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM message where to_id=? and status=0");

    $stmt->bind_param("i",$user_id);

    $user_id= $_SESSION['user_id'];

    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0)
    {
      echo "<table title=\"User Table\">
        <tr>
          <th>Select to delete</th>
          <th>From</th>
          <th>Time</th>
          <th>Body</th>
        </tr>";

      echo"  <form action=\"view_messages_in_db.php\" method=\"post\">";

      while($row = $result->fetch_assoc())
      {
        echo "<tr>
          <td><input type=\"checkbox\" name= \"del_id[]\"value=". $row['from_id'] .",".$row['to_id'].",".$row['time'].">". $row['from_id'] ."</td>
          <td>" . $row['to_id'] . "</td>
          <td>" . $row['time'] . "</td>
          <td>" . $row['body'] . "</td>
          
          </tr>";
      }

      echo "</table>
      <input type=\"submit\" value=\"Delete messages\">
       </form>";

    }

  if(isset($_SESSION['message_to_del_student']))
  {
    echo $_SESSION['message_to_del_student'];
    unset($_SESSION['message_to_del_student']);
  }
   ?>
  </center>
</body>
</html>
