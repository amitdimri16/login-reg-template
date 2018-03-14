<html lang="en" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Neucha|Roboto:100,400|Material+Icons" rel="stylesheet">
	<!-- full Page -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.fullPage.css">

	<link rel="stylesheet" type="text/css" href="assets/css/login-reg-template.css">


</head>

<body>


	<div id="fullpage">
		<div class="section" style="background: #F76D6D;">

			<div id="form-wrapper">
				<ul id="tabs-wrapper">
					<li class="tab tab-login tab--active">Login</li>
					<li class="tab tab-register">Register</li>
				</ul>

				<div id="animator">

					<form role="form" action="" method="" class="login-form" id="login-form-validate">
	                    <div class="form-group">
	                        <input type="text" name="l-username" placeholder="Username" class="l-username form-control" id="l-username" data-error=".errorTxt1">
	                        <div class="errorTxt1 errorTxt"></div>
	                    </div>
	                    <div class="form-group">
	                        <input type="password" name="l-pass" placeholder="Password" class="l-password form-control" id="l-password" data-error=".errorTxt2">
	                        <div class="errorTxt2 errorTxt"></div>
	                    </div>
	                    <div class="form-group">
	                        <input type="password" name="l-pass" placeholder="Password" class="l-password form-control" id="l-password" data-error=".errorTxt2">
	                        <div class="errorTxt2 errorTxt"></div>
	                    </div>
	                    <div class="form-group">
	                        <div class="remember-me-text" style="float: left;">
	                            <input type="checkbox" id="remember-me" />
	                            <label for="remember-me">Remember me</label>
	                        </div>
	                        <a class="forgot-password" href="#">Forgot password ?</a>
	                        <div class="clear"></div>
	                    </div>
	                    <div class="form-group">
	                        <div class="input-field col s12">
	                            <p class="responseError" style="font-size: .9em;text-align: center;color: red;"></p>
	                            <button type="submit" class="btn btn-signin">Login</button>
	                        </div>
	                    </div>
	                </form>

					<form role="form" action="" method="" class="register-form" id="register-form-validate">

	                    <div class="form-group">
	                        <input type="text" name="r-fname" placeholder="Full Name" class="r-fname form-control" id="r-fname" data-error=".errorTxt1">
	                        <div class="errorTxt1 errorTxt"></div>
	                    </div>
	                    <div class="form-group">
	                        <input type="email" name="r-email" placeholder="Email" class="r-email form-control" id="r-email" data-error=".errorTxt2">
	                        <div class="errorTxt2 errorTxt"></div>
	                    </div>
	                    <div class="form-group">
	                        <input type="password" name="r-password" placeholder="Password" class="r-password form-control" id="r-password" data-error=".errorTxt4">
	                        <div class="errorTxt4 errorTxt"></div>
	                    </div>
	                    <div class="form-group">
	                        <input type="password" name="r-cpassword" placeholder="Confirm Password" class="r-cpassword form-control" id="r-cpassword" data-error=".errorTxt5">
	                        <div class="errorTxt5 errorTxt"></div>
	                    </div>
	                    <div class="form-group">
	                    	<input type="text" name="username" placeholder="Username" class="username form-control" id="username" data-error=".errorTxt6">
	                        <div class="errorTxt6 errorTxt"></div>
	                    </div>
	                    <div class="form-group">
	                        <input type="text" name="r-dob" placeholder="DOB" class="r-dob form-control" id="r-dob" data-error=".errorTxt7">
	                        <div class="errorTxt7 errorTxt"></div>
	                    </div>
	                    <input type="hidden" name="r-date">
	                    <div class="form-group">
	                        <div class="input-field col s12">
	                            <p class="responseError"></p>
	                            <button type="submit" class="btn btn-signin">Sign Up</button>
	                        </div>
	                    </div>
	                </form>
				</div>
			</div>
		</div>
	</div>


	<!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

	<!-- Full Page -->
	<script type="text/javascript" src="assets/js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="assets/js/login-reg-template.js"></script>

</body>
</html>
