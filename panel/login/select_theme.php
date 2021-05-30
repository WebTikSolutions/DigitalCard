<!DOCTYPE html> 
 <?php

require('connect.php');
require('header.php');

?>


<div class="main3">
<?php

	if(isset($_GET['card_number'])){
		$_SESSION['card_id_inprocess']=$_GET['card_number'];
	}else {
		
	}



$query=mysqli_query($connect,'SELECT * FROM digi_card WHERE id="'.$_SESSION['card_id_inprocess'].'" AND user_email="'.$_SESSION['user_email'].'"');

if(mysqli_num_rows($query)==0){
	echo '<meta http-equiv="refresh" content="2;URL=index.php">';
	echo '<div class="alert danger">Card id does not match with your email account</div>';
}else {
	$row=mysqli_fetch_array($query);
}

?>

	<div class="btn_holder">
		<a href="create_card.php"><div class="back_btn"><i class="fa fa-chevron-circle-left"></i> Back</div></a>
		<a href="create_card2.php"><div class="skip_btn">Skip <i class="fa fa-chevron-circle-right"></i></div></a>
	</div>
	<h1>Select Theme for your card.</h1>
	<center>
	<div class="theme"><?php if($row['d_css']=='card_css8.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css8.css"><img src="../images/template8.png"></a>
	</div>	
	<div class="theme"><?php if($row['d_css']=='card_css9.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css9.css"><img src="../images/template9.png"></a>
	</div>	
	<div class="theme"><?php if($row['d_css']=='card_css10.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css10.css"><img src="../images/template10.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css11.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css11.css"><img src="../images/template11.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css12.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css12.css"><img src="../images/template12.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css13.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css13.css"><img src="../images/template13.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css14.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css14.css"><img src="../images/template14.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css15.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css15.css"><img src="../images/template15.png"></a>
	</div>	
	<div class="theme "><?php if($row['d_css']=='card_css1.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css1.css"><img src="../images/template.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css2.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css2.css"><img src="../images/template1.png"></a>
	</div>
	
	<div class="theme"><?php if($row['d_css']=='card_css3.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css3.css"><img src="../images/template2.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css4.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css4.css"><img src="../images/template3.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css5.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css5.css"><img src="../images/template4.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css6.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css6.css"><img src="../images/template5.png"></a>
	</div>
	<div class="theme"><?php if($row['d_css']=='card_css7.css'){echo '<div class="selected">Selected</div>';} ?>
		<a href="select_theme.php?d_css=card_css7.css"><img src="../images/template7.png"></a>
	</div>
	
	</center>




<?php
if(isset($_GET['d_css'])){
				
$query=mysqli_query($connect,'SELECT * FROM digi_card WHERE id="'.$_SESSION['card_id_inprocess'].'"');
		if(mysqli_num_rows($query)==1){
			
		// enter details in database
			
			$update=mysqli_query($connect,'UPDATE digi_card SET 
			
			d_css="'.$_GET['d_css'].'"
			
			WHERE id="'.$_SESSION['card_id_inprocess'].'"');
			
		// enter details in database ending
		
		if($update){
			echo '<a href="create_card2.php"><input type="submit" class="" name="process2" value="Next 3" id="block_loader">';
			echo '<div class="alert info">Theme Saved. Wait...</div></a>';
			echo '<meta http-equiv="refresh" content="1;URL=create_card2.php">';
		}else {
			echo '<a href="select_theme.php"><div class="alert danger">Error! Try Again.</div></a>';
		}
				
		}
	}else {
		
		
	}
	

?>

</div>




<footer class="">

<p>© <?php echo $_SERVER['HTTP_HOST']; ?> || 2020</p>

</footer>