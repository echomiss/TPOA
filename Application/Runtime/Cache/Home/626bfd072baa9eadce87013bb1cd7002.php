<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加信息</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<style>
td, th {
	text-align: center
}
</style>
<script type="text/javascript" src="/Public/ckeditor/ckeditor.js"></script>
</head>
<body>
<form method='post' action='/index.php/Home/Info/addOk' enctype='multipart/form-data'>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th style="text-align:left;" colspan="2" class="bg_tr" align="left" height="25">信息添加管理</th>
      </tr>
      <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">标题：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='title' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">上传文件：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='file' name='file' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23">内容：</td>
        <td style="text-align:left;" class="td_bg">
        	<textarea name='content' id='content'></textarea>
        	<script>
        		CKEDITOR.replace('content',{customConfig:'config_user.js'});
        	</script>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">&nbsp;</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='submit' name='submit' value='添加' />
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>