<?php 
    $LoginData = $link->query("SELECT * FROM `cpanel` WHERE `username` = '".$_SESSION['username']."'");
	$LoginRows = @mysqli_fetch_assoc($LoginData);
?>	
<!--Header-part-->
<div id="header">
  <h1><a href="#">Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->

<!--close-top-Header-messaages-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse"><ul class="nav">
    <li class="" ><a title="" href="profile"><i class="icon icon-user"></i> <span class="text"><?php echo $LoginRows['name']; ?></span></a></li>
    <li class=""><a title="" href="logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>


<!--close-top-Header-menu-

            
		<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-home"></i> Menu</a><ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a></li>
    <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a></li> 
	
    <li> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
	<li class="submenu"><a href="#"><i class="icon icon-tint"></i> <span>Sub Menu</span></a>
	    <ul>
			<li class="submenu"><a href="#">Sub Menu 2</a>
			    <ul>
				    <li><a href="gallery.html">Gallery 2</a></li>
			        <li><a href="calendar.html">Calendar 2</a></li>
			        <li><a href="chat.html">Chat option 2</a></li>
			        <li><a href="chat.html">Chat option 2</a></li>
				</ul>
			</li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="calendar.html">Calendar</a></li>
			<li><a href="chat.html">Chat option</a></li>
			<li><a href="chat.html">Chat option</a></li>
      </ul>
	</li>
  </ul>
		
		</div>
	-->
	
<!-- menu -------------------------------------------------------------------------------------------------------------->
<div id='cssmenu'>
<ul>
    <li><a href="index.html"><i class="icon icon-home"></i> Dashboard</a>
        <ul>
		    <li><a href="user_login">Admin Login</a></li>
		    <li><a href="profile">Admin Profile</a></li>
		</ul>   
    </li>
	
    <li class='active'><a href='#'><i class="icon icon-user"></i> Master</a>
        <ul>
            <li><a href="mst_unit">Add Unit</a></li>
            <li><a href="mst_camp">Add Camp</a></li>
            <li><a href="mst_rank">Add Rank</a></li>
            <li><a href="mst_designation">Add Designation</a></li>
            <li><a href="mst_vehicle">Add Vehicle</a></li>
			
            <li><a href="#">Profile</a>
			    <ul>
				    <li><a href="mst_edu_qli">Add Educational Qualification</a></li>
				    <li><a href="mst_languages">Add languages</a></li>
				    <li><a href="mst_spl_train">Add Special Training</a></li>
				    <li><a href="mst_extra_curr_acti">Add Extra Curricular Activities</a></li>
				    <li><a href="mst_name_spl_trning">Add Name of Special Training</a></li>
				    <li><a href="mst_type_spl_training">Add Type of Special Training</a></li>
				    <li><a href="mst_reward">Add Reward For</a></li>
				    <li><a href="mst_reward_type">Add Reward Type</a></li>
				    <li><a href="mst_punishment">Add Punishment</a></li>
				    <li><a href="mst_computer">Add Computer Couse</a></li>
				</ul>
			</li>
			
            <li><a href="mst_welfare">Add Welfare Measure</a></li>
            <li><a href="all_unit_login">All Units Login</a></li>
            <li><a href="#">Stop Profile</a></li>
            <li><a href="#">Delete Profile</a></li>
        </ul>
    </li>
	
	
    <li class='active'><a href='#'><i class="icon icon-list"></i> Profile</a>
        <ul>
		    <li><a href="add_profile">Add Profile</a></li>
			<li><a href="view_profile">Edit Profile</a></li>
			
		</ul>
    </li>
    <li class='active'><a href="force_reporting"><i class="icon icon-edit"></i> Officer &amp; Force Reporting</a></li>
    <li class='active'><a href="#"><i class="icon icon-calendar"></i>Duty Detailment</a>
	<ul>
		    
			<li><a href="duty">Duty Detailment</a></li>
			<li><a href="print_cc">Print CC</a></li>
			
		</ul>
	</li>
    <li class='active'><a href="#"><i class="icon icon-plane"></i> Vehicles</a>
	<ul>
		    <li><a href="vehicle">Vehicles Management</a></li>
		    <li><a href="vehicle_record">Vehicle Records</a></li>
	</ul>
	</li>
    <li class='active'><a href="leave"><i class="icon icon-road"></i> Leave Registration</a></li>
    <li class='active'><a href="message"><i class="icon icon-comment"></i> Message</a></li>
	 
    <li class='active'><a href="#"><i class="icon icon-book"></i> Report</a>
	    <ul>
		    <li><a href="report">Profile</a></li>
		    <li><a href="report">Profile with posting details</a></li>
		    <li><a href="report">Profile with duty details</a></li>
		    <li><a href="report">Profile with posting &amp; duty details</a></li>
		    <li><a href="report">Posting details</a></li>
		    <li><a href="report">Duty details</a></li>
		    <li><a href="report">Posting &amp; duty details</a></li>
		    <li><a href="report?cat=dist">District overview (as on)</a></li>
		    <li><a href="report">Unit overview (as on)</a></li>
		    <li><a href="report">Welfare Overview</a>
			    <ul>
				    <li><a href="report">District overview (at a glance)</a></li>
				    <li><a href="report">Unit wise overview</a></li>
				    <li><a href="report">WBHS' o8 done</a></li>
				    <li><a href="report">Mediclaim done</a></li>
				    <li><a href="report">Mandatory health check-up done</a></li>
				</ul>
			</li>
		    <li><a href="report">Force overview</a></li>
		</ul>
	</li>
	
	
    <li class='active'><a href="search"><i class="icon icon-search"></i> Search</a>
	   <!-- <ul>
		    <li><a href="session.php?key=designation">Designation</a></li>
		    <li><a href="session.php?key=qualification">Educational Qualification</a></li>
		    <li><a href="session.php?key=course">Knowledge of Computer</a></li>
		    <li><a href="session.php?key=english" title="Ability in reading and writing in English">Ability in R / W in English</a></li>
		    <li><a href="session.php?key=other">Ability in Reading/Writing</a></li>
		    <li><a href="session.php?key=typing">Ability in Typing</a></li>
		    <li><a href="session.php?key=extra">Extra Curricular Activities</a></li>
		    <li><a href="session.php?key=training">Special Training</a></li>
		    <li><a href="session.php?key=check_up">Mandatory Health Check-up</a></li>
		</ul> -->
	</li>
</ul>
</div>	
<!-- menu -------------------------------------------------------------------------------------------------------------->	
