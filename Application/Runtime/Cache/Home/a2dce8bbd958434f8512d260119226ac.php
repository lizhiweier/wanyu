<?php if (!defined('THINK_PATH')) exit();?><!-- Header Area Start -->
		<header>
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-6 col-sm-5 hidden-xs">
							<span><?php echo ($info["sys_concept"]); ?></span>
						</div>
						<div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
							<div class="header-top-right">
								<!--<div class="content"><a href="http://oa.pfc.cn:8090/"><i class="zmdi zmdi-account"></i>&nbsp; 登 陆</a>
									<ul class="account-dropdown">
										<li><a href="http://oa.pfc.cn:8090/">OA</a></li>
										<li><a href="https://mail.mxhichina.com/">邮箱</a></li>
										<li><a href="http://file.pkufe.com.cn:8000/">云存储</a></li>
									</ul>
								</div>
								<div class="content"><a href="http://weibo.com/u/5452895606?topnav=1&wvr=6&topsug=1"><i class="zmdi zmdi-favorite"></i>&nbsp; 微 博</a></div>
								<div class="content"><a><i class="zmdi zmdi-shopping-basket"></i> English</a></div>-->
								<div class="content"><a href="http://mail.yuhangedu.com"><i></i> 企业邮箱</a></div>
								<div class="content"><a href="/index.php/Home/list/show_list/id/4"><i></i>集团动态</a></div>
								<div class="content"><a href="/index.php/Home/list/show_list/id/8"><i></i> 教育服务</a></div>
								<div class="content"><a href="/index.php/Home/list/show_list/id/21" target="_blank"><i></i> 联系我们</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-logo-menu sticker">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="logo">
								<a href="http://www.pkufe.com.cn/"><img src="/Public/images/logo.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-9">
							<div class="mainmenu-area pull-right">
								<div class="mainmenu hidden-sm hidden-xs">
									<nav>
										<ul id="nav">
										<?php foreach($data as $k=>$v): ?>
											<li>
											<?php
 if($v['is_outlink']){ $url = $v['cate_url']; }else{ $url = '/index.php/Home/List/show_list/id/'.$v['cate_id']; } ?>
											<a target="_blank" href="<?php echo ($url); ?>"><?php if($v['cate_pid'] == '0'){ echo $v['cate_name']; } ?></a>
											<?php
 if($v['children']){ ?>
												<ul class="sub-menu">
													<?php foreach($v['children'] as $k1=>$v1): ?>
													<?php
 if($v1['is_outlink']){ $url1 = $v1['cate_url']; }else{ $url1 = '/index.php/Home/List/show_list/id/'.$v1['cate_id']; } ?>	
													<li><a target="_blank" href="<?php echo ($url1); ?>"><?php echo ($v1["cate_name"]); ?></a></li>
													<?php endforeach; ?>
												</ul>
											<?php } ?>
											</li>
										<?php endforeach; ?>
											<!-- <li><a href="http://www.pkufe.com.cn/xwzx/index.jhtml">新闻资讯</a>
									<ul class="sub-menu">
										<li><a href="http://www.pkufe.com.cn/jtdt/index.jhtml">集团动态</a></li>
										<li><a href="http://www.pkufe.com.cn/jyly/index.jhtml">教育领域</a></li>
										<li><a href="http://www.pkufe.com.cn/jtgg/index.jhtml">集团公告</a></li>
										<li><a href="http://www.pkufe.com.cn/jyzx/index.jhtml">教育资讯</a></li>
									</ul>
											</li>
											<li><a href="http://www.pkufe.com.cn/rcpy/index.jhtml">职业教育</a>
									<ul class="sub-menu">
										<li><a href="http://www.pkufe.com.cn/rcpy/index.jhtml">人才培养</a></li>
										<li><a href="http://www.pkufe.com.cn/cyjy/index.jhtml">创业就业</a></li>
										<li><a href="http://www.pkufe.com.cn/szdw/index.jhtml">师资队伍</a></li>
										<li><a href="http://www.pkufe.com.cn/zysz/index.jhtml">专业设置</a></li>
									</ul>
											</li>
											<li><a href="http://www.pkufe.com.cn/xqjy/index.jhtml">学前教育</a>
											</li>
											<li><a href="http://www.pkufe.com.cn/gjjy/index.jhtml">国际教育</a></li>
											<li><a href="http://www.pkufe.com.cn/rzpx/index.jhtml">认证培训</a>
											</li>
											<li><a href="http://www.pkufe.com.cn/jyfw/index.jhtml">教育服务</a></li>
											<li><a href="http://www.pkufe.com.cn/cpyc/index.jhtml">加入我们</a>
												<ul class="sub-menu">
													<li><a href="http://www.pkufe.com.cn/cpyc/index.jhtml">诚聘英才</a></li>
													<li><a href="http://www.pkufe.com.cn/lxwm/index.jhtml">联系我们</a></li>
												</ul>
											</li> -->
										</ul>
									</nav>
								</div>
								<!--<ul class="header-search">
									<li class="search-menu">
										<i id="toggle-search" class="zmdi zmdi-search-for"></i>
									</li>
								</ul>-->
								<!--Search Form-->
								<div class="search">
									<div class="search-form">
										<form id="search-form" action="http://www.pkufe.com.cn/#">
											<input type="search" placeholder="Search here..." name="search">
											<button type="submit">
												<span><i class="fa fa-search"></i></span>
											</button>
										</form>                                
									</div>
								</div>
								<!--End of Search Form-->
							</div> 
						</div>
					</div>
				</div>
			</div>  
			<!-- Mobile Menu Area start -->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="mobile-menu">
								<nav id="dropdown" style="display: block;">
									<ul>
											<li><a href="http://www.pkufe.com.cn/jtgk/index.jhtml">教育集团</a>
									<ul class="sub-menu">
										<li><a href="http://www.pkufe.com.cn/jtgk/index.jhtml">集团概况</a></li>
										<li><a href="http://www.pkufe.com.cn/rcln/index.jhtml">人才理念</a></li>
										<li><a href="http://www.pkufe.com.cn/zlbj/index.jhtml">战略布局</a></li>
										<li><a href="http://www.pkufe.com.cn/shzr/index.jhtml">社会责任</a></li>
									</ul>
											</li>
											<li><a href="http://www.pkufe.com.cn/xwzx/index.jhtml">新闻资讯</a>
									<ul class="sub-menu">
										<li><a href="http://www.pkufe.com.cn/jtdt/index.jhtml">集团动态</a></li>
										<li><a href="http://www.pkufe.com.cn/jyly/index.jhtml">教育领域</a></li>
										<li><a href="http://www.pkufe.com.cn/jtgg/index.jhtml">集团公告</a></li>
										<li><a href="http://www.pkufe.com.cn/jyzx/index.jhtml">教育资讯</a></li>
									</ul>
											</li>
											<li><a href="http://www.pkufe.com.cn/rcpy/index.jhtml">职业教育</a>
									<ul class="sub-menu">
										<li><a href="http://www.pkufe.com.cn/rcpy/index.jhtml">人才培养</a></li>
										<li><a href="http://www.pkufe.com.cn/cyjy/index.jhtml">创业就业</a></li>
										<li><a href="http://www.pkufe.com.cn/szdw/index.jhtml">师资队伍</a></li>
										<li><a href="http://www.pkufe.com.cn/zysz/index.jhtml">专业设置</a></li>
									</ul>
											</li>
											<li><a href="http://www.pkufe.com.cn/xqjy/index.jhtml">学前教育</a>
											</li>
											<li><a href="http://www.pkufe.com.cn/gjjy/index.jhtml">国际教育</a></li>
											<li><a href="http://www.pkufe.com.cn/rzpx/index.jhtml">认证培训</a>
											</li>
											<li><a href="http://www.pkufe.com.cn/jyfw/index.jhtml">教育服务</a></li>
											<li><a href="http://www.pkufe.com.cn/cpyc/index.jhtml">加入我们</a>
									<ul class="sub-menu">
										<li><a href="http://www.pkufe.com.cn/cpyc/index.jhtml">诚聘英才</a></li>
										<li><a href="http://www.pkufe.com.cn/lxwm/index.jhtml">联系我们</a></li>
									</ul>
											</li>
									</ul>
								</nav>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile Menu Area end -->    
		</header>
		<!--End of Header Area-->		<!--Slider Area Start