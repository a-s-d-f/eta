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
      var type = $(this).attr("data-type");
			var content = "<tr><td><input name='"+type+"[title][]' class='input-lg form-control' type='text' value=''></td><td><textarea name='"+type+"[body][]'class='form-control'rows='2' placeholder='内容を改行するにはカンマ( , )を入れてください'></textarea></td></td></tr><input type='hidden' name='"+type+"[id][]' value='new'>";
			$('#target').append(content);
		});
		$('.delete').click(function(){
      var id= $(this).attr("data-id");
      var type= $(this).attr("data-type");
      if(window.confirm('本当に削除しますか？')){
        $.ajax({
          type: "POST",
          url: "/ajax/delete",
          dataType:"json",
          data: {"id": id,"type":type},
          success: function(){
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("削除中にエラーが発生しました");
          }
        });
        $(this).parent().parent().remove();
      }
		});
    $('.plus').click(function(){
      var id= $(this).attr("data-id");
      var temp_num = parseInt($('#'+id).val());
      if (temp_num < 99) {
        $('#'+id).val(temp_num+1);
        $.ajax({
          type: "POST",
          url: "/ajax/update_stock",
          dataType:"json",
          data: {"id": id,"stock":temp_num+1},
          success: function(){
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("更新中にエラーが発生しました");
          }
        });
      } else {
        alert('100以上にはできません');
      }
    });
    $('.minus').click(function(){
      var id= $(this).attr("data-id");
      var temp_num = parseInt($('#'+id).val());
      if (temp_num > 0) {
        $('#'+id).val(temp_num-1);
        $.ajax({
          type: "POST",
          url: "/ajax/update_stock",
          dataType:"json",
          data: {"id": id,"stock":temp_num-1},
          success: function(){
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("更新中にエラーが発生しました");
          }
        });
      } else {
        alert('0以下にはできません');
      }
    });
	});
});
$(window).load(function(){
	var graph_data = [];
	var area_data = [];
	$.ajax({
    type: "POST",
    url: "/ajax/getarea",
    dataType:"json",
    data: {"dataFilter": "d"},
    success: function(data, dataType){
      $("#hero-area").children("").remove();
      area_data = [];
      for(var i=0;i<data.length;i++){
        area_data.push({"period":data[i].date, "pc":(data[i].pc_count==null)?0:data[i].pc_count, "ios":(data[i].ios_count==null)?0:data[i].ios_count, "android":(data[i].android_count==null)?0:data[i].android_count});
      }
        // Morris Area Chart
        Morris.Area({
          element: 'hero-area',
          data: area_data,
          xkey: 'period',
          ykeys: ['pc', 'ios', 'android'],
          labels: ['PC', 'iOS', 'Android'],
          lineWidth: 2,
          hideHover: 'auto',
          lineColors: ["#81d5d9", "#a6e182", "#67bdf8"]
        });
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
      }
    });
	$("#sb > span").click(function(){
    $.ajax({
      type: "POST",
      url: "/ajax/getarea",
      dataType:"json",
      data: {"dataFilter": $(this).attr("data-filter")},
      success: function(data, dataType){
        $("#hero-area").children("").remove();
        area_data = [];
        for(var i=0;i<data.length;i++){
          area_data.push({"period":data[i].date, "pc":(data[i].pc_count==null)?0:data[i].pc_count, "ios":(data[i].ios_count==null)?0:data[i].ios_count, "android":(data[i].android_count==null)?0:data[i].android_count});
        }
        // Morris Area Chart
        Morris.Area({
          element: 'hero-area',
          data: area_data,
          xkey: 'period',
          ykeys: ['pc', 'ios', 'android'],
          labels: ['PC', 'iOS', 'Android'],
          lineWidth: 2,
          hideHover: 'auto',
          lineColors: ["#81d5d9", "#a6e182", "#67bdf8"]
        });
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
      }
    });
  });
});