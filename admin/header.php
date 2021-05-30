<?php
if(!isset($_SESSION['admin_email'])){header('LOCATION:login.php');exit;}
?>


<header id="header">
	<div class="logo" onclick="location.href='index.php'">
		<img src="images/logo.png"><h3>ADMIN</h3>
	</div>
	<div class="mobile_home">&equiv;</div>
	<div class="head_txt">
		<h3>
	<a href="index.php">Home</a>
		</h3>
		<h3><?php
		if(isset($_SESSION['admin_name'])){
		echo 'Hi! '.$_SESSION['admin_name'];
		}else {echo 'Hi! Guest';}
		?>
		</h3>
		<h3><?php
		if(isset($_SESSION['admin_email'])){
		echo '<a href="my_account.php"><i class="fa fa-gear"></i> Setting</a>';
		}
		?>
		</h3>
		<h3>
		
	<a href="logout.php"><i class="fa fa-sign-out"></i></a>
		</h3>
		
		
	</div>
	

</header>

<script>

$(document).ready(function(){
	$('.mobile_home').on('click',function(){
		$('#header').toggleClass('add_height');
		
	})
})

</script>

<script>
$(document).ready(function(){
  $("form").submit(function(){
    $('#alert_display_full').css('display','block');
  });
});
</script>


<div id="alert_display_full">
	<div id="loader1"></div>
	<h3>Loading...</h3>

</div>