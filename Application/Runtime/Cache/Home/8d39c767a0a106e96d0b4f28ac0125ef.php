<?php if (!defined('THINK_PATH')) exit(); $id = I('get.id'); $model = D('Admin/Article'); $count = $model->where("is_online='1' and cate_id=$id and FIND_IN_SET('p', art_attr)")->count(); $p = getpage($count,9); $list = $model->field(true)->where("is_online='1' and cate_id=$id and FIND_IN_SET('p', art_attr)")->order('art_id')->limit($p->firstRow, $p->listRows)->select(); ?>
<!DOCTYPE html>
<!-- saved from url=(0040)http://www.pkufe.com.cn/jtdt/index.jhtml -->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>北大方正教育集团</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

<style>


.flexslider {
	margin: 0px auto 0px;
	position: relative;
	width: 100%;
	height: 675px;
	overflow: hidden;
	zoom: 1;
}

.flexslider .slides li {
	width: 100%;
	height: 100%;
}

.flex-direction-nav a {
	width: 70px;
	height: 70px;
	line-height: 99em;
	overflow: hidden;
	margin: -35px 0 0;
	display: block;
	background: url(/Public/images/slide/ad_ctr.png) no-repeat;
	position: absolute;
	top: 50%;
	z-index: 10;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
	-webkit-transition: all .3s ease;
	border-radius: 35px;
}

.flex-direction-nav .flex-next {
	background-position: 0 -70px;
	right: 0;
}

.flex-direction-nav .flex-prev {
	left: 0;
}

.flexslider:hover .flex-next {
	opacity: 0.8;
	filter: alpha(opacity=25);
}

.flexslider:hover .flex-prev {
	opacity: 0.8;
	filter: alpha(opacity=25);
}

.flexslider:hover .flex-next:hover,
.flexslider:hover .flex-prev:hover {
	opacity: 1;
	filter: alpha(opacity=50);
}

.flex-control-nav {
	width: 100%;
	position: absolute;
	bottom: 10px;
	text-align: center;
}

.flex-control-nav li {
	margin: 0 2px;
	display: inline-block;
	zoom: 1;
	*display: inline;
}

.flex-control-paging li a {
	background: url(/Public/images/slide/dot.png) no-repeat 0 -16px;
	display: block;
	height: 16px;
	overflow: hidden;
	text-indent: -99em;
	width: 16px;
	cursor: pointer;
}

.flex-control-paging li a.flex-active,
.flex-control-paging li.active a {
	background-position: 0 0;
}

.flexslider .slides a img {
	width: 100%;
	height: 675px;
	display: block;
}
</style>

<!-- favicon
============================================ -->		
<link rel="shortcut icon" type="image/x-icon" href="http://www.pkufe.com.cn/img/favicon.ico">

<!-- Google Fonts
============================================ -->		
<link href="/Public/css/css" rel="stylesheet" type="text/css">

<!-- Bootstrap CSS
============================================ -->		
<link rel="stylesheet" href="/Public/css/bootstrap.min.css">

<!-- Color Swithcer CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/color-switcher.css">

<!-- Fontawsome CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/font-awesome.min.css">

<!-- Owl Carousel CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/owl.carousel.css">

<!-- jquery-ui CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/jquery-ui.css">

<!-- Meanmenu CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/meanmenu.min.css">

<!-- Animate CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/animate.css">

<!-- Animated Headlines CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/animated-headlines.css">

<!-- Nivo slider CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/nivo-slider.css" type="text/css">
<link rel="stylesheet" href="/Public/css/preview.css" type="text/css" media="screen">

<!-- Metarial Iconic Font CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/material-design-iconic-font.css">
<link rel="stylesheet" href="/Public/css/material-design-iconic-font.min.css">

<!-- Slick CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/slick.css">

<!-- Video CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/jquery.mb.YTPlayer.css">

<!-- Style CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/style.css">

<!-- Color CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/color.css">

<!-- Responsive CSS
============================================ -->
<link rel="stylesheet" href="/Public/css/responsive.css">

<!-- Modernizr JS
============================================ -->		
<script src="/Public/js/modernizr-2.8.3.min.js"></script>

