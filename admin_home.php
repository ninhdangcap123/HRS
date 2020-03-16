<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Ninh's</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		<?php include"navbar.php";?><br>
			
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > Staff Management System Info</h3><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						FPT Co. is aiming tod evelop a system that promotes the continuing study environment throughout both the educational system and the corporate system <br>
						This application is developed based on Web-based technological system which is intended to manage the
						operation of the internal training program for the employees of the Fpt company. It will be mostly used by the Human Resources department.
					</p>
					
					<p class="para">
						This system can be used for account management trainee,management faculty, portfolio management courses, management courses, management topics, assigned topics for the course, assignment of teaching the theme park division of trainees.
					</p>
				</div>
				
			</div>
	
		<?php include"footer.php";?>
	</body>
</html>