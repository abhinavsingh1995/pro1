<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class="container">
	
	<?php 
	
		echo form_open('Admin_panel/login_action');
		
		echo validation_errors();
		
		$username=array(
		'id'=>'username',
		'name'=>'username',
		'required'=>'required',
		'placeholder'=>'UserName',
		);

		echo "<p>Username: ";  
		echo form_input($username);  
		echo "</p>";  
		
		$password=array(
		'id'=>'password',
		'name'=>'password',
		'placeholder'=>'password',
		);
		
		echo "<p>Password: ";  
		echo form_password($password);  
		echo "</p>";  

		echo "</p>";  
		echo form_submit('login_submit', 'Login');  
		echo "</p>";  

		echo form_close();
		
	?>
</body>
</html>