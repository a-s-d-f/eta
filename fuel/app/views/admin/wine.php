
<div class="col-md-9" id="edit-content">
	<div class="row">
		<h2 class="text-center">葡萄酒</h2>
		<table class="table">
			<thead>
				<tr>
					<th>葡萄酒名</th>
					<th>写真</th>
					<th>編集</th>
					<th>削除</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($datas['wine'] as $row):?>
					<tr>
						<td><?php echo $row["name"];?></td>
						<td><a href=<?php echo Config::get('WINE_IMG_PATH') . $row["imgurl"];?> rel="lightbox-wines" class="btn btn-lg btn-success" title=<?php echo $row["name"];?>>表示</a></td>
						<td><a href=<?php echo "editwine?id=".$row["id"]?> class="btn btn-lg btn-primary">編集</a></td>
						<td><input type="button" class="btn btn-lg btn-danger delete" data-type="wine"  data-id=<?php echo $row["id"];?> value="削除"></td>
					</tr>
				<?php endforeach?>
			</tbody>
		</table>
		<div class="form-group text-right">
			<a href="addwine" class="btn btn-lg btn-primary">追加</a>
		</div>
	</div>
</div>
