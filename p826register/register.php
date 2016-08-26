<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册表单</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		.input-group{width:300px;margin-top:14px;}
		.form{margin:0px 45px;}
		.frm{border:1px solid #efefef;border-radius:4px;box-shadow: 4px 4px 10px #484848;background:#f6f6f6;}  
		 body{background:  url(https://bbc01.demo.shopex123.com/app/topshop/statics/images/bj_01.jpg) 0 / cover fixed; }


	</style>
</head>
<body>
	<!--提示信息显示处-->
	<?php	
		if(!isset($_GET['info'])){ ?>
		<div  style='height:60px;line-height:60px;'></div>	
		<?php }else{?>
		<div class='bg-info ' style='height:60px;line-height:60px;padding:0px 16px; box-shadow: 2px 2px 10px #cdcdcd'>提示:<?php echo $_GET['info'];?></div>

	<?php }?>
	<div class="container" style='margin-top:50px;'>
	  <div class="row">
		<div class=" col-md-4"></div>
		  <div class=" col-md-4 frm ">
				<form class="form-horizontal form" method='post' action='./do_register.php' enctype="multipart/form-data">
				<h3 class=''>Now,Let's get started!</h3>			
				  <div class="form-group">			
					<div class="input-group">
					  <div class="input-group-addon "><span class='glyphicon glyphicon-user'></span></div>
					  <input type="text" class="form-control" name='uname' placeholder="账号">				
					</div>					
					<div class="input-group">
					  <div class="input-group-addon "><span class='glyphicon glyphicon-lock'></span></div>
					  <input type="password" class="form-control" name='pwd' placeholder="密码">				
					</div>
					<div class="input-group">
					  <div class="input-group-addon "><span class='glyphicon glyphicon-check'></span></div>
					  <input type="password" class="form-control"   name='pwd2' placeholder="密码确认">				
					</div>
					<div class="input-group">
					  <div class="input-group-addon "><span class='glyphicon glyphicon-envelope'></span></div>
					  <input type="text" class="form-control"  name='email' placeholder="邮箱">				
					</div>		
					<div class="input-group">
					  <div class="input-group-addon "><span class='glyphicon glyphicon-phone'></span></div>
					  <input type="text" class="form-control"  name='tel' placeholder="手机">				
					</div>
					<div class="input-group">
					  <div class="input-group-addon "><span class='glyphicon glyphicon-picture'></span></div>
					  <input type="file" class="form-control"  name='icon' placeholder="头像">				
					</div>
				  </div>
				  <button type="submit" style='height:40px;padding:4px 8px;' name='sub' class="btn btn-info btn-lg btn-block">注册</button>
				</form>
				<hr/>
		  </div>
		  <div class="col-md-4"></div>
	  </div>
	</div>
</body>
</html>
