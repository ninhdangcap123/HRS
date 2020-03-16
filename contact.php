<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Staff Management System </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
	
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					Ninh's Staff Management System<BR>
					Ha Noi , Viet Nam<BR>
					XXXXXXXXXXXXXXXXXXXXXXXXXXXx<BR>
					XXXXXXXXXXXXXXXXXXXXXXxx<BR>
					Mail - ninhnhcgch18376@fpt,edu.vn<br>Phone - 12345-67890
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>Copyright &copy; Ninh's </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>