<html>
<head>
<title>
<?php echo "facebook page using div" ; ?>
</title>
</head>
<div>
<div style="height:100px;background-color:darkblue;">
	<div style="width:50%;float:left; font-size:40px; color:white; font-weight:bold; margin:25px;">facebook</div>
	<div>
	<p><label>Email or Phone</label><label>Password</label> </p>
	<p><input type="text"/>
	<input type="password"/>
	
	<input type="submit" value="Log In" />
	</p>
	</div>
</div>
<div>
	<div style="font-size:20px;">
	<div style="float:left;width:50%;">
	<p>Facebook helps you connect and share with the people in your life.</p>
		<div><img src="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/OBaVg52wtTZ.png?_nc_x=Ij3Wp8lg5Kz"/>
		</div>
	</div>	
	<div style="float:left;width:50%;">
		<div>
		<p style="font-size:40px; font-weight:bold;">Create an account</p>
		<p>It's quick and easy.</p>
		</div>
		<div>
			<form action="" method="">
			<p>
				<input type="text" name="fname" placeholder="First Name">
				<input type="text" name="lname" placeholder="Surname">
			</p>
			<p>
				<input type="text" name="mobile_email" placeholder="mobile number or email address">
			</p>
			<p>
				<input type="password" name="psw" placeholder="New Password">
			</p>
			<p>Birthday</p>
				<select name="days">
				<?php for($i=1;$i<31; $i++) { ?>
				<option><?php echo $i; ?></option>
				<?php } ?>
				</select>
				<select name="Birthday">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				</select>
			</form>
		</div>
	</div>
	</div>
</div>
</div>
</html>