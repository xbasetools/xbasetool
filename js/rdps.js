g:xcheck=0;
function checkrdp(rdpid){
	if(xcheck > 9){
		bootbox.alert("<b>Wait</b> - Other 10 checking operation is executed!");
	} else {
		xcheck++;
		document.getElementById("workornot"+rdpid).innerHTML = "<button class='btn btn-info btn-sm disabled'>Checking...</button>";
		document.getElementById("buy"+rdpid).innerHTML = '<button type="button" class="btn btn-danger btn-sm disabled">Buy</button>';
		var postdata = "id="+rdpid;
		$.ajax({
		type: "post",
		url: "rdp_ops.php?check",
		data: postdata,
		success: function(html){
		document.getElementById("workornot"+rdpid).innerHTML = html;
		document.getElementById("buy"+rdpid).innerHTML = '<button type="button" class="btn btn-danger btn-sm" onclick=buyrdp("'+rdpid+'")>Buy</button>';
		xcheck--;
		}
		});
	}
}	
function buyrdp(rdpid){
	bootbox.confirm({
		message: "Are you sure you want to buy this item?",
		callback: function (result) {
			if(result==true){
				var box = bootbox.alert('<center><img src="images/loading.gif" width="250"><h2>Loading...</h2></center>');
				var postdata = "id="+rdpid;
				$.ajax({
				type: "post",
				url: "rdp_ops.php?buy",
				data: postdata,
				success: function(html){
				setTimeout(function() {
					box.modal('hide');
				}, 1000);
				 if(html.match(/Add Balance/)){
					bootbox.alert('<center><img src="images/moneybag.jpg" width="250"><h3><b>No enough balance!</b></h3><a class="btn btn-primary btn-xs" href="addbalance" target="_blank">Add Balance <i class="fas fa-plus-circle"></i></a></center>');
				 }else if(html.match(/You are the seller of this item/)){
					bootbox.alert({
						title: "RDP #"+rdpid,
						message: '<center><img src="images/error.png" width="250"><h3><b>You are the seller of this item!<br>You can\'t buy it!</b></h3></center>'
					});
				 }else if(html.match(/Successfully purchased/)){
					 bootbox.alert({
						title: "RDP #"+rdpid,
						message: '<center><img src="images/success.png" width="250"><h3><b>Successfully purchased!</b></h3><meta http-equiv="refresh" content="3; url=orders"></center>'
					 });
				 }else{
					document.getElementById("buy"+rdpid).innerHTML = html;
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