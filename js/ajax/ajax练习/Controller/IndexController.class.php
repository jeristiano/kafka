<?php

namespace Demo\Controller;

use Think\Controller;

class IndexController extends Controller {

    //分页
    public function login() {
        $user = M('admin');       
        $count = $user->count(); // 查询满足要求的总记录数
        $Page = new \Think\Page($count, 6); // 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show(); // 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $user->limit($Page->firstRow . ',' . $Page->listRows)->select();
        $this->assign('list', $list); // 赋值数据集
        $this->assign('page', $show); // 赋值分页输出
        $this->display();
    }

    public function addUser() {
        $user = M('admin');
        if ($user->create(I('post.'))) {
            $user->add();
            $this->success('添加成功');
        }
    }

    public function delUser() {
        $user = M('admin');
        $user->where(['aid' => I('get.aid')])->delete();
        $this->success('删除成功');
    }
    
     public function editUser(){  
        
        $user = M('admin');            
      if($user->create(I('post.'))){
         echo $user->save();
          $this->success('成功');
      }else{
          echo '2';
      }
      
      
    }

}
