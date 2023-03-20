<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/1248a619a0.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="../img/cal.png">
	<link rel="stylesheet" href="../css/account.css">
	<script type="text/javascript" 
    	src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  
    </script>
    
</head>
<body>
	
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#">
				<h1>Create Account</h1>
				<input type="text" placeholder="Name" id="name" />
				<input type="text" placeholder="Username" id="username" />
				<input type="password" placeholder="Password" id="password" />
				<button id="register">Sign Up</button>
				<span class="succesmsg hide" id="sMsg">Account created succesfully. You can Sign In now.</span>
				<span id="erMsg" class="errMsg hide">You already have an account.</span>
			</form>

		</div>
		<div class="form-container sign-in-container">
			<form action="#">
				<h1>Sign in</h1>
				<input type="text" id="lusername" placeholder="Username" />
				<input type="password" id="lPassword" placeholder="Password" />
				<!-- <a href="#">Forgot your password?</a> -->
				<button id="login">Sign In</button>
				<span id="erMsgL" class="errMsg hide">Please check user name and password. Please sign up if you dont have an account.</span>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Doctor!</h1>
					<p>Enter your details</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script src="../js/account.js"></script>
</body>