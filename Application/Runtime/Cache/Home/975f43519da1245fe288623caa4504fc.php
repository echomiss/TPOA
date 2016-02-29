<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生列表</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/page.css" />
<style>
td, th {
	text-align: center
}
#show{height:30px;text-align:left;}
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
        <th class="bg_tr" align="left" height="25">班级</th>        
        <th class="bg_tr" align="left" height="25">学生性别</th>
        <th class="bg_tr" align="left" height="25">学生年龄</th>
		<th class="bg_tr" align="left" height="25">联系电话</th>
		<th class="bg_tr" align="left" height="25">家庭住址</th>
        <th class="bg_tr" align="left" height="25">操作</th>
      </tr>
	  <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
        <td class="td_bg" width="5%" height="23" align="center"><?php echo ($k); ?></td>
        <td class="td_bg"><?php echo ($v["name"]); ?></td>
        <td class="td_bg"><?php echo ($v["classname"]); ?></td>
        <td class="td_bg"><?php echo ($v["sex"]); ?></td>
		<td class="td_bg"><?php echo ($v["age"]); ?></td>
        <td class="td_bg"><?php echo ($v["tel"]); ?></td>
        <td class="td_bg"><?php echo ($v["address"]); ?></td>
        <td class="td_bg">
        	<a href="/index.php/Home/Student/editStu?id=<?php echo ($v["id"]); ?>">修改 | </a> 
        	<a onclick="return window.confirm('确定删除此学生信息？');" href="/index.php/Home/Student/deleteStu?id=<?php echo ($v["id"]); ?>">删除</a> 
        </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
      <tr style="background:#fff">
        <td id='show' colspan="9"><div class='flickr'><?php echo ($show); ?></div></td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>