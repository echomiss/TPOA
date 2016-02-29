<?php
//命名空间
namespace Survey\Controller;
//引入核心控制器类
use Think\Controller;
//自定义控制器并继承核心控制器
class IndexController extends Controller{
	//显示首页方法
	public function index(){
		//实例化系统模型
		$subject = M('subject');
		//通过select方法获取所有学科信息
		$list = $subject->field('classname,id')->select();
		//将数据分配给模板
		$this->assign('list',$list);
		//调用模板
		$this->display();
	}
	//添加方法
	public function add(){
		//实例化自定义模型
		$info = D('Index');
		//创建模型对象
		$info->create();
		//添加数据入库
		if($info->add()){
			$this->success('添加成功！','surveyList');
		}else{
			$this->error('添加失败！','index');
		}
	}
	//显示所有调查信息
	public function surveyList(){
		//实例化自定义模型
		$info = D('Index');
		//获取所有调查信息
		$data = $info->field('t1.*,t2.classname')->join("t1 left join tp_subject t2 on t1.classname=t2.id")->order('t1.classname')->select();
		//分配数据给模板
		$this->assign('data',$data);
		//调用display方法显示
		$this->display();
	}
}