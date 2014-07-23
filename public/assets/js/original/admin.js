$(function(){
	$(window).load(function() {
		$('#addmin').click(function(){
			var content = "<tr><td><input class='input-lg form-control' type='text' value=''></td><td><input class='input-lg form-control' type='text' value='' placeholder='小さい方は内容の改行は出来ません。'></td><td><input type='button' class='btn btn-lg btn-primary delete' value='削除'></td></tr>";
			$('#target').append(content);
			$('.delete').click(function(){
				$(this).parent().parent().remove();
			});
		});
		$('#addcol').click(function(){
			var content = "<tr><td><input name='title[]' class='input-lg form-control' type='text' value=''></td><td><textarea name='body[]'class='form-control'rows='2' placeholder='内容を改行するにはカンマ( , )を入れてください'></textarea></td></td></tr><input type='hidden' name='id[]' value='new'>";
			$('#target').append(content);
		});
		$('.delete').click(function(){
			var id= $(this).attr("data-id");
			var type= $(this).attr("data-type");
			$.ajax({
				type: "POST",
				url: "/ajax/delete",
				dataType:"json",
				data: {"id": id,"type":type},
				success: function(){
					alert("指定データを削除しました");
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) {
					alert("削除中にエラーが発生しました");
				}
			});
			$(this).parent().parent().remove();
		});
	});
});