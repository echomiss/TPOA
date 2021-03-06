<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改考勤信息</title>
<link rel="stylesheet" type="text/css" href="/Public/images/css1/css.css" />
<style>
td, th {
	text-align: center
}
.tip{display:none;height:auto;width:148px;border:1px #B8D3F1 solid}
</style>
<script type="text/javascript" src="/Public/scripts/jquery.js"></script>
<script>
$(function(){
	$("#stuname").bind('keyup',function(){
		//清空原有数据
		$('.tip').html('');
		//获取表单数据
		var subject = $('#subject').val();
		var name = $('#stuname').val();
		if(name == ''){
			$('.tip').hide();
			return;
		}
		//发送ajax请求
		var data={subject:subject,stuname:name};
		//发送post请求，返回json数据
		$.post("/index.php/Home/Attendance/getStu",data,function(msg){
			if(msg.length >　0){
				$('.tip').html();
				$(msg).each(function(i,item){
					//生成div元素
					var div = $('<div></div>');
					//定义显示内容
					div.html(item.name);
					//定义鼠标悬浮事件
					div.bind('mouseover',function(){
						$(this).css('background','#CCC');
					});
					//定义鼠标离开事件
					div.bind('mouseout',function(){
						$(this).css('background',"#FFF");
					});
					//定义鼠标点击事件
					div.bind('click',function(){
						$('#stuname').val(this.innerHTML);
						$('.tip').hide();
					});
					//将元素追加到提示框中
					$('.tip').append(div);
					//显示提示框
					$('.tip').show();
				});
			}
		},'json');
	});
});
</script>
</head>
<body>
<form method='post' action='/index.php/Home/Attendance/editOk' enctype='multipart/form-data'>
	<input type='hidden' name='id' value="<?php echo ($data["id"]); ?>" />
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th style="text-align:left;" colspan="2" class="bg_tr" align="left" height="25">考勤修改管理</th>
      </tr>
      <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">所在学科：</td>
        <td style="text-align:left;" class="td_bg">
        	<select name="subject" id='subject' style="width:150px">
        		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" <?php if($v["id"] == $data["subject"] ): ?>selected="selected"<?php endif; ?>><?php echo ($v["classname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        	</select>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">学生姓名：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' id="stuname" name='stuname' value="<?php echo ($data["stuname"]); ?>" />
        	<div class='tip'></div>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">添加时间：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' name='addtime' value="<?php echo ($data["addtime"]); ?>"/>
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">&nbsp;</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='submit' name='submit' value='修改' />
        </td>
      </tr>
    </tbody>
  </table>
</form>
</body>
</html>