 $( document ).ready(function() {
    selesai1();
	$("#oke").hide();
	$("#oke1").hide();
});
 
function selesai1() {
	setTimeout(function() {
		update1();
		selesai1();
	}, 200);
}
 
function update1() {
		$.ajax({
		type:"POST",
		url:"chat/list_chat_belum_baca",
		data:"name_from",
		success:function(data){
		$("#text1").html(data);
		}
	});
}




					