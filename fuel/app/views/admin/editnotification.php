<h2 class="text-center">紹介編集</h2>
<form action="confirm" method="post">
	<table class="table">
		<thead>
			<tr>
				<th>題</th>
				<th>本文</th>
			</tr>
		</thead>
		<tbody id="target">
			<?php foreach($notification as $val):?>
				<tr>
					<td><input name="notification[title][]" class="input-lg form-control" type="text"  value='<?php echo $val["title"];?>'></td>
					<td><textarea name="notification[body][]" style="resize:vertical" class="form-control" ><?php echo $val["body"];?></textarea></td>
				</tr>
				<input type="hidden" name="notification[id][]" value='<?php echo $val["id"];?>'>
			<?php endforeach;?>
			<input type="hidden" name="type" value="notification">
		</tbody>
	</table>
	<div class="form-group text-right">
		<input class="btn btn-primary btn-lg" type="button" data-type="notification" id="addcol" value="一行追加">
	</div>
	<div class="form-group text-right">
		<a class="btn btn-danger btn-lg" href="/admin/">戻る</a>
		<input class="btn btn-primary btn-lg" type="submit" value="更新">
	</div>
</form>