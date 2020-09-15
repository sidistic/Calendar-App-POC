<html>
<body>
  <center>
<?php

  session_start();
  include('db_config.php');
  echo "delete club";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM Message  ");

    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0)
    {
      echo "<table title=\"User Table\">
        <tr>
          <th>from_id</th>
          <th>to_id</th>
          <th>time</th>
          <th>body</th>
          <th>status</th>
        </tr>";

      echo"  <form action=\"del_message_in_db.php\" method=\"post\">";

      while($row = $result->fetch_assoc())
      {
        echo "<tr>
          <td><input type=\"checkbox\" name= \"del_id[]\"value=". $row['from_id'] .">". $row['from_id'] ."</td>
          <td>" . $row['to_id'] . "</td>
          <td>" . $row['time()'] . "</td>
          <td>" . $row['body'] . "</td>
          <td>" . $row['status'] . "</td>
          </tr>";
      }

      echo "</table>
      <input type=\"submit\" value=\"Delete Message\">
       </form>";

    }

  if(isset($_SESSION['message_to_del_message']))
  {
    echo $_SESSION['message_to_del_message'];
    unset($_SESSION['message_to_del_message']);
  }
   ?>
  </center>
</body>
</html>
