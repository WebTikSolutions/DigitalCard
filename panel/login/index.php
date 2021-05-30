<!DOCTYPE html> 
 <?php

require('connect.php');
require('header.php');

?>

<!-----------------php 1st script----------------------->
<?php
$query=mysqli_query($connect,'SELECT * FROM digi_card WHERE user_email="'.$_SESSION['user_email'].'"  ');

		if(mysqli_num_rows($query)>>0){
		echo '<div class="main2">';
		
		
		echo '<div class="alert info">Trial Cards are only available for 7 days. Please make payment to avoid Cancellation or Deactivation of your card</div>';
		
echo '</div>';
		}else {echo '	<div class="main2">
	<a href="create_card.php"><div class="btn_create">+ Create New Card</div></a>

</div>'
?>

<script>
$(document).ready(function(){
	$('.close').on('click',function(){
		$('.pop_up_offer').slideToggle();
	})
})

</script>

<div class="pop_up_offer">
<div class="close">&times;</div>
<img src="images/SpecialOffer.png">
<h1>Hi <?php echo $_SESSION['user_name']; ?></h1>
<h3>You have unlocked 7 days Free Trail</h3><h2> just pay <br><del>2,000 Rs</del><br> <strong>999 Rs</strong> for subscription for 1 year.</h2>

<a href="create_card.php"><div class="btn_create">Create Your Card</div></a>

</div>
<?php
;}
		
		?>


<!-----------------ending php 1st script----------------------->

<div class="container">
	<div class="card_row">
	
		<div class="row_contd">Card ID</div>
		<div class="row_contd">Company Name</div>
		<div class="row_contd">Payment Status</div>
		<div class="row_contd">Card Status</div>
		<div class="row_contd">Data</div>
		<div class="row_contd">Share</div>
		<div class="row_contd">Edit</div>
		<div class="row_contd"></div>
		
		
	</div>
	
	<?php
	$query=mysqli_query($connect,'SELECT * FROM digi_card WHERE user_email="'.$_SESSION['user_email'].'"  ORDER BY id DESC LIMIT 10');

		if(mysqli_num_rows($query)>>0){
			while($row=mysqli_fetch_array($query)){
			echo '<li class="card_row2">';
			echo '<div class="row_contd"><a href="https://'.$_SERVER['HTTP_HOST'].'/'.$row['card_id'].'" target="_blank">'.$row['id'].'</div>';
			echo '<div class="row_contd">'.$row['d_comp_name'].' <i class="fa fa-external-link"></i></div></a>';
			echo '<div class="row_contd" id="'.$row['d_payment_status'].'">'.$row['d_payment_status'].'</div>';
				echo '<div class="row_contd" id="'.$row['d_card_status'].'">';	
				if($row['d_card_status']=='Active'){echo 'Active';}else if($row['d_card_status']=='Inactive'){echo 'Inactive';}
				echo '</div>';
			echo '<div class="row_contd">'.date("d-M-Y",strtotime($row['uploaded_date'])).'</div>';
			echo '<div class="row_contd"><a href="https://api.whatsapp.com/send?text=https://'.$_SERVER['HTTP_HOST'].'/'.$row['card_id'].'" target="_blank"><i class="fa fa-whatsapp"></i></a><a href="https://www.facebook.com/sharer/sharer.php?u=https://'.$_SERVER['HTTP_HOST'].'/'.$row['card_id'].'" target="_blank"><i class="fa fa-facebook"></i></a></div>';
			echo '<div class="row_contd"><a href="create_card.php?card_number='.$row['id'].'"><i class="fa fa-edit"></i></a></div>';
			echo '<a href="payment_page/pay.php?id='.$row['id'].'" target="_blank"><div  class="row_contd pay_now_btn">Pay Now</div></a>';
			echo '</li>';
			}
		}else {
			echo '<div class="alert info">No Data Available...</div>';
		}
		
		
	?>
	
	

</div>


<footer class="">

<p>© <?php echo $_SERVER['HTTP_HOST']; ?> || 2021 </p>

</footer>