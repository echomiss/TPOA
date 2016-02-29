<?php
//设置命名空间
namespace Home\Controller;
//引入核心控制器类
use Think\Controller;
//空控制器
class EmptyController extends Controller {
	//当用户访问不存在的控制器时，跳转到404页面
	public function index(){
		$this->display('Public/404');
	}
}