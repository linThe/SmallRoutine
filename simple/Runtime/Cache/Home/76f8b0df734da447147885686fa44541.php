<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Knowledge</title>

		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>templatemo-style.css">
		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>my.css" />

	</head>

	<body>

		<div class="tm-header">
			<div class="container-fluid">
				<div class="tm-header-inner">
					<a href="index.html" class="navbar-brand tm-site-name">Home</a>
					<!-- Nav pills -->
					<nav>
						<ul class="nav nav-pills nav-justified">
							<li class="nav-item">
								<a class="nav-link tm-black-text" href="/simple/index.php/Home/Index/index">Introduce</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active tm-black-text" href="/simple/index.php/Home/Knowleage/knowleage">Knowleage</a>
							</li>
							<li class="nav-item">
								<a class="nav-link tm-black-text" href="/simple/index.php/Home/Share/share">Share</a>
							</li>
							<li class="nav-item">
								<a class="nav-link tm-black-text" href="/simple/index.php/Home/Discuss/discuss">Discuss</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!--nav tabs 三个大导航-->
		<div class="container-fluid">

			<ul class="nav nav-tabs nav-justified " role="tablist">
				<li class="nav-item">
					<a class="nav-link active tm-black-text" data-toggle="tab" href="#english">
						<h3>English</h3></a>
				</li>
				<li class="nav-item">
					<a class="nav-link tm-black-text" data-toggle="tab" href="#program">
						<h3>Program</h3></a>
				</li>
				<li class="nav-item">
					<a class="nav-link tm-black-text" data-toggle="tab" href="#daily">
						<h3>Daily</h3></a>
				</li>
			</ul>
		</div>

		<section class="tm-section">
			<!--content-->
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active container my-solid-radius-20-2" id="english">
					<!--伪标题-->
					<h3 class="text-center ">英语</h3>
					<!--头条-->
					<a href="#">
						<img class="my-paging-img" src="<?php echo (IMG_URL); ?>Introduce/black hole.jpg" />
					</a>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active container " id="english-pane-1">
						</div>
						<div class="tab-pane container" id="english-pane-2">

						</div>
						<div class="tab-pane container" id="english-pane-3">

						</div>
						<div class="tab-pane container" id="english-pane-4">

						</div>
					</div>

					<!-- Nav paging -->
					<div class="groupware-center">
						<ul class="nav nav-pills my-padding-left">
							<li class="nav-item">
								<a class="page-link active tm-black-text" data-toggle="pill" href="#english-pane-1">1</a>
							</li>
							<li class="nav-item">
								<a class="page-link  tm-black-text" data-toggle="pill" href="#english-pane-2">2</a>
							</li>
							<li class="nav-item">
								<a class="page-link  tm-black-text" data-toggle="pill" href="#english-pane-3">3</a>
							</li>
							<li class="nav-item">
								<a class="page-link  tm-black-text" data-toggle="pill" href="#english-pane-4">4</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="tab-pane container my-solid-radius-20-2" id="program">
					<!--伪标题-->
					<h3 class="text-center ">计算机</h3>
					<!--头条-->
					<a href="#">
						<img class="my-paging-img" src="<?php echo (IMG_URL); ?>Introduce/black hole.jpg" />
					</a>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active container " id="program-pane-1">
						</div>
						<div class="tab-pane container" id="program-pane-2">

						</div>
						<div class="tab-pane container" id="program-pane-3">

						</div>
						<div class="tab-pane container" id="program-pane-4">

						</div>
					</div>

					<!-- Nav paging -->
					<div class="groupware-center">
						<ul class="nav nav-tabs my-padding-left">
							<li class="nav-item">
								<a class="page-link active tm-black-text" data-toggle="pill" href="#program-pane-1">1</a>
							</li>
							<li class="nav-item">
								<a class="page-link  tm-black-text" data-toggle="pill" href="#program-pane-2">2</a>
							</li>
							<li class="nav-item">
								<a class="page-link  tm-black-text" data-toggle="pill" href="#program-pane-3">3</a>
							</li>
							<li class="nav-item">
								<a class="page-link  tm-black-text" data-toggle="pill" href="#program-pane-4">4</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="tab-pane  container my-solid-radius-20-2" id="daily">
					<!--伪标题-->
					<h3 class="text-center ">日常</h3>
					<!--头条-->
					<a href="#">
						<img class="my-paging-img" src="<?php echo (IMG_URL); ?>Introduce/black hole.jpg" />
					</a>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active container " id="daily-pane-1">
						</div>
						<div class="tab-pane container" id="daily-pane-2">

						</div>
						<div class="tab-pane container" id="daily-pane-3">

						</div>
						<div class="tab-pane container" id="daily-pane-4">

						</div>
					</div>

					<!-- Nav paging -->
					<div class="groupware-center">
						<ul class="nav nav-pills my-padding-left">
							<li class="nav-item">
								<a class="page-link active tm-black-text" data-toggle="pill" href="#daily-pane-1">1</a>
							</li>
							<li class="nav-item">
								<a class="page-link  tm-black-text" data-toggle="pill" href="#daily-pane-2">2</a>
							</li>
							<li class="nav-item">
								<a class="page-link  tm-black-text" data-toggle="pill" href="#daily-pane-3">3</a>
							</li>
							<li class="nav-item">
								<a class="page-link  tm-black-text" data-toggle="pill" href="#daily-pane-4">4</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!--*************footer**********-->
		<!--底栏可收起来的特效-->
		<footer class="tm-footer">
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
							<p class="tm-margin-b-20">本站若有任何侵权行为，请联系我<br /> 转载本站资源时
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
		<!-- load JS files -->
		<script src="https://cdn.staticfile.org/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>
		<script src="<?php echo (JS_URL); ?>tether.min.js"></script>
		<script type="text/javascript" src="<?php echo (JS_URL); ?>jsDom.js"></script>
		<!-- 关于cdn，cdn和本地的备份
		<script src="https://ajax.googleapis.com/ajax/libs/jquery1.4.3/jquery.min.js"></script>
		<script>!window.jQuery && document.write("<script src=\"scripts/jquery-1.4.3.min.js\">" + "<\/scrript>")</script>-->
		<!--先用min版待初版完成，再试试slim会不会少-->
	</body>

</html>