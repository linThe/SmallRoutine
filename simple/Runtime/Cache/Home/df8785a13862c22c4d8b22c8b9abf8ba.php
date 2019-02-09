<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="referrer" content="no-referrer">

		<title>Share</title>

		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

		<link rel="stylesheet" href="http://at.alicdn.com/t/font_1467430166_4040916.css">

		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>templatemo-style.css">

		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>musicindex.css" />

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
								<a class="nav-link tm-black-text" href="/simple/index.php/Home/Knowleage/knowleage">Knowleage</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  active tm-black-text" href="/simple/index.php/Home/Share/share">Share</a>
							</li>
							<li class="nav-item">
								<a class="nav-link tm-black-text" href="/simple/index.php/Home/Discuss/discuss">Discuss</a>
							</li>
						</ul>

					</nav>

				</div>

			</div>

		</div>

		<section>

			<div class="container-fluid">

				<div class="row tm-margin-b-50">

					<!--视频-->

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">

						<br />

						<!--临时的间距-->

						<h2 class="text-center my-margin-b-2vh">视频</h2>

						<div class="container my-padding-12 my-border-radius">

							<!--轮播-->

							<div id="video-content" class="carousel slide" data-ride="carousel">

								<!--指示符-->

								<ul class="carousel-indicators">

									<li data-target="#video-content" data-slide-to="0" class="active"></li>

									<li data-target="#video-content" data-slide-to="1"></li>

									<li data-target="#video-content" data-slide-to="2"></li>

								</ul>

								<!--轮播图片-->

								<div class="carousel-inner">

									<div class="carousel-item active">
										<a href="/simple/index.php/Home/Share/video">
										<img class="carousel-img-height " src="https://static.runoob.com/images/mix/img_fjords_wide.jpg" />
										</a>

									</div>

									<div class="carousel-item ">

										<img class="carousel-img-height " src="https://static.runoob.com/images/mix/img_nature_wide.jpg" />

									</div>

									<div class="carousel-item ">

										<img class="carousel-img-height " src="https://static.runoob.com/images/mix/img_mountains_wide.jpg" />

									</div>

								</div>

								<!--左右切换按钮-->

								<a class="carousel-control-prev" href="#video-content" data-slide="prev">

									<span class="carousel-control-prev-icon"></span>

								</a>

								<a class="carousel-control-next" href="#video-content" data-slide="next">

									<span class="carousel-control-next-icon"></span>

								</a>

							</div>

							<br />

							<h6 class="text-center">视频内容标题</h6>

						</div>

					</div>

					<!--文档-->

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">

						<br />

						<!--临时的间距-->

						<h2 class="text-center my-margin-b-2vh">文档</h2>

						<div class="container my-border-radius my-padding-12">

							<!--列表-->

							<div id="alist">
							</div>

							<br />

							<h6 class="text-center">今日文档</h6>

						</div>

					</div>

					<!--音频-->

					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">

						<br />

						<!--临时的间距-->

						<h2 class="text-center"="margin-bottom: 2vh;">音频</h2>

						<div class="container my-border-radius my-padding-12">

							<!----------------------------------------->

							<div class="wrapper">

								<!-- 背景图片 -->

								<div class="background">

									<div class="music-lyric">

										<div class="lyric-view">

											<ul class="lyric"></ul>

										</div>

									</div>

								</div>

								<div class="content">

									<audio src=""></audio>

									<div class="music-massage">

										<p class="musicname" title=""></p>

										<p class="musicer" title=""></p>

										<p class="record" title="" data-id=""></p>

									</div>

									<!-- 分享，收藏，喜欢按钮 -->

									<div class="music-icon">

										<a class="m-icon m-fenxiang colored" href="http://service.weibo.com/share/share.php?title=#_loginLayer_1466697157538" target="new"></a>

										<span class="m-icon m-star colored"></span>

										<span class="m-icon m-heart colored"></span>

									</div>

								</div>

								<!-- 进度条 -->

								<span class="basebar">

									<span class="progressbar"></span>

								</span>

								<div class="controls">

									<!-- 音乐播放。换频道，下一曲按钮 -->

									<div class="play-control">

										<span class="m-icon m-play btn1" title="播放/暂停"></span>

										<span class="m-icon m-change btn2" title="换频道"></span>

										<span class="m-icon m-next btn3" title="换曲"></span>

									</div>

									<!-- 循环播放，随机播放按钮 -->

									<div class="music-control">

										<span class="m-icon m-xunhuan colored"></span>

										<span class="m-icon m-lyric colored lyriced"></span>

									</div>

								</div>

							</div>

							<!----------------------------------------->

						</div>

					</div>

				</div>

			</div>

		</section>

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

							<p class="tm-margin-b-20">本站若有任何侵权行为，请联系我<br /> 同时转载本站原创资源的时

								<br /> 请注明来源

							</p>

						</div>

					</div>

				</div>

				<div class="row groupware-center">

					<div class="col-xs-12 tm-copyright-col ">

						<p class="tm-copyright-text display-inline ">Copyright ©

							<div id="ny" class="display-inline">2018</div> 保留所有权利</p>

					</div>

				</div>

			</div>

		</footer>

		<script src="https://cdn.staticfile.org/jquery/3.3.1/jquery.min.js"></script>

		<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>

		<script src="<?php echo (JS_URL); ?>tether.min.js"></script>

		<script src="<?php echo (JS_URL); ?>myjs.js"></script>

		<script src="<?php echo (JS_URL); ?>Random-music.js"></script>

		<script type="text/javascript" src="<?php echo (JS_URL); ?>jsDom_Share.js"></script>

	</body>

</html>