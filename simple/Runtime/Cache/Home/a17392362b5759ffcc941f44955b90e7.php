<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<header>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Introduce</title>

		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>templatemo-style.css">
		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>my.css" />
		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>menu.css" />
		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>reset.css" />

	</header>
	<!--New idea : 加一个悬浮按钮，返回顶部的功能-->

	<body id="menu_Content">
		<div id="item1" class="container-fluid tm-header-inner item">
				
	
	<a href="index.html" class="navbar-brand tm-site-name">Home</a>
	<!-- Nav pills -->
	<nav>
		<ul id="header-nav" class="nav nav-pills nav-justified">
			<li class="nav-item">
				<a class="nav-link tm-black-text" href="/simple/index.php/Home/Index/index">Introduce</a>
			</li>
			<li class="nav-item">
				<a class="nav-link tm-black-text" href="/simple/index.php/Home/Knowleage/knowleage">Knowleage</a>
			</li>
			<li class="nav-item">
				<a class="nav-link tm-black-text" href="/simple/index.php/Home/Share/share">Share</a>
			</li>
			<li class="nav-item">
				<a class="nav-link tm-black-text" href="/simple/index.php/Home/Search/search">Search</a>
			</li>
		</ul>
	</nav>
	
		</div>

		<!--正文-->
		<div class="tm-home-img-container ">
			<p class="my-slogan"><?php echo ($sent_data["its_slogan"]); ?></p>
			<div class="my-exp-box my-overflow">
				<p name="sentiment"><?php echo ($sent_data["its_content"]); ?></p>
			</div>
		</div>
		<section class="tm-section">
			<div  class="container-fluid">
				<div id="item2" class="row item">
					<div class="col-12">
						<h2 class="tm-title text-center">十二梦</h2>
						<p class="tm-subtitle text-center">My dream</p>
					</div>
				</div>

				<?php if(is_array($dream_data)): foreach($dream_data as $key=>$val): ?><div class="row">
							<div class="col-12">
								<div id="<?php echo ($val['itd_items']); ?>" class="tm-content-box tm-margin-b-40 item ">
									<img src="<?php echo (IMG_URL); ?>Introduce/<?php echo ($val['itd_imgs']); ?>" alt="Image" class="tm-margin-b-20 img-fluid">
									<h4 class="tm-margin-b-20 tm-black-text text-center"><?php echo ($val['itd_dreams']); ?></h4>
									<p class="tm-marg·in-b-20 text-center"><?php echo ($val['itd_describe']); ?></p>
								</div>
							</div>
						</div><?php endforeach; endif; ?>
				<!-- row -->
				<h1 class="text-center">Not The End <br /> More</h1>
			</div>
		</section>
		
		<!--页脚-->
		<!--服务器绝对路径访问-->
		<!---->
		<!--默认访问: (当前模型的View下的文件夹)/文件   访问其他模型：模型@(view下文件夹)/文件-->
		<!--页脚-->
		<footer id="item5" class="tm-footer item">
			<div class="container-fluid">
				<div class="row">

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

						<div class="tm-footer-content-box">
							<h3 class="tm-white-text tm-title tm-footer-content-box-title">网站简介</h3>
							<div class="tm-gray-bg">
								<p>初心不忘</p>
								<p>建站最初的想法是“欢乐屋”——house of joy，将日常所用到的工具的功能集成到一起，这样每天就只用上一个地方就能做所有的事。 后来堕落了，hoj就被搁置。因毕业设计，也因受hoj的影响，才有了现在的“知识共享网站”，无限的互联网节点，知识在流淌， 我们不断的学习，在这无边的海洋中，我只想造一座自己的灯塔，在数不清的夜里偶尔能发出微弱的光。
								</p>
								<p><strong>——感谢、前行</strong></p>
							</div>
						</div>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
						<div class="tm-white-text tm-footer-content-box tm-footer-links-container">

							<h3 class="tm-title tm-footer-content-box-title">联系方式：</h3>
							<nav>
								<ul>
									<li>
										<h5>移动电话：</h5>
										<p>13266671965</p>
									</li>
									<li>
										<h5>个人邮箱：</h5>
										<p>978260445@qq.com</p>
									</li>
									<li>
										<h5>QQ：</h5>
										<p>978260445</p>
									</li>
									<li>
										<h5>微信：</h5>
										<p>MLY-LS</p>
									</li>
								</ul>
							</nav>

						</div>

					</div>

					<div class="clearfix hidden-lg-up"></div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

						<div class="tm-footer-content-box">

							<h3 class="tm-white-text tm-title tm-footer-content-box-title">网站公告</h3>
							<p class="tm-margin-b-30">本站共分四大板块：<br />个人简介、知识分享、资源共享、交流圈子</p>
							<hr class="tm-margin-b-30">
							<p class="tm-margin-b-30">网站正在建设...<br />敬请期待</p>
						</div>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

						<div class="tm-footer-content-box">

							<h3 class="tm-white-text tm-title tm-footer-content-box-title">服务支持</h3>
							<div class="tm-margin-b-30">
								<img src="<?php echo (IMG_URL); ?>tm-img-100x100-1.jpg" alt="Image" class="tm-footer-thumbnail">
								<img src="<?php echo (IMG_URL); ?>tm-img-100x100-2.jpg" alt="Image" class="tm-footer-thumbnail">
								<img src="<?php echo (IMG_URL); ?>tm-img-100x100-3.jpg" alt="Image" class="tm-footer-thumbnail">
								<img src="<?php echo (IMG_URL); ?>tm-img-100x100-4.jpg" alt="Image" class="tm-footer-thumbnail">
								<img src="<?php echo (IMG_URL); ?>tm-img-100x100-5.jpg" alt="Image" class="tm-footer-thumbnail">
								<img src="<?php echo (IMG_URL); ?>tm-img-100x100-6.jpg" alt="Image" class="tm-footer-thumbnail">
							</div>
							<p class="tm-margin-b-20">本站若有任何侵权行为，请联系我<br /> 同时转载本站原创资源的时
								<br /> 请注明来源
							</p>

						</div>

					</div>

				</div>

				<div class="row groupware-center">
					<div class="col-xs-12 tm-copyright-col ">
						<p class="tm-copyright-text display-inline ">Copyright ©
							<div id="ny" class="display-inline"></div>. 保留所有权利</p>
					</div>
				</div>
			</div>
		</footer>
		
			
		<!--悬浮菜单-->
		<div id="menu" >
			<ul class="my-cleanstyle-ul">
				<li>
					<a href="#item1" class="cur">首页</a>
				</li>
				<li>
					<a href="#item2">Dream</a>
				</li>
				<li>
					<a href="#item3">Middle</a>
				</li>
				<li>
					<a href="#item4">Next</a>
				</li>
				<li>
					<a href="#item5">底栏</a>
				</li>
			</ul>
		</div>
		
		<!-- load JS files -->
		<script src="https://cdn.staticfile.org/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>
		<script src="<?php echo (JS_URL); ?>myjs.js"></script>
		<script src="<?php echo (JS_URL); ?>tether.min.js"></script>
		<script src="<?php echo (JS_URL); ?>menu.js"></script>
		<!--奇了怪了怎么这句话只能在这个页面加载
			<script>$("footer").load("/simple/Home/View/MasterPage/footer.html");</script>
		//模拟失败
		<script>
		
	</script>-->
	
	</body>

</html>