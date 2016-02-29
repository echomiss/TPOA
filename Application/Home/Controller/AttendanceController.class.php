<?php
//命名空间
namespace Home\Controller;
//自定义控制器并继承公共控制器
class AttendanceController extends CommonController{
	//考勤添加页面
	public function addAtt(){
		//实例化系统模型
		$subject = M('subject');
		//获取所有学科信息
		$class = $subject->select();
		//将数据分配到模板
		$this->assign('class',$class);
		//调用display方法
		$this->display();
	}
	//添加入库
	public function addOk(){
		if(IS_POST){
			//实例化自定义模型
			$att = D('Attendance');
			//创建数据对象
			$data = $att->create();
			//添加数据入库
			if($att->add()){
				$this->success('添加成功！','addAtt');
			}else{
				$this->error('添加失败！','addAtt');
			}
		}
	}
	//获取学生信息
	public function getStu(){
		if(IS_AJAX){
			//获取数据
			$subject = I('post.subject');
			$name = I('post.stuname');
			//实例化自定义模型
			$student = D('Student');
			//组装数据
			$map = array();
			$map[]['classname'] = $subject;
			$map[]['name'] = array('like',"$name%");
			//调用select方法查询数据
			$data = $student->where($map)->select();
			//返回json格式数据
			$this->ajaxReturn($data);
		}
	}
	//显示考勤表
	public function index(){
		//实例化自定义模型
		$att = D('Attendance');
		//获取所有考勤信息
		$list = $att->field('t1.*,t2.classname')->join("t1 left join tp_subject t2 on t1.subject=t2.id")->order('t1.subject')->select();
		//将数据分配给模板
		$this->assign('list',$list);
		//调用display方法显示模板
		$this->display('attList');
	}
	//显示考勤统计表页面
	public function statisticsAtt(){
		//实例化系统模型
		$subject = M('subject');
		//获取所有学科信息
		$class = $subject->select();
		//将数据分配到模板
		$this->assign('class',$class);
		//调用display方法显示模板
		$this->display();
	}
	//用于显示统计图信息
	public function charts(){
		if(IS_AJAX){
			$subject = I('post.subject');
			$addtime = I('post.addtime');
			//实例化模型
			$att = M('attendance');
			//获取数据
			$data = $att->field('stuname,count(*) as count')->group('stuname')->where("subject={$subject} and substr(addtime,1,7)='{$addtime}'")->select();
			$str = '[';
			foreach($data as $row) {
				$str .= "['{$row['stuname']}',{$row['count']}.0],";
			}
			//删除最右侧的逗号
			$str = rtrim($str,',');
			$str .= ']';
			//通过assign方法分配变量到模板文件中
			$this->assign('str',$str);
			$this->display();
		}
	}
	//考勤修改方法
	public function editAtt(){
		//获取id
		$id = $_GET['id'];
		//实例化系统模型
		$att = M('attendance');
		//实例化自定义模型
		$subject = D('Subject');
		//获取所有学科信息
		$list = $subject->select();
		//获取对应id的考勤信息
		$data = $att->where("id={$id}")->find();
		//分配数据给模板
		$this->assign('list',$list);
		$this->assign('data',$data);
		//调用display方法显示模板
		$this->display();
	}
	//修改入库
	public function editOk(){
		//实例化自定义模型
		$att = D('Attendance');
		//创建数据对象
		$data = $att->create();
		//调用save方法保存数据
		if($att->save()){
			$this->success('修改成功！','index');
		}else{
			$this->error('修改失败！','editAtt?id='.$data['id']);
		}
	}
	//删除方法
	public function deleteAtt(){
		//获取id
		$id = $_GET['id'];
		//实例化自定义模型
		$att = D('Attendance');
		//调用delete方法删除数据
		if($att->where("id={$id}")->delete()){
			$this->success('删除成功！','index');
		}else{
			$this->error('删除失败！','index');
		}
	}
}