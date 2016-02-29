<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>考勤列表</title>
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
        <th class="bg_tr" align="left" height="25">学生姓名</th>
        <th class="bg_tr" align="left" height="25">所在班级</th>        
        <th class="bg_tr" align="left" height="25">迟到日期</th>        
        <th class="bg_tr" align="left" height="25">操作</th>
      </tr>
	  <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
        <td class="td_bg" width="5%" height="23" align="center"><?php echo ($k); ?></td>
        <td class="td_bg"><?php echo ($v["stuname"]); ?></td>
        <td class="td_bg"><?php echo ($v["classname"]); ?></td>
        <td class="td_bg"><?php echo ($v["addtime"]); ?></td>
        <td class="td_bg">
        	<a href="/index.php/Home/Attendance/editAtt?id=<?php echo ($v["id"]); ?>">修改 | </a> 
        	<a onclick="return window.confirm('确定删除该条考勤信息？');" href="/index.php/Home/Attendance/deleteAtt?id=<?php echo ($v["id"]); ?>">删除</a> 
        </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
</form>
</body>
</html>