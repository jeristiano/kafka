### desktop_controller控制器基类


----------
### 功能描述

后台控制器专用基类, 默认情况下会开启session, 提供常用的页面渲染函数等.

### 应用场景

后台控制器

### 继承关系
![enter image description here](http://ecos.phpwindow.com/_dot_db1f757a14eb1d3f776885792af7bbb6.gif)

### 使用方法

### 函数接口

**__construct**

- 定义后台不使用缓存
- 开启session，因此如果是调用了desktop_controller需要用到session的时候不需要在开启session;
- 判断自动登录
- 判断登录者的权限
- 获取注册service desktop_controller_content.*：修改输出内容
- 获取注册service desktop_controller_content_finderdetail.****，修改tab detail 里的内容

**redirect**

直接跳转到指定地址

	参数
	    array   $url
	
	返回
	   null
```php
<?php
    ...
    $this->redirect(array('app'=>'desktop','ctl'=>'admin_default','act'=>'index'));
    ...

```


**location_to**

跳转到当前页面

	function location_to()

**finder**

显示后台列表函数

**url_frame**

后台的列表区域自定义iframe

	function index(){
	   $this->url_frame('www.baidu.com');
	}
![enter image description here](http://club.ec-os.net/doc/ecos/framework-ecos/advance/desktop/image/url_frame.png)

**singlepage**

显示页面,默认配合target=_blank使用时，显示的页面不包含框架的其他页面，只是本身页面


	'href'=>'index.php?app=b2c&ctl=admin_goods_editor&act=add',
	'target'=>'_blank'),
	...
	$this->singlepage('admin/goods/detail/frame.html');

![enter image description here](http://club.ec-os.net/doc/ecos/framework-ecos/advance/desktop/image/singlepage.png)

**page**

显示页面,如果page配合target=_blank使用时,显示的页面包含在框架里面，显示在后台的自定义列表中

如果是page配合target=dialog使用时，则显示的是弹出层页面（display配合target=dialog使用时也有同样的效果）

例1

	'href'=>'index.php?app=b2c&ctl=admin_goods_editor&act=add',
	'target'=>'_blank'),
	...
	$this->page('admin/goods/detail/frame.html');
![enter image description here](http://club.ec-os.net/doc/ecos/framework-ecos/advance/desktop/image/desktop_page.png)


例2

	'href'=>'index.php?app=b2c&ctl=admin_member&act=add_page','target'=>'dialog::{title:\''.
	app::get('b2c')->_('添加会员').'\',width:460,height:460}'),
	...
	$this->page('admin/member/new.html');

![enter image description here](http://club.ec-os.net/doc/ecos/framework-ecos/advance/desktop/image/display.png)


**splash**

信息提示，ajax输出,begin end方法信息输出调用此方法

	function splash($status='success',$url=null,$msg=null,$method='redirect',$params=array())
	
	参数
	    string  $status=error是输出错误信息，默认输出正确提示信息
	    string  $url自定义拼接的URL,一般为空
	    string  $msg要输出的信息
	    string  $method
	    array   $params当参数为array('splash'=>'1') 时，则表示只是输出自定义信息

例1 
```php
 <?php

//输出正确信息
$this->splash('success','','正确信息');

//输出错误信息
$this->splash('error','','错误信息','redirect',array('splash'=>'1'));
```

**jumpTo**

跳转到当前app的，控制器中的某个方法中进行运行

	function jumpTo($act='index',$ctl=null,$args=null){
	参数
	    string  $act控制器中的方法名
	    string  $ctl控制器名
	    array   $args参数

**has_permission**

判断当前用户的权限

**display**

display和base_render中的display方法一样

display配合target=dialog使用时，显示的页面为弹出层

	'href'=>'index.php?app=b2c&ctl=admin_member&act=add_page','target'=>'dialog::{title:\''.
	app::get('b2c')->_('添加会员').'\',width:460,height:460}'),
	...
	$this->display('admin/member/new.html');
![enter image description here](http://club.ec-os.net/doc/ecos/framework-ecos/advance/desktop/image/display.png)

**pre_display**

和base_render中的pre_display方法一样，只是注册的service是不一样的.

这个service是desktop_render_pre_display


### desktop_controller提供的service


----------
**app_pre_auth_use**

后台登录之前的预先验证，可以在扩展此service在登录的之前做一些操作此servic是desktop_controller的构造方法提供

**desktop_controller_content.%s.%s.%s**

这个service常用到的service ID是 desktop_controller_content.desktop.default.index。因为这个service是在构造方法提供的，一般用于的是对后台统一的页面的修改，例如：修改后台logo

可参考：site_controller_content.%s.$s.$s 只是这个是前台而desktop_controller_content.%s.%s.%s是后台

service类的写法

	modify方法：和site_controller_content service类的写法一样
	boot方法：一般修改或则设置后台系统共用的一些配置，最后返回true

**desktop_controller_content_finderdetail.%s.%s.%s.%s**

修改tab detail里的内容

**desktop_controller_destruct**

deskop_controller_destruct 是desktop_controller提供的析构方法例如：Ecstore中的后台中操作日志中记录管理员日志就是用这个service做的

注册service

	···
	<servic id="desktop_controller_destruct">
	    <class>operatorlogmanage_service_desktop_controller</class>
	</servic>
	···
类的写法

```php
<?php
class operatorlogmanage_service_desktop_controller{

    public  function destruct($controller){
        //$controller是控制器中的所有属性 $this
        $this->_logs($controller);
    }

    public function _logs($controller){
           //需要执行的代码 不需要返回值
    }

}
```

**desktop_controller_display.%s.%s.%s**

`作用：控制器劫持，页面劫持`

这个是service是由desktop_controller中的page方法和singlepage方法提供，因此要使用此service则必须是，要劫持的控制中调用了page或则是singlepage方法，这样才能够进行页面劫持或则是控制器劫持

`用法：`
参考：1、控制器劫持，2、页面劫持参考**site_controller_display.%s.%s.%s**

**desktop_controller_display.%s.%s.%s** 用法和**site_controller_display.%s.%s.%s**原理是一样的，只是一个是后台一个是前台


**tpl_source.**

参照base_controller中的base_render中的tpl_source.方法，用法写法一样

**desktop_render_pre_display**

参照base_controller中的base_render中的deskop_render_pre_display方法，用法写法一样
