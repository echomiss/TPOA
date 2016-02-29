<?php
//命名空间
namespace Home\Controller;
//自定义控制器并继承公共控制器类
class AdminController extends CommonController{
	//首页方法，显示管理员信息
	public function index(){
		//实例化M方法
		$admin = M('admin');
		//查询所有管理员信息
		$data = $admin->find();
		//将数据分配到模板
		$this->assign('data',$data);
		//使用display方法调用模板
		$this->display('list');
	}
	//显示修改密码界面
	public function edit(){
		//接收get数据
		$id = $_GET['id'];
		//实例化M方法
		$admin = M('admin');
		//调用find方法查询数据
		$data = $admin->where("id={$id}")->find();
		//将数据分配给模板
		$this->assign('data',$data);
		//使用display方法调用模板
		$this->display();
	}
	//修改密码入库
	public function editPass(){
		//判断数据是否是POST方式提交的
		if(IS_POST){
			$id = (integer)$_POST['id'];
			$oldpass = md5(trim($_POST['oldpass']));
			//实例化M方法
			$admin = M('admin');
			//调用find方法查询数据
			$password = $admin->field('password')->where("id={$id}")->find()['password'];
			if($password != $oldpass){
				$this->error('原密码错误！',"edit?id={$id}");
			}
			//组装数据
			$data['id'] = $id;
			$data['username'] = $_POST['username'];
			$data['password'] = md5(trim($_POST['password']));
			//调用save方法
			if($admin->save($data)){
				$this->success('修改密码成功！','index');				
			}else{
				$this->error('修改密码失败！','edit');
			}
		}
	}
}
