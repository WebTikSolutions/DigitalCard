 <?php

require('connect.php');
require('header.php');

?>

<div class="main3">
	<a href="index.php"><h3 class="back_btn"><i class="fa fa-arrow-circle-left"></i> back </h3></a>
	<h1 class="close_form"><i class="fa fa-battery-4"></i> Recharge Wallet</h1>
<?php
if(isset($_GET['id'])){
	// if id is set 
	
	$query_fr=mysqli_query($connect,'SELECT * FROM franchisee_login WHERE id="'.$_GET['id'].'"');
	if(mysqli_num_rows($query_fr) == 0){
		echo '<div class="alert danger">Sorry! User Not available </div>';
	}else {
		$row_fr=mysqli_fetch_array($query_fr);
	}
	

}

// adding amount after authenticating user
if(isset($_GET['add_money'])){
	$query_f=mysqli_query($connect,'SELECT * FROM franchisee_login WHERE f_user_email="'.$_GET['user_email'].'"');
	if(mysqli_num_rows($query_f) == 0){
		echo '<div class="alert danger">Sorry! User Not available </div>';
	}else {
		$row_f=mysqli_fetch_array($query_f);
			echo '<style> form {display:none;} </style>';
			
			
			// fetch from wallet balance 
			$query=mysqli_query($connect,'SELECT * FROM wallet WHERE f_user_email="'.$_GET['user_email'].'" ORDER BY id DESC');
	
			$row=mysqli_fetch_array($query);
			
			if(mysqli_num_rows($query)>>0){
				$balance=$_GET['amount']+$row['w_balance'];
			}else {$balance=$_GET['amount'];}
			
			$insert=mysqli_query($connect,'INSERT INTO wallet (f_user_email,w_deposit,w_order_id,w_balance,uploaded_date,w_txn_msg) VALUES ("'.$_GET['user_email'].'","'.$_GET['amount'].'","Promotional","'.$balance.'","'.$date.'","'.$_GET['txn_msg'].'")');
					
					if($insert){
						echo '<a href="index.php"><div class="alert success">Amount of '.$_GET['amount'].' Rs. Credited in Users Account.</div><div class="next_btn">Continue</div></a>';
					}else {
						echo '<a href="add_money.php"><div class="alert danger">Failed! Amount of '.$_GET['amount'].' Rs. Could not add in Users Account.</div><div class="next_btn">Re Try</div></a>';
					}
			}
			
			// wallet adding amount end  
}

?>


<form action="">
	<div class="input_box"><p>Franchisee Email *</p>
	<input type="" name="user_email" value="<?php if(!empty($row_fr['f_user_email'])){echo $row_fr['f_user_email'];}?>" placeholder="Franchisee Email Id" required></div>
	
	<div class="input_box"><p>Amount (10-1000 Rs Only)</p>
	<input type="number" min="10" max="1000" name="amount" value="10" placeholder="Amount" required></div>
	
	<div class="input_box"><p>Comment </p>
	<input type="" min="10" max="1000" name="txn_msg" value="Promotional Amount" placeholder="Comment..." required></div>
	<input type="submit" name="add_money">
	
	</form>


</div>