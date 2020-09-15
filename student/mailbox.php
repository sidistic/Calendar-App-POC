<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Messages</title>
    <!-- Meta Tags -->
    <link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css1/util.css">
    <link rel="stylesheet" type="text/css" href="css1/main.css">


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
<body>
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

            <!-- Inbox Page -->
            <!-- Inbox topnav -->
            <nav class="inbox-nav-w3ls p-3 bg-dark text-white">
                <div class="row">
                    <div class="inbox-topl col-6">
                        <ul class="d-flex justify-content-between">
                            <li>
                                <a href="#" class="email-menu">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="email-type"><?php
                                session_start();
  include('db_config.php');
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM message where to_id=?");

    $stmt->bind_param("i",$user_id);
$username=$_SESSION['user_name'];
    $user_id= $_SESSION['user_id'];
    echo $username ;?></a>
                            </li>
                            <li class="right">
                                <a href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="inbox-topr col-6">
                        <ul class="right d-flex justify-content-end">
                            <li> Compose New Message
                                <a href="add_message_to_db.php" onclick="document.getElementById('myPopup').style.display='block'" >
                                    <i class="fas fa-edit fa-lg"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
                  <div>
                                            <div class="contact1" id="myPopup" style="display: none; position: absolute; z-index: 1;">
                                              <button onclick="document.getElementById('myPopup').style.display='none'" >  <i class="fa fa-close" style="font-size:48px;color:red"></i></button>
                                        <div class="container-contact1" >
                                            <div class="contact1-pic js-tilt" data-tilt>
                                                <img src="images1/img-01.png" alt="IMG">
                                            </div>

                                            <form  method="post" action="add_message_to_db.php" class="contact1-form validate-form">
                                                <span class="contact1-form-title">
                                                    Message
                                                </span>

                                                <div class="wrap-input1 validate-input" data-validate = "Name is required">
                                                    <input class="input1" type="text" name="to_id" placeholder="Reciever's User ID">
                                                    
                                                    <span class="shadow-input1"></span>
                                                </div>

                                                <div class="wrap-input1 validate-input" data-validate = "Message is required">
                                                    <textarea class="input1" name="body" placeholder="Message"></textarea>
                                                    <span class="shadow-input1"></span>
                                                </div>

                                                <div class="container-contact1-form-btn">
                                                    <input type="submit" value ="Send Message" class="contact1-form-btn">
                                                        
                                                </div>
                                            </form>
                                        </div>
                                    </div>




                                <!--===============================================================================================-->
                                    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
                                <!--===============================================================================================-->
                                    <script src="vendor/bootstrap/js/popper.js"></script>
                                    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
                                <!--===============================================================================================-->
                                    <script src="vendor/select2/select2.min.js"></script>
                                <!--===============================================================================================-->
                                    <script src="vendor/tilt/tilt.jquery.min.js"></script>
                                    <script >
                                        $('.js-tilt').tilt({
                                            scale: 1.1
                                        })
                                    </script>

                                <!-- Global site tag (gtag.js) - Google Analytics -->
                                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
                                <script>
                                  window.dataLayer = window.dataLayer || [];
                                  function gtag(){dataLayer.push(arguments);}
                                  gtag('js', new Date());

                                  gtag('config', 'UA-23581568-13');
                                </script>

                                <!--===============================================================================================-->
                                    <script src="js1/main.js"></script>














            <!-- Inbox topnav -->

            <!-- Inbox content -->
            <!--// Inbox content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="index-lcontent col-xl-6">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- left-strip -->
                                
                                <!-- //left-strip -->

                                <!-- right-strip -->

                                <!-- right-strip -->
                            </div>
                        </div>
                    </div>
                    <ul>
                        <div class="index-rcontent col-xl-12 mt-xl-0 mt-8">
                            <?php

  

    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        echo "
                        <li>
                            
                                <div class=\"outer-w3-agile\">
                                    <div class=\"email-content-wrap\">
                                        <div class=\"row\">
                                            <div class=\"col-9\">
                                                <ul class=\"collection\">
                                                    <li class=\"collection-item selected d-flex justify-content-between\">
                                                        <div class=\"mid-cn\">
                                                            <span class=\"email-title\">".$row['from_id']."</span>
                                                            <br>
                                                            <small class=\"text-primary\">".$row['time']."</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-3 email-actions d-flex justify-content-end\">
                                                <a href=\"#\" class=\"mr-4\">
                                                    <i class=\"fas fa-trash-alt\"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"email-content\">
                                            <p class=\"paragraph-agileits-w3layouts font-weight-normal\">".$row['body']."</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            

                        </li>";
                        }
                    }?>
                    </div>
                    </ul>
                </div>
            </div>
            <!--// Inbox Page -->
           </div>
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

