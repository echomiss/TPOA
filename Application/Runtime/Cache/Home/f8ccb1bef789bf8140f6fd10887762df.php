<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生列表</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<style>
td, th {
	text-align: center
}
#show{height:30px;text-align:left}
#show span{color:#333;font-weight:bolder;padding:3px 5px 2px 5px;border:1px solid #999;background:#aaa;margin:1px;}
#show a{border:1px solid #999;background:#eee;padding:2px;padding:2px 5px 2px 5px;margin:1px;}
</style>
</head>
<body>
<form method='post' action=''>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th class="bg_tr" align="left" height="25">序号</th>
        <th class="bg_tr" align="left" height="25">班级名称</th>
        <th class="bg_tr" align="left" height="25">班级教室</th>        
        <th class="bg_tr" align="left" height="25">班级人数</th>        
		<th class="bg_tr" align="left" height="25">备注信息</th>
        <th class="bg_tr" align="left" height="25">操作</th>
      </tr>
	  <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
        <td class="td_bg" width="5%" height="23" align="center"><?php echo ($k); ?></td>
        <td class="td_bg"><?php echo ($v["classname"]); ?></td>
        <td class="td_bg"><?php echo ($v["room"]); ?></td>
        <td class="td_bg"><?php echo ($v["studentnum"]); ?></td>
        <td class="td_bg"><?php echo ($v["remark"]); ?></td>
        <td class="td_bg">
        	<a href="/index.php/Home/Subject/editSub?id=<?php echo ($v["id"]); ?>">修改 | </a> 
        	<a onclick="return window.confirm('确定删除此学科及对应学科下所有学生的信息？');" href="/index.php/Home/Subject/deleteSub?id=<?php echo ($v["id"]); ?>">删除</a> 
        </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
</form>
</body>
</html>