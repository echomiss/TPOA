<?php
//设置命名空间
namespace Home\Controller;
//引入核心控制器类
use Think\Controller;
//权限类
class PrivilegeController extends Controller{
	//显示登录表单方法
	public function login(){
		//加载模板文件
		$this->display();
	}
	//验证表单登入信息
	public function checkLogin(){
		if(IS_POST){
			//接收数据
			$username = trim($_POST['username']);
			$password = md5(trim($_POST['password']));
			$code = trim($_POST['code']);
			//合法性判断
			if($username == ''){
				$this->error('用户名不能为空！','login');
			}
			if($password == ''){
				$this->error('密码不能为空！','login');
			}
			//实例化验证码类
			$captcha = new \Think\Verify();
			//验证验证码是否一致
			if(!$captcha->check($code)){
				$this->error('验证码错误！','login');
			}
			//实例化M方法
			$admin = M('admin');
			//执行查询语句
			$pass = $admin->field('password')->where("username='$username'")->find()['password'];			
			//dump($pass);exit;
			//验证通过，跳转到后台首页
			if($password == $pass){
				//将用户名存入session
				session('username',$username);
				$this->redirect('Home/Index/index');
			}
		}
	}
	//获取验证码
	public function getCaptcha(){
		//实例化验证码类
		$captcha = new \Think\Verify();
		//设置现实文本
		$captcha->codeSet = '1234567890';
		//设置取消混淆线
		$captcha->useCurve = false;
		//设置取消杂点
		$captcha->useNoise = false;
		//设置字体
		$captcha->fontttf = '4.ttf';
		//设置显示字体长度
		$captcha->length = 4;
		//显示验证码
		$captcha->entry();
	}
	//空方法
	public function _empty(){
		//当用户访问不存在的方法时，跳转到404页面
		$this->display('Public/404');
	}
}