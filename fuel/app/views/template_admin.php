<!doctype html>
<html
xmlns="http://www.w3.org/1999/xhtml"
xmlns:svg="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<title>いーた</title>
	<?php echo Asset::css("bootstrap/bootstrap.css");?>
	<?php echo Asset::css("original/bootstrap-custom.css");?>
	<?php echo Asset::css('morris/morris.css') ?>
	<?php echo Asset::css("original/original.css");?>

	<!-- lightBox -->
    <?php echo Asset::css('lightbox/lightbox.css');?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<?php echo Asset::js('lightbox/lightbox.min.js');?>
	<?php echo Asset::js('admin/raphael-min.js');?>
	<?php echo Asset::js('admin/morris.min.js');?>
	<?php echo Asset::js("bootstrap/bootstrap.js");?>
	<?php echo Asset::js('admin/jquery.easy-pie-chart.js');?>
	<?php echo Asset::js("original/admin.js");?>
	<?php echo Asset::js("js-plugin/isotope/jquery.isotope.min.js");?>
</head>
<?php if (Uri::segment(2) == 'login'): ?>
	<?php echo $content;?>
<?php else: ?>
	<body data-spy="scroll">
		<div class="container-fluid" id="container">
			<div class="col-md-12">
				<div class="container-fluid" id="container">
					<div class="row">
						<nav class="navbar navbar-static-top navbar-inverse" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">管理画面</a>
							</div>
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
								</ul>
								<form class="navbar-right">
									<ul class="nav navbar-nav">
										<li class="dropdown">
											<a href="" class="dropdown-toggle" data-toggle="dropdown">管理者<strong class="caret"></strong></a>
											<ul class="dropdown-menu">
												<li>
													<a href="logout">ログアウト</a>
												</li>
											</ul>
										</li>
									</ul>
								</form>
							</div>
						</nav>
					</div>
					<div class="row">
						<div class="col-md-3">
							<ul class="nav nav-pills nav-stacked">
								<li class="active"><a href="index">各種編集</a></li>
								<li ><a href="menu">メニュー編集</a></li>
								<li ><a href="wine">ワイン編集</a></li>
								<li ><a href="seat">シート編集</a></li>
								<li>
								    <a href="#" class="alert-success">
								    	<span class="badge pull-right" style="font-size:0.8em;margin-top:4px;"><?php echo  Model_Counter::query()->count(); ?></span>
								    	累計アクセス数
									</a>
								</li>
							</ul>

						</div>
						<div class="col-md-9">
							<?php echo $content;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php endif; ?>
</html>