 <?php

require('connect.php');
require('header.php');

?>

<?php
$query=mysqli_query($connect,'SELECT * FROM digi_card WHERE id="'.$_SESSION['card_id_inprocess'].'" ');

if(mysqli_num_rows($query)==0){
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}else {
	$row=mysqli_fetch_array($query);
}

?>

<div class="main3">
<div class="navigator_up">
		<a href="select_theme.php"><div class="nav_cont  " ><i class="fa fa-map"></i> Select Theme</div></a>
		<a href="create_card2.php"><div class="nav_cont active"><i class="fa fa-bank"></i> Company Details</div></a>
		<a href="create_card3.php"><div class="nav_cont "><i class="fa fa-facebook"></i> Social Links</div></a>
		<a href="create_card4.php"><div class="nav_cont"><i class="fa fa-rupee"></i> Payment Options</div></a>
		<a href="create_card5.php"><div class="nav_cont "><i class="fa fa-ticket"></i> Products & Services</div></a>
		<a href="create_card7.php"><div class="nav_cont"><i class="fa fa-archive"></i> Order Page</div></a>
		<a href="create_card6.php"><div class="nav_cont"><i class="fa fa-image"></i> Image Gallery</div></a>
		<a href="preview_page.php"><div class="nav_cont"><i class="fa fa-laptop"></i> Preview Card</div></a>
	
	</div>
	
	<div class="btn_holder">
		<a href="select_theme.php"><div class="back_btn"><i class="fa fa-chevron-circle-left"></i> Back</div></a>
		<a href="create_card3.php"><div class="skip_btn">Skip <i class="fa fa-chevron-circle-right"></i></div></a>
	</div>
	<h1>Company Details</h1>
	
	<form action="" method="POST" enctype="multipart/form-data">
	

<!-------------------form ----------------------->	
		<img src="<?php if(!empty($row['d_logo'])){echo 'data:image/*;base64,'.base64_encode($row['d_logo']);}else {echo 'images/logo.png';} ?>" alt="Select image" id="showPreviewLogo" onclick="clickFocus()" >
		<div class="input_box"><p>Company Logo (Required)* 100x100 to 400x400 PX</p>
		
		
		
			<script>
				function clickFocus(){
					$('#clickMeImage').click();
				}
				
				function readURL(input){
					if(input.files && input.files[0]){
						var reader = new FileReader();
						reader.onload= function (a){
							$('#showPreviewLogo').attr('src',a.target.result);
						};
						reader.readAsDataURL(input.files[0]);
					}
					
				}
			</script>
			<input type="file" name="d_logo" id="clickMeImage" onchange="readURL(this);" accept="image/*"  >
			
		</div>	
		
		<h3>Personal Details</h3>
		<div class="input_box"><p>First Name *</p><input type="text" name="d_f_name" maxlength="20" placeholder="Enter First Name" value="<?php if(!empty($row['d_f_name'])){echo $row['d_f_name'];}?>" required></div>
		
		<div class="input_box"><p>Last Name (Optional)</p><input type="text" name="d_l_name" maxlength="20" placeholder="Enter Last Name  (Optional)" value="<?php if(!empty($row['d_l_name'])){echo $row['d_l_name'];}?>"></div>
		
		<div class="input_box"><p>Position/Designation * </p><input type="text" name="d_position" maxlength="20" placeholder="Enter Position/Designation (Ex. Manager etc.)" value="<?php if(!empty($row['d_position'])){echo $row['d_position'];}?>" required></div>
		
		<div class="input_box"><p>Phone Country code * </p><select name="d_code" maxlength="13" placeholder="Country Code" required>
		<option value="93" <?=$row['d_code'] == '93' ? ' selected="selected"' : '';?>> (+93) Afghanistan</option>
