<?php

session_start();
include('db_config.php');
// var_dump($_POST);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }

  $names = $_POST['names'];
  $agenda = $_POST['agenda'];
  $time_slot_start = $_POST['time_slot_start'];
  $time_slot_end = $_POST['time_slot_end'];
  $date = $_POST['date'];
  $room_no = $_POST['room'];

  // foreach ($names as $key) {
  //   echo $key . " \n ";
  // }

  // echo  $names . "<br>" . $agenda . " , " . $time_slot_start . " , " . $time_slot_end;


  $initiator_id = $_SESSION['user_id'];

  // $stmt->bind_param($)
  foreach ($names as $with_id) {
    $isClash=-1;
    $stmt_for_clash = $conn->prepare("SELECT * FROM Events WHERE initiator_id = ? and date = ? and status = 1");
    $stmt_for_clash->bind_param("is" ,$initiator_id , $date);
    $stmt_for_clash->execute();

    $result_for_clash = $stmt_for_clash->get_result();
    if($result_for_clash->num_rows>0)
    {
      while($row_for_clash = $result_for_clash->fetch_assoc())
      {
        if(($time_slot_start >= $row_for_clash['start_slot_id'] && $time_slot_start <= $row_for_clash['end_slot_id']) || ($time_slot_end >= $row_for_clash['start_slot_id'] && $time_slot_end <= $row_for_clash['end_slot_id']))
        {
          $isClash = 1;
        }
      }
    }

    $stmt_for_clash = $conn->prepare("SELECT * FROM Events WHERE with_id = ? and date = ? and status = 1");
    $stmt_for_clash->bind_param("is" , $initiator_id, $date);
    $stmt_for_clash->execute();

    $result_for_clash = $stmt_for_clash->get_result();
    if($result_for_clash->num_rows>0)
    {
      while($row_for_clash = $result_for_clash->fetch_assoc())
      {
        if(($time_slot_start >= $row_for_clash['start_slot_id'] && $time_slot_start <= $row_for_clash['end_slot_id']) || ($time_slot_end >= $row_for_clash['start_slot_id'] && $time_slot_end <= $row_for_clash['end_slot_id']))
        {
          $isClash = 1;
        }
      }
    }
    $timestamp = strtotime($date);
    $day = date('l',$timestamp);

    $stmt_for_clash = $conn->prepare("SELECT * FROM LectureSchedule join Takes using(course_id,year,semester) WHERE faculty_id = ? and day = ?");
    $stmt_for_clash->bind_param("is" ,$initiator_id , $day);
    $stmt_for_clash->execute();

    $result_for_clash = $stmt_for_clash->get_result();
    if($result_for_clash->num_rows>0)
    {
      while($row_for_clash = $result_for_clash->fetch_assoc())
      {
        if(($time_slot_start >= $row_for_clash['start_slot_id'] && $time_slot_start <= $row_for_clash['end_slot_id']) || ($time_slot_end >= $row_for_clash['start_slot_id'] && $time_slot_end <= $row_for_clash['end_slot_id']))
        {
          $isClash = 1;
        }
      }
    }
    if($isClash == -1)
    {
      $stmt = $conn->prepare("INSERT INTO Events values(?,?,'meeting',?,?,?,?,?,0,CURRENT_TIMESTAMP)");
      $stmt->bind_param("iiiiiss",$initiator_id,$with_id,$time_slot_start,$time_slot_end,$room_no,$date,$agenda);
      $stmt->execute();
    }
    else {
      $_SESSION['EventClash'] = "There are clashing events in your time table hence your request couldn't be processed. Try some other time.";
    }

  }
  header("location: set_up_new_meeting.php");
}

?>
