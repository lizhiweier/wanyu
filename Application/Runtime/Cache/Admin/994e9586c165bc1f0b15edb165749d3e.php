<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=<?php echo $cfg_soft_lang; ?>'>
<title>模板管理器</title>
<link href='../../plus/img/base.css' rel='stylesheet' type='text/css'>
<style>
.linerow {border-bottom: 1px solid #CBD8AC;}
</style>
<script type="text/javascript" src="/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
</head>
<body background='img/allbg.gif' leftmargin='0' topmargin='0'>
<SCRIPT language='JavaScript'>
function nullLink()
{
	return;
}
function ReturnValue(reimg)
{
  window.opener.document.<?php echo ($f); ?>.value=reimg;
  if(document.all) window.opener=true;
  window.close();
}
// function ReturnValue(temp_name)
// {
//   $.ajax({
//       type: 'POST',
//       url: '/index.php/Admin/Category/cate_temp/temp_name/'+temp_name,
//       dataType: 'json',
//       success: function(data){
//         // $(obj).parents("tr").remove();
//         // layer.msg('已删除!',{icon:1,time:1000});
//         window.close();
//       },
//       error:function(data) {
//         console.log(data.msg);
//       },
//     });
// 	// window.opener.document.value=reimg;
// 	// if(document.all) window.opener=true;
  
// }
</SCRIPT>
<table width='100%' border='0' cellpadding='0' cellspacing='1' bgcolor='#CBD8AC' align="center">
<tr bgcolor='#FFFFFF'>
<td colspan='3'>
<!-- 开始文件列表  -->
<table width='100%' border='0' cellspacing='0' cellpadding='2'>
<tr bgcolor="#CCCCCC">
<td width="55%" align="center" background="img/wbg.gif" class='linerow'><strong>点击名称选择文件</strong></td>
<td width="15%" align="center" bgcolor='#EEF4EA' class='linerow'><strong>文件大小</strong></td>
<td width="30%" align="center" background="img/wbg.gif" class='linerow'><strong>最后修改时间</strong></td>
</tr>
<?php
$inpath = "./Public/templ"; $dh = dir($inpath); $ty1=""; $ty2=""; while($file = $dh->read()) { if($file == ".") continue; else if($file == "..") { if($activepath == "") continue; $tmp = preg_replace("#[\/][^\/]*$#", "", $activepath); $line = "\n<tr>
        <td class='linerow'> <a href='select_templets.php?f=$f&activepath=".urlencode($tmp)."'><img src=img/dir2.gif border=0 width=16 height=16 align=absmiddle>上级目录</a></td>
        <td colspan='2' class='linerow'> 当前目录:$activepath</td>
        </tr>\r\n"; echo $line; } else if(is_dir("$inpath/$file")) { if(preg_match("#^_(.*)$#i", $file)) continue; if(preg_match("#^\.(.*)$#i", $file)) continue; $line = "\n<tr>
       <td bgcolor='#F9FBF0' class='linerow'>
        <a href=select_templets.php?f=$f&activepath=".urlencode("$activepath/$file")."><img src=img/dir.gif border=0 width=16 height=16 align=absmiddle>$file</a>
       </td>
       <td class='linerow'>-</td>
       <td bgcolor='#F9FBF0' class='linerow'>-</td>
       </tr>"; echo "$line"; } else if(preg_match("#\.(htm|html)#i", $file)) { if($file==$comeback) $lstyle = " style='color:red' "; else $lstyle = ""; $reurl = "$activeurl/$file"; $reurl = preg_replace("#\.\.#", "", $reurl); $reurl = preg_replace("#".$templetdir."\/#", "", $reurl); $line = "\n<tr>
       <td class='linerow' bgcolor='#F9FBF0'>
         <a href=\"javascript:ReturnValue('$reurl');\" $lstyle><img src=img/htm.gif border=0 width=16 height=16 align=absmiddle>$file</a>
       </td>
       <td class='linerow'>$filesize KB</td>
       <td align='center' class='linerow' bgcolor='#F9FBF0'>$filetime</td>
       </tr>"; echo "$line"; } else if(preg_match("#\.(css)#i", $file)) { if($file==$comeback) $lstyle = " style='color:red' "; else $lstyle = ""; $reurl = "$activeurl/$file"; $reurl = preg_replace("#\.\.#", "", $reurl); $reurl = preg_replace("#".$templetdir."/#", "", $reurl); $line = "\n<tr>
       <td class='linerow' bgcolor='#F9FBF0'>
         <a href=\"javascript:ReturnValue('$reurl');\" $lstyle><img src=img/css.gif border=0 width=16 height=16 align=absmiddle>$file</a>
       </td>
       <td class='linerow'>$filesize KB</td>
       <td align='center' class='linerow' bgcolor='#F9FBF0'>$filetime</td>
       </tr>"; echo "$line"; } else if(preg_match("#\.(js)#i", $file)) { if( $file == $comeback ) $lstyle = " style='color:red' "; else $lstyle = ""; $reurl = "$activeurl/$file"; $reurl = preg_replace("#\.\.#", "", $reurl); $reurl = preg_replace("#".$templetdir."\/#", "", $reurl); $line = "\n<tr>
       <td class='linerow' bgcolor='#F9FBF0'>
         <a href=\"javascript:ReturnValue('$reurl');\" $lstyle><img src=img/js.gif border=0 width=16 height=16 align=absmiddle>$file</a>
       </td>
       <td class='linerow'>$filesize KB</td>
       <td align='center' class='linerow' bgcolor='#F9FBF0'>$filetime</td>
       </tr>"; echo "$line"; } else if(preg_match("#\.(jpg)#i", $file)) { if($file==$comeback) $lstyle = " style='color:red' "; else $lstyle = ""; $reurl = "$activeurl/$file"; $reurl = preg_replace("#\.\.#", "", $reurl); $reurl = preg_replace("#".$templetdir."\/#", "", $reurl); $line = "\n<tr>
       <td class='linerow' bgcolor='#F9FBF0'>
         <a href=\"javascript:ReturnValue('$reurl');\" $lstyle><img src=img/jpg.gif border=0 width=16 height=16 align=absmiddle>$file</a>
       </td>
       <td class='linerow'>$filesize KB</td>
       <td align='center' class='linerow' bgcolor='#F9FBF0'>$filetime</td>
       </tr>"; echo "$line"; } else if(preg_match("#\.(gif|png)#i", $file)) { if($file==$comeback) $lstyle = " style='color:red' "; else $lstyle = ""; $reurl = "$activeurl/$file"; $reurl = preg_replace("#\.\.#", "", $reurl); $reurl = preg_replace("#".$templetdir."\/#", "", $reurl); $line = "\n<tr>
       <td class='linerow' bgcolor='#F9FBF0'>
         <a href=\"javascript:ReturnValue('$reurl');\" $lstyle><img src=img/gif.gif border=0 width=16 height=16 align=absmiddle>$file</a>
       </td>
       <td class='linerow'>$filesize KB</td>
       <td align='center' class='linerow' bgcolor='#F9FBF0'>$filetime</td>
       </tr>"; echo "$line"; } else if(preg_match("#\.(txt)#i", $file)) { if($file==$comeback) $lstyle = " style='color:red' "; else $lstyle = ""; $reurl = "$activeurl/$file"; $reurl = preg_replace("#\.\.#", "", $reurl); $reurl = preg_replace("#".$templetdir."\/#", "", $reurl); $line = "\n<tr>
       <td class='linerow' bgcolor='#F9FBF0'>
         <a href=\"javascript:ReturnValue('$reurl');\" $lstyle><img src=img/txt.gif border=0 width=16 height=16 align=absmiddle>$file</a>
       </td>
       <td class='linerow'>$filesize KB</td>
       <td align='center' class='linerow' bgcolor='#F9FBF0'>$filetime</td>
       </tr>"; echo "$line"; } }$dh->close(); ?>
<!-- 文件列表完 -->
<tr>
<td colspan='3' bgcolor='#E8F1DE'>

<table width='100%'>
<form action="<?php echo U('cate_temp'); ?>" method='POST' enctype="multipart/form-data" name='myform'>
<input type='hidden' name='activepath' value='<?php echo $activepath?>'>
<input type='hidden' name='f' value='<?php echo ($f); ?>'>
<input type='hidden' name='job' value='upload'>
<tr>
<td background="img/tbg.gif" bgcolor="#99CC00">
  &nbsp;上　传： <input type='file' name='uploadfile' style='width:320px'>
  改名：<input type='text' name='filename' value='' style='width:100px'>
  <input type='submit' name='sb1' value='确定'>
</td>
</tr>
</form>
</table>

</td>
</tr>
</table>

</td>
</tr>
</table>

</body>
</html>