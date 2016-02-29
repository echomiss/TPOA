<?php
//命名空间
namespace Home\Controller;
//自定义控制器并继承核心控制器
class StudentController extends CommonController{
	//显示添加学生信息表单
	public function addStu(){
		//实例化系统模型类
		$subject = M('subject');
		//获取所有学科信息
		$list = $subject->field('id,classname')->select();
		//分配数据给模板
		$this->assign('list',$list);
		//显示添加模板
		$this->display();
	}
	//添加学生信息到数据库
	public function addOk(){
		//实例化自定义模型
		$student = D('Student');
		//创建模型对象
		$data = $student->create();
		$class = $data['classname'];
		$data['password'] = md5($data['password']);
		$data['addtime'] = time();
		//使用add方法将数据添加到数据库中
		if($student->add($data)){
			//实例化系统模型
			$subject = M('subject');
			//对应学科的人数+1
			$subject->where("id={$class}")->setInc('studentnum');
			$this->success('添加成功！','index');
		}else{
			$this->error('添加失败！','addStu');
		}
	}
	//显示所有学生信息
	public function index(){
		//实例化自定义模型
		$student = D('Student');
		//获取总记录数
		$count = $student->count();
		//实例化分页类，传入总记录数和每页显示的记录数
		$page = new \Think\Page($count,5);
		//设置分页样式
		//$page->setConfig('header', '共%TOTAL_ROW%条记录');
		//分页显示输出
		$show = $page->show();
		//查询学生信息,limit方法中传递的参数必须使用page类中的属性
		$list = $student->field('t1.*,t2.classname')->order('t1.classname')->join("t1 left join tp_subject t2 on t1.classname=t2.id")->limit($page->firstRow.','.$page->listRows)->select();
		//分配数据给模板
		$this->assign('show',$show);
		$this->assign('list',$list);
		//显示模板
		$this->display('stuList');
	}
	//修改学生信息表单
	public function editStu(){
		//实例化自定义模型
		$student = D('Student');
		//获取与id对应的学生信息
		$data = $student->where("id={$_GET['id']}")->find();
		//实例化系统模型
		$subject = M('subject');
		//获取所有学科信息
		$list = $subject->field('id,classname')->select();
		//分配数据给模板
		$this->assign('data',$data);
		$this->assign('list',$list);
		//加载模板
		$this->display();
	}
	//修改的信息入库
	public function editOk(){
		//实例化自定义模型
		$student = D('Student');
		$id = I('post.id');
		//获取对应的学科信息
		$class = $student->where("id={$id}")->find()['classname'];
		//创建模型对象
		$data = $student->create();
		//使用save方法将修改的信息存入数据库
		if($student->save()){
			//判断是否修改了学科
			if($class != $data['classname']){
				//实例化系统模型
				$subject = M('subject');
				//原来学科的人数-1，新学科的人数+1
				$subject->where("id={$class}")->setDec('studentnum');
				$subject->where("id={$data['classname']}")->setInc('studentnum');
			}
			$this->success('更新成功!',"index");
		}else{
			$this->error('更新失败!',"editStu?id=".$data['id']);
		}
	}
	//删除学生信息
	public function deleteStu(){
		//实例化自定义模型
		$student = D('Student');
		$class = $student->where("id={$_GET['id']}")->find()['classname'];
		//将对应id的学生信息删除
		if($student->delete($_GET['id'])){
			//实例化系统模型
			$subject = M('subject');
			//对应学科的人数减1
			$subject->where("id={$class}")->setDec('studentnum');
			$this->success('删除成功！','index');
		}else{
			$this->error('删除失败！','index');
		}
	}
}