<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html>
<head>
<title>学习情况表</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="/Public/scripts/jquery.js" tppabs="js/jquery.js"></script>
<script type="text/javascript" src="/Public/scripts/page_common.js" tppabs="js/page_common.js"></script>
<link href="/Public/css/common_style_blue.css" tppabs="/Public/css/common_style_blue.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="/Public/images/css1/css.css" />
<style type="text/css">
td, th {
	text-align: center
}
</style>
</head>
<body>

<!-- 页面标题 -->
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center" border="0">
<tbody>
	<tr>
        <th style="text-align:left;" colspan="7" class="bg_tr" align="left" height="25">调查列表</th>
    </tr>
	<tr>
		<th class="bg_tr" align="left" height="25">编号</th>
		<th class="bg_tr" align="left" height="25">班级</th>
		<th class="bg_tr" align="left" height="25">姓名</th>
		<th class="bg_tr" align="left" height="25">难度</th>
		<th class="bg_tr" align="left" height="25">吸收程度</th>
		<th class="bg_tr" align="left" height="25">问题或建议</th>
		<th class="bg_tr" align="left" height="25">时间</th>
	</tr>
	<?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
		<td class="td_bg" width="5%" height="23" align="center"><?php echo ($k); ?></td>
		<td class="td_bg"><?php echo ($v["classname"]); ?></td>
		<td class="td_bg"><?php echo ($v["username"]); ?></td>
		<td class="td_bg">
			<?php if($v["type"] == 1): ?>很难
			<?php elseif($v["type"] == 2): ?>不太难
			<?php elseif($v["type"] == 3): ?>一般般
			<?php elseif($v["type"] == 4): ?>比较简单
			<?php elseif($v["type"] == 5): ?>很简单<?php endif; ?>
		</td>
		<td class="td_bg">
			<?php if($v["level"] == 1): ?>低于30%
			<?php elseif($v["level"] == 2): ?>30~50%
			<?php elseif($v["level"] == 3): ?>50~70%
			<?php elseif($v["level"] == 4): ?>70~80%
			<?php elseif($v["level"] == 5): ?>80%以上<?php endif; ?>
		</td>
		<td class="td_bg"><?php echo ($v["content"]); ?></td>
		<td class="td_bg"><?php echo ($v["addtime"]); ?></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>