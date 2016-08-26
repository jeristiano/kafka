<?php	
	//引入数据库	
	$link=@mysql_connect('localhost','root','root') or exit('服务器链接失败');
	mysql_select_db('thinkshop') or exit('数据库不存在');
	mysql_query('set names utf8');	
	//获取post变量数据
	$email =$_POST['email'];
	$uname =$_POST['uname'];
	$pwd =$_POST['pwd'];
	$pwd2 =$_POST['pwd2'];
	$tel =$_POST['tel'];	
	print_r($_FILES);
	die();
	//正则判断
	if(!isset($_POST['sub'])){
		$info ="非法访问";			
			header("location: ./register.php?info=$info");
			die();
		}
		//账户名判断6-18位 数字和字母 下划线.
		if(!preg_match("/^[a-zA-Z]\w{4,16}\w$/",$uname)){
			$info ="账户名为6-18位数字和字母下划线";			
			header("location: ./register.php?info=$info");
			die();
					
		}
		//判断两次密码是否一致;
		if($pwd!=$pwd2){
			$info ="两次密码不一致";			
			header("location: ./register.php?info=$info");
			die();	
		}		
		//邮箱名字判断
		if(!preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/",$email)){
			$info ="邮箱格式不正确";			
			header("location: ./register.php?info=$info");
			die();				
		}	
		//手机号码判断
		if(preg_match("/^1[3|4|5|8|7]\d{9}$/",$tel)==0){
			$info ="手机号码格式不正确";			
			header("location: ./register.php?info=$info");
			die();		 
		}

	//判断是否有图片上传
		
		$file_name = $_FILES['icon']["name"];
		//通过empty()判断文件是否为空
		if(empty($file_name)==true){					
			$info ="未上传图片";			
			header("location: ./register.php?info=$info");
			die();	
		
		}
		//判断上传目录是否存在,不存在就创建.
		$path = "./upload/";
		if(is_dir("./upload/")==false){
			//加上@人为的屏蔽掉warning的提示.
			 @mkdir("./upload/",0777);				
		
		}
		//判断文件类型是否符合
		$allow = array("bmp","jpg","png","gif");		//建立一个允许的图片后缀名数组.
		$allow_arr = explode(".",$file_name);			//获取上传文件后缀名数组
		$pfix = end($allow_arr);						//指针指向最后元素,得到后缀名.
		
		if(in_array($pfix,$allow)==true){				//判断后缀名是否在标准数组里,存在,命名,不存在,提示错误.	
			$file_name=$_FILES['icon']["name"];
		}else{
			$info ="只支持 jpg/ png/ bmp/ gif/ 文件上传";			
			header("location: ./register.php?info=$info");
			die();
			}
		//判断临时文件是否存在
		$file_tmp_name = $_FILES['icon']["tmp_name"];
		
		if(is_file($file_tmp_name)==false){
			$info ="临时文件出错请重装系统";			
			header("location: ./register.php?info=$info");
			die();				
		}
		//判断错误类型
		$error = $_FILES['icon']["error"];
		if($error!=0){
			$info ="上传失败";			
			header("location: ./register.php?info=$info");
			die();				
		}
		//判断文件大小是否超出限制
		$size = $_FILES['icon']["size"];
		$max_size = 2*1024*1024;
		if($size >= $max_size){
			$info ="文件上传大小超出限制,2M";			
			header("location: ./register.php?info=$info");
			die();
			
		}
		//命名文件(保证每一个文件名字唯一)
		$file_name = md5(time().rand("1111","9999")).".".$pfix;  //使用MD5加密保证名字为32位,使用rand()让名字随机			

		//判断文件上传是否成功

		$res = move_uploaded_file($file_tmp_name,$path.$file_name );
	
		if(!$res){
			$info = "上传失败";			
			header("location: ./register.php?info=$info");
			die();
		}
	
	//处理数据
	$thumb = $path.$file_name;
	$pwd = md5($pwd);
	$ctime = time();
	//该用户名是否已经注册过
	$query = "select uname from ts_users where uname ='{$uname}' && pwd ='{$pwd}' ";
	$result=mysql_query($query);
	$re = mysql_num_rows($result);
	if($re){
		$info = "该用户已经注册过";			
			header("location: ./register.php?info=$info");
			die();
	}
	 $sql = "insert into ts_users(uname,pwd,email,cellphone,thumb,ctime) values('{$uname}','{$pwd}','{$email}','{$tel}','{$thumb}','{$ctime}')";
	$res = mysql_query($sql);	
	if($res){
		echo"注册成功";			
			
	}else{
		echo"注册失败";	
	}