<!-- Color Css Files
============================================ -->	
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-one.css" title="color-one" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-two.css" title="color-two" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-three.css" title="color-three" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-four.css" title="color-four" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-five.css" title="color-five" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-six.css" title="color-six" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-seven.css" title="color-seven" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-eight.css" title="color-eight" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-nine.css" title="color-nine" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/color-ten.css" title="color-ten" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/pattren1.css" title="pattren1" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/pattren2.css" title="pattren2" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/pattren3.css" title="pattren3" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/pattren4.css" title="pattren4" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/pattren5.css" title="pattren5" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/background1.css" title="background1" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/background2.css" title="background2" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/background3.css" title="background3" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/background4.css" title="background4" media="screen">
<link rel="alternate stylesheet" type="text/css" href="/Public/css/background5.css" title="background5" media="screen">
</head>
<body style="">
<!--[if lt IE 8]>
	<p class="browserupgrade">您使用的是过时的浏览器。请升级您的浏览器以提高您的体验。</p>
<![endif]-->

<!--Main Wrapper Start-->
<div class="as-mainwrapper">
	<!--Bg White Start-->
	<div class="bg-white">
		<?php $Public = A('Home/Public'); ?>
		<?php $Public->header(); ?>
		<!--Breadcrumb Banner Area Start-->
		<div class="breadcrumb-banner-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<h1 class="text-center"><?php echo ($info["cate_name"]); ?></h1>
							<div class="breadcrumb-bar">
								<ul class="breadcrumb text-center">
									<li><a href="http://www.pkufe.com.cn/">首页</a></li>
									 <li><?php echo ($info["p_name"]); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End of Breadcrumb Banner Area-->		<!--Content Area Start-->
		<div class="about-page-area section-padding" style="padding-top: 0px;">
<style>.spliter, .spliter_btm {
    background: #ddd;
    width: 100%;
    height: 1px;
}</style>
	<?php $Public = A('Home/Public'); ?>
	<?php $Public->header1(); ?>
<div class="container">
				<div class="row">
<div id="banner_tabs" class="flexslider">
	<ul class="slides">
		<li style="position: absolute; left: 0px; top: 0px; display: list-item;">
			<a title="" href="http://www.pkufe.com.cn/jtdt/1019.jhtml">
				<img width="1200" height="675" alt="" style="background: url(/Public/images/211853447hxt.jpeg) no-repeat center;" src="/Public/images/alpha.png">
				<div style="position:absolute;left:0px;top:510px;z-index:1;font-family: 微软雅黑, SimSun; font-size: 24px;font-weight: bold;background-color: rgba(0,0,0,.3);color: #fff;box-sizing: border-box;margin: 28px;padding: 24px 30px;">北大方正教育集团举办2018年年终工作总结会</div>
			</a>
		</li>
		<li style="position: absolute; left: 0px; top: 0px; display: none;">
			<a title="" href="http://www.pkufe.com.cn/jtdt/987.jhtml">
				<img width="1200" height="675" alt="" style="background: url(/Public/images/20184550liz5.jpg) no-repeat center;" src="/Public/images/alpha.png">
				<div style="position:absolute;left:0px;top:510px;z-index:1;font-family: 微软雅黑, SimSun; font-size: 24px;font-weight: bold;background-color: rgba(0,0,0,.3);color: #fff;box-sizing: border-box;margin: 28px;padding: 24px 30px;">北京北大方正软件技术学院厚积薄发 以产教融合服务京津冀发展</div>
			</a>
		</li>
		<li style="position: absolute; left: 0px; top: 0px; display: none;">
			<a title="" href="http://www.pkufe.com.cn/jtdt/948.jhtml">
				<img width="1200" height="675" alt="" style="background: url(/Public/images/15160916lllm.jpeg) no-repeat center;" src="/Public/images/alpha.png">
				<div style="position:absolute;left:0px;top:510px;z-index:1;font-family: 微软雅黑, SimSun; font-size: 24px;font-weight: bold;background-color: rgba(0,0,0,.3);color: #fff;box-sizing: border-box;margin: 28px;padding: 24px 30px;">教育集团总裁潘秀峰一行赴廊坊经济技术开发区参观考察</div>
			</a>
		</li>
		<li style="position: absolute; left: 0px; top: 0px; display: none;">
			<a title="" href="http://www.pkufe.com.cn/jtdt/953.jhtml">
				<img width="1200" height="675" alt="" style="background: url(/Public/images/151605233a8f.jpeg) no-repeat center;" src="/Public/images/alpha.png">
				<div style="position:absolute;left:0px;top:510px;z-index:1;font-family: 微软雅黑, SimSun; font-size: 24px;font-weight: bold;background-color: rgba(0,0,0,.3);color: #fff;box-sizing: border-box;margin: 28px;padding: 24px 30px;">北大资源集团曾刚总一行赴方正软件学院进行教师节慰问并举行座谈</div>
			</a>
		</li>
	</ul>
	<ul class="flex-direction-nav">
		<li><a class="flex-prev" href="javascript:;">Previous</a></li>
		<li><a class="flex-next" href="javascript:;">Next</a></li>
	</ul>
	<ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
		<li class="active"><a title="北大方正教育集团举办2018年年终工作总结会">北大方正教育集团举办2018年年终工作总结会</a></li>
		<li class=""><a title="北京北大方正软件技术学院厚积薄发 以产教融合服务京津冀发展">北京北大方正软件技术学院厚积薄发 以产教融合服务京津冀发展</a></li>
		<li class=""><a title="教育集团总裁潘秀峰一行赴廊坊经济技术开发区参观考察">教育集团总裁潘秀峰一行赴廊坊经济技术开发区参观考察</a></li>
		<li class=""><a title="北大资源集团曾刚总一行赴方正软件学院进行教师节慰问并举行座谈">北大资源集团曾刚总裁一行赴北大方正软件技术学院进行教师节慰问并举行座谈</a></li>
	</ol>
