<?php if (!defined('THINK_PATH')) exit();?>﻿<!--_meta 作为公共模版分离出去-->
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

<title>资讯列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 资讯管理 <span class="c-gray en">&gt;</span> 资讯列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<button onclick="removeIframe()" class="btn btn-primary radius">关闭选项卡</button>
	 <span class="select-box inline">
		<select name="" class="select">
			<option value="0">全部分类</option>
			<option value="1">分类一</option>
			<option value="2">分类二</option>
		</select>
		</span> 日期范围：
		<input type="text" name="start_time" id="countTimestart" onfocus="selecttime(1)" value="<?php echo ($start_time); ?>" size="17" class="date" readonly> - <input type="text" name="end_time" id="countTimeend" onfocus="selecttime(2)" value="<?php echo ($end_time); ?>" size="17"  class="date" readonly>
		<input type="text" name="" id="" placeholder=" 资讯名称" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜资讯</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加资讯" data-href="/index.php/Admin/Article/article_add" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加资讯</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th>标题</th>
					<th width="80">栏目</th>
					<th width="80">作者</th>
					<th width="80">来源</th>
					<th width="120">更新时间</th>
					<th width="75">浏览次数</th>
					<th width="120">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data as $k=>$v): ?>
				<tr class="text-c">

					<td><input type="checkbox" value="" name=""></td>
					<td><?php echo ($v["art_id"]); ?></td>
					<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看"><?php echo ($v["art_name"]); ?></u></td>
					<td><?php echo ($v["cate_name"]); ?></td>
					<td><?php echo ($v["art_author"]); ?></td>
					<td><?php echo ($v["art_source"]); ?></td>
					<td><?php echo ($v["art_time"]); ?></td>
					<td><?php echo ($v["art_viewed"]); ?></td>
					<td class="f-14 td-manage">
						<?php
 if($v['is_online']){ $title = '下线'; $icon = '<i class="Hui-iconfont">&#xe6de;</i>'; $func_name = 'article_stop'; }else{ $title = '上线'; $icon = '<i class="Hui-iconfont">&#xe603;</i>'; $func_name = 'article_online'; } ?>
						<a style="text-decoration:none" onClick="<?php echo ($func_name); ?>(this,'<?php echo ($v["art_id"]); ?>')" href="javascript:;" title="<?php echo ($title); ?>"><?php echo ($icon); ?>
						</a> 
						<a style="text-decoration:none" class="ml-5" onClick="article_edit('资讯编辑','/index.php/Admin/Article/article_edit/art_id/<?php echo ($v["art_id"]); ?>','<?php echo ($v["art_id"]); ?>')" href="javascript:;" title="编辑">
							<i class="Hui-iconfont">&#xe6df;</i>
						</a> 
						<a style="text-decoration:none" class="ml-5" onClick="article_del(this,'<?php echo ($v["art_id"]); ?>')" href="javascript:;" title="删除">
							<i class="Hui-iconfont">&#xe6e2;</i>
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"pading":false,
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
	]
});

/*资讯-添加*/
function article_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-删除*/
function article_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/index.php/Admin/Article/article_del/id/'+id,
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}


/*资讯-下架*/
function article_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/index.php/Admin/Article/article_stop/id/'+id,
			dataType: 'json',
			success: function(data){
				// $(obj).parents("tr").remove();
				// layer.msg('已删除!',{icon:1,time:1000});
				$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_online(this,'+id+')" href="javascript:;" title="上线"><i class="Hui-iconfont">&#xe603;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下线</span>');
				$(obj).remove();
				layer.msg('已下线!',{icon: 5,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
		
	});
}

/*资讯-上线*/
function article_online(obj,id){
	layer.confirm('确认要上线吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/index.php/Admin/Article/article_online/id/'+id,
			dataType: 'json',
			success: function(data){
				// $(obj).parents("tr").remove();
				// layer.msg('已删除!',{icon:1,time:1000});
				$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,'+id+')" href="javascript:;" title="下线"><i class="Hui-iconfont">&#xe6de;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已上线</span>');
				$(obj).remove();
				layer.msg('已上线!',{icon: 5,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
		
	});
}

/*系统-栏目-删除*/
function system_category_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/index.php/Admin/Article/cate_del/id/'+id,
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}

/*资讯-发布*/
function article_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}
/*资讯-申请上线*/
function article_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

//调用时间插件
function selecttime(flag){
	    if(flag==1){
	        var endTime = $("#countTimeend").val();
	        if(endTime != ""){
	            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
	            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
	    }else{
	        var startTime = $("#countTimestart").val();
	        if(startTime != ""){
	            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
	            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
	    }
	 }

</script> 
</body>
</html>