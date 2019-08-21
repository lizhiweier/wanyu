<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->


<title>栏目设置</title>
</head>
<body>
<div class="page-container">
	<form action="/index.php/Admin/Category/cate_edit/id/15" method="post" class="form form-horizontal" id="" enctype="multipart/form-data">
		<input type="hidden" name="cate_id" value="<?php echo ($info["cate_id"]); ?>" />
		<div id="tab-category" class="">
			<!-- <div class="tabBar cl">
			</div> -->
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">
						<span class="c-red">*</span>
						上级栏目：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<span class="select-box">
						<select class="select" id="sel_Sub" name="cate_pid" onchange="SetSubID(this);">
							<option value="0">顶级栏目</option>
							<?php foreach ($data as $k => $v): if($v['cate_id'] == $info['cate_id'] || in_array($v['cate_id'],$child)){ continue; }else if($info['cate_pid'] == $v['cate_id']){ $select = 'selected="selected"'; }else{ $select = ''; } ?>
								<option <?php echo $select; ?> value="<?php echo $v['cate_id']; ?>"><?php echo str_repeat('├ ',($v['level']+1)*1); echo $v['cate_name']; ?></option>
							<?php endforeach; ?>
						</select>
						</span>
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">
						<span class="c-red">*</span>
						栏目名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo ($info["cate_name"]); ?>" placeholder="" id="" name="cate_name">
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">缩略图：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<div class="uploader-thum-container">
							<input type="file" name="cate_litpic" class="btn btn-default btn-uploadstar radius ml-10" />
						</div>
						<div>
							<img width="300" src="/Public<?php echo ($info["cate_litpic"]); ?>" alt="<?php echo ($info["cate_name"]); ?>" />
						</div>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">
						<span class="c-red">*</span>
						栏目模板：</label>
						<div class="formControls col-xs-8 col-sm-9">
						<span class="select-box">
						<select class="select" id="sel_Sub" name="cate_list_tempid" onchange="SetSubID(this);">
							<?php foreach ($muban as $k => $v): ?>
								<option value="<?php echo ($v["temp_id"]); ?>" <?php if($v['temp_id'] == $info['cate_list_tempid']){echo 'selected="selected"';} ?>><?php echo ($v["temp_name"]); ?></option>
							<?php endforeach; ?>
							
						</select>
						</span>
						</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">
						<span class="c-red">*</span>
						文章模板：</label>
						<div class="formControls col-xs-8 col-sm-9">
						<span class="select-box">
						<select class="select" id="sel_Sub" name="cate_article_tempid" onchange="SetSubID(this);">
							<?php foreach ($muban1 as $k => $v): ?>
								<option value="<?php echo ($v["temp_id"]); ?>" <?php if($info['cate_article_tempid'] == $v['temp_id']){echo 'selected="selected"';} ?>><?php echo ($v["temp_name"]); ?></option>
							<?php endforeach; ?>
						</select>
						</span>
						</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">是否站外链接：</label>
					<div class="formControls col-xs-8 col-sm-9 skin-minimal">
						<div class="check-box">
							<input <?php if($info['is_outlink']=='1'){echo 'checked="checked"';} ?> type="checkbox" id="allowcomments" name="is_outlink" value="1">
							<label for="checkbox-pinglun">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">栏目链接：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo ($info["cate_url"]); ?>" placeholder="" id="" name="cate_url">
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">排序：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo ($info["cate_sort"]); ?>" placeholder="" id="" name="cate_sort">
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">关键词：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="<?php echo ($info["cate_keyword"]); ?>" name="cate_keyword">
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-4 col-sm-3">描述：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<textarea name="cate_des" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,100)"><?php echo ($info["cate_des"]); ?></textarea>
						<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
					</div>
					<div class="col-3">
					</div>
				</div>
			</div>
		</div>
		<div class="row cl">
			<div class="col-9 col-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#tab-category").Huitab({
		index:0
	});
	// $("#form-category-add").validate({
	// 	rules:{
			
	// 	},
	// 	onkeyup:false,
	// 	focusCleanup:true,
	// 	success:"valid",
	// 	submitHandler:function(form){
	// 		//$(form).ajaxSubmit();
	// 		var index = parent.layer.getFrameIndex(window.name);
	// 		//parent.$('.btn-refresh').click();
	// 		parent.layer.close(index);
	// 	}
	// });
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>