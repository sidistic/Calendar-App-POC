<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>Setup Meeting</title>
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
    <!-- //Meta Tags -->
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
    width:70%; margin-left:15%; margin-right:15%;
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
                        <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
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

                <div class="row" >
                    <!-- Stats -->
                    <div class="outer-w3-agile col-xl" >
                        <center>
    <form action = "add_meeting_to_db.php" method="post">
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

        $stmt = $conn->prepare("SELECT * FROM Faculty WHERE not user_id = ?");

        $stmt->bind_param("i",$user_id);

        $user_id= $_SESSION['user_id'];

        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc())
          {
            echo "<option value=" . $row['user_id'] . ">" . $row['faculty_name'] . "</option>";
          }
        }

        ?>
      </select>
      <br><div class="form-group ">
      <label class="control-label col-sm-2" for="description">
       Agenda
      </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-edit">
         </i>
        </div>
        <input class="form-control" name="description" required placeholder="Describe event" type="text"/>
       </div>
      </div>
     </div>
      <br>
      Start Time Slot<br>
      <select name="time_slot_start" style="width: auto !important;
    min-width: 120px;"
onchange="hidePastTime(this.value)" class="custom-select">
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
      End Time Slot<br>
      <select name="time_slot_end" id="time_slot_end" style="width: auto !important;
    min-width: 120px;" class="custom-select">
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
      <div class="form-group ">
      <label class="control-label col-sm-2" for="date">
       Date
      </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" required placeholder="DD/MM/YYYY" type="Date" data-date-inline-picker="true"/>
       </div>
      </div>
     </div>
     <script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
      <br>
      <select name="room" style="width: auto !important;
    min-width: 120px;" class="custom-select">
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
      <input type="submit" value="Set Up" class="btn btn-primary ">
    </form>
    <?php
    if(isset($_SESSION['MeetingClash']))
    {
      echo "<h3>" .$_SESSION['MeetingClash'] . "</h3>";
      unset($_SESSION['MeetingClash']);
    }
    ?>
  </center>
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