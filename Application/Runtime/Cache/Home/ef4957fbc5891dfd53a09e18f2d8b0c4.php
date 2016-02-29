<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生列表</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<style>
td, th {
	text-align: center;
	font-size:14px;
}
</style>
</head>
<body>
<form method='post' action=''>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th class="bg_tr" align="left" height="25">序号</th>
        <th class="bg_tr" align="left" height="25">管理员</th>        
        <th class="bg_tr" align="left" height="25">操作</th>
      </tr>
      <tr>
        <td class="td_bg" width="5%" height="30" align="center"><?php echo ($data["id"]); ?></td>
        <td class="td_bg"><?php echo ($data["username"]); ?></td>
        <td class="td_bg">
        	<a href="/index.php/Home/Admin/edit?id=<?php echo ($data["id"]); ?>">修改密码</a> 
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>