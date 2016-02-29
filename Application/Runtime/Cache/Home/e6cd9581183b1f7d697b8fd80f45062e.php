<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息列表</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<style>
td, th {
	text-align: center;
	font-size:15px;
	height:30px;
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
        <th class="bg_tr" align="left" height="25">标题</th>
        <th class="bg_tr" align="left" height="25">添加时间</th>        
        <th class="bg_tr" align="left" height="25">操作</th>
      </tr>
	  <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
        <td class="td_bg" width="5%" height="23" align="center"><?php echo ($k); ?></td>
        <td class="td_bg"><a href="/index.php/Home/Info/infoDetails?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></td>
        <td class="td_bg"><?php echo (date('Y-m-d h:i:s',$v["addtime"])); ?></td>
        <td class="td_bg">
        	<a href="/index.php/Home/Info/download?id=<?php echo ($v["id"]); ?>">下载 | </a>
        	<a href="/index.php/Home/Info/editInfo?id=<?php echo ($v["id"]); ?>">修改 | </a> 
        	<a onclick="return window.confirm('确定删除该条信息及上传的文件？');" href="/index.php/Home/Info/deleteInfo?id=<?php echo ($v["id"]); ?>">删除</a> 
        </td>
      </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
</form>
</body>
</html>