
<div class="container-fluid" id="container">
	<div class="row clearfix text-center">
		<div class="col-md-12">
			<h2>管理者ログイン</h2>
			<form action="login" method="post" class="form-horizontal">
        <?php echo \Form::csrf(); ?>
        <div class="control-group">
					<label class="control-label" for="inputId">ID</label>
					<div class="controls">
						<input name="username" type="text" class="input-lg" placeholder="username">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
						<input name="password" type="password" class="input-lg" placeholder="password">
					</div>
				</div>
        <?php if(isset($errmsg)) echo $errmsg;?>
				<div class="control-group margin-top2">
					<div class="controls">
						<input type="button" class="input-lg" value="キャンセル">
						<input type="submit" class="input-lg" value="ログイン">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
