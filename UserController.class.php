<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
/**
	无刷新分页
	初始页面 初始数据
	点击第几页，触发jq执行ajax,XXX.php?page=n,php通过传值的n获取第二页的数据`
	后台传json数据到jq
	Jq遍历res,组成布局代码(第二页数据)
	XXX.html(布局代码);
**/
class UserController extends Controller {	
   //用户显示页面
    public function userShow() {
         $admin = M('user');
		 //接受前台当前点击页码数
        $p = I('get.p', 1);
		//每页显示条目数
        $pagesize = 4;       
        $res = $admin->page("{$p},{$pagesize}")->select();
        $this->assign('res', $res);
        $this->display();
       
    }
	//用户列表页面
    public function userList() {
		//计算出分页总数,进一取整.
        $pagenums = ceil(M('user')->count() / 4);
        $this->assign('pages', $pagenums);
		$this->display();
	}
   
}
