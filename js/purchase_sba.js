function purchase_sba(){
	bootbox.confirm({
		message: "Are you sure you want to pay and open SEO buyer account?",
		callback: function (result) {
			if(result==true){
				$.ajax({
				type: "get",
				url: "index.php?purchase_sba",
				success: function(html){
				setTimeout(function() {
					box.modal('hide');
				}, 1000);
				 if(html.match(/No enough balance!/)){
					bootbox.alert('<center><img src="images/moneybag.jpg" width="250"><h3><b>No enough balance!</b></h3><a class="btn btn-primary btn-xs" href="addbalance" target="_blank">Add Balance <i class="fas fa-plus-circle"></i></a></center>');
				 }else if(html.match(/Success!/)){
					 bootbox.alert('<center><img src="images/success.png" width="250"><h3><b>Successfully purchased!</b></h3><h5>Now you are a SEO Buyer!</h5><meta http-equiv="refresh" content="3; url=index"></center>');
				 }else{
				 }
				}
				});
			}
		}
	});
}