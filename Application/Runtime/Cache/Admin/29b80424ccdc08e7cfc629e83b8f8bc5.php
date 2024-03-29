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

<title>栏目管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	系统管理
	<span class="c-gray en">&gt;</span>
	栏目管理
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c">
		<input type="text" name="" id="" placeholder="栏目名称、id" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
		<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
		<a class="btn btn-primary radius" onclick="system_category_add('添加栏目','/index.php/Admin/Category/cate_add')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加栏目</a>
		</span>
		<span class="r">共有数据：<strong>54</strong> 条</span>
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="80">ID</th>
					<th width="80">排序</th>
					<th>栏目名称</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data as $K=>$v): ?>
				<tr class="text-c">
					<td><input type="checkbox" name="" value=""></td>
					<td><?php echo $v['cate_id']; ?></td>
					<td><?php echo $v['cate_sort']; ?></td>
					<td class="text-l">
						<?php echo str_repeat('├ ',($v['level'])*1); echo $v['cate_name']; ?>
					</td>
					<td class="f-14">
						<a title="编辑" href="javascript:;" onclick="category_edit('栏目编辑','/index.php/Admin/Category/cate_edit/id/<?php echo $v["cate_id"]; ?>','<?php echo ($v["cate_id"]); ?>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i>
						</a>
						<a title="删除" href="javascript:;" onclick="system_category_del(this,'<?php echo ($v["cate_id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i>
						</a>
						<a title="添加栏目内容" href="javascript:;" onclick="category_cont('添加栏目内容','/index.php/Admin/Catecont/cate_cont/id/<?php echo $v["cate_id"]; ?>','<?php echo ($v["cate_id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe610;</i>
						</a>
						<a title="修改栏目内容" href="javascript:;" onclick="category_cont('修改栏目内容','/index.php/Admin/Catecont/cate_contedit/id/<?php echo $v["cate_id"]; ?>','<?php echo ($v["cate_id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe60c;</i>
						</a>
					</td>
				</tr>
			<?php endforeach ?>
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
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,4]}// 制定列不参与排序
	]
});
/*系统-栏目-添加*/
 function system_category_add(title,url,w,h){
 	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
 }
/*系统-栏目-编辑*/
// function system_category_edit(title,url,id,w,h){
// 	layer_show(title,url,w,h);
// }
/*栏目-编辑*/
function category_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*栏目-添加内容*/
function category_cont(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*系统-栏目-删除*/
function system_category_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/index.php/Admin/Category/cate_del/id/'+id,
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
</script>
</body>
</html>