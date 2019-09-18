<?php
    require_once 'backend/has_login.php';
    $index = <<<ttt
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>用户管理系统</title>

	<link rel="stylesheet" href="/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/path.js"></script>
	<script src="assets/cookie.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body lockscreen-page">
	<div class="login-container">
		<div class="row">
			<div class="col-sm-7">
				<script type="text/javascript">
				
					jQuery(document).ready(function($) {
						// Reveal Login form
						setTimeout(function () {
							$(".fade-in-effect").addClass('in');
						}, 1);

						//Form validation and AJAX request
						$(".lockcreen-form").validate({
							rules: {
								username: {
									required: true
								},
								passwd: {
									required: true
								}
							},
							messages: {
								username: {
									required: ''
								},
								passwd: {
									required: ''
								}
							},
								submitHandler: function(form)
								{

							show_loading_bar(70); 

									var username = document.getElementById('username').value;
									var passwd = btoa(document.getElementById('passwd').value);
									// console.log(passwd);

							$.ajax({
										url: path+"/login.php",
										method: 'POST',
										dataType: 'json',
								        contentType:"application/json",
								        headers:{
											'Content-Type':'application/x-www-form-urlencoded'
										},
										data: {
											"username": username,
											"passwd": passwd,
										},
										success: function(resp)
										{
											if(resp == "no_info"){
												toastr.error("用户名或密码错误", "Invalid Login!");
											}else if(resp == "lack_info"){
												toastr.error("用户名或密码错误", "Invalid Login!");
											}else if(resp == "success"){
												document.cookie="username="+username;
												document.cookie = "info=d";
												// console.log(document.cookie);
												// console.log(get_cookie("username"));
												window.location.href="info.php";
											}else if(resp == "more_user"){
											    toastr.error("有重复用户，请联系管理员", "Invalid Login!");
											}else{
												toastr.error("请检查网络情况，稍后再试", "Try Again!");
											}
										},
										error:function(xhr){
										    console.log("error");
										    console.log(xhr.responseText);
										}
									});



								}
							});
                    
						});

				</script>
				
				<form role="form" id="lockscreen" class="lockcreen-form fade-in-effect">
					
					<div class="user-thumb">
						<a href="#">
							<img src="assets/images/hyj.jpg" class="img-responsive img-circle" />
						</a>
					</div>
					
					<div class="form-group">
						<h3>欢迎登录用户管理系统<?PHP echo "abc";?></h3>
						<p>请输入您的用户名和密码.</p>
						
						<div class="input-group">
							<input type="username" class="form-control input-dark" name="username" id="username" placeholder="Username" />
							<span class="input-group-btn">
								<div style="display: none" class="btn btn-primary"class="btn btn-primary">Log In</div>
							</span>
						</div>
						<div class="input-group">
							<input type="password" class="form-control input-dark" name="passwd" id="passwd" placeholder="Password" /> 
							<span class="input-group-btn">
								<div style="display: none" class="btn btn-primary"class="btn btn-primary">Log In</div>
							</span>
						</div>
						<div class="input-group">	
							<span class="input-group-btn">
								<button type="submit" id="login"  class="btn btn-primary" >Log In</button>
							</span>
						</div>
					</div>
					
				</form>
				
			</div>
			
		</div>
		
	</div>



	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
	<script src="assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>
ttt;
    echo $index;
?>
