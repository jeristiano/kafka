<?php

namespace Home\Model;

use Think\Model;

class UsersModel extends Model {

    protected $_validate = array(
        array('uname', '', '帐号名称已存在！', 0, 'unique', 1),
        array('uname', 'require', '用户名不能为空', 0),
        array('uname', '/^[a-zA-Z]\w{4,16}\w$/', '用户名格式不正确', 0, 'regex'),
        array('pwd2', 'pwd', '两次密码不一致', 0, 'confirm'),
        array('pwd', 'require', '密码不能为空', 0),
        array('cellphone', 'require', '手机号码不能为空', 0),
        array('cellphone', "/^1((3[0-9])|(4[57])|(5[012356789])|(8[02356789]))[0-9]{8}$/", '手机号码格式不正确', 0, 'regex'),
        array('email', 'require', '邮箱必填', 0),
        array('email', 'email', '邮箱格式不正确', 0),
    );
    
     protected $_auto = array ( 
         array('status','1'),  // 新增的时候把status字段设置为1
         array('pwd','md5',1,'function') , // 对password字段在新增和编辑的时候使md5函数处理      
         array('ctime','time',1,'function'), // 对update_time字段在更新的时候写入当前时间戳
     );

}
