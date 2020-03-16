<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["TrID"]))
	{
		echo"<script>window.open('trainee_login.php?mes=Access Denied...','_self');</script>";
		
	}	
	
	
	$sql="SELECT * FROM trainee WHERE ID={$_SESSION["TrID"]}";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
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
					<h3 class="text">Welcome <?php echo $_SESSION["TrNAME"]; ?></h3><br><hr><br>
				<div class="content">
				
					<h3>Edit Profile</h3><br>
					<div class="lbox1">
					<?php
						if(isset($_POST["submit"]))
						{
							$target="student/";
							$target_file=$target.basename($_FILES["img"]["name"]);
							
							if(move_uploaded_file($_FILES['img']['tmp_name'],$target_file))
							{
								$sql="UPDATE trainee SET PHO='{$_POST["pno"]}',MAIL='{$_POST["mail"]}',ADDR='{$_POST["addr"]}',SIMG='{$target_file}'where ID={$_SESSION["TrID"]}";
								$db->query($sql);
								echo "<div class='success'>Insert Success</div>";
							}
							
						}
					
					
					?>			
					
					
					
						
					<form  enctype="multipart/form-data" role="form"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
							<label>  Phone No</label><br>
							<input type="text" maxlength="10" required class="input3" name="pno" placeholder="phoneNo"><br><br>
							<label>  E - Mail</label><br>
							<input type="email"  class="input3" required name="mail" placeholder="email"><br><br>
							<label>  Address</label><br>
							<textarea rows="5" name="addr" placeholder="address"></textarea><br><br>
							<label> Image</label><br>
							<input type="file"  class="input3" required name="img" placeholder="image"><br><br>
						<button type="submit" class="btn" name="submit">Edit Profile Details</button>
						</form>
					</div>
					
					
					
					
					<div class="rbox1">
					<h3> Profile</h3><br>
						<table border="1px">
							<tr><td colspan="2"><img src="<?php echo $row["SIMG"] ?>" height="100" width="100" alt="upload Pending"></td></tr>
							<tr><th>Name </th> <td><?php echo $row["NAME"] ?> </td></tr>
							<tr><th>Relative Name </th> <td><?php echo $row["FNAME"] ?>  </td></tr>
							<tr><th>Date of Birth </th> <td> <?php echo $row["DOB"] ?>  </td></tr>
							<tr><th>Phone No </th> <td> <?php echo $row["PHO"] ?> </td></tr>
							<tr><th>E - Mail </th> <td> <?php echo $row["MAIL"] ?> </td></tr>
							<tr><th>Address </th> <td> <?php echo $row["ADDR"] ?> </td></tr>
						</table>
					</div>
				</div>
			</div>
	
				<?php include"footer.php";?>
	</body>
</html>