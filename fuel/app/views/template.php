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
	<?php echo Asset::css("original/original.css");?>
	<?php echo Asset::css("slimbox/slimbox2-rtl.css");?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<?php echo Asset::js("bootstrap/bootstrap.js");?>
	<?php echo Asset::js("original/original.js");?>
	<?php echo Asset::js("slimbox/slimbox2.js")?>
	<?php echo Asset::js("js-plugin/isotope/jquery.isotope.min.js");?>
	<?php echo Asset::js("original/admin.js"); ?>
	<script type="text/javascript">
	$(document).ready(function() {
		$('a[rel*=lightbox-cats]').slimbox({
			loop : true,
			overlayOpacity: 0.6,
		});
	});

	</script>
</head>
<body data-spy="scroll">
	<div class="container-fluid" id="container">
		<div class="col-xs-12" style="height:100%;">
			<?php echo $content;?>
		</div>
	</div>
</body>
</html>