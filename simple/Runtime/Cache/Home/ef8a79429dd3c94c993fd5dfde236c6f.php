<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Discuss</title>
		
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
								<a class="nav-link tm-black-text " href="/simple/index.php/Home/Knowleage/knowleage">Knowleage</a>
							</li>
							<li class="nav-item">                            
								<a class="nav-link tm-black-text" href="/simple/index.php/Home/Share/share">Share</a>
								/simple/index.php/Home
							</li>
							<li class="nav-item">
								<a class="nav-link tm-black-text active" href="/simple/index.php/Home/Discuss/discuss">Discuss</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
		<!--板块-->
		<div class="container-fluid">
			<ul class="nav nav-pills row">
				<!--如何能做到响应式？？？？？？？？？？？？？？？？-->
				<li class="col-1"></li>
				<li class="nav-item col-2">
					<a class="nav-link" data-toggle="pill" href="#yy" style="border-radius: 50%; border: solid 1px; height: 14vh;">
						<label style="margin: 4vh; ">sjfaksha</label>
					</a>
				</li>
				<li class="nav-item col-2">
					<a class="nav-link" data-toggle="pill" href="#lxfj" style="border-radius: 50%; border: solid 1px; height: 14vh; ">
						<label style="margin-top: 4vh;">有什么不一样呢</label>
					</a>
				</li>
				<li class="nav-item col-2">
					<a class="nav-link" data-toggle="pill" href="#jsj" style="border-radius: 50%; border: solid 1px; height: 14vh; ">
						<label style="margin-top: 4vh;">有什么不一样呢</label>
					</a>
				</li>
				<li class="nav-item col-2">
					<a class="nav-link" data-toggle="pill" href="#qwys" style="border-radius: 50%; border: solid 1px; height: 14vh;">
						<label style="margin-top: 6vh;">有什么不一样呢</label>
					</a>
				</li>
				<li class="nav-item col-2">
					<a class="nav-link" data-toggle="pill" href="#shcs" style="border-radius: 50%; border: solid 1px; height: 14vh; ">
						<label style="margin-top: 6vh;">有什么不一样呢</label>
					</a>
				</li>

				<li class="col-1"></li>
			</ul>
		</div>

		<section class="tm-section">

			<!--分类区-->
			<div class="tab-content">
				<!--面板1-->
				<div class="tab-pane bg-faded container " id="yy">
					<!--分类行一-->
					<div id="" class="row groupware-center">
						<ul class="nav nav-pills">
							<li class="nav-item">
								<a class="nav-link" href="#">分类一</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类二</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类三</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类四</a>
							</li>
						</ul>
					</div>
				</div>
				<!--面板2-->
				<div class="tab-pane bg-faded container" id="lxfj" style="border: solid 1px; border-radius: 20px;">
					<!--分类行一-->
					<div id="" class="row">
						<ul class="nav nav-pills">
							<li class="nav-item">
								<a class="nav-link" href="#">分类1</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类2</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类4</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类3</a>
							</li>
						</ul>
					</div>
				</div>
				<!--面板3-->
				<div class="tab-pane bg-faded container active" id="jsj" style="border: solid 1px; border-radius: 20px;">
					<!--分类行一-->
					<div id="" class="row groupware-center">
						<ul class="nav nav-pills">
							<li class="nav-item">
								<a class="nav-link" href="#">sjs分类一</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类二</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">jsj分类三</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类四</a>
							</li>
						</ul>
					</div>
				</div>
				<!--面板4-->
				<div class="tab-pane bg-faded container" id="qwys" style="border: solid 1px; border-radius: 20px;">
					<!--分类行一-->
					<div id="" class="row">
						<ul class="nav nav-pills">
							<li class="nav-item">
								<a class="nav-link" href="#">qwyw分类一</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类二</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类三</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类四</a>
							</li>
						</ul>
					</div>
				</div>
				<!--面板5-->
				<div class="tab-pane bg-faded container" id="shcs">
					<!--分类行一-->
					<div id="" class="row">
						<ul class="nav nav-pills">
							<li class="nav-item">
								<a class="nav-link" href="#">分类一</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类二</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类三</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">分类四</a>
							</li>
						</ul>
					</div>
				</div>

			</div>

			<!--搜索栏-->
			<div class="container" style="margin-top:3vh ; margin-bottom: 3vh;">
				<div class="row ">
					<!--发现惊天大秘密，设定了col的列也可以设置外边距且有效-->
					<h4 class="col-2 text-center " style="margin:auto 0;  border-radius: 10px;  ">站内搜索：</h4>
					<input class="col-8" type="text" class="form-control" placeholder="请输入搜索内容...">
					<button class=" col-2 btn-outline-primary btn">搜索</button>
				</div>
			</div>

			<!--留言栏-->
			<div class="container-fluid" id="temp">
				<div class="row" style="margin-top: 1vh;">
					<img src="<?php echo (IMG_URL); ?>tm-img-100x100-5.jpg" class="col-1 img-thumbnail" style="height: 20vh;" />
					<!--内容-->
					<div class="col-10">
						<label>这样的贴纸的标题</label><br />
						<label>有限字数的详情,我觉得这样的的内容会太少说一想要加一点内容，时依然有很多错字但是我觉得是到那个的正确就想好了</label>
					</div>

					<button class="btn btn-outline-primary col-1">进入交流</button>
				</div>
				<div class="row"style="margin-top: 1vh;">
					<img src="<?php echo (IMG_URL); ?>tm-img-100x100-5.jpg" class="col-1 img-thumbnail" style="height: 20vh;" />
					<!--内容-->
					<div class="col-10">
						<label>这样的贴纸的标题</label><br />
						<label>有限字数的详情,我觉得这样的的内容会太少说一想要加一点内容，时依然有很多错字但是我觉得是到那个的正确就想好了</label>
					</div>

					<button class="btn btn-outline-primary col-1">进入交流</button>
				</div>
				<div class="row"style="margin-top: 1vh;">
					<img src="<?php echo (IMG_URL); ?>tm-img-100x100-5.jpg" class="col-1 img-thumbnail" style="height: 20vh;" />
					<!--内容-->
					<div class="col-10">
						<label>这样的贴纸的标题</label><br />
						<label>有限字数的详情,我觉得这样的的内容会太少说一想要加一点内容，时依然有很多错字但是我觉得是到那个的正确就想好了</label>
					</div>

					<button class="btn btn-outline-primary col-1">进入交流</button>
				</div>
				<div class="row"style="margin-top: 1vh;">
					<img src="<?php echo (IMG_URL); ?>tm-img-100x100-5.jpg" class="col-1 img-thumbnail" style="height: 20vh;" />
					<!--内容-->
					<div class="col-10">
						<label>这样的贴纸的标题</label><br />
						<label>有限字数的详情,我觉得这样的的内容会太少说一想要加一点内容，时依然有很多错字但是我觉得是到那个的正确就想好了</label>
					</div>

					<button class="btn btn-outline-primary col-1">进入交流</button>
				</div>
				<div class="row"style="margin-top: 1vh;">
					<img src="<?php echo (IMG_URL); ?>tm-img-100x100-5.jpg" class="col-1 img-thumbnail" style="height: 20vh;" />
					<!--内容-->
					<div class="col-10">
						<label>这样的贴纸的标题</label><br />
						<label>有限字数的详情，验证了一下，好像真的海口离开，的这样就不用九八八八八八八了</label>
					</div>

					<button class="btn btn-outline-primary col-1">进入交流</button>
				</div>
				<div class="row"style="margin-top: 1vh;">
					<img src="<?php echo (IMG_URL); ?>tm-img-100x100-5.jpg" class="col-1 img-thumbnail" style="height: 20vh;" />
					<!--内容-->
					<div class="col-10">
						<label>这样的贴纸的标题</label><br />
						<label>有限字数的详情</label>
					</div>

					<button class="btn btn-outline-primary col-1">进入交流</button>
				</div>
				<div class="row"style="margin-top: 1vh;">
					<img src="<?php echo (IMG_URL); ?>tm-img-100x100-5.jpg" class="col-1 img-thumbnail" style="height: 20vh;" />
					<!--内容-->
					<div class="col-10">
						<label>这样的贴纸的标题</label><br />
						<label>有限字数的详情</label>
					</div>

					<button class="btn btn-outline-primary col-1">进入交流</button>
				</div>
			</div>
		</section>

		<!--底栏母版，暂时不管-->
		<footer class="tm-footer">
			<div class="container-fluid">
				<div class="row">

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

						<div class="tm-footer-content-box">
							<h3 class="tm-white-text tm-title tm-footer-content-box-title">网站简介</h3>
							<div class="tm-gray-bg">
								<p>初心不忘</p>
								<p>建站最初的想法是“欢乐屋”——house of joy，将日常所用到的工具的功能集成到一起，这样每天就只用上一个地方就能做所有的事。
								后来堕落了，hoj就被搁置。因毕业设计，也因受hoj的影响，才有了现在的“知识共享网站”，无限的互联网节点，知识在流淌，
								我们不断的学习，在这无边的海洋中，我只想造一座自己的灯塔，在数不清的夜里偶尔能发出微弱的光。</p>
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
							<p class="tm-margin-b-20">本站若有任何侵权行为，请联系我<br />
							同时转载本站原创资源的时<br />
							请注明来源</p>

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
		<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="<?php echo (JS_URL); ?>tether.min.js"></script>
		
	</body>

</html>