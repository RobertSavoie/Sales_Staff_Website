<?php

	$title = "WEBD3201 Login Page";
	include "../includes/header.php";

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		$email_address = trim($_POST['inputEmail']);
		$password = ($_POST['inputPassword']);
		
		$today = date("Ymd");
		$now = date("Y-m-d G:i:s");
		
		$handle = fopen("./logs/".$today."_log.txt", 'a');

		if(user_authenticate($email_address, $password))
		{
			$url = "dashboard.php";
			redirect($url);
		}
		else
		{

		}
		
		fwrite($handle, "Attempted sign in at ".$now.". User <".$email_address."> sign in.\n");

		fclsoe($handle);
		
	}

?>



<form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<h1 class=" h3 mb-3 font-weight-normal"> Please sign in </h1>
	<label for="inputEmail" class="sr-only">Email Address</label>
	<input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
	<label for="inputPassword" class="sr-only">Password</label>
	<input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
</form>