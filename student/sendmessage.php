<html>
<body>
  <center>
    <form action = "add_message_to_db.php" method="post">
      <select name="names[]" multiple>
        <?php
        session_start();
        include('db_config.php');

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error)
        {
          die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM Student WHERE not user_id = ?");

        $stmt->bind_param("i",$user_id);

        $user_id= $_SESSION['user_id'];

        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc())
          {
            echo "<option value=" . $row['user_id'] . ">" . $row['name'] . "</option>";
          }
        }
        ?>
      </select>
      <br>
      Message
      <input type="text" name="body" required/>
      <br>
      <input type="submit" value="Send Message">

    </form>
  </center>
</body>
</html>
