<?php if (!defined('THINK_PATH')) exit();?>		<!--Footer Widget Area Start-->
		<div class="footer-widget-area">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="single-footer-widget">
							<div class="footer-logo">
								<a href="http://www.pkufe.com.cn/"><img src="/Public/images/footer.jpg" alt="" style="height: 44px;"></a>
							</div>
							<p><?php echo ($info["sys_des3"]); ?></p>
							<!--<div class="social-icons">
								<a href=""><img src="/r/cms/www/pkufe2018/img/logo/weixin.png" alt=""></a>
								<a href=""><img src="/r/cms/www/pkufe2018/img/logo/weibo.png" alt=""></a>
							</div>-->
						</div>
					</div>
					<div class="col-md-2 col-sm-4">
						<div class="single-footer-widget">&nbsp;
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="single-footer-widget">
							<h3>联系我们</h3>
							<span><i class="fa fa-phone"></i><?php echo ($info["sys_phone"]); ?></span>
							<span><i class="fa fa-envelope"></i><?php echo ($info["sys_mail"]); ?></span>
							<span><i class="fa fa-globe"></i><?php echo ($info["sys_url"]); ?></span>
							<span><i class="fa fa-map-marker"></i><?php echo ($info["sys_adress"]); ?></span>
						</div>
					</div>
					<div class="col-md-2 hidden-sm">
						<div class="single-footer-widget">
							<h3>相关链接</h3>
							<ul class="footer-list">
								<li style="margin-bottom: 8px;"><a href="http://www.hnfts.cn/" target="_blank">河南外贸学校</a></li>
								<li style="margin-bottom: 8px;"><a href="http://intl.yuhangedu.com/" target="_blank">万豫国际教育</a></li>
								<li style="margin-bottom: 8px;"><a href="http://air.yuhangedu.com/" target="_blank">万豫航空学院</a></li>
								<li style="margin-bottom: 8px;"><a href="http://tech.yuhangedu.com/" target="_blank">万豫计算机学院</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End of Footer Widget Area-->
		<!--Footer Area Start-->
		<footer class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-7">
						<span><?php echo ($info["sys_cright"]); ?> &nbsp;&nbsp;版权所有：<?php echo ($info["sys_name"]); ?>&nbsp;&nbsp; | &nbsp;&nbsp;<!-- <a target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备13002743号-1</a> --></span>
					</div>
					<div class="col-md-6 col-sm-5">
						<div class="column-right">
							<span>
							<a target="_blank" href="http://www.miitbeian.gov.cn/">
							<span><?php echo ($info["sys_beian"]); ?></span>
							</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--End of Footer Area-->