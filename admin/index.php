<?php

require('connect.php');
require('header.php');

?>


<div class="dashboard">
<!-----------Dash side 1------------------------->

	<div class="dash_side1">
		
		<!----------alll links --------------------------->
		<div class="dash_link">
			<a href="create_account.php"><li class="active">+ Create New Card</li></a>
			
			<a href="manage_user.php"><li><i class="fa fa-group"></i> Manage Users</li></a>
			<a href="manage_franchisee.php"><li><i class="fa fa-group"></i> Manage Franchisee</li></a>
			<a href="manage_user_card.php"><li><i class="fa fa-credit-card"></i> Manage User Cards</li></a>
			<a href="manage_franchisee_card.php"><li><i class="fa fa-credit-card"></i> Manage Franchisee Cards</li></a>
			<a href="add_money.php"><li><i class="fa fa-battery-4"></i> Recharge Wallet</li></a>
			<a href="my_account.php"><li><i class="fa fa-gear"></i> My Account</li></a>
			<a href="search.php"><li><i class="fa fa-search"></i> Search </li></a>
			<a href="logout.php"><li><i class="fa fa-sign-out"></i> Logout</li></a>
	
		</div>
	</div>
	
	
<!-----------Dash side 2------------------------->
	<div class="dash_side2">
		<div class="das_box" >
			<p>Total Cards</p>
			<p><i class="fa fa-credit-card"></i> <?php $query=mysqli_query($connect,'SELECT * FROM digi_card ');
					echo mysqli_num_rows($query); ?>
			</p>
		
		</div>
		
		<div class="das_box" onclick="location.href='manage_franchisee_card.php'">
			<p>Franchisee Cards</p>
			<p><i class="fa fa-credit-card"></i> <?php $query=mysqli_query($connect,'SELECT * FROM digi_card WHERE f_user_email!=""');
					echo mysqli_num_rows($query); ?>
			</p>
		
		</div>
		
		<div class="das_box" onclick="location.href='manage_user_card.php'">
			<p>User Cards</p>
			<p><i class="fa fa-credit-card"></i> <?php $query=mysqli_query($connect,'SELECT * FROM digi_card WHERE f_user_email=""');
					echo mysqli_num_rows($query); ?>
			</p>
		
		</div>
		
		
		<div class="das_box" onclick="location.href='manage_franchisee.php'">
			<p>All Franchisee</p>
			<p><i class="fa fa-group"></i> <?php $query=mysqli_query($connect,'SELECT * FROM franchisee_login ');
					echo mysqli_num_rows($query); ?>
			</p>
		
		</div>
		
		<div class="das_box" onclick="location.href='manage_user.php'">
			<p>All Users</p>
			<p><i class="fa fa-group"></i> <?php $query=mysqli_query($connect,'SELECT * FROM customer_login ');
					echo mysqli_num_rows($query); ?>
			</p>
		
		</div>
		
		
		<!---------------chart details------------------------->
			<div class="user_details">

			
					<h3>Your Account Summary</h3>
				<?php

				$query=mysqli_query($connect,'SELECT * FROM digi_card ');
				echo '<div class="flex_box "><p>Total Cards</p><p>'.mysqli_num_rows($query).'</p></div>';

				?>
					<?php

				$query=mysqli_query($connect,'SELECT * FROM digi_card WHERE  d_payment_status="Success"');
				echo '<div class="flex_box"><p>Active Cards</p><p>'.mysqli_num_rows($query).'</p></div>';

				?>
					<?php

				$query=mysqli_query($connect,'SELECT * FROM digi_card WHERE  d_payment_status="Failed"');
				echo '<div class="flex_box "><p>Inactive Cards</p><p>'.mysqli_num_rows($query).'</p></div>';

				?>
					<?php

				$query=mysqli_query($connect,'SELECT * FROM digi_card WHERE d_payment_status="Created"');
				echo '<div class="flex_box"><p>Trial Cards</p><p>'.mysqli_num_rows($query).'</p></div>';

				?>
					<?php

				$query=mysqli_query($connect,'SELECT SUM(d_payment_amount) as payment FROM digi_card WHERE d_payment_status="Success" ');
				$row=mysqli_fetch_array($query);
				echo '<div class="flex_box "><p>Payment Total </p><p>'.number_format($row['payment'],2).' Rs</p></div>';

				?>
					


				</div>
			
		<!---------------chart details------------------------->
	
	
	</div>



</div>


<footer class="">

<p>Copyright 2020 || <?php echo $_SERVER['HTTP_HOST']; ?></p>

</footer>
