<?php
//命名空间
namespace Survey\Model;
//引入核心模型
use Think\Model;
//自定义模型并继承核心模型类
class IndexModel extends Model{
	//设置主键
	protected $pk = 'id';
	//设置数据表名
	protected $tableName = 'survey';
	//添加字段
	protected $fields = array('id','type','level','content','classname','addtime','username');
} 