</div>
<script src="/Public/js/jquery-1.10.2.min.js"></script>
<script src="/Public/js/slider.js"></script>
<script type="text/javascript">
$(function() {
	var bannerSlider = new Slider($('#banner_tabs'), {
		time: 5000,
		delay: 400,
		event: 'hover',
		auto: true,
		mode: 'fade',
		controller: $('#bannerCtrl'),
		activeControllerCls: 'active'
	});
	$('#banner_tabs .flex-prev').click(function() {
		bannerSlider.prev()
	});
	$('#banner_tabs .flex-next').click(function() {
		bannerSlider.next()
	});
})
</script>
				</div>
			</div>
		</div>
		<div class="about-page-area section-padding" style="background-color: #f5f5f5;">
			<div class="container">
				<div class="row">
				<!-- 新闻列表开始 -->
				<?php foreach($list as $k=>$v): ?>
					<div class="col-md-4" style="box-sizing: border-box;padding: 0 10px 20px 10px;">
						<a href="/index.php/Home/Article/article_show/id/<?php echo ($v["art_id"]); ?>">
							<div style="background-image:url(/Public/<?php echo ($v["art_litpic"]); ?>);width: 100%; height: 225px; background-size: cover; background-position: 50%;">
							</div>
							<div style="padding: 30px 30px 16px;background-color: #fff;box-shadow: 0 0 5px rgba(0,0,0,.08);">
								<p style="font-family: 微软雅黑, SimSun; font-size: 15px; line-height: 2em; letter-spacing: 0.05em;height:60px"><?php echo ($v["art_name"]); ?></p>
								<p style="font-family: 微软雅黑, SimSun; font-size: 12px; line-height: 2em; letter-spacing: 0.05em;color: #888;"><?php echo ($v["art_time"]); ?></p>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				</div>
				<div style="text-align: center; font-family: 微软雅黑, SimSun; font-size: 15px; line-height: 2em; letter-spacing: 0.05em;padding: 40px 0 20px 0;">
					<div class="pages">
						<?php echo ($p->show()); ?>
						<!-- 共15条记录 1/2页&nbsp;
						<a disabled="disabled">首页</a> 
						<a disabled="disabled">上一页</a>&nbsp;
						<a href="http://www.pkufe.com.cn/jtdt/index.jhtml#" onclick="location.href=encodeURI(&#39;index_2.jhtml&#39;);">下一页</a> 
						<a href="http://www.pkufe.com.cn/jtdt/index.jhtml#" onclick="location.href=encodeURI(&#39;index_2.jhtml&#39;);">尾页</a>
						&nbsp;第<select onchange="if(this.value==1){location.href=encodeURI(&#39;index.jhtml&#39;)}else{location.href=encodeURI(&#39;index_&#39;+this.value+&#39;.jhtml&#39;)}this.disabled=&#39;disabled&#39;">
  								<option value="1" selected="selected">1</option>
  								<option value="2">2</option>
							</select>页 -->
					</div>
				</div>
			</div>
		</div>
		<!--End of Content Area-->
		<?php $Public = A('Home/Public'); ?>
		<?php $Public->footer(); ?>
	</div>   
	<!--End of Bg White--> 
</div>    
<!--End of Main Wrapper Area--> 

