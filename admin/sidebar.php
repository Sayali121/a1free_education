<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>  
	
	<!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABC</div>
                    <div class="email">abc@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profile.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
         
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
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
                        <a data-toggle="tab" href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle" data-toggle="tab">
                            <i class="material-icons">person</i>
                            <span>Students</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a data-toggle="tab" href="add_student.php">Add Students</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="view_student.php">View Students</a>
                            </li>
                          
                        </ul>
                    </li>
					<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">class</i>
                            <span>Class</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="add_class.php">Add Classes</a>
                            </li>
                            <li>
                                <a href="view_student.php">View Classes</a>
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
	</html>