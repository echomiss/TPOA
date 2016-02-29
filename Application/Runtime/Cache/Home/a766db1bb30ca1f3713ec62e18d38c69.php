<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>考勤统计</title>
<link rel="stylesheet" type="text/css" href="/Public/images/css1/css.css" />
<style>
td, th {
	text-align: center
}
#tip {
	width:155px;
	height:auto;
	border:1px #B8D3F1 solid;
	display:none;
}
</style>
<script type="text/javascript" src="/Public/scripts/jquery.js"></script>
<script type="text/javascript" src="/Public/My97DatePicker/WdatePicker.js"></script>
<script>
	//定义页面载入事件
	$(function(){
		$('#subject').bind('change',function(){
			//获取数据
			var addtime = $('#addtime').val();
			var subject = $('#subject').val();
			//发送Ajax请求
			$.ajax({
				url:'/index.php/Home/Attendance/charts',
				type:'post',
				data:'subject='+subject+'&addtime='+addtime,
				success:function(msg) {
					$('#result').append(msg);
				}
			});
		});
	});
</script>
</head>
<body>
<form method='post' action='#' enctype='multipart/form-data'>
  <table class="table" cellspacing="1" cellpadding="2" width="99%"
			align="center" border="0">
    <tbody>
      <tr>
        <th style="text-align:left;" colspan="2" class="bg_tr" align="left" height="25">考勤统计管理</th>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">查询某月记录：</td>
        <td style="text-align:left;" class="td_bg">
        	<input type='text' id='addtime' onClick="WdatePicker({dateFmt:'yyyy-MM'})" />
        </td>
      </tr>
	  <tr>
        <td style="text-align:right;" class="td_bg" width="17%" height="23" align="center">所属学科：</td>
        <td style="text-align:left;" class="td_bg">
        	<select name='subject' id='subject'>
            	<option value='0'>请选择</option>
				<?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value='<?php echo ($v["id"]); ?>'><?php echo ($v["classname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
           	</select>
        </td>
      </tr>
	  <tr>
        <td id='result' colspan='2' style="text-align:left;" class="td_bg">
        	<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
<script src="http://cdn.hcharts.cn/highcharts/modules/exporting.js"></script>
</body>
</html>