<option value="355" <?=$row['d_code'] == '355' ? ' selected="selected"' : '';?>> (+355) Albania</option>
<option value="213" <?=$row['d_code'] == '213' ? ' selected="selected"' : '';?>> (+213) Algeria</option>
<option value="1684" <?=$row['d_code'] == '1684' ? ' selected="selected"' : '';?>> (+1684) American Samoa</option>
<option value="376" <?=$row['d_code'] == '376' ? ' selected="selected"' : '';?>> (+376) Andorra</option>
<option value="244" <?=$row['d_code'] == '244' ? ' selected="selected"' : '';?>> (+244) Angola</option>
<option value="1264" <?=$row['d_code'] == '1264' ? ' selected="selected"' : '';?>> (+1264) Anguilla</option>
<option value="672" <?=$row['d_code'] == '672' ? ' selected="selected"' : '';?>> (+672) Antarctica</option>
<option value="1268" <?=$row['d_code'] == '1268' ? ' selected="selected"' : '';?>> (+1268) Antigua and Barbuda</option>
<option value="54" <?=$row['d_code'] == '54' ? ' selected="selected"' : '';?>> (+54) Argentina</option>
<option value="374" <?=$row['d_code'] == '374' ? ' selected="selected"' : '';?>> (+374) Armenia</option>
<option value="297" <?=$row['d_code'] == '297' ? ' selected="selected"' : '';?>> (+297) Aruba</option>
<option value="61" <?=$row['d_code'] == '61' ? ' selected="selected"' : '';?>> (+61) Australia</option>
<option value="43" <?=$row['d_code'] == '43' ? ' selected="selected"' : '';?>> (+43) Austria</option>
<option value="994" <?=$row['d_code'] == '994' ? ' selected="selected"' : '';?>> (+994) Azerbaijan</option>
<option value="1242" <?=$row['d_code'] == '1242' ? ' selected="selected"' : '';?>> (+1242) Bahamas</option>
<option value="973" <?=$row['d_code'] == '973' ? ' selected="selected"' : '';?>> (+973) Bahrain</option>
<option value="880" <?=$row['d_code'] == '880' ? ' selected="selected"' : '';?>> (+880) Bangladesh</option>
<option value="1246" <?=$row['d_code'] == '1246' ? ' selected="selected"' : '';?>> (+1246) Barbados</option>
<option value="375" <?=$row['d_code'] == '375' ? ' selected="selected"' : '';?>> (+375) Belarus</option>
<option value="32" <?=$row['d_code'] == '32' ? ' selected="selected"' : '';?>> (+32) Belgium</option>
<option value="501" <?=$row['d_code'] == '501' ? ' selected="selected"' : '';?>> (+501) Belize</option>
<option value="229" <?=$row['d_code'] == '229' ? ' selected="selected"' : '';?>> (+229) Benin</option>
<option value="1441" <?=$row['d_code'] == '1441' ? ' selected="selected"' : '';?>> (+1441) Bermuda</option>
<option value="975" <?=$row['d_code'] == '975' ? ' selected="selected"' : '';?>> (+975) Bhutan</option>
<option value="591" <?=$row['d_code'] == '591' ? ' selected="selected"' : '';?>> (+591) Bolivia</option>
<option value="387" <?=$row['d_code'] == '387' ? ' selected="selected"' : '';?>> (+387) Bosnia and Herzegovina</option>
<option value="267" <?=$row['d_code'] == '267' ? ' selected="selected"' : '';?>> (+267) Botswana</option>
<option value="55" <?=$row['d_code'] == '55' ? ' selected="selected"' : '';?>> (+55) Brazil</option>
<option value="246" <?=$row['d_code'] == '246' ? ' selected="selected"' : '';?>> (+246) British Indian Ocean Territory</option>
<option value="1284" <?=$row['d_code'] == '1284' ? ' selected="selected"' : '';?>> (+1284) British Virgin Islands</option>
<option value="673" <?=$row['d_code'] == '673' ? ' selected="selected"' : '';?>> (+673) Brunei</option>
<option value="359" <?=$row['d_code'] == '359' ? ' selected="selected"' : '';?>> (+359) Bulgaria</option>
<option value="226" <?=$row['d_code'] == '226' ? ' selected="selected"' : '';?>> (+226) Burkina Faso</option>
<option value="257" <?=$row['d_code'] == '257' ? ' selected="selected"' : '';?>> (+257) Burundi</option>
<option value="855" <?=$row['d_code'] == '855' ? ' selected="selected"' : '';?>> (+855) Cambodia</option>
<option value="237" <?=$row['d_code'] == '237' ? ' selected="selected"' : '';?>> (+237) Cameroon</option>
<option value="1" <?=$row['d_code'] == '1' ? ' selected="selected"' : '';?>> (+1) Canada</option>
<option value="238" <?=$row['d_code'] == '238' ? ' selected="selected"' : '';?>> (+238) Cape Verde</option>
<option value="1345" <?=$row['d_code'] == '1345' ? ' selected="selected"' : '';?>> (+1345) Cayman Islands</option>
<option value="236" <?=$row['d_code'] == '236' ? ' selected="selected"' : '';?>> (+236) Central African Republic</option>
<option value="235" <?=$row['d_code'] == '235' ? ' selected="selected"' : '';?>> (+235) Chad</option>
<option value="56" <?=$row['d_code'] == '56' ? ' selected="selected"' : '';?>> (+56) Chile</option>
<option value="86" <?=$row['d_code'] == '86' ? ' selected="selected"' : '';?>> (+86) China</option>
<option value="61" <?=$row['d_code'] == '61' ? ' selected="selected"' : '';?>> (+61) Christmas Island</option>
<option value="61" <?=$row['d_code'] == '61' ? ' selected="selected"' : '';?>> (+61) Cocos Islands</option>
<option value="57" <?=$row['d_code'] == '57' ? ' selected="selected"' : '';?>> (+57) Colombia</option>
<option value="269" <?=$row['d_code'] == '269' ? ' selected="selected"' : '';?>> (+269) Comoros</option>
<option value="682" <?=$row['d_code'] == '682' ? ' selected="selected"' : '';?>> (+682) Cook Islands</option>
<option value="506" <?=$row['d_code'] == '506' ? ' selected="selected"' : '';?>> (+506) Costa Rica</option>
<option value="385" <?=$row['d_code'] == '385' ? ' selected="selected"' : '';?>> (+385) Croatia</option>
<option value="53" <?=$row['d_code'] == '53' ? ' selected="selected"' : '';?>> (+53) Cuba</option>
<option value="599" <?=$row['d_code'] == '599' ? ' selected="selected"' : '';?>> (+599) Curacao</option>
<option value="357" <?=$row['d_code'] == '357' ? ' selected="selected"' : '';?>> (+357) Cyprus</option>
<option value="420" <?=$row['d_code'] == '420' ? ' selected="selected"' : '';?>> (+420) Czech Republic</option>
<option value="243" <?=$row['d_code'] == '243' ? ' selected="selected"' : '';?>> (+243) Democratic Republic of the Congo</option>
<option value="45" <?=$row['d_code'] == '45' ? ' selected="selected"' : '';?>> (+45) Denmark</option>
<option value="253" <?=$row['d_code'] == '253' ? ' selected="selected"' : '';?>> (+253) Djibouti</option>
<option value="1767" <?=$row['d_code'] == '1767' ? ' selected="selected"' : '';?>> (+1767) Dominica</option>
<option value="670" <?=$row['d_code'] == '670' ? ' selected="selected"' : '';?>> (+670) East Timor</option>
<option value="593" <?=$row['d_code'] == '593' ? ' selected="selected"' : '';?>> (+593) Ecuador</option>
<option value="20" <?=$row['d_code'] == '20' ? ' selected="selected"' : '';?>> (+20) Egypt</option>
<option value="503" <?=$row['d_code'] == '503' ? ' selected="selected"' : '';?>> (+503) El Salvador</option>
<option value="240" <?=$row['d_code'] == '240' ? ' selected="selected"' : '';?>> (+240) Equatorial Guinea</option>
<option value="291" <?=$row['d_code'] == '291' ? ' selected="selected"' : '';?>> (+291) Eritrea</option>
<option value="372" <?=$row['d_code'] == '372' ? ' selected="selected"' : '';?>> (+372) Estonia</option>
<option value="251" <?=$row['d_code'] == '251' ? ' selected="selected"' : '';?>> (+251) Ethiopia</option>
<option value="500" <?=$row['d_code'] == '500' ? ' selected="selected"' : '';?>> (+500) Falkland Islands</option>
<option value="298" <?=$row['d_code'] == '298' ? ' selected="selected"' : '';?>> (+298) Faroe Islands</option>
<option value="679" <?=$row['d_code'] == '679' ? ' selected="selected"' : '';?>> (+679) Fiji</option>
<option value="358" <?=$row['d_code'] == '358' ? ' selected="selected"' : '';?>> (+358) Finland</option>
<option value="33" <?=$row['d_code'] == '33' ? ' selected="selected"' : '';?>> (+33) France</option>
<option value="689" <?=$row['d_code'] == '689' ? ' selected="selected"' : '';?>> (+689) French Polynesia</option>
<option value="241" <?=$row['d_code'] == '241' ? ' selected="selected"' : '';?>> (+241) Gabon</option>
<option value="220" <?=$row['d_code'] == '220' ? ' selected="selected"' : '';?>> (+220) Gambia</option>
<option value="995" <?=$row['d_code'] == '995' ? ' selected="selected"' : '';?>> (+995) Georgia</option>
<option value="49" <?=$row['d_code'] == '49' ? ' selected="selected"' : '';?>> (+49) Germany</option>
<option value="233" <?=$row['d_code'] == '233' ? ' selected="selected"' : '';?>> (+233) Ghana</option>
<option value="350" <?=$row['d_code'] == '350' ? ' selected="selected"' : '';?>> (+350) Gibraltar</option>
<option value="30" <?=$row['d_code'] == '30' ? ' selected="selected"' : '';?>> (+30) Greece</option>
<option value="299" <?=$row['d_code'] == '299' ? ' selected="selected"' : '';?>> (+299) Greenland</option>
<option value="1473" <?=$row['d_code'] == '1473' ? ' selected="selected"' : '';?>> (+1473) Grenada</option>
<option value="1671" <?=$row['d_code'] == '1671' ? ' selected="selected"' : '';?>> (+1671) Guam</option>
<option value="502" <?=$row['d_code'] == '502' ? ' selected="selected"' : '';?>> (+502) Guatemala</option>
<option value="224" <?=$row['d_code'] == '224' ? ' selected="selected"' : '';?>> (+224) Guinea</option>
<option value="245" <?=$row['d_code'] == '245' ? ' selected="selected"' : '';?>> (+245) Guinea-Bissau</option>
<option value="592" <?=$row['d_code'] == '592' ? ' selected="selected"' : '';?>> (+592) Guyana</option>
<option value="509" <?=$row['d_code'] == '509' ? ' selected="selected"' : '';?>> (+509) Haiti</option>
<option value="504" <?=$row['d_code'] == '504' ? ' selected="selected"' : '';?>> (+504) Honduras</option>
<option value="852" <?=$row['d_code'] == '852' ? ' selected="selected"' : '';?>> (+852) Hong Kong</option>
<option value="36" <?=$row['d_code'] == '36' ? ' selected="selected"' : '';?>> (+36) Hungary</option>
<option value="354" <?=$row['d_code'] == '354' ? ' selected="selected"' : '';?>> (+354) Iceland</option>
<option value="91" <?=$row['d_code'] == '91' ? ' selected="selected"' : '';?>> (+91) India</option>
<option value="62" <?=$row['d_code'] == '62' ? ' selected="selected"' : '';?>> (+62) Indonesia</option>
<option value="98" <?=$row['d_code'] == '98' ? ' selected="selected"' : '';?>> (+98) Iran</option>
<option value="964" <?=$row['d_code'] == '964' ? ' selected="selected"' : '';?>> (+964) Iraq</option>
<option value="353" <?=$row['d_code'] == '353' ? ' selected="selected"' : '';?>> (+353) Ireland</option>
<option value="972" <?=$row['d_code'] == '972' ? ' selected="selected"' : '';?>> (+972) Israel</option>
<option value="39" <?=$row['d_code'] == '39' ? ' selected="selected"' : '';?>> (+39) Italy</option>
<option value="225" <?=$row['d_code'] == '225' ? ' selected="selected"' : '';?>> (+225) Ivory Coast</option>
<option value="1876" <?=$row['d_code'] == '1876' ? ' selected="selected"' : '';?>> (+1876) Jamaica</option>
<option value="81" <?=$row['d_code'] == '81' ? ' selected="selected"' : '';?>> (+81) Japan</option>
<option value="962" <?=$row['d_code'] == '962' ? ' selected="selected"' : '';?>> (+962) Jordan</option>
<option value="7" <?=$row['d_code'] == '7' ? ' selected="selected"' : '';?>> (+7) Kazakhstan</option>
<option value="254" <?=$row['d_code'] == '254' ? ' selected="selected"' : '';?>> (+254) Kenya</option>
<option value="686" <?=$row['d_code'] == '686' ? ' selected="selected"' : '';?>> (+686) Kiribati</option>
<option value="383" <?=$row['d_code'] == '383' ? ' selected="selected"' : '';?>> (+383) Kosovo</option>
<option value="965" <?=$row['d_code'] == '965' ? ' selected="selected"' : '';?>> (+965) Kuwait</option>
<option value="996" <?=$row['d_code'] == '996' ? ' selected="selected"' : '';?>> (+996) Kyrgyzstan</option>
<option value="856" <?=$row['d_code'] == '856' ? ' selected="selected"' : '';?>> (+856) Laos</option>
<option value="371" <?=$row['d_code'] == '371' ? ' selected="selected"' : '';?>> (+371) Latvia</option>
<option value="961" <?=$row['d_code'] == '961' ? ' selected="selected"' : '';?>> (+961) Lebanon</option>
<option value="266" <?=$row['d_code'] == '266' ? ' selected="selected"' : '';?>> (+266) Lesotho</option>
<option value="231" <?=$row['d_code'] == '231' ? ' selected="selected"' : '';?>> (+231) Liberia</option>
<option value="218" <?=$row['d_code'] == '218' ? ' selected="selected"' : '';?>> (+218) Libya</option>
<option value="423" <?=$row['d_code'] == '423' ? ' selected="selected"' : '';?>> (+423) Liechtenstein</option>
<option value="370" <?=$row['d_code'] == '370' ? ' selected="selected"' : '';?>> (+370) Lithuania</option>
<option value="352" <?=$row['d_code'] == '352' ? ' selected="selected"' : '';?>> (+352) Luxembourg</option>
<option value="853" <?=$row['d_code'] == '853' ? ' selected="selected"' : '';?>> (+853) Macau</option>
<option value="389" <?=$row['d_code'] == '389' ? ' selected="selected"' : '';?>> (+389) Macedonia</option>
<option value="261" <?=$row['d_code'] == '261' ? ' selected="selected"' : '';?>> (+261) Madagascar</option>
<option value="265" <?=$row['d_code'] == '265' ? ' selected="selected"' : '';?>> (+265) Malawi</option>
<option value="60" <?=$row['d_code'] == '60' ? ' selected="selected"' : '';?>> (+60) Malaysia</option>
<option value="960" <?=$row['d_code'] == '960' ? ' selected="selected"' : '';?>> (+960) Maldives</option>
<option value="223" <?=$row['d_code'] == '223' ? ' selected="selected"' : '';?>> (+223) Mali</option>
<option value="356" <?=$row['d_code'] == '356' ? ' selected="selected"' : '';?>> (+356) Malta</option>
<option value="692" <?=$row['d_code'] == '692' ? ' selected="selected"' : '';?>> (+692) Marshall Islands</option>
<option value="222" <?=$row['d_code'] == '222' ? ' selected="selected"' : '';?>> (+222) Mauritania</option>
<option value="230" <?=$row['d_code'] == '230' ? ' selected="selected"' : '';?>> (+230) Mauritius</option>
<option value="262" <?=$row['d_code'] == '262' ? ' selected="selected"' : '';?>> (+262) Mayotte</option>
<option value="52" <?=$row['d_code'] == '52' ? ' selected="selected"' : '';?>> (+52) Mexico</option>
<option value="691" <?=$row['d_code'] == '691' ? ' selected="selected"' : '';?>> (+691) Micronesia</option>
<option value="373" <?=$row['d_code'] == '373' ? ' selected="selected"' : '';?>> (+373) Moldova</option>
<option value="377" <?=$row['d_code'] == '377' ? ' selected="selected"' : '';?>> (+377) Monaco</option>
<option value="976" <?=$row['d_code'] == '976' ? ' selected="selected"' : '';?>> (+976) Mongolia</option>
<option value="382" <?=$row['d_code'] == '382' ? ' selected="selected"' : '';?>> (+382) Montenegro</option>
<option value="1664" <?=$row['d_code'] == '1664' ? ' selected="selected"' : '';?>> (+1664) Montserrat</option>
<option value="212" <?=$row['d_code'] == '212' ? ' selected="selected"' : '';?>> (+212) Morocco</option>
<option value="258" <?=$row['d_code'] == '258' ? ' selected="selected"' : '';?>> (+258) Mozambique</option>
<option value="95" <?=$row['d_code'] == '95' ? ' selected="selected"' : '';?>> (+95) Myanmar</option>
<option value="264" <?=$row['d_code'] == '264' ? ' selected="selected"' : '';?>> (+264) Namibia</option>
<option value="674" <?=$row['d_code'] == '674' ? ' selected="selected"' : '';?>> (+674) Nauru</option>
<option value="977" <?=$row['d_code'] == '977' ? ' selected="selected"' : '';?>> (+977) Nepal</option>
<option value="31" <?=$row['d_code'] == '31' ? ' selected="selected"' : '';?>> (+31) Netherlands</option>
<option value="599" <?=$row['d_code'] == '599' ? ' selected="selected"' : '';?>> (+599) Netherlands Antilles</option>
<option value="687" <?=$row['d_code'] == '687' ? ' selected="selected"' : '';?>> (+687) New Caledonia</option>
<option value="64" <?=$row['d_code'] == '64' ? ' selected="selected"' : '';?>> (+64) New Zealand</option>
<option value="505" <?=$row['d_code'] == '505' ? ' selected="selected"' : '';?>> (+505) Nicaragua</option>
<option value="227" <?=$row['d_code'] == '227' ? ' selected="selected"' : '';?>> (+227) Niger</option>
<option value="234" <?=$row['d_code'] == '234' ? ' selected="selected"' : '';?>> (+234) Nigeria</option>
<option value="683" <?=$row['d_code'] == '683' ? ' selected="selected"' : '';?>> (+683) Niue</option>
<option value="850" <?=$row['d_code'] == '850' ? ' selected="selected"' : '';?>> (+850) North Korea</option>
<option value="1670" <?=$row['d_code'] == '1670' ? ' selected="selected"' : '';?>> (+1670) Northern Mariana Islands</option>
<option value="47" <?=$row['d_code'] == '47' ? ' selected="selected"' : '';?>> (+47) Norway</option>
<option value="968" <?=$row['d_code'] == '968' ? ' selected="selected"' : '';?>> (+968) Oman</option>
<option value="92" <?=$row['d_code'] == '92' ? ' selected="selected"' : '';?>> (+92) Pakistan</option>
<option value="680" <?=$row['d_code'] == '680' ? ' selected="selected"' : '';?>> (+680) Palau</option>
<option value="970" <?=$row['d_code'] == '970' ? ' selected="selected"' : '';?>> (+970) Palestine</option>
<option value="507" <?=$row['d_code'] == '507' ? ' selected="selected"' : '';?>> (+507) Panama</option>
<option value="675" <?=$row['d_code'] == '675' ? ' selected="selected"' : '';?>> (+675) Papua New Guinea</option>
<option value="595" <?=$row['d_code'] == '595' ? ' selected="selected"' : '';?>> (+595) Paraguay</option>
<option value="51" <?=$row['d_code'] == '51' ? ' selected="selected"' : '';?>> (+51) Peru</option>
<option value="63" <?=$row['d_code'] == '63' ? ' selected="selected"' : '';?>> (+63) Philippines</option>
<option value="64" <?=$row['d_code'] == '64' ? ' selected="selected"' : '';?>> (+64) Pitcairn</option>
<option value="48" <?=$row['d_code'] == '48' ? ' selected="selected"' : '';?>> (+48) Poland</option>
<option value="351" <?=$row['d_code'] == '351' ? ' selected="selected"' : '';?>> (+351) Portugal</option>
<option value="1787" <?=$row['d_code'] == '1787' ? ' selected="selected"' : '';?>> (+1787) Puerto Rico</option>
<option value="974" <?=$row['d_code'] == '974' ? ' selected="selected"' : '';?>> (+974) Qatar</option>
<option value="242" <?=$row['d_code'] == '242' ? ' selected="selected"' : '';?>> (+242) Republic of the Congo</option>
<option value="262" <?=$row['d_code'] == '262' ? ' selected="selected"' : '';?>> (+262) Reunion</option>
<option value="40" <?=$row['d_code'] == '40' ? ' selected="selected"' : '';?>> (+40) Romania</option>
<option value="7" <?=$row['d_code'] == '7' ? ' selected="selected"' : '';?>> (+7) Russia</option>
<option value="250" <?=$row['d_code'] == '250' ? ' selected="selected"' : '';?>> (+250) Rwanda</option>
<option value="590" <?=$row['d_code'] == '590' ? ' selected="selected"' : '';?>> (+590) Saint Barthelemy</option>
<option value="290" <?=$row['d_code'] == '290' ? ' selected="selected"' : '';?>> (+290) Saint Helena</option>
<option value="1869" <?=$row['d_code'] == '1869' ? ' selected="selected"' : '';?>> (+1869) Saint Kitts and Nevis</option>
<option value="1758" <?=$row['d_code'] == '1758' ? ' selected="selected"' : '';?>> (+1758) Saint Lucia</option>
<option value="590" <?=$row['d_code'] == '590' ? ' selected="selected"' : '';?>> (+590) Saint Martin</option>
<option value="508" <?=$row['d_code'] == '508' ? ' selected="selected"' : '';?>> (+508) Saint Pierre and Miquelon</option>
<option value="1784" <?=$row['d_code'] == '1784' ? ' selected="selected"' : '';?>> (+1784) Saint Vincent and the Grenadines</option>
<option value="685" <?=$row['d_code'] == '685' ? ' selected="selected"' : '';?>> (+685) Samoa</option>
<option value="378" <?=$row['d_code'] == '378' ? ' selected="selected"' : '';?>> (+378) San Marino</option>
<option value="239" <?=$row['d_code'] == '239' ? ' selected="selected"' : '';?>> (+239) Sao Tome and Principe</option>
<option value="966" <?=$row['d_code'] == '966' ? ' selected="selected"' : '';?>> (+966) Saudi Arabia</option>
<option value="221" <?=$row['d_code'] == '221' ? ' selected="selected"' : '';?>> (+221) Senegal</option>
<option value="381" <?=$row['d_code'] == '381' ? ' selected="selected"' : '';?>> (+381) Serbia</option>
<option value="248" <?=$row['d_code'] == '248' ? ' selected="selected"' : '';?>> (+248) Seychelles</option>
<option value="232" <?=$row['d_code'] == '232' ? ' selected="selected"' : '';?>> (+232) Sierra Leone</option>
<option value="65" <?=$row['d_code'] == '65' ? ' selected="selected"' : '';?>> (+65) Singapore</option>
<option value="1721" <?=$row['d_code'] == '1721' ? ' selected="selected"' : '';?>> (+1721) Sint Maarten</option>
<option value="421" <?=$row['d_code'] == '421' ? ' selected="selected"' : '';?>> (+421) Slovakia</option>
<option value="386" <?=$row['d_code'] == '386' ? ' selected="selected"' : '';?>> (+386) Slovenia</option>
<option value="677" <?=$row['d_code'] == '677' ? ' selected="selected"' : '';?>> (+677) Solomon Islands</option>
<option value="252" <?=$row['d_code'] == '252' ? ' selected="selected"' : '';?>> (+252) Somalia</option>
<option value="27" <?=$row['d_code'] == '27' ? ' selected="selected"' : '';?>> (+27) South Africa</option>
<option value="82" <?=$row['d_code'] == '82' ? ' selected="selected"' : '';?>> (+82) South Korea</option>
<option value="211" <?=$row['d_code'] == '211' ? ' selected="selected"' : '';?>> (+211) South Sudan</option>
<option value="34" <?=$row['d_code'] == '34' ? ' selected="selected"' : '';?>> (+34) Spain</option>
<option value="94" <?=$row['d_code'] == '94' ? ' selected="selected"' : '';?>> (+94) Sri Lanka</option>
<option value="249" <?=$row['d_code'] == '249' ? ' selected="selected"' : '';?>> (+249) Sudan</option>
<option value="597" <?=$row['d_code'] == '597' ? ' selected="selected"' : '';?>> (+597) Suriname</option>
<option value="47" <?=$row['d_code'] == '47' ? ' selected="selected"' : '';?>> (+47) Svalbard and Jan Mayen</option>
<option value="268" <?=$row['d_code'] == '268' ? ' selected="selected"' : '';?>> (+268) Swaziland</option>
<option value="46" <?=$row['d_code'] == '46' ? ' selected="selected"' : '';?>> (+46) Sweden</option>
<option value="41" <?=$row['d_code'] == '41' ? ' selected="selected"' : '';?>> (+41) Switzerland</option>
<option value="963" <?=$row['d_code'] == '963' ? ' selected="selected"' : '';?>> (+963) Syria</option>
<option value="886" <?=$row['d_code'] == '886' ? ' selected="selected"' : '';?>> (+886) Taiwan</option>
<option value="992" <?=$row['d_code'] == '992' ? ' selected="selected"' : '';?>> (+992) Tajikistan</option>
<option value="255" <?=$row['d_code'] == '255' ? ' selected="selected"' : '';?>> (+255) Tanzania</option>
<option value="66" <?=$row['d_code'] == '66' ? ' selected="selected"' : '';?>> (+66) Thailand</option>
<option value="228" <?=$row['d_code'] == '228' ? ' selected="selected"' : '';?>> (+228) Togo</option>
<option value="690" <?=$row['d_code'] == '690' ? ' selected="selected"' : '';?>> (+690) Tokelau</option>
<option value="676" <?=$row['d_code'] == '676' ? ' selected="selected"' : '';?>> (+676) Tonga</option>
<option value="1868" <?=$row['d_code'] == '1868' ? ' selected="selected"' : '';?>> (+1868) Trinidad and Tobago</option>
<option value="216" <?=$row['d_code'] == '216' ? ' selected="selected"' : '';?>> (+216) Tunisia</option>
<option value="90" <?=$row['d_code'] == '90' ? ' selected="selected"' : '';?>> (+90) Turkey</option>
<option value="993" <?=$row['d_code'] == '993' ? ' selected="selected"' : '';?>> (+993) Turkmenistan</option>
<option value="1649" <?=$row['d_code'] == '1649' ? ' selected="selected"' : '';?>> (+1649) Turks and Caicos Islands</option>
<option value="688" <?=$row['d_code'] == '688' ? ' selected="selected"' : '';?>> (+688) Tuvalu</option>
<option value="1340" <?=$row['d_code'] == '1340' ? ' selected="selected"' : '';?>> (+1340) U.S. Virgin Islands</option>
<option value="256" <?=$row['d_code'] == '256' ? ' selected="selected"' : '';?>> (+256) Uganda</option>
<option value="380" <?=$row['d_code'] == '380' ? ' selected="selected"' : '';?>> (+380) Ukraine</option>
<option value="971" <?=$row['d_code'] == '971' ? ' selected="selected"' : '';?>> (+971) United Arab Emirates</option>
<option value="44" <?=$row['d_code'] == '44' ? ' selected="selected"' : '';?>> (+44) United Kingdom</option>
<option value="1" <?=$row['d_code'] == '1' ? ' selected="selected"' : '';?>> (+1) United States</option>
<option value="598" <?=$row['d_code'] == '598' ? ' selected="selected"' : '';?>> (+598) Uruguay</option>
<option value="998" <?=$row['d_code'] == '998' ? ' selected="selected"' : '';?>> (+998) Uzbekistan</option>
<option value="678" <?=$row['d_code'] == '678' ? ' selected="selected"' : '';?>> (+678) Vanuatu</option>
<option value="379" <?=$row['d_code'] == '379' ? ' selected="selected"' : '';?>> (+379) Vatican</option>
<option value="58" <?=$row['d_code'] == '58' ? ' selected="selected"' : '';?>> (+58) Venezuela</option>
<option value="84" <?=$row['d_code'] == '84' ? ' selected="selected"' : '';?>> (+84) Vietnam</option>
<option value="681" <?=$row['d_code'] == '681' ? ' selected="selected"' : '';?>> (+681) Wallis and Futuna</option>
<option value="212" <?=$row['d_code'] == '212' ? ' selected="selected"' : '';?>> (+212) Western Sahara</option>
<option value="967" <?=$row['d_code'] == '967' ? ' selected="selected"' : '';?>> (+967) Yemen</option>
<option value="260" <?=$row['d_code'] == '260' ? ' selected="selected"' : '';?>> (+260) Zambia</option>
<option value="263" <?=$row['d_code'] == '263' ? ' selected="selected"' : '';?>> (+263) Zimbabwe</option>

		</select>
		</div>
		
		<div class="input_box"><p>Phone No * (Don't add country code)</p><input type="text" name="d_contact" maxlength="15" placeholder="Enter Phone Number" value="<?php if(!empty($row['d_contact'])){echo $row['d_contact'];}?>" required></div>
		
		<div class="input_box"><p>Alternet Phone No (Optional) (Don't add country code)</p><input type="text" name="d_contact2" maxlength="15" placeholder="Enter Alternet Phone Number  (Optional)" value="<?php if(!empty($row['d_contact2'])){echo $row['d_contact2'];}?>" ></div>
		
		<div class="input_box"><p>WhatsApp No * (Don't add country code)</p><input type="text" name="d_whatsapp" maxlength="15" placeholder="Enter WhatsApp Number"  value="<?php if(!empty($row['d_whatsapp'])){echo $row['d_whatsapp'];}?>" required></div>
		
		<div class="input_box"><p>Address * </p><textarea type="text" name="d_address" maxlength="200" placeholder="Full Address"  required><?php if(!empty($row['d_address'])){echo $row['d_address'];}?></textarea></div>
		
		<div class="input_box"><p>Email Id * </p><input type="email" name="d_email" maxlength="100" placeholder="Email Address" value="<?php if(!empty($row['d_email'])){echo $row['d_email'];}?>" required></div>
		<div class="input_box"><p>Website (Optional) </p><input type="text" name="d_website" maxlength="200" placeholder="Website (Optional)" value="<?php if(!empty($row['d_website'])){echo $row['d_website'];}?>" ></div>
		<div class="input_box"><p>Google Map location Link (Optional) </p><input type="text" name="d_location" maxlength="999" placeholder="Your Business Location (Optional)" value="<?php if(!empty($row['d_location'])){echo $row['d_location'];}?>" ></div>
		
		
		<div class="input_box"><p>About Us * </p><textarea type="text" name="d_about_us" maxlength="1900" placeholder="About your company/business"  required><?php if(!empty($row['d_about_us'])){echo $row['d_about_us'];}?></textarea></div>
			
		<input type="submit" class="" name="process2" value="Next 3" id="block_loader">
	
<!-------------------form ending----------------------->
	</form>
	
	<?php
	if(isset($_POST['process2'])){
		
		$query=mysqli_query($connect,'SELECT * FROM digi_card WHERE id="'.$_SESSION['card_id_inprocess'].'"');
		if(mysqli_num_rows($query)==1){
			
		// enter details in database
				// compress file function creation 
						function compressImage($source,$destination,$quality){
							$imageInfo=getimagesize($source);
							
							$mime=$imageInfo['mime'];
							
							switch($mime){
								case 'image/jpeg':
								$image=imagecreatefromjpeg($source);
								break;
								case 'image/png':
								$image=imagecreatefrompng($source);
								break;
								case 'image/gif':
								$image=imagecreatefromgif($source);
								break;
								default:
								$image-imagecreatefromjpeg($source);
							}
							imagejpeg($image,$destination,$quality);
							
							return $destination;
							
						}
					
					// compress file function ended
				// image upload
				// image upload
				if(empty($_FILES['d_logo']['tmp_name'])){
				
				}else {
					
					
					$filename=$_FILES['d_logo']['name'];
							
							 $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
						$file_allow=array('png','jpeg','jpg','gif');
			if(in_array($imageFileType,$file_allow )){
							
							$source=$_FILES["d_logo"]['tmp_name'];
					$destination=$_FILES["d_logo"]['tmp_name'];
						if($_FILES["d_logo"]['size'] < 1000000){
							$quality=55;
						}
						else {echo 'Images size is more then 1MB resized automatically.';echo $quality=10; }
						
						//call the function for compressing image
						$compressimage=compressImage($source,$destination,$quality);
					
					$logo=addslashes(file_get_contents($compressimage));
							$filename2='../panel/favicons/'.date('ymdsih').$_FILES['d_logo']['name'];
							if(move_uploaded_file($compressimage,$filename2)){
								
								$update=mysqli_query($connect,'UPDATE digi_card SET d_logo_location="'.$filename2.'" WHERE id="'.$_SESSION['card_id_inprocess'].'"');
							}else {echo 'Image Not uploaded';}
							
					$updateLogo=mysqli_query($connect,'UPDATE digi_card SET d_logo="'.$logo.'" WHERE id="'.$_SESSION['card_id_inprocess'].'"');
					
							
						}else {
								echo '<div class="alert danger">Only PNG,JPG,JPEG or GIF files allowed</div>';
						}
				}
				
				// image upload
				// image upload
			$update=mysqli_query($connect,'UPDATE digi_card SET 
			
			d_f_name="'.$_POST['d_f_name'].'",
			d_l_name="'.$_POST['d_l_name'].'",
			d_position="'.$_POST['d_position'].'",
			d_code="'.$_POST['d_code'].'",
			d_contact="'.$_POST['d_contact'].'",
			d_contact2="'.$_POST['d_contact2'].'",
			d_whatsapp="'.$_POST['d_whatsapp'].'",
			d_address="'.$_POST['d_address'].'",
			d_email="'.$_POST['d_email'].'",
			d_address="'.$_POST['d_address'].'",
			d_website="'.$_POST['d_website'].'",
			d_location="'.$_POST['d_location'].'",
			d_comp_est_date="'.$_POST['d_comp_est_date'].'",
			d_about_us="'.$_POST['d_about_us'].'"
			WHERE id="'.$_SESSION['card_id_inprocess'].'"');
			
		// enter details in database ending
		
		if($update){
			echo '<a href="create_card3.php"><div class="alert info">Details Updated Wait...</div></a>';
			echo '<meta http-equiv="refresh" content="0;URL=create_card2.php">';
			echo '<style>  form {display:none;} </style>';
		}else {
			echo '<a href="create_card2.php"><div class="alert danger">Error! Try Again.</div></a>';
		}
			
		
		}else {
			
			echo '<a href="create_card.php"><div class="alert danger">Detail Not Available. Try Again Click here.</div></a>';
		}
		
	}
	?>

</div>


<footer class="">

<p> <?php echo $_SERVER['HTTP_HOST']; ?> || 2020 </p>

</footer>