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
  $initiator_id = $_SESSION['user_id'];
  $num_of_rows = $_POST['num_of_rows'];

  for($slno = 1 ; $slno <= $num_of_rows ; $slno++)
  {
    if(isset($_POST['edit' . $slno]))
    {
      echo "yes at $slno";
      $with_id = $_POST['hwith_id' . $slno];
      $type = $_POST['htype' . $slno];
      $description = $_POST['hdescription' . $slno];
      $start_slot_id = $_POST['hstart_slot_id' . $slno];
      $end_slot_id = $_POST['hend_slot_id' . $slno];
      $room_id = $_POST['hroom_id' . $slno];
      $date = $_POST['hdate' . $slno];
      $status = $_POST['hstatus' . $slno];
      $time_of_setup = $_POST['htime' . $slno];

      $new_description = $_POST['description' . $slno];
      $new_start_slot_id = $_POST['start_slot_id' . $slno];
      $new_stop_slot_id = $_POST['end_slot_id' . $slno];
      $new_room_id = $_POST['room_id' . $slno];
      $new_date = $_POST['date' . $slno];
      echo "$with_id   , $type  ,$description  ,$start_slot_id  ,$end_slot_id,   $room_id $day ,  $status  ,$time_of_setup , $new_description   ,$new_start_slot_id  , $new_stop_slot_id ,   $new_room_id  , $new_day,";

       $stmt = $conn->prepare("UPDATE Events
                              SET description = ?, start_slot_id = ?, end_slot_id = ?, room_id = ?, date = ?, status = 0
                              WHERE initiator_id = ? and  with_id = ? and time_of_setup=?");
      if($type == 'personal')
      {
        $stmt = $conn->prepare("UPDATE Events
                               SET description = ?, start_slot_id = ?, end_slot_id = ?, room_id = ?, date = ?, status = 1
                               WHERE initiator_id = ? and  with_id = ? and time_of_setup=?");
      }
      $stmt->bind_param("siiisiis",$new_description,$new_start_slot_id,$new_stop_slot_id,$new_room_id,$new_date,$initiator_id,$with_id,$time_of_setup);

      if($stmt->execute())
      {
        echo "Event has been modified";
      }
      else {
        echo "Unable to add to the table. Please contact support if issue persists";
        echo $stmt->error;
      }
    }
    if(isset($_POST['delete'. $slno]))
    {
        $with_id = $_POST['hwith_id' . $slno];
        $type = $_POST['htype' . $slno];
        $description = $_POST['hdescription' . $slno];
        $start_slot_id = $_POST['hstart_slot_id' . $slno];
        $end_slot_id = $_POST['hend_slot_id' . $slno];
        $room_id = $_POST['hroom_id' . $slno];
        $day = $_POST['hday' . $slno];
        $status = $_POST['hstatus' . $slno];
        $time_of_setup = $_POST['htime' . $slno];

        $stmt = $conn->prepare("DELETE FROM Events WHERE initiator_id = ? and with_id = ?  and time_of_setup = ?");
        $stmt->bind_param("iis",$initiator_id,$with_id,$time_of_setup);
        $stmt->execute();

    }
  }
  header("location: edit_event.php");
}

?>

       <!-- $stmt = $conn->prepare("UPDATE Events
                              SET description = ?, start_slot_id = ?, end_slot_id = ?, room_id = ?, day = ?, status = 0
                              WHERE initiator_id = ?, with_id = ?, time_of_setup = ?");
      $stmt->bind_param("siiisiis" ,$new_description,$new_start_slot_id,$new_stop_slot_id,$new_room_id,$new_day,$initiator_id,$with_id,$time_of_setup); -->
