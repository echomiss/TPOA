<?php if (!defined('THINK_PATH')) exit();?>﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACT网站内容管理系统</title>
<link href="/Public/images/css1/top_css.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#03A8F6">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="194" height="60" align="center" background="/Public/images/top_logo.jpg"></td>
    <td align="center" style="background:url(/Public/images/top_bg.jpg) no-repeat"><table cellspacing="0" cellpadding="0" border="0" width="100%" height="33">
      <tbody>
        <tr>
          <td width="30" align="left"><img onClick="switchBar(this)" height="15" alt="关闭左边管理菜单" src="/Public/images/on-of.gif" width="15" border="0" /></td>
          <td width="320" align="left">欢迎<?php echo (session('username')); ?>您回来，ACTCMS办公系统！</td>
        </tr>
      </tbody>
    </table>
    <table height="26" border="0" align="left" cellpadding="0" cellspacing="0" class="subbg" NAME=t1>
      <tbody>
        <tr align="middle">
          <td width="71" height="26" align="center" valign="middle" background="/Public/images/top_tt_bg.gif"><a
            href="right.asp" 
          target="main" class="STYLE2">管理首页</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/Public/images/top_tt_bg.gif"><a 
            href="System_Admin.asp" 
            target="main" class="STYLE2">站点设置</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/Public/images/top_tt_bg.gif" ><a   href="Article/Article_Manage.asp" target="main">文章系统</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/Public/images/top_tt_bg.gif" ><a  href="Label_Admin.asp?Type=1" target="main" class="STYLE3">标签系统</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/Public/images/top_tt_bg.gif" ><a  href="User/User_Admin.asp"  target="main" class="STYLE2">会员管理</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/Public/images/top_tt_bg.gif"><a  href="Class_Templet.asp?ChannelID=1&Type=2"  target="main" class="STYLE2">模板管理</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/Public/images/top_tt_bg.gif"><a href="http://help.mycodes.net"   target="main" class="STYLE2">帮助中心</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="/Public/images/top_tt_bg.gif"><a  href="Login.asp?Action=LoginOut" target="_top" class="STYLE2">退出登录</a></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  <tr height="6">
    <td bgcolor="#1F3A65" background="/Public/images/top_bg.jpg"></td>
  </tr>
</table>
<script language="javascript">
<!--
var displayBar=true;
function switchBar(obj){
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.title="打开左边管理菜单";
	}
	else{
		parent.frame.cols="195,*";
		displayBar=true;
		obj.title="关闭左边管理菜单";
	}
}
//-->
</script></body>
</html>