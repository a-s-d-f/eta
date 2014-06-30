$(function(){
	$(window).load(function() {
		$('#addmin').click(function(){
			var content = "<tr><td><input class='input-lg form-control' type='text' value=''></td><td><input class='input-lg form-control' type='text' value='' placeholder='小さい方は内容の改行は出来ません。'></td><td><input type='button' class='btn btn-lg btn-primary delete' value='削除'></td></tr>";
			$('#target').append(content);
			$('.delete').click(function(){
				$(this).parent().parent().remove();
			});
		});
		$('#addbig').click(function(){
			var content = "<tr><td><input class='input-lg form-control' type='text' value=''></td><td><textarea class='form-control'rows='10' placeholder='内容を改行するにはカンマ( , )を入れてください'></textarea></td><td><input type='button' class='btn btn-lg btn-primary delete' value='削除'></td></tr>";
			$('#target').append(content);
			$('.delete').click(function(){
				$(this).parent().parent().remove();
			});
		});
		$('.delete').click(function(){
			$(this).parent().parent().remove();
		});
	});
});