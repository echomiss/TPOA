<?php if (!defined('THINK_PATH')) exit();?>﻿<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACT内容管理系统</title>
<link href="/Public/images/css1/left_css.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT language=JavaScript>
function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
</SCRIPT>
<body bgcolor="16ACFF">
<table width="98%" border="0" cellpadding="0" cellspacing="0" background="/Public/images/tablemde.jpg">
  <tr>
    <td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#16ACFF"></td>
  </tr>
  <tr>
    <td><TABLE width="97%" 
border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
      <TBODY>
      	<TR>
          <TD height="25" style="background:url(/Public/images/left_tt.gif) no-repeat">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <TD width="20"></TD>
          		<TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(1); height=25>个人设置</TD>
              </tr>
            </table>
           </TD>
          </TR>
          <TR>
          <TD><TABLE id=submenu1 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Home/Admin/index');?>" target=main>管理员信息</A></TD>
                </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
     </TBODY>
    </TABLE>
    </td>
  </tr>
  <tr>
			<td height="5" background="/Public/images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
	</tr>
	<tr>
			<td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
	</tr>
  <tr>
    <td><TABLE width="97%" 
border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
      <TBODY>
      	<TR>
          <TD height="25" style="background:url(/Public/images/left_tt.gif) no-repeat">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <TD width="20"></TD>
          		<TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(1); height=25>学科设置</TD>
              </tr>
            </table>
           </TD>
          </TR>
          <TR>
          <TD><TABLE id=submenu1 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Home/Subject/index');?>" target=main>学科管理</A></TD>
                </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
        <TR>
          <TD><TABLE id=submenu1 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Home/Subject/addSub');?>" target=main>添加学科</A></TD>
                </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
     </TBODY>
    </TABLE>
    </td>
  </tr>
        <tr>
   			<td height="5" background="/Public/images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  		</tr>
  		<tr>
   			<td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  		</tr>
  <tr>
    <td>
    <TABLE width="97%" border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(/Public/images/left_tt.gif) no-repeat">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <TD width="20"></TD>
          		<TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(1); height=25>基本设置</TD>
              </tr>
            </table>
           </TD>
          </TR>
        <TR>
          <TD><TABLE id=submenu1 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Home/Student/index');?>" target=main>学生管理</A></TD>
                </TR>
                <TR>
                  <TD><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Home/Student/addStu');?>" target=main>添加学生</A></TD>
                </TR>
                <TR>
                  <TD><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Survey/Index/surveyList');?>" target=main>调查统计</A></TD>
                </TR>
                <TR>
                  <TD><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Home/Attendance/index');?>" target=main>考勤管理</A></TD>
                </TR>
                <TR>
                  <TD><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Home/Attendance/statisticsAtt');?>" target=main>考勤统计</A></TD>
                </TR>
                <TR>
                  <TD><IMG src="/Public/images/closed.gif"></TD>
                  <TD height=23><A href="<?php echo U('Home/Attendance/addAtt');?>" target=main>添加考勤</A></TD>
                </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE>
    </td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><table class="leftframetable" cellspacing="0" cellpadding="0" width="97%" align="right" 
border="0">
      <tbody>
        <tr>
          <td height="25" style="background:url(/Public/images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20"></td>
          <td height="25" class="titledaohang" style="CURSOR: hand" onClick="showsubmenu(2);"><span class="STYLE1">常用管理</span></td>
              </tr>
            </table></td>
          </tr>
        <tr>
          <td><table id="submenu2" cellspacing="0" cellpadding="0" width="100%" border="0">
              <tbody>
                <tr>
                  <td width='15px'><img src="/Public/images/closed.gif" /></td>
                  <td height="23"><a  href="<?php echo U('Home/Info/index');?>" target="main">信息管理</a></td>
                </tr>
                <tr>
                  <td><img src="/Public/images/closed.gif" /></td>
                  <td height="23"><a href="<?php echo U('Home/Info/addInfo');?>" target="main">添加信息</a></td>
                </tr>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  <tr>
    <td height="5" background="/Public/images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
</table>
</body></html>