function buylead(leadid){
	bootbox.confirm({
		message: "Are you sure you want to buy this item?",
		callback: function (result) {
			if(result==true){
				var box = bootbox.alert('<center><img src="images/loading.gif" width="250"><h2>Loading...</h2></center>');
				var postdata = "id="+leadid;
				$.ajax({
				type: "post",
				url: "lead_ops.php?buy",
				data: postdata,
				success: function(html){
				setTimeout(function() {
					box.modal('hide');
				}, 1000);
				 if(html.match(/Add Balance/)){
					bootbox.alert('<center><img src="images/moneybag.jpg" width="250"><h3><b>No enough balance!</b></h3><a class="btn btn-primary btn-xs" href="addbalance" target="_blank">Add Balance <i class="fas fa-plus-circle"></i></a></center>');
				 }else if(html.match(/You are the seller of this item/)){
					bootbox.alert({
						title: "Lead #"+leadid,
						message: '<center><img src="images/error.png" width="250"><h3><b>You are the seller of this item!<br>You can\'t buy it!</b></h3></center>'
					});
				 }else if(html.match(/Successfully purchased/)){
					 bootbox.alert({
						title: "Lead #"+leadid,
						message: '<center><img src="images/success.png" width="250"><h3><b>Successfully purchased!</b></h3><meta http-equiv="refresh" content="3; url=orders"></center>'
					 });
				 }else{
					document.getElementById("buy"+leadid).innerHTML = html;
				 }
				}
				});	
			}else{
			}
		}
	});	
}

$(document).ready(function() {
	$('[data-toggle=tooltip]').tooltip();
});