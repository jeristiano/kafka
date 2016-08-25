<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>

	<div class="userShow">
	用户列表	
	</div>
	<ul id="page" class="pagination"></ul><!--分页显示处-->	
	<script src ="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="__PUBLIC__/jqPaginator/jqPaginator.js"></script>
	<!---使用jqpagenator插件,效果是bootstrap布局---->
	<script>
		$(function(){		
			$('#page').jqPaginator({
				//分页总数,来自后台
				totalPages: {$pages},
				visiblePages: 10,
				currentPage: 1,
				onPageChange: function (num) {	
					//传给后台的显示页码数.
					$.get('__CONTROLLER__/userShow/p/'+num,function(res){
						//回调显示页面
						$('.userShow').html(res);			
					});
				}
			});
		});		
	</script>	
</body>
</html>
