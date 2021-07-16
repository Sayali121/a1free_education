<?php
session_start();
if(!isset($_SESSION['a1free']))
{
    // not logged in
    header('Location: login.php');
    exit();
}
	include('conn.php');
	$u_id=$_GET['u_id'];
	$query=mysqli_query($connection,"select * from `user` where u_id='$u_id'");
	$row=mysqli_fetch_array($query);
	
	$query1=mysqli_query($connection,"select * from `user` as u inner join `course` as c on u.course=c.course_id where u_id='$u_id'");
	$row1=mysqli_fetch_array($query1);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Quiz</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
	
	<link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
		<?php
	include('conn.php');
	
	$query=mysqli_query($connection,"select * from `admin`");
	$row1=mysqli_fetch_array($query);
?>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">QUIZ</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->

                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo $row1['profile_image'];?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row1['name'];?></div>
                    <div class="email"><?php echo $row1['email_id'];?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
         
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
           <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">class</i>
                            <span>Course</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="add_course.php">Add Course</a>
                            </li>
                            <li>
                                <a href="view_course.php">View Course</a>
                            </li>
                          
                        </ul>
                    </li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Students</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="add_student.php">Add Students</a>
                            </li>
                            <li>
                                <a href="view_student.php">View Students</a>
                            </li>
                          
                        </ul>
                    </li>
					
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Subject</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="add_subject.php">Add Subject</a>
                            </li>
                            <li>
                                <a href="view_subject.php">View Subject</a>
                            </li>
                          
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">import_contacts</i>
                            <span>Chapter</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="add_chapter.php">Add Chapter</a>
                            </li>
                            <li>
                                <a href="view_chapter.php">View Chapter</a>
                            </li>
                          
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">priority_high</i>
                            <span>Questions</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="add_question.php">Add Question</a>
                            </li>
                            <li>
                                <a href="view_question.php">View Questions</a>
                            </li>
                          
                        </ul>
                    </li>
                      
</ul>

            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <!--<div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>-->
				<div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Oskar Technology</a>.
                </div>
                
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>


            <section class="content">
        <div class="container-fluid">
            
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form method="POST" action="update_student.php?u_id=<?php echo $u_id; ?>" >
				<div class="block-header">
                <h2>View Students</h2>
            </div>
			
	
				                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                           <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="u_name" value="<?php echo $row['u_name'];?>">
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
								 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="u_surname" value="<?php echo $row['u_surname'];?>">
                                        <label class="form-label">Surname</label>
                                    </div>
                                </div>
                        </div>
                        <div class="body">
                           <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="contact_no" value="<?php echo $row['contact_no'];?>">
                                        <label class="form-label">Contact No</label>
                                    </div>
                                </div>
						  <div class="form-group form-float">
                                    <select name="course" class="form-control">
    <option disabled>Please Select Course</option>
    <?php
        include "conn.php";  
        $records = mysqli_query($connection, "SELECT * From course");  

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['course_id'] ."'>" .$data['course_name'] ."</option>";  
        }	
    ?>  
  </select>
                                </div>
								 <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="unique_id" value="<?php echo $row['unique_id'];?> " disabled>
                                        <label class="form-label">User ID</label>
                                    </div>
                                </div>
						   
							 <center><input class="btn btn-sm btn-primary" type="submit" name="submit"></center>
                        </div>
						
						
                    </div>
                </div>
</form>
</div>
</div>

 

            <!-- #END# Basic Validation -->
    </section>
	
	
	
	

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
 <script src="js/pages/cards/basic.js"></script>
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
