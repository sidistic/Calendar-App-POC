<?php

session_start();
include('db_config.php');

$conn = new mysqli($servername,$username, $password, $dbname);

if($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM Student WHERE user_id = ?");
$stmt->bind_param("i",$user_id);
$user_id=$_SESSION['user_id'];
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    $stu_name = $row['name'];
    $stu_dept = $row['department'];
    $stu_year = $row['year'];
    $stu_roll_no = $row['roll_no'];
  }
}

echo $stu_name . " , " . $stu_dept . " , " . $stu_year . " , " . $stu_roll_no . "<br>";

$stmt = $conn->prepare("SELECT * FROM Takes JOIN LectureSchedule USING (course_id,year,semester) WHERE student_id = ? ORDER BY day");
$stmt->bind_param("i",$user_id);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0)
{
  while($row = $result->fetch_assoc())
  {
    echo $row['course_id'] . " , " .  $row['slot_id'] . " , " . $row['room_id'] . " , " . $row['day'] . "<br>";
  }
}

?>
