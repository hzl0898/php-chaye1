<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
<title>“茶里茶气”茶铺销售管理系统</title>
<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
body {
	background-color: #7FB7C6;
}
.STYLE3 {
	color: #FFFFFF;
	font-weight: bold;
}
.STYLE5 {color: #0033CC; font-weight: bold; }
.STYLE6 {color: #FFFFFF}
-->
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="959" height="1163" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="959" height="767" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top" bgcolor="#FFFFFF"><table id="__01" width="713" height="767" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><table id="__01" width="713" height="248" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="276" height="248" align="center" bgcolor="#FFFFFF">
					<SCRIPT type=text/javascript>
var focus_width=266	;
var focus_height=219;
var text_height=20;
var swf_height = focus_height+text_height;
var pics="";
var links="";
var texts="";
<?php
$sql="select id,biaoti,shouyetupian,id from xinwentongzhi where shouyetupian<>'' order by id desc limit 0,5";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
for($i=0;$i<5;$i++)
{
	$pics=$pics.mysql_result($query,$i,"shouyetupian")."|";
	$links=$links."gg_detail.php?id=".mysql_result($query,$i,"id")."|";
	$texts=$texts.mysql_result($query,$i,"biaoti")."|";
}
$pics=substr($pics,0,strlen($pics)-1);
$links=substr($links,0,strlen($links)-1);
$texts=substr($texts,0,strlen($texts)-1);
?>

pics="<?php echo $pics;?>";
links="<?php echo $links;?>";
texts="<?php echo $texts;?>";

document.write('<embed src="qtimages/pixviewer.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="Best" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">');

</SCRIPT></td>
                    <td><table id="__01" width="437" height="248" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="437" height="36" background="qtimages/1_02_01_01_02_01.gif"><table width="100%" height="18" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="27%" height="16" align="center" valign="bottom"><a href="news.php?lb=新闻动态"><span class="STYLE5">新闻动态</span></a></td>
                            <td width="73%">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="437" height="204" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td><img src="qtimages/1_02_01_01_02_02_01.gif" width="8" height="204" alt=""></td>
                            <td width="420" height="204" valign="top" bgcolor="#FFFFFF"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                              <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='新闻动态' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==7)
							{
								break ;
							}
						?>
                              <tr height="25">
                                <td width="4%" height="28" align="center"><img src="qtimages/1.jpg" width="9" height="9"></td>
                                <td width="79%" class="newslist"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">
                                  <?php 
								if (strlen(mysql_result($query,$i,"biaoti"))>50)
								{
									echo substr(mysql_result($query,$i,"biaoti"),0,50);
								}
								else
								{
									echo mysql_result($query,$i,"biaoti");
								}
								
								?>
                                </a></td>
                                <td width="17%" align="right" class="newslist"><?php echo date("Y-m-d",strtotime(mysql_result($query,$i,"addtime")));?></td>
                              </tr>
                              <?php
						}
					  }
					  ?>
                            </table></td>
                            <td><img src="qtimages/1_02_01_01_02_02_03.gif" width="9" height="204" alt=""></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_01_01_02_03.gif" width="437" height="8" alt=""></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="713" height="244" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="713" height="38" background="qtimages/1_02_01_02_01.gif"><table width="100%" height="18" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="19%" height="16" align="center" valign="bottom"><span class="STYLE3">最新推荐</span></td>
                        <td width="81%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="713" height="197" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="9" background="qtimages/1_02_01_02_02_01.gif">&nbsp;</td>
                        <td width="695" height="197" bgcolor="#FFFFFF"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <?php 
    $sql="select * from shangpinxinxi where tupian<>''";
 
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  
	 for($i=0;$i<$rowscount;$i++)
{
	if($i<4)
	{
	
  ?>
                            <td height="163" align="center"><table width="20%" height="163" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="137" align="center"><a href="pro_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><img src="<?php echo mysql_result($query,$i,"tupian");?>" width="131" height="130" border="0"></a></td>
                                </tr>
                                <tr>
                                  <td height="25" align="center"><a href="pro_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mb_substr(mysql_result($query,$i,"mingcheng"),0,10,'UTF-8');?></a></td>
                                </tr>
                            </table></td>
                            <?php
							}
  	}
  ?>
                          </tr>
                        </table></td>
                        <td width="9" background="qtimages/1_02_01_02_02_03.gif">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_02_03.gif" width="713" height="9" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="713" height="244" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="713" height="38" background="qtimages/1_02_01_02_01.gif"><table width="100%" height="18" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="19%" height="16" align="center" valign="bottom"><span class="STYLE3">销售排行</span></td>
                          <td width="81%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="713" height="197" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="9" background="qtimages/1_02_01_02_02_01.gif">&nbsp;</td>
                          <td width="695" height="197" bgcolor="#FFFFFF"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                              <tr>
                                <?php 
    $sql="select * from shangpinxinxi where tupian<>''";
 
  $sql=$sql." order by xsl desc,id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  
	 for($i=0;$i<$rowscount;$i++)
{
	if($i<4)
	{
	
  ?>
                                <td height="163" align="center"><table width="20%" height="163" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                      <td height="137" align="center"><a href="pro_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><img src="<?php echo mysql_result($query,$i,"tupian");?>" width="131" height="130" border="0"></a></td>
                                    </tr>
                                    <tr>
                                      <td height="25" align="center"><a href="pro_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mb_substr(mysql_result($query,$i,"mingcheng"),0,10,'UTF-8');?></a></td>
                                    </tr>
                                </table></td>
                                <?php
							}
  	}
  ?>
                              </tr>
                          </table></td>
                          <td width="9" background="qtimages/1_02_01_02_02_03.gif">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_02_03.gif" width="713" height="9" alt=""></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
            <td valign="top"><?php include_once 'qtleft.php';?></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>