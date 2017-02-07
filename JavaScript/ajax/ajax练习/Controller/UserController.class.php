<?php

namespace Demo\Controller;

use Think\Controller;

class UserController extends Controller {

    public function user() {
        $user = M('admin');
        $res = $user->select();
        $this->assign('list', $res);
        $this->display();
    }

    public function addUser(){        
        $user = M('admin');            
        if($user->create(I('post.'))){          
            $user->add();
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }
    }
    //删除用户
    public function delUser(){  
        $aid = I('get.aid');       
        $user = M('admin');            
        $user->where(['aid'=>$aid])->delete();
        $this->success('删除成功');
    }
    //编辑永华
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
