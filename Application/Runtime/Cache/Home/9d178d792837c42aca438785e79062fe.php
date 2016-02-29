<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加学生</title>
<link rel="stylesheet" type="text/css" href="/Public/Images/css1/css.css" />
<style>
td, th {
	text-align: center
}
</style>
</head>
<body>
<form method='post' action='/index.php/Home/Student/addOk' enctype='multipart/form-data'>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th style="text-align:left;" colspan="2" class="bg_tr" align="left" height="25">学生添加管理</th>
      </tr>
      <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">用户名：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='username' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">密码：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='password' name='password' value='123456' />&nbsp;&nbsp;&nbsp;* 默认为‘123456’
        </td>
      </tr>
      <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">班级：</td>
        <td style="text-align:left;" class="td_bg">
        	<select name='classname' style="width: 150px">
        		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" <?php if($v["id"] == 1): ?>selected="selected"<?php endif; ?>><?php echo ($v["classname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        	</select>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">真实姓名：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='name' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">性别：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='radio' name='sex' value='男' checked='checked' />男
			<input type='radio' name='sex' value='女' />女
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">年龄：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='age' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">联系电话：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='tel' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">家庭住址：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='address' />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">备注信息：</td>
        <td style="text-align:left;" class="td_bg">
        	<textarea cols='40' rows='5' name='remark'></textarea>
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