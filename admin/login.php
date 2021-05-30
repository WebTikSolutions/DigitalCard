<?php
require('connect.php');
?>
<div class="clip_path1"></div>
<div class="login">
	
	<form action="" method="post" autocomplete="off" id="login">
	<h1>Admin Login</h1>
	<p>Please login with your email id and password to create/View your digital visiting card</p>
		<input type="text" name="admin_email" placeholder="Enter Email id or Mobile Number" autocomplete="off" autofocus  required>
		<input type="password" name="admin_password" placeholder="Password" autocomplete="off" required>
		<input type="submit" name="login_user" value="Login">
		<br>
	
	</form>


<?php

	if(isset($_POST['login_user'])){
		$query=mysqli_query($connect,'SELECT * FROM admin_login WHERE admin_email="'.$_POST['admin_email'].'" OR admin_contact="'.$_POST['admin_email'].'" ');
		if(mysqli_num_rows($query)>0){
			//login function 
			$row=mysqli_fetch_array($query);
			
			if($row['admin_password']==$_POST['admin_password'] ){
				
					$_SESSION['admin_email']=$row['admin_email'];
					$_SESSION['admin_name']=$row['admin_name'];
					$_SESSION['admin_contact']=$row['admin_contact'];
					echo '<div class="alert Success">Login Success, Redirecting...</div>';
					echo '<meta http-equiv="refresh" content="0;URL=index.php">';
			}else {
				echo '<div class="alert info">Password Wrong! Try Again.</div>';
			}
			
		}else {
			echo '<div class="alert info" id="register_en">User Does Not Exists. Create New Account</div>';
		}
	}
	

?>

</div>