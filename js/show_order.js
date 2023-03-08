function show_order(orderid){
	var postdata = "id="+orderid;
	$.ajax({
	type: "post",
	url: "show_order.php",
	data: postdata,
	success: function(html){
	 if(html.match(/<td align/)){
		bootbox.alert({
			title: "Order #"+orderid,
			message: '<center>'+html+'</center>'
		});
	 }else if(html.match(/You are not buyer of this order/)){
		bootbox.alert({
			title: "Order #"+orderid,
			message: '<center><img src="images/error.png" width="250"><h3><b>You are not buyer of this order!</b></h3></center>'
		});
	 }
	}
	});	
}

$(document).ready(function() {
	$('[data-toggle=tooltip]').tooltip();
});