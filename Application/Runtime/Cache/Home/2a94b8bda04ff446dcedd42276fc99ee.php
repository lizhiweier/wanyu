<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths" style="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php echo ($info["sys_name"]); ?></title>
<meta name="description" content="<?php echo ($info["sys_des1"]); ?>">
<meta name="keywords" content="<?php echo ($info["sys_keyword"]); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

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
<body>
<!--[if lt IE 8]>
	<p class="browserupgrade">您使用的是过时的浏览器。请升级您的浏览器以提高您的体验。</p>
<![endif]-->

<!--Main Wrapper Start-->
<div class="as-mainwrapper">
	<!--Bg White Start-->
	<div class="bg-white">
	
		<?php $Public = A('Home/Public'); ?>
		<?php $Public->header(); ?>
		
		<!--Slider Area Start-->
		<div class="slider-area">
			<div class="preview-2">
				<div id="nivoslider" class="slides">	
					<img src="/Public/images/1.jpg" alt="" title="#slider-1-caption1">
					<img src="/Public/images/2.jpg" alt="" title="#slider-1-caption2">
				</div> 
				<div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
					<div class="banner-content slider-1">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="text-content-wrapper">
										<div class="text-content">
											<h1 class="title1 wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="0s">源于教育<br>
											回馈教育</h1>
											<p class="sub-title wow fadeInUp hidden-sm hidden-xs" data-wow-duration="2900ms" data-wow-delay=".5s"> 构建终身教育的一流服务系统<br>
											引领终身学习的生活方式、让生活因教育而更美好<br>
											&nbsp;</p>
											<div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
												<a class="button-default" href="/jtgk/index.jhtml">了解我们</a>	                
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
					<div class="banner-content slider-2">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="text-content-wrapper">
										<div class="text-content slide-2">
											<h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">源于教育<br>
											回馈教育</h1>
											<p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s"> 构建终身教育的一流服务系统<br>
											引领终身学习的生活方式、让生活因教育而更美好<br>
											&nbsp;</p>
											<div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
												<a class="button-default" href="/jtgk/index.jhtml">了解我们</a>	                
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	 
			</div>
		</div>
		<!--End of Slider Area-->

		<!--About Area Start--> 
		<div class="about-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="about-container">
							<h3>欢迎走进河南万豫教育集团</h3>
							<p><?php echo ($info["sys_des2"]); ?></p>
							<a class="button-default" href="/index.php/home/list/show_list/id/2">了解更多</a>	      
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End of About Area-->
		<!--Course Area Start-->
		<div class="course-area section-padding bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title-wrapper">
							<div class="section-title">
								<h3>教育领域</h3>
								<p>The education field</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<?php if(is_array($edu_info)): foreach($edu_info as $k=>$v): ?><div class="col-md-4 col-sm-6">
						<div class="single-item">
							<div class="single-item-image overlay-effect">
								<a href="/index.php/Home/list/show_list/id/<?php echo ($v["cate_id"]); ?>">
									<img src="/Public/<?php echo ($v["cate_litpic"]); ?>" alt="">
								</a>
							</div>
							<div class="single-item-text">
								<h4><a href="/index.php/Home/list/show_list/id/<?php echo ($v["cate_id"]); ?>"><?php echo ($v["cate_name"]); ?></a></h4>
								<div class="single-item-text-info">
								</div>
								<p><?php echo ($v["cate_des"]); ?></p>
								<div class="single-item-content">
								</div>   
							</div>
							<div class="button-bottom">
								<a href="/index.php/Home/list/show_list/id/<?php echo ($v["cate_id"]); ?>" class="button-default">了解更多</a>
							</div>
						</div>
					</div><?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<!--End of Course Area-->
		<!--Fun Factor Area Start-->
		<div class="fun-factor-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title-wrapper white">
							<div class="section-title">
								<h3>人才培养</h3>
								<p>Talent&nbsp;cultivation</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="single-fun-factor">
							<h4>职业教育</h4>
							<h2><span class="counter">16000</span>+</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="single-fun-factor">
							<h4>国际合作</h4>
							<h2><span class="counter">50</span>+</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="single-fun-factor">
							<h4>认证培训</h4>
							<h2><span class="counter">23000</span>+</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<div class="single-fun-factor">
							<h4>合作办学</h4>
							<h2><span class="counter">10</span>+</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End of Fun Factor Area-->   
		<!--Latest News Area Start--> 
		<div class="latest-area section-padding bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title-wrapper">
							<div class="section-title">
								<h3><a href="/index.php/Home/list/show_list/id/4">新闻资讯</a></h3>
								<p><a href="/index.php/Home/list/show_list/id/4">News and information</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<?php if(is_array($news_info)): foreach($news_info as $k=>$v): ?><div class="col-md-6">
						<div class="single-latest-item">
							<div class="single-latest-image">
								<a href="/index.php/Home/article/article_show/id/<?php echo ($v["art_id"]); ?>" title="<?php echo ($v["art_name"]); ?>"><img style="max-width:236px;display:block;height:234px;object-fit:cover;" src="/Public/<?php echo ($v["art_litpic"]); ?>" alt=""></a>
							</div>
							<div class="single-latest-text" style="padding-right:10px;">
								<h3><a href="/index.php/Home/article/article_show/id/<?php echo ($v["art_id"]); ?>" title="<?php echo ($v["art_name"]); ?>"><?php echo ($v["art_name"]); ?></a></h3>
								<div class="single-item-comment-view">
								   <span><i></i>&nbsp;</span>
							   </div>
							   <p><?php echo ($v["art_des"]); ?></p>
							   <a href="/index.php/Home/article/article_show/id/<?php echo ($v["art_id"]); ?>" class="button-default">了解更多</a>
							</div>
						</div>
					</div><?php endforeach; endif; ?>
					<!-- <div class="col-md-6">
						<div class="single-latest-item">
							<div class="single-latest-image">
								<a href="http://www.pkufe.com.cn/zyzx/1025.jhtml" title="行路致远，砥砺前行 ——北京市教育工委委员、教委副主委黄侃一行来我院检查指导工作"><img src="/Public/images/11103454xl2a.jpg" alt=""></a>
							</div>
							<div class="single-latest-text" style="padding-right:10px;">
								<h3><a href="http://www.pkufe.com.cn/zyzx/1025.jhtml" title="行路致远，砥砺前行 ——北京市教育工委委员、教委副主委黄侃一行来我院检查指导工作">行路致远，砥砺前...</a></h3>
								<div class="single-item-comment-view">
								   <span><i></i>&nbsp;</span>
							   </div>
							   <p>3月7日，北京市委教育工委委员、教委副主任黄侃，市教委民办高等教育处副处长姬云鹏、市教委督导专员兼党建工作联络...</p>
							   <a href="http://www.pkufe.com.cn/zyzx/1025.jhtml" class="button-default">了解更多</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-latest-item">
							<div class="single-latest-image">
								<a href="http://www.pkufe.com.cn/zyzx/1016.jhtml" title="软件学院举行第一届大数据技术与应用+人工智能专业建设指导委员会第一次会议"><img src="/Public/images/10192310xkl2.jpg" alt=""></a>
							</div>
							<div class="single-latest-text" style="padding-right:10px;">
								<h3><a href="http://www.pkufe.com.cn/zyzx/1016.jhtml" title="软件学院举行第一届大数据技术与应用+人工智能专业建设指导委员会第一次会议">软件学院举行第一届...</a></h3>
								<div class="single-item-comment-view">
								   <span><i></i>&nbsp;</span>
							   </div>
							   <p>1月9日，软件学院第一届大数据技术与应用+人工智能专业建设指导委员会第一次会议在北京隆重举行。北大医疗信息技术...</p>
							   <a href="http://www.pkufe.com.cn/zyzx/1016.jhtml" class="button-default">了解更多</a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="single-latest-item">
							<div class="single-latest-image">
								<a href="http://www.pkufe.com.cn/jtdt/987.jhtml" title="北京北大方正软件技术学院厚积薄发 以产教融合服务京津冀发展"><img src="/Public/images/20185249h0f2.jpg" alt=""></a>
							</div>
							<div class="single-latest-text" style="padding-right:10px;">
								<h3><a href="http://www.pkufe.com.cn/jtdt/987.jhtml" title="北京北大方正软件技术学院厚积薄发 以产教融合服务京津冀发展">北京北大方正软件技...</a></h3>
								<div class="single-item-comment-view">
								   <span><i></i>&nbsp;</span>
							   </div>
							   <p>12月19日，北京北大方正软件技术学院京津冀产教融合签约仪式在京津冀大数据创新应用中心举行</p>
							   <a href="http://www.pkufe.com.cn/jtdt/987.jhtml" class="button-default">了解更多</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
		<!--End of Latest News Area--> 
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
<script src="/Public/js/main.js"></script><a id="scrollUp" href="http://www.pkufe.com.cn/#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a>

</body></html>