<?php
//命名空间
namespace Home\Model;
//引入核心模型类
use Think\Model;
//自定义模型并继承核心模型类
class StudentModel extends Model{
	//定义主键
	protected $pk = 'id';
	//定义字段
	protected $fields = array('id','username','password','classname','name','age','sex','tel','remark','address','addtime');
}