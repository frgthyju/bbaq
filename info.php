<?php
    require_once 'backend/check_login.php';

    $info=<<<ttt
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>用户管理系统</title>

	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/cookie.js"></script>
	<script src="assets/path.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body">
<div class="settings-pane">
	<a href="#" data-toggle="settings-pane" data-animate="true">
		&times;
	</a>
	<div class="settings-pane-inner">
		<div class="row">
			<div class="col-md-4">
				<div class="user-info">
					<div class="user-image">
						<a >
							<img src="assets/images/hyj.jpg" class="img-responsive img-circle" />
						</a>
					</div>

					<div class="user-details">
						<h3>
								<span id="up_userinfo">
                                <script>
                                   document.getElementById('up_userinfo').innerText= get_cookie("username") ;
                                </script>
							    </span>
							<!--								<a >Username</a>-->
							<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
							<span class="user-status is-online"></span>
						</h3>

						<p class="user-title">管理员</p>
						<!--							<div class="user-links">-->
						<!--								<a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>-->
						<!--								<a href="extra-profile.html" class="btn btn-success">Upgrade</a>-->
						<!--							</div>-->
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
	<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
	<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
	<div class="sidebar-menu toggle-others fixed">

		<div class="sidebar-menu-inner">
			<header class="logo-env">
				<div class="mobile-menu-toggle visible-xs">
					<a href="#" data-toggle="user-info-menu">
						<i class="fa-bell-o"></i>
						<span class="badge badge-success">7</span>
					</a>

					<a href="#" data-toggle="mobile-menu">
						<i class="fa-bars"></i>
					</a>
				</div>

				<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
				<div class="settings-icon">
					<a href="#" data-toggle="settings-pane" data-animate="true">
						<i class="linecons-cog"></i>
					</a>
				</div>

			</header>



			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="active opened active">
					<a >
						<i class="linecons-database"></i>
						<span class="title">用户信息</span>
					</a>
			</ul>
		</div>
	</div>

	<div class="main-content">
		<!-- User Info, Notifications and Menu Bar -->
		<nav class="navbar user-info-navbar" role="navigation">

			<!-- Left links for user info navbar -->
			<ul class="user-info-menu left-links list-inline list-unstyled">

				<li class="hidden-sm hidden-xs">
					<a href="#" data-toggle="sidebar">
						<i class="fa-bars"></i>
					</a>
				</li>
			</ul>

			<!-- Right links for user info navbar -->
			<ul class="user-info-menu right-links list-inline list-unstyled">
				<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
					<form method="get" >
						<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />

						<button type="submit" class="btn btn-link">
							<i class="linecons-search"></i>
						</button>
					</form>

				</li>

				<li class="dropdown user-profile">
					<a href="#" data-toggle="dropdown">
						<img src="assets/images/hyj.jpg" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
						<span id="userinfo">
                                <script>
                                   document.getElementById('userinfo').innerText= get_cookie("username") ;
                                </script>
							</span>
					</a>
				</li>

				<li class="dropdown user-profile">
					<a onclick='logout()' data-toggle="dropdown">
							<span>
								退出
							</span>
					</a>
				</li>
			</ul>

		</nav>

		<!-- Table Styles -->
		<div class="row">
			<div id='add_success' class="col-md-6" style="display: none">
				<div class="alert alert-success">
					<span id="back_info"></span>
				</div>
			</div>
			<div class="col-md-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">用户信息表</h3>

						<div class="panel-options">
							<a href="#" data-toggle="reload">
								<a href="javascript:;" onclick="jQuery('#add_modal').modal('show', {backdrop: 'static'});" ><i class="fa fa-plus"></i></a>
							</a>
						</div>
					</div>

					<div class="panel-body panel-border">
						<div class="row">
							<div class="col-sm-12">

								<table id="all_user" class="table table-model-2 table-hover">
									<thead>
									<tr>
										<th>姓名</th>
										<th>电话</th>
										<th>地址</th>
										<th>工作地点</th>
										<th>操作</th>
									</tr>
									</thead>
								</table>

								<div class="col-xs-6" style="margin: auto;display: block;float: none">
									<div class="dataTables_paginate paging_simple_numbers" id="example-1_paginate">
										<ul id="page_num" class="pagination">
										</ul>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Tables and Panels -->

		<!-- Main Footer -->
		<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
		<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
		<!-- Or class "fixed" to  always fix the footer to the end of page -->
		<footer class="main-footer sticky footer-type-1">
			<div class="footer-inner">
				<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
				<div class="go-up">
					<a href="#" rel="go-top">
						<i class="fa-angle-up"></i>
					</a>
				</div>
			</div>
		</footer>
	</div>


	<!-- start: Chat Section -->
	<div id="chat" class="fixed">

		<div class="chat-inner">


			<h2 class="chat-header">
				<a href="#" class="chat-close" data-toggle="chat">
					<i class="fa-plus-circle rotate-45deg"></i>
				</a>

				Chat
				<span class="badge badge-success is-hidden">0</span>
			</h2>

			<div class="chat-group">
				<strong>Favorites</strong>

				<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
				<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
			</div>


		</div>

	</div>

	<div class="modal fade" id="add_modal">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">添加用户信息</h4>
				</div>

				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="name" class="control-label">姓名</label>
								<input type="text" class="form-control" id="name">
							</div>

						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="phone" class="control-label">手机号</label>
								<input type="text" class="form-control" id="phone">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="address" class="control-label">住址</label>
								<input type="text" class="form-control" id="address">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="workunit" class="control-label">工作单位</label>
								<input type="text" class="form-control" id="workunit">
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
					<button type="button" class="btn btn-black" onclick="add_userinfo()">添加</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="mod_modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">修改用户信息</h4>
				</div>

				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="name" class="control-label">姓名</label>
								<input type="text" class="form-control" id="mod_name">
							</div>

						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="phone" class="control-label">手机号</label>
								<input type="text" class="form-control" id="mod_phone">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="address" class="control-label">住址</label>
								<input type="text" class="form-control" id="mod_address">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="workunit" class="control-label">工作单位</label>
								<input type="text" class="form-control" id="mod_workunit">
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
					<button type="button" id="mod_submit" class="btn btn-black" onclick="mod_userinfo_detail()">修改</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	//查询用户信息
	window.onload = function(){
		$.ajax({
			url: path+"/db_userinfo/db_select_userinfo.php",
			method: 'POST',
			dataType: 'json',
			data:{
				"page_id":1
			},
			contentType:"application/json",
			headers:{
				'Content-Type':'application/x-www-form-urlencoded'
			},
			success: function(resp)
			{
				table_info(resp);
			},
			error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
		});
	}

	function table_info(resp){
		console.log(resp);
		if(resp['data'] == "no_info"){
			$("#all_user").empty();
			$("#page_num").empty();
			console.log("no_info");
		}else{
			let str = "";
			let page_str = "";
			let li = "";
			$("#all_user").empty();
			//表格信息
			for(let i=0;i<resp['data'].length;i++){
				str = "<tr><td>"+resp['data'][i].name+"</td>"+
						// "<td>"+resp[i].phone+"</td>"+
						"<td>"+resp['data'][i].phone+"</td>"+
						"<td>"+resp['data'][i].address+"</td>"+
						"<td>"+resp['data'][i].workunit+"</td>"+
						"<td><a onclick='mod_userinfo("+resp['data'][i].id+")' ><i class=\"linecons-cog\"></i></a >      <a onclick='dele_userinfo("+resp['data'][i].id+")'><i class=\"fa fa-trash-o\"></i></a></td></tr>";
				$("#all_user").append(str);
			}
			console.log(str);

			$("#page_num").empty();
			//previous按钮控制
			if(resp['page_id']==1){
				 li = "<li  class='paginate_button previous disabled' aria-controls='example-1' tabindex='0' id='example-1_previous'>" +
						"<a href='#'>Previous</a></li>";
			}else{
				 li = "<li  class='paginate_button previous' onclick='change_page("+(resp['page_id']-1)+")' aria-controls='example-1' tabindex='0' id='example-1_previous'>" +
						"<a href='#'>Previous</a></li>";
			}
			$("#page_num").append(li);

			//分页页码部分信息
			 console.log("fd");
			 console.log(resp['page_id']);
			for(let v=1;v<=resp['page_num'];v++){
				if(v==resp['page_id']){
					page_str = "<li class='paginate_button active'  aria-controls='example-1' tabindex='0'>" +
							"<a href='#'>"+v+"</a></li>";
				}else{
					page_str = "<li class='paginate_button' onclick='change_page("+v+")' aria-controls='example-1' tabindex='0'>" +
							"<a href='#'>"+v+"</a></li>";
				}
				$("#page_num").append(page_str);
			}
			//next按钮控制
			if(resp['page_id']==resp['page_num']){
				li="<li class='paginate_button next disabled' aria-controls='example-1' tabindex='0' id='example-1_next'>" +
						"<a href='#'>Next</a></li>" ;
			}else{
				let page_tmp = new Number(resp['page_id'])+1;
				console.log(typeof(page_tmp));
				console.log(page_tmp)
				li="<li class='paginate_button next ' onclick='change_page("+page_tmp+")' aria-controls='example-1' tabindex='0' id='example-1_next'>" +
						"<a href='#'>Next</a></li>" ;
			}

			$("#page_num").append(li);
		}
	}

	function change_page(id){
		$.ajax({
			url: path+"/db_userinfo/db_select_userinfo.php",
			method: 'POST',
			dataType: 'json',
			data: {
				"page_id": id
			},
			contentType:"application/json",
			headers:{
				'Content-Type':'application/x-www-form-urlencoded'
			},

			success: function(resp)
			{
				table_info(resp);
			},
			error:function(xhr){console.log(xhr.responseText);}
		});
	}

	//添加用户信息
	function add_userinfo(){
		var name= document.getElementById('name').value;
		var phone= document.getElementById('phone').value;
		var address= document.getElementById('address').value;
		var workunit= document.getElementById('workunit').value;

		if(name==""){
			toastr.error("请填写姓名", "Invalid Info!");
		}else{
			$.ajax({
				url: path+"/db_userinfo/db_add_userinfo.php",
				method: 'POST',
				dataType: 'json',
				data: {
					"name": name,
					"phone": phone,
					"address": address,
					"workunit": workunit,
				},
				contentType:"application/json",
				headers:{
					'Content-Type':'application/x-www-form-urlencoded'
				},

				success: function(resp)
				{
					if(resp == '1'){
						jQuery('#add_modal').modal('hide');
						document.getElementById('back_info').innerText="添加数据成功";
						document.getElementById('add_success').style.display="inline";
						setTimeout("window.location.href='info.php'",1000);
						 //setTimeout("change_page(1)",1000);
						//document.getElementById('add_success').style.display="none";
					}else{
						toastr.error("请检查网络情况，稍后再试", "Try Again!");
					}
				},
				error:function(xhr){console.log(xhr.responseText);}
			});
		}

	}

	//修改用户信息界面
	function mod_userinfo(user_id){
		console.log(user_id);
		$.ajax({
			url: path+"/db_userinfo/db_search_userinfo.php",
			method: 'POST',
			dataType: 'json',
			contentType:"application/json",
			data:{
				"id":user_id
			},
			headers:{
				'Content-Type':'application/x-www-form-urlencoded'
			},
			success: function(resp)
			{
				// console.log(resp.name);
				document.getElementById('mod_name').value = resp.name;
				document.getElementById('mod_phone').value = resp.phone;
				document.getElementById('mod_address').value = resp.address;
				document.getElementById('mod_workunit').value = resp.workunit;
				document.getElementById('mod_submit').value = resp.id;
			},
			error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
		});
		jQuery('#mod_modal').modal('show', {backdrop: 'static'});
	}

	//修改用户具体信息
	function mod_userinfo_detail(){
		$.ajax({
			url: path+"/db_userinfo/db_modify_userinfo.php",
			method: 'POST',
			dataType: 'json',
			contentType:"application/json",
			data:{
				"id":document.getElementById('mod_submit').value,
				"name":document.getElementById('mod_name').value,
				"phone":document.getElementById('mod_phone').value,
				"address":document.getElementById('mod_address').value,
				"workunit":document.getElementById('mod_workunit').value,
			},
			headers:{
				'Content-Type':'application/x-www-form-urlencoded'
			},
			success: function(resp)
			{
				if(resp=="1"){
					jQuery('#mod_modal').modal('hide');
					document.getElementById('back_info').innerText="修改数据成功";
					document.getElementById('add_success').style.display="inline";
					 setTimeout("window.location.href='info.php'",1000);
					 //setTimeout("document.getElementById('add_success').style.display='none',1000);
					 //setTimeout("change_page(1)",1000);

				}else{
					toastr.error("请检查网络情况，稍后再试", "Try Again!");
				}
			},
			error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
		});
	}

	//删除用户信息
	function dele_userinfo(user_id){
		$.ajax({
			url: path+"/db_userinfo/db_delete_userinfo.php",
			method: 'POST',
			dataType: 'json',
			contentType:"application/json",
			data:{
				"id":user_id,
			},
			headers:{
				'Content-Type':'application/x-www-form-urlencoded'
			},
			success: function(resp)
			{
				console.log(resp);
				if(resp=="1"){
					document.getElementById('back_info').innerText="删除数据成功";
					document.getElementById('add_success').style.display="inline";
				    setTimeout("window.location.href='info.php'",1000);
					//setTimeout("change_page(1)",1000);
					//document.getElementById('add_success').style.display="none";
				}else{
					toastr.error("请检查网络情况，稍后再试", "Try Again!");
				}
			},
			error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
		});
	}

	//退出
	function logout(){
		$.ajax({
			url: path+"/logout.php",
			method: 'POST',
			dataType: 'json',
			contentType:"application/json",
			headers:{
				'Content-Type':'application/x-www-form-urlencoded'
			},
			success: function(resp)
			{
				console.log(resp);
				if(resp=="success"){
					let keys = document.cookie.match(/[^ =;]+(?=\=)/g);
					console.log(keys);
					if(keys){
						for(let i=keys.length;i--;){
							document.cookie = keys[i]+'=0;expires='+new Date(0).toUTCString();
						}
					}
					window.location.href='index.php';
				}else{
					toastr.error("安全退出失败，请稍后再试", "Try Again!");
				}
			},
			error:function(xhr){console.log("wrong");console.log(xhr.responseText);}
		});
	}

</script>



<!-- Bottom Scripts -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/resizeable.js"></script>
<script src="assets/js/joinable.js"></script>
<script src="assets/js/xenon-api.js"></script>
<script src="assets/js/xenon-toggles.js"></script>
<script src="assets/js/toastr/toastr.min.js"></script>

<!-- JavaScripts initializations and stuff -->
<script src="assets/js/xenon-custom.js"></script>

</body>
</html>
ttt;
    echo $info;
    ?>