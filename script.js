/* Скрипт для всех страниц сайта*/
function dedicated_order() {
	$.ajax({
		url: "/actions.php?act=dedic",
		type: "POST",
		data: $('#w0').serialize(),
		success: function(msg){
			if (msg == "1") {
				alert("Заказ успешно отправлен.");
				location.reload();
			}
			else if (msg == "2")
				alert("Ошибка при заполнении заказа!");
			else
				alert(msg);
		}
	});
}

function send_order() {	
	$.ajax({
		url: "/actions.php?act=order",
		type: "POST",
		data: $('#w0').serialize(),
		success: function(msg){
			if (msg == "1") {
				alert("Заказ успешно отправлен.");
				location.reload();
			}
			else if (msg == "2")
				alert("Ошибка при заполнении заказа!");
			else
				alert(msg);
		}
	});
}
  
$(function() {	
	$('#send_data').on('click', function(){
		dedicated_order();
	});
	
	$('#send_order').on('click', function(){
		send_order();
	});
});