<?php
//命名空间
namespace Home\Model;
//引入核心模型
use Think\Model;
//自定义模型类并继承核心模型
class SubjectModel extends Model{
	//设置主键
	protected $pk = 'id';
	//设置字段
	protected $fields = array('id','classname','room','remark','studentnum');
}