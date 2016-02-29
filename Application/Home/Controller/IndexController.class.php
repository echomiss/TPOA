<?php
//设置命名空间
namespace Home\Controller;
//
class IndexController extends CommonController{
    //后台首页方法
	public function index(){
    	//调用模板框架
    	$this->display();
    }
    //后台左侧模板
    public function left(){
    	//调用模板
    	$this->display();
    }
    //后台右侧模板
    public function top(){
     	//调用模板
    	$this->display();
    }
    //后台头部模板
    public function right(){
    	//调用模板
    	$this->display();
    }
    //空方法
    public function _empty(){
    	//当用户访问不存在的方法时，跳转到404页面
    	$this->display('Public/404');
    }
}