<div class="row clearfix">
	<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">イータ</a>
		</div>
	</nav>
</div>
<div class="row margin-top2">
	<h1 class="text-center"><span class="glyphicon glyphicon-thumbs-up"></span> <?php echo $notification["title"]?></h1>
	<div class="col-xs-10 margin-top2" style="margin: 0px 15px">
		<div class="row">
			<?php echo nl2br($notification["body"]);?>
		</div>
	</div>
</div>