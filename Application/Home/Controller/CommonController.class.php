<?php
//命名空间
namespace Home\Controller;
//引入核心控制器
use Think\Controller;
//自定义控制器并继承核心控制器
class CommonController extends Controller{
	//定义一个初始化方法
	public function _initialize(){
		//判断用户是否登录
		if(!session('?username')){
			$this->redirect('Home/Privilege/login');
		}
	} 
}