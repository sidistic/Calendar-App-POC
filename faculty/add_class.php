<html>
<head>
  <?php session_start(); ?>
  <script>
  function hidePastTime(timeslot)
  {
    // document.write(timeslot);
    var i;
    var t = timeslot;
    for(i=1;i<=48;i++)
    {
      if(i <= timeslot)
      {
        document.getElementById("endtime" + i).style.display="none";
      }
      else {
        document.getElementById("endtime" + i).style.display="";
      }
    }
    document.getElementById("time_slot_end").options[t].selected=true;
  }
  </script>

</head>
<body>
  <center>
    <form action = "add_class_to_db.php" method="post">
      course_id:
      <select name="course">
        <?php
        include('db_config.php');

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error)
        {
          die("Connection failed: " . $conn->connect_error);
        }
        $user_id = $_SESSION['user_id'];
        $stmt = $conn->prepare("SELECT distinct(course_id) FROM Takes WHERE faculty_id = ?");
        $stmt->bind_param("i",$user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc())
          {
            echo "<option value=" . $row['course_id'] . ">" . $row['course_id'] . "</option>";
          }
        }

        ?>
      </select>
      <br>
      Branch and Year:
      <select name="BnY">
        <?php
        include('db_config.php');

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error)
        {
          die("Connection failed: " . $conn->connect_error);
        }
        $user_id = $_SESSION['user_id'];
        $stmt = $conn->prepare("SELECT distinct department, Course.year FROM Takes JOIN Course using(course_id) WHERE faculty_id = ?");
        $stmt->bind_param("i",$user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc())
          {
            echo "<option value=\"" . $row['department'] . "," . $row['year'] . "\" >" . $row['department'] . " , " . $row['year'] . "</option>";
          }
        }

        ?>
      </select>
      <br>
      <br>
      agenda :
      <input type="text" name="agenda" placeholder="extra class" required>
      <br>
      start time slot :
      <select name="time_slot_start" onchange="hidePastTime(this.value)">
        <option value=1> 00:00 </option>
        <option value=2> 00:30 </option>
        <option value=3> 01:00 </option>
        <option value=4> 01:30 </option>
        <option value=5> 02:00 </option>
        <option value=6> 02:30 </option>
        <option value=7> 03:00 </option>
        <option value=8> 03:30 </option>
        <option value=9> 04:00 </option>
        <option value=10> 04:30 </option>
        <option value=11> 05:00 </option>
        <option value=12> 05:30 </option>
        <option value=13> 06:00 </option>
        <option value=14> 06:30 </option>
        <option value=15> 07:00 </option>
        <option value=16> 07:30 </option>
        <option value=17> 08:00 </option>
        <option value=18> 08:30 </option>
        <option value=19> 09:00 </option>
        <option value=20> 09:30 </option>
        <option value=21> 10:00 </option>
        <option value=22> 10:30 </option>
        <option value=23> 11:00 </option>
        <option value=24> 11:30 </option>
        <option value=25> 12:00 </option>
        <option value=26> 12:30 </option>
        <option value=27> 13:00 </option>
        <option value=28> 13:30 </option>
        <option value=29> 14:00 </option>
        <option value=30> 14:30 </option>
        <option value=31> 15:00 </option>
        <option value=32> 15:30 </option>
        <option value=33> 16:00 </option>
        <option value=34> 16:30 </option>
        <option value=35> 17:00 </option>
        <option value=36> 17:30 </option>
        <option value=37> 18:00 </option>
        <option value=38> 18:30 </option>
        <option value=39> 19:00 </option>
        <option value=40> 19:30 </option>
        <option value=41> 20:00 </option>
        <option value=42> 20:30 </option>
        <option value=43> 21:00 </option>
        <option value=44> 21:30 </option>
        <option value=45> 22:00 </option>
        <option value=46> 22:30 </option>
        <option value=47> 23:00 </option>
        <option value=48> 23:30 </option>
      </select>
      <br>
      end time slot :
      <select name="time_slot_end" id="time_slot_end">
        <option value=1 id="endtime1"> 00:00 </option>
        <option value=2 id="endtime2"> 00:30 </option>
        <option value=3 id="endtime3"> 01:00 </option>
        <option value=4 id="endtime4"> 01:30 </option>
        <option value=5 id="endtime5"> 02:00 </option>
        <option value=6 id="endtime6"> 02:30 </option>
        <option value=7 id="endtime7"> 03:00 </option>
        <option value=8 id="endtime8"> 03:30 </option>
        <option value=9 id="endtime9" > 04:00 </option>
        <option value=10 id="endtime10"> 04:30 </option>
        <option value=11 id="endtime11"> 05:00 </option>
        <option value=12 id="endtime12"> 05:30 </option>
        <option value=13 id="endtime13"> 06:00 </option>
        <option value=14 id="endtime14"> 06:30 </option>
        <option value=15 id="endtime15"> 07:00 </option>
        <option value=16 id="endtime16"> 07:30 </option>
        <option value=17 id="endtime17"> 08:00 </option>
        <option value=18 id="endtime18"> 08:30 </option>
        <option value=19 id="endtime19"> 09:00 </option>
        <option value=20 id="endtime20"> 09:30 </option>
        <option value=21 id="endtime21"> 10:00 </option>
        <option value=22 id="endtime22"> 10:30 </option>
        <option value=23 id="endtime23"> 11:00 </option>
        <option value=24 id="endtime24"> 11:30 </option>
        <option value=25 id="endtime25"> 12:00 </option>
        <option value=26 id="endtime26"> 12:30 </option>
        <option value=27 id="endtime27"> 13:00 </option>
        <option value=28 id="endtime28"> 13:30 </option>
        <option value=29 id="endtime29"> 14:00 </option>
        <option value=30 id="endtime30"> 14:30 </option>
        <option value=31 id="endtime31"> 15:00 </option>
        <option value=32 id="endtime32"> 15:30 </option>
        <option value=33 id="endtime33"> 16:00 </option>
        <option value=34 id="endtime34"> 16:30 </option>
        <option value=35 id="endtime35"> 17:00 </option>
        <option value=36 id="endtime36"> 17:30 </option>
        <option value=37 id="endtime37"> 18:00 </option>
        <option value=38 id="endtime38"> 18:30 </option>
        <option value=39 id="endtime39"> 19:00 </option>
        <option value=40 id="endtime40"> 19:30 </option>
        <option value=41 id="endtime41"> 20:00 </option>
        <option value=42 id="endtime42"> 20:30 </option>
        <option value=43 id="endtime43"> 21:00 </option>
        <option value=44 id="endtime44"> 21:30 </option>
        <option value=45 id="endtime45"> 22:00 </option>
        <option value=46 id="endtime46"> 22:30 </option>
        <option value=47 id="endtime47"> 23:00 </option>
        <option value=48 id="endtime48"> 23:30 </option>
      </select>
      <br>
      Date :
      <input type="date" name="date" required>
      <br>
      <select name="room">
        <?php
          $stmt = $conn->prepare("SELECT * FROM Room");
          $stmt->execute();
          $result = $stmt->get_result();
          if($result->num_rows > 0)
          {
            while($row = $result->fetch_assoc())
            {
              echo "<option value=" . $row['room_no'] . ">" . $row['room_no'] . " , " . $row['building'] . "</option>";
            }
          }
        ?>
      </select>
      <input type="submit" value="Set Up">
    </form>
    <?php
    if(isset($_SESSION['MeetingClash']))
    {
      echo "<h3>" .$_SESSION['MeetingClash'] . "</h3>";
      unset($_SESSION['MeetingClash']);
    }
    ?>
  </center>
</body>
</html>
