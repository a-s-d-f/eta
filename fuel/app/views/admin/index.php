
<div class="block">
	<div class="navbar navbar-inner block-header">
		<h2 class="text-center">デバイス別アクセス</h2>
		<div class="pull-right" id="sb">
			<span class="badge badge-warning" style="cursor:pointer" data-filter="d">日</span>
			<span class="badge badge-warning" style="cursor:pointer" data-filter="w">週</span>
			<span class="badge badge-warning" style="cursor:pointer" data-filter="m">月</span>
			<span class="badge badge-warning" style="cursor:pointer" data-filter="y">年</span>
		</div>
	</div>
	<div class="block-content collapse in">
		<div class="span12">
			<div id="hero-area" style="height: 250px;"></div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h2 class="text-center">店舗紹介</h2>
		<table class="table">
			<thead>
				<tr>
					<th>題</th>
					<th>説明</th>
					<th>削除</th>
				</tr>
			</thead>
			<tbody id="target">
				<?php foreach($datas['intro'] as $row):?>
				  <tr>
					  <td><input readonly name="title[]" class="input-lg form-control" type="text" value=<?php echo $row["title"]; ?>></td>
					  <td><textarea readonly style="resize:none;" name="body[]" class="form-control"><?php echo $row["body"]; ?></textarea></td>
					  <td><input type="button" class="btn btn-lg btn-danger delete" data-type="intro" data-id=<?php echo $row["id"];?> value="削除"></td>
				  </tr>
				  <input type="hidden" name="id[]" value=<?php echo $row["id"];?>>
			  <?php endforeach; ?>
			  <input type="hidden" name="type" value="intro">
			</tbody>
	 	</table>
		<div class="form-group text-right">
			<a href="editintro" class="btn btn-lg btn-primary">編集</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h2 class="text-center">お知らせ</h2>
		<table class="table">
			<thead>
				<tr>
					<th>題</th>
					<th>本文</th>
				</tr>
			</thead>
			<tbody id="target">
				<?php foreach($datas['notification'] as $row):?>
					<tr>
						<td><input readonly class="input-lg form-control" type="text" name="title[]" value=<?php echo $row["title"];?>></td>
						<td><textarea readonly style="resize:none;" class="form-control" name="body[]"><?php echo $row["body"];?></textarea></td>
						<td><input type="button" class="btn btn-lg btn-danger delete" value="削除" data-type="notification" data-id=<?php echo $row["id"];?></td>
					</tr>
					<input type="hidden" name="id[]" value=<?php echo $row["id"];?>>
				<?php endforeach;?>
				<input type="hidden" name="type" value="notification">
			</tbody>
		</table>
		<div class="form-group text-right">
			<a href="editnotification" class="btn btn-lg btn-primary">編集</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<h2 class="text-center">採用情報</h2>
		<table class="table">
			<thead>
				<tr>
					<th>題</th>
					<th>内容</th>
					<th>削除</th>
				</tr>
			</thead>
			<tbody id="target">
				<?php foreach($datas['recruit'] as $row):?>
				  <tr>
					  <td><input readonly name="title[]" class="input-lg form-control" type="text" value=<?php echo $row["title"]; ?>></td>
					  <td><textarea readonly style="resize:none;" name="body[]" class="form-control"><?php echo $row["body"]; ?></textarea></td>
					  <td><input type="button" class="btn btn-lg btn-danger delete" data-type="recruit" data-id=<?php echo $row["id"];?> value="削除"></td>
				  </tr>
				  <input type="hidden" name="id[]" value=<?php echo $row["id"];?>>
			  <?php endforeach; ?>
			  <input type="hidden" name="type" value="recruit">
			</tbody>
		</table>
		<div class="form-group text-right">
			<a href="editrecruit" class="btn btn-lg btn-primary">編集</a>
		</div>
	</div>
</div>
