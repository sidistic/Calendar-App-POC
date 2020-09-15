<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Event</title>
    <!-- Meta Tags -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script>
  function hideShowEditForm(rowid)
  {
    // document.write(rowid);
    if(document.getElementById("edit" + rowid).checked)
    {

      // document.getElementById("type" + rowid).style.display='none';
      // document.getElementById("typeform" + rowid).style.display='';
      document.getElementById("description" + rowid).style.display='none';
      document.getElementById("descriptionform" + rowid).style.display='';
      // document.getElementById("name" + rowid).style.display='none';
      // document.getElementById("nameform" + rowid).style.display='';
      document.getElementById("room_id" + rowid).style.display='none';
      document.getElementById("room_idform" + rowid).style.display='';
      document.getElementById("date" + rowid).style.display='none';
      document.getElementById("dateform" + rowid).style.display='';
      document.getElementById("start_slot_id" + rowid).style.display='none';
      document.getElementById("start_slot_idform" + rowid).style.display='';
      document.getElementById("end_slot_id" + rowid).style.display='none';
      document.getElementById("end_slot_idform" + rowid).style.display='';
      // document.getElementById("status" + rowid).style.display='none';
    }
    else {
      // document.getElementById("type" + rowid).style.display='';
      // document.getElementById("typeform" + rowid).style.display='none';
      document.getElementById("description" + rowid).style.display='';
      document.getElementById("descriptionform" + rowid).style.display='none';
      // document.getElementById("name" + rowid).style.display='';
      // document.getElementById("nameform" + rowid).style.display='none';
      document.getElementById("room_id" + rowid).style.display='';
      document.getElementById("room_idform" + rowid).style.display='none';
      document.getElementById("date" + rowid).style.display='';
      document.getElementById("dateform" + rowid).style.display='none';
      document.getElementById("start_slot_id" + rowid).style.display='';
      document.getElementById("start_slot_idform" + rowid).style.display='none';
      document.getElementById("end_slot_id" + rowid).style.display='';
      document.getElementById("end_slot_idform" + rowid).style.display='none';
    }
  }

  function hidePastTime(slno , timeslot)
  {
    // document.write(timeslot);
    var i;
    var t = timeslot;
    for(i=1;i<=48;i++)
    {
      if(i <= timeslot)
      {
        document.getElementById("endtime" + i + "@" + slno).style.display="none";
      }
      else {
        document.getElementById("endtime" + i + "@" + slno).style.display="";
      }
    }
    document.getElementById("end_slot_idform@" + slno).options[t].selected=true;
  }

  </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width:100%;
    text-align: center;
    margin-bottom: 10px;
}
td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    text-align: center;
}
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    background-color: blue;
    text-align: center;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.html">Timekeeper</a>
                </h1>
                <span>T</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="index.html">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="schedule.php">
                        <i class="fa fa-calendar"></i>
                        View Schedule
                    </a>
                </li>
                <li>
                    <a href="mailbox.php">
                        <i class="far fa-envelope"></i>
                        Messages
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu8" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-map-signs" ></i>
                        Event
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu8">
                        <li>
                            <a href="add_personal_event.php">Add Personal Event</a>
                        </li>
                        <li>
                            <a href="edit_event.php">Edit Event</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-handshake-o" ></i>
                        Meeting
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="set_up_new_meeting.php">Setup Meeting</a>
                        </li>
                        <li>
                            <a href="accept_decline_events.php">Accept/Reject Meeting</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Club
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                        <li>
                            <a href="join_club.php">Join</a>
                        </li>
                        <li>
                            <a href="leave_club.php">Leave</a>
                        </li>
                        
                        <li>
                            <a href="remove_student_from_club.php">Remove from club</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <h2 style="text-align:center;">Dashboard</h2>
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <span class="badge">4</span>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                <h3 class="sub-title-w3-agileits">User notifications</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">John Doe</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>4 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Diana</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>6 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Steffie</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>12 mins ago</h6>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                    <div class="notif-content-wthree">
                                        <p class="paragraph-agileits-w3layouts py-2">
                                            <span class="text-diff">Jack</span> Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <h6>1 days ago</h6>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">view all notifications</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                   <!--  <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">Will Smith</h3>
                                        <a href="mailto:info@example.com">userid or someting</a>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-envelope mr-3"></i>Messages</h4>
                                </a>
                                <a href="#" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-question-circle mr-3"></i>Faq</h4>
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../index.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
            <div class="container-fluid">

                <div class="row">
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl" style="overflow: scroll;">
                        <?php

    function returnTime($val)
    {
      if($val == 1)
      {
        $z = "00:00";
        return $z;
      }
      if($val == 2)
      {
        $z = "00:30";
        return $z;
      }
      if($val == 3)
      {
        $z = "01:00";
        return $z;
      }
      if($val == 4)
      {
        $z = "01:30";
        return $z;
      }
      if($val == 5)
      {
        $z = "02:00";
        return $z;
      }
      if($val == 6)
      {
        $z = "02:30";
        return $z;
      }
      if($val == 7)
      {
        $z = "03:00";
        return $z;
      }
      if($val == 8)
      {
        $z = "03:30";
        return $z;
      }
      if($val == 9)
      {
        $z = "04:00";
        return $z;
      }
      if($val == 10)
      {
        $z = "04:30";
        return $z;
      }
      if($val == 11)
      {
        $z = "05:00";
        return $z;
      }
      if($val == 12)
      {
        $z = "05:30";
        return $z;
      }
      if($val == 13)
      {
        $z = "06:00";
        return $z;
      }
      if($val == 14)
      {
        $z = "06:30";
        return $z;
      }
      if($val == 15)
      {
        $z = "07:00";
        return $z;
      }
      if($val == 16)
      {
        $z = "07:30";
        return $z;
      }
      if($val == 17)
      {
        $z = "08:00";
        return $z;
      }
      if($val == 18)
      {
        $z = "08:30";
        return $z;
      }
      if($val == 19)
      {
        $z = "09:00";
        return $z;
      }
      if($val == 20)
      {
        $z = "09:30";
        return $z;
      }
      if($val == 21)
      {
        $z = "10:00";
        return $z;
      }
      if($val == 22)
      {
        $z = "10:30";
        return $z;
      }
      if($val == 23)
      {
        $z = "11:00";
        return $z;
      }
      if($val == 24)
      {
        $z = "11:30";
        return $z;
      }
      if($val == 25)
      {
        $z = "12:00";
        return $z;
      }
      if($val == 26)
      {
        $z = "12:30";
        return $z;
      }
      if($val == 27)
      {
        $z = "13:00";
        return $z;
      }
      if($val == 28)
      {
        $z = "13:30";
        return $z;
      }
      if($val == 29)
      {
        $z = "14:00";
        return $z;
      }
      if($val == 30)
      {
        $z = "14:30";
        return $z;
      }
      if($val == 31)
      {
        $z = "15:00";
        return $z;
      }
      if($val == 32)
      {
        $z = "15:30";
        return $z;
      }
      if($val == 33)
      {
        $z = "16:00";
        return $z;
      }
      if($val == 34)
      {
        $z = "16:30";
        return $z;
      }
      if($val == 35)
      {
        $z = "17:00";
        return $z;
      }
      if($val == 36)
      {
        $z = "17:30";
        return $z;
      }
      if($val == 37)
      {
        $z = "18:00";
        return $z;
      }
      if($val == 38)
      {
        $z = "18:30";
        return $z;
      }
      if($val == 39)
      {
        $z = "19:00";
        return $z;
      }
      if($val == 40)
      {
        $z = "19:30";
        return $z;
      }
      if($val == 41)
      {
        $z = "20:00";
        return $z;
      }
      if($val == 42)
      {
        $z = "20:30";
        return $z;
      }
      if($val == 43)
      {
        $z = "21:00";
        return $z;
      }
      if($val == 44)
      {
        $z = "21:30";
        return $z;
      }
      if($val == 45)
      {
        $z = "22:00";
        return $z;
      }
      if($val == 46)
      {
        $z = "22:30";
        return $z;
      }
      if($val == 47)
      {
        $z = "23:00";
        return $z;
      }
      if($val == 48)
      {
        $z = "23:30";
        return $z;
      }


    }

    session_start();
    include('db_config.php');

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("SELECT * FROM Events WHERE initiator_id = ?");

    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0)
    {
      echo "<form action=\"change_event_table.php\" method=\"post\">";
      echo "<input type=\"hidden\" name=\"num_of_rows\" value=" . $result->num_rows ." >";
      echo "<table title =\"Event Table\">
      <tr>
        <th>Type</th>
        <th>Description</th>
        <th>With</th>
        <th>Room Number</th>
        <th>Day</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
      <tr>";
      $slno = 1;
      while($row = $result->fetch_assoc())
      {
        // <td id =\"typeform" . $slno ."\" style=\"display: none;\"><input type=\"text\" name=\"type" . $slno . "\" value = \"" . $row['type'] . "\"></td>
        echo "<tr id =\"" . $slno ."\">
          <td id =\"type" . $slno ."\">" . $row['type'] . "</td>
          <td id =\"description" . $slno ."\">" . $row['description'] . "</td>
          <td id =\"descriptionform" . $slno ."\" style=\"display: none;\"><input type=\"text\" name=\"description" . $slno . "\" value = \"" . $row['description'] . "\"></td>";
          echo "<input type=\"hidden\" name=\"htype" . $slno ."\" value =\"". $row['type'] . "\" >";
          echo "<input type=\"hidden\" name=\"hdescription" . $slno ."\" value =\"". $row['description'] . "\" >";
          echo "<input type=\"hidden\" name=\"hwith_id" . $slno ."\" value =\"". $row['with_id'] . "\" >";


          if($row['type'] == "personal")
          {
            echo "<td id =\"name" . $slno ."\">Myself</td>";
          }
          else {
            $stmt_for_name = $conn->prepare("SELECT * FROM Student WHERE user_id = ?");
            $stmt_for_name->bind_param("i", $row['with_id']);
            $stmt_for_name->execute();
            $result_for_name = $stmt_for_name->get_result();
            if($result_for_name->num_rows > 0)
            {
              $row_for_name = $result_for_name->fetch_assoc();
              echo "<td id =\"name" . $slno ."\">" . $row_for_name['name'] . "</td>";
              // <td id =\"nameform" . $slno ."\" style=\"display: none;\"><input type=\"text\" name=\"name" . $slno . "\" value = \"" . $row_for_name['name'] . "\"></td>";
              // echo "<input type=\"hidden\" name=\"hname" . $slno ."\" value =\"". $row_for_name['name'] . "\" >";
            }

            $stmt_for_name = $conn->prepare("SELECT * FROM Faculty WHERE user_id = ?");
            $stmt_for_name->bind_param("i", $row['with_id']);
            $stmt_for_name->execute();
            $result_for_name = $stmt_for_name->get_result();
            if($result_for_name->num_rows > 0)
            {
              $row_for_name = $result_for_name->fetch_assoc();
              echo "<td id =\"name" . $slno ."\">" . $row_for_name['faculty_name'] . "</td>";
              // <td id =\"nameform" . $slno ."\" style=\"display: none;\"><input type=\"text\" name=\"name" . $slno . "\" value = \"" . $row['faculty_name'] . "\"></td>";
              // echo "<input type=\"hidden\" name=\"hname" . $slno ."\" value =\"". $row['faculty_name'] . "\" >";
            }
          }

          echo "<td id =\"room_id" . $slno ."\">" . $row['room_id'] . "</td>
          <td id =\"room_idform" . $slno ."\" style=\"display: none;\"><input type=\"number\" name=\"room_id" . $slno . "\" value = \"" . $row['room_id'] . "\"></td>
          <td id =\"date" . $slno ."\">" . $row['date'];
          $timestamp = strtotime($row['date']);
          $day = date('l',$timestamp);
          echo " | $day </td>
          <td id =\"dateform" . $slno . "\" style=\"display: none;\">
            <input type=\"date\" name=\"date" . $slno . "\">
          </td>
          <td id =\"start_slot_id" . $slno ."\">" . returnTime($row['start_slot_id']) . "</td>";
          // <td id =\"start_slot_idform" . $slno ."\" style=\"display: none;\"><input type=\"number\" name=\"start_slot_id" . $slno . "\" value = \"" . $row['start_slot_id'] . "\"></td>";
          echo "<td id =\"start_slot_idform" . $slno ."\" style=\"display: none;\">
          <select name=\"start_slot_id$slno\" onchange=\"hidePastTime($slno,this.value)\">
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
          </td>
          <td id=\"end_slot_idform$slno\" style=\"display: none;\">
          <select name=\"end_slot_id$slno\" id=\"end_slot_idform@$slno\">
            <option value=1 id=\"endtime1@$slno\"> 00:00 </option>
            <option value=2 id=\"endtime2@$slno\"> 00:30 </option>
            <option value=3 id=\"endtime3@$slno\"> 01:00 </option>
            <option value=4 id=\"endtime4@$slno\"> 01:30 </option>
            <option value=5 id=\"endtime5@$slno\"> 02:00 </option>
            <option value=6 id=\"endtime6@$slno\"> 02:30 </option>
            <option value=7 id=\"endtime7@$slno\"> 03:00 </option>
            <option value=8 id=\"endtime8@$slno\"> 03:30 </option>
            <option value=9 id=\"endtime9@$slno\" > 04:00 </option>
            <option value=10 id=\"endtime10@$slno\"> 04:30 </option>
            <option value=11 id=\"endtime11@$slno\"> 05:00 </option>
            <option value=12 id=\"endtime12@$slno\"> 05:30 </option>
            <option value=13 id=\"endtime13@$slno\"> 06:00 </option>
            <option value=14 id=\"endtime14@$slno\"> 06:30 </option>
            <option value=15 id=\"endtime15@$slno\"> 07:00 </option>
            <option value=16 id=\"endtime16@$slno\"> 07:30 </option>
            <option value=17 id=\"endtime17@$slno\"> 08:00 </option>
            <option value=18 id=\"endtime18@$slno\"> 08:30 </option>
            <option value=19 id=\"endtime19@$slno\"> 09:00 </option>
            <option value=20 id=\"endtime20@$slno\"> 09:30 </option>
            <option value=21 id=\"endtime21@$slno\"> 10:00 </option>
            <option value=22 id=\"endtime22@$slno\"> 10:30 </option>
            <option value=23 id=\"endtime23@$slno\"> 11:00 </option>
            <option value=24 id=\"endtime24@$slno\"> 11:30 </option>
            <option value=25 id=\"endtime25@$slno\"> 12:00 </option>
            <option value=26 id=\"endtime26@$slno\"> 12:30 </option>
            <option value=27 id=\"endtime27@$slno\"> 13:00 </option>
            <option value=28 id=\"endtime28@$slno\"> 13:30 </option>
            <option value=29 id=\"endtime29@$slno\"> 14:00 </option>
            <option value=30 id=\"endtime30@$slno\"> 14:30 </option>
            <option value=31 id=\"endtime31@$slno\"> 15:00 </option>
            <option value=32 id=\"endtime32@$slno\"> 15:30 </option>
            <option value=33 id=\"endtime33@$slno\"> 16:00 </option>
            <option value=34 id=\"endtime34@$slno\"> 16:30 </option>
            <option value=35 id=\"endtime35@$slno\"> 17:00 </option>
            <option value=36 id=\"endtime36@$slno\"> 17:30 </option>
            <option value=37 id=\"endtime37@$slno\"> 18:00 </option>
            <option value=38 id=\"endtime38@$slno\"> 18:30 </option>
            <option value=39 id=\"endtime39@$slno\"> 19:00 </option>
            <option value=40 id=\"endtime40@$slno\"> 19:30 </option>
            <option value=41 id=\"endtime41@$slno\"> 20:00 </option>
            <option value=42 id=\"endtime42@$slno\"> 20:30 </option>
            <option value=43 id=\"endtime43@$slno\"> 21:00 </option>
            <option value=44 id=\"endtime44@$slno\"> 21:30 </option>
            <option value=45 id=\"endtime45@$slno\"> 22:00 </option>
            <option value=46 id=\"endtime46@$slno\"> 22:30 </option>
            <option value=47 id=\"endtime47@$slno\"> 23:00 </option>
            <option value=48 id=\"endtime48@$slno\"> 23:30 </option>
          </select>
          </td>";
          echo "<td id =\"end_slot_id" . $slno ."\">" . returnTime($row['end_slot_id']) . "</td>";
          // <td id =\"end_slot_idform" . $slno ."\" style=\"display: none;\"><input type=\"number\" name=\"end_slot_id" . $slno . "\" value = \"" . $row['end_slot_id'] . "\"></td>";
          echo "<input type=\"hidden\" name=\"hroom_id" . $slno ."\" value =\"". $row['room_id'] . "\" >";
          echo "<input type=\"hidden\" name=\"hdate" . $slno ."\" value =\"". $row['date'] . "\" >";
          echo "<input type=\"hidden\" name=\"hstart_slot_id" . $slno ."\" value =\"". $row['start_slot_id'] . "\" >";
          echo "<input type=\"hidden\" name=\"hend_slot_id" . $slno ."\" value =\"". $row['end_slot_id'] . "\" >";
        if($row['status'] == 0)
        {
          echo "<td id =\"status" . $slno ."\">NOT YET ACCEPTED</td>";
        }
        else {
          echo "<td id =\"status" . $slno ."\">ACCEPTED</td>";
        }
        echo "<td><input id=\"edit". $slno . "\" type=\"checkbox\" name=\"edit" . $slno ."\" onclick=hideShowEditForm('" . $slno . "') value=\"yes\" ></td>";
        echo "<td><input type=\"checkbox\" name=\"delete" . $slno ."\" value=\"yes\"></td>";
        echo "<input type=\"hidden\" name=\"hstatus" . $slno ."\" value =\"". $row['status'] . "\" >";
        echo "<input type=\"hidden\" name=\"htime" . $slno ."\" value =\"". $row['time_of_setup'] . "\" >";
        echo "</tr>";
        //for form, hidden inputs
        $slno++;
      }
      echo "</table>";
      echo "<input type=\"submit\" value=\"Make Changes\">";
      echo "</form>";
    }
    else {
      echo "<h2> You haven't set up any events yet </h2>";
    }

    ?>
    </form>
                    </div>
                </div>
            </div>
            
            <!--// three-grids -->
           
            <!-- Copyright -->
            <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                <p>© 2018 Timekeeper . All Rights Reserved | Design by Timekeeper team
                </p>
            </div>
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="js/script.js"></script>
    <!--// profile-widget-dropdown js-->

    

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>