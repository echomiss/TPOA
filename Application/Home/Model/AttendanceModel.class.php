<?php
//命名空间
namespace Home\Model;
//引入核心模型类
use Think\Model;
//自定义模型并继承核心模型类
class AttendanceModel extends Model{
	//设置主键
	protected $pk = 'id';
	//设置字段
	protected $fields = array('id','stuname','addtime','subject');
}