<!-- Color Switcher -->
<!--<div class="ec-colorswitcher">
	<a class="ec-handle" href=""><i class="zmdi zmdi-settings"></i></a>
	<h3>Style Switcher</h3>
	<div class="ec-switcherarea">
		<h6>Select Layout</h6>
		<div class="layout-btn">
			<a href="" class="ec-boxed"><span>Boxed</span></a>
			<a href="" class="ec-wide"><span>Wide</span></a>
		</div>
		<h6>Chose Color</h6>
		<ul class="ec-switcher">
			<li><a href="" class="cs-color-1 styleswitch" data-rel="color-one"></a></li>
			<li><a href="" class="cs-color-2 styleswitch" data-rel="color-two"></a></li>
			<li><a href="" class="cs-color-3 styleswitch" data-rel="color-three"></a></li>
			<li><a href="" class="cs-color-4 styleswitch" data-rel="color-four"></a></li>
			<li><a href="" class="cs-color-5 styleswitch" data-rel="color-five"></a></li>
			<li><a href="" class="cs-color-6 styleswitch" data-rel="color-six"></a></li>
			<li><a href="" class="cs-color-7 styleswitch" data-rel="color-seven"></a></li>
			<li><a href="" class="cs-color-8 styleswitch" data-rel="color-eight"></a></li>
			<li><a href="" class="cs-color-9 styleswitch" data-rel="color-nine"></a></li>
			<li><a href="" class="cs-color-10 styleswitch" data-rel="color-ten"></a></li>
		</ul>
		<div class="ec-pattren">
			<h6>Chose Pattren</h6>
			<div class="pattren-wrap">
				<a href="" data-rel="pattren1" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-pattren/pattren1.jpg" alt=""></a>
				<a href="" data-rel="pattren2" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-pattren/pattren2.jpg" alt=""></a>
				<a href="" data-rel="pattren3" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-pattren/pattren3.jpg" alt=""></a>
				<a href="" data-rel="pattren4" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-pattren/pattren4.jpg" alt=""></a>
				<a href="" data-rel="pattren5" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-pattren/pattren5.jpg" alt=""></a>
			</div>
		</div>
		<div class="ec-background">
			<h6>Chose Background</h6>
			<div class="background-wrap">
				<a href="" data-rel="background1" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-background/bg-1.jpg" alt=""></a>
				<a href="" data-rel="background2" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-background/bg-2.jpg" alt=""></a>
				<a href="" data-rel="background3" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-background/bg-3.jpg" alt=""></a>
				<a href="" data-rel="background4" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-background/bg-4.jpg" alt=""></a>
				<a href="" data-rel="background5" class="styleswitch"><img src="/r/cms/www/pkufe2018/img/ec-background/bg-5.jpg" alt=""></a>
			</div>
		</div>
	</div>
</div>-->
<!-- Color Switcher end -->	


<!-- jquery
============================================ -->		
<script src="/Public/js/jquery-1.12.4.min.js"></script>

<!-- bootstrap JS
============================================ -->		
<script src="/Public/js/bootstrap.min.js"></script>

<!-- nivo slider js
============================================ -->       
<script src="/Public/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="/Public/js/home.js" type="text/javascript"></script>

<!-- meanmenu JS
============================================ -->		
<script src="/Public/js/jquery.meanmenu.js"></script>

<!-- wow JS
============================================ -->		
<script src="/Public/js/wow.min.js"></script>

<!-- owl.carousel JS
============================================ -->		
<script src="/Public/js/owl.carousel.min.js"></script>

<!-- scrollUp JS
============================================ -->		
<script src="/Public/js/jquery.scrollUp.min.js"></script>

<!-- Waypoints JS
============================================ -->		
<script src="/Public/js/waypoints.min.js"></script>

<!-- Counterup JS
============================================ -->		
<script src="/Public/js/jquery.counterup.min.js"></script>

<!-- Slick JS
============================================ -->		
<script src="/Public/js/slick.min.js"></script>

<!-- Animated Headlines JS
============================================ -->		
<script src="/Public/js/animated-headlines.js"></script>

<!-- Textilate JS
============================================ -->		
<script src="/Public/js/textilate.js"></script>

<!-- Lettering JS
============================================ -->		
<script src="/Public/js/lettering.js"></script>

<!-- Video Player JS
============================================ -->		
<script src="/Public/js/jquery.mb.YTPlayer.js"></script>

<!-- Mail Chimp JS
============================================ -->		
<script src="/Public/js/jquery.ajaxchimp.min.js"></script>

<!-- AJax Mail JS
============================================ -->		
<script src="/Public/js/ajax-mail.js"></script>

<!-- plugins JS
============================================ -->		
<script src="/Public/js/plugins.js"></script>

<!-- StyleSwitch JS
============================================ -->	
<script src="/Public/js/styleswitch.js"></script>

<!-- main JS
============================================ -->		
<script src="/Public/js/main.js"></script><a id="scrollUp" href="http://www.pkufe.com.cn/jtdt/index.jhtml#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a>

</body></html>