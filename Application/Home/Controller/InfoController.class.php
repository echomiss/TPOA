<?php
//命名空间
namespace Home\Controller;
//自定义控制器并继承公共控制器
class InfoController extends CommonController{
	//定义addInfo方法，显示添加页面
	public function addInfo(){
		//调用display方法显示模板
		$this->display();
	}
	//添加入库
	public function addOk(){
		if(IS_POST){
			//实例化自定义模型
			$info = D('Info');
			//创建数据对象
			$data = $info->create();
			//判断是否有文件上传
			if($_FILES['file']['size']){
				//实例化上传文件类
				$upload = new \Think\Upload();
				//设置相关信息
				$upload->maxSize = 2097152;		//允许上传文件的最大值
				$upload->rootPath = './Uploads/';
				//上传文件方法upload
				if($row = $upload->upload()){
					$filepath = $row['file']['savepath'].$row['file']['savename'];
					//将路径保存到数据对象中
					$data['filepath'] = $filepath;
				}else{
					$this->error($upload->getError(),'addInfo');
				}
			}
			$data['addtime'] = time();
			//调用add方法
			if($info->add($data)){
				$this->success('添加成功！','addInfo');
			}else{
				$this->error('添加失败！','addInfo');
			}
		}
	}
	//显示信息列表
	public function index(){
		//实例化自定义模型
		$info = D('Info');
		//查询所有信息
		$list = $info->select();
		//分配数据给模板
		$this->assign('list',$list);
		//调用display方法显示模板
		$this->display('infoList');
	}
	//下载方法
	public function download($id){
		//实例化模型
		$info = M('info');
		//调用数据
		$fp = $info->field('filepath')->find($id)['filepath'];
		$file = "./Uploads/{$fp}";
		//dump($file);exit;
		header("Content-type:application/octet-stream");
		header('Content-Disposition:attachment;filename="'.basename($file).'"');
		header("Content-Length:".filesize($file));
		readfile($file);
	}
	//删除信息
	public function deleteInfo(){
		//获取id
		$id = $_GET['id'];
		//实例化模型
		$info = M('info');
		//获取文件路径
		$fp = $info->field('filepath')->find($id)['filepath'];
		$file = "./Uploads/{$fp}";
		//删除信息并删除上传的文件
		if($info->delete($id)){
			//删除上传的文件
			unlink($file);
			$this->success('删除成功！','index');
		}else{
			$this->error('删除失败！','index');
		}
	}
	//显示详细信息
	public function infoDetails(){
		//获取id
		$id = $_GET['id'];
		//实例化模型
		$info = M('info');
		//通过id获取对应信息
		$data = $info->where("id={$id}")->find();
		//分配数据给模板
		$this->assign('data',$data);
		//调用display方法显示模板
		$this->display();
	}
}