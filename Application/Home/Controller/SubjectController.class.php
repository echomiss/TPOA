<?php
//命名空间
namespace Home\Controller;
//自定义控制器类并继承公共控制器
class SubjectController extends CommonController{
	//显示学科列表
	public function index(){
		//实例化自定义模型
		$subject = D('Subject');
		//获取所有学科信息
		$list = $subject->select();
		//将数据分配到模板
		$this->assign('list',$list);
		//使用display方法调用模板
		$this->display('subList');
	}
	//显示添加页面
	public function addSub(){
		//使用display调用模板
		$this->display();
	}
	//添加学科信息方法
	public function addOk(){
		if(IS_POST){
			//实例化自定义模型
			$subject = D('Subject');
			//使用AR模式吧数据映射到模型属性
			$subject->classname = I('post.classname');
			$subject->room = I('post.room');
			$subject->remark = I('post.remark');
			//调用add方法实现添加操作
			if($subject->add()){
				$this->success('添加成功！','index');
			}else{
				$this->error('添加失败！','addSub');
			}
		}
	}
	//显示修改模板，传递id参数
	public function editSub(){
		//获取id数据
		$id = $_GET['id'];
		//实例化自定义模型
		$subject = D('Subject');
		//调用find方法查询数据
		$data = $subject->where("id={$id}")->find();
		//将获取的数据分配给模板
		$this->assign('data',$data);
		//调用display方法显示模板
		$this->display();
	}
	//修改数据入库
	public function editOk(){
		//判断是否有post数据
		if(IS_POST){
			//实例化自定义模型类
			$subject = D('Subject');
			//通过AR模式将数据映射到模型属性中
			$subject->classname = I('post.classname');
			$subject->room = I('post.room');
			$subject->remark = I('post.remark');
			//设置更新的主键字段
			$subject->id = I('post.id');
			//修改数据入库
			if($subject->save()){
				$this->success('修改成功！','index');
			}else{
				$this->error('修改失败,没有要修改的内容！',"editSub?id={$_POST['id']}");
			}
		}
	}
	//删除学科信息
	public function deleteSub(){
		//获取id
		$id = $_GET['id'];
		//实例化自定义模型
		$subject = D('Subject');
		//调用delete方法删除学科，并同时删除对应学科下所有学生信息
		if($subject->where("id={$id}")->delete()){
			//实例化系统模型
			$student = M('student');
			//调用delete方法
			if($student->where("classname={$id}")->delete()){
				$this->success('删除成功！','index');
			}
		}else{
			$this->error('删除失败！','index');
		}
		
	}
}