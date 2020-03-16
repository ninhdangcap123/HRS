<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">Staff Management System Information</a></li>
			<li class="li"><a href="add_class.php"> Category </a></li>
			<li class="li"><a href="add_sub.php"> Courses</a></li>

			<li class="li"><a href="add_staff.php"> Staffs</a></li>
			<li class="li"><a href="view_staff.php">View Staffs</a></li>
			<li class="li"><a href="set_exam.php">Set Tasks</a></li>
			<li class="li"><a href="view_exam.php">View Tasks</a></li>
			
			<li class="li"><a href="student.php"target="_blank"> View Trainees</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	elseif(isset($_SESSION["TID"])){
		echo'
			<li class="li"><a href="teacher_home.php">Profile</a></li>
			<li class="li"><a href="handle_class.php"> Assign Category</a></li>
			<li class="li"><a href="add_stud.php"> Trainees</a></li>
			<li class="li"><a href="view_stud_teach.php" target="_blank"> View Trainees</a></li>
			<li class="li"><a href="tech_view_exam.php">View Tasks</a></li>
			<li class="li"><a href="add_mark.php">Add Score</a></li>
			<li class="li"><a href="view_mark.php">View Score</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
	}
	elseif(isset($_SESSION["TrID"])){
		echo'
			<li class="li"><a href="trainee_home.php">Profile</a></li>			
			<li class="li"><a href="trainee_view_task.php">View Tasks</a></li>			
			<li class="li"><a href="trainee_view_score.php">View Score</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
			';


	}


?>
	

</ul>

</div>