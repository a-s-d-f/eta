<h2 class="text-center">お品書き</h2>
<table class="table">
	<thead>
		<tr>
		  	<th>料理名</th>
			<th>写真</th>
			<th>編集</th>
			<th>削除</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($datas['menu'] as $row):?>
			<tr>
				<td><?php echo $row["name"];?></td>
				<td><a href=<?php echo Config::get('MENU_IMG_PATH') . $row["imgurl"];?> rel="lightbox-menus" class="btn btn-lg btn-success" title=<?php echo $row["name"];?>>表示</a></td>
				<td><a href=<?php echo "editmenu?id=".$row["id"]?> class="btn btn-lg btn-primary">編集</a></td>
				<td><input type="button" class="btn btn-lg btn-danger delete" data-type="menu" data-id=<?php echo $row["id"];?> value="削除"></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>
<div class="form-group text-right">
	<a href="addmenu" class="btn btn-lg btn-primary">追加</a>
</div>
