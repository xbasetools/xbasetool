g:xcheck=0;
g:ycheck=0;
g:zcheck=0;
g:timeok=1;
g:timeoutstart=Date.now();
function checkcpanel(cpanelid){
	if(xcheck > 9){
		bootbox.alert("<b>Wait</b> - Other 10 checking operation is executed!");
	} else {
		xcheck++;
		document.getElementById("workornot"+cpanelid).innerHTML = "<button class='btn btn-info btn-sm disabled'>Checking...</button>";
		document.getElementById("buy"+cpanelid).innerHTML = '<button type="button" class="btn btn-danger btn-sm disabled">Buy</button>';
		var postdata = "id="+cpanelid;
		$.ajax({
		type: "post",
		url: "cpanel_ops.php?check",
		data: postdata,
		success: function(html){
		document.getElementById("workornot"+cpanelid).innerHTML = html;
		document.getElementById("buy"+cpanelid).innerHTML = '<button type="button" class="btn btn-danger btn-sm" onclick=buycpanel("'+cpanelid+'")>Buy</button>';
		xcheck--;
		}
		});
	}
}
function checksend(cpanelid){
	if(ycheck > 9){
		bootbox.alert("<b>Wait</b> - Other 10 checking operation is executed!");
	} else {
		ycheck++;
		document.getElementById("checksend"+cpanelid).innerHTML = "<button class='btn btn-info btn-sm disabled'>Checking...</button>";
		var postdata = "id="+cpanelid;
		$.ajax({
		type: "post",
		url: "cpanel_ops.php?checksend",
		data: postdata,
		success: function(html){
		document.getElementById("checksend"+cpanelid).innerHTML = html;
		ycheck--;
		}
		});
	}
}		
function buycpanel(cpanelid){
	bootbox.confirm({
		message: "Are you sure you want to buy this item?",
		callback: function (result) {
			if(result==true){
				var box = bootbox.alert('<center><img src="images/loading.gif" width="250"><h2>Loading...</h2></center>');
				var postdata = "id="+cpanelid;
				$.ajax({
				type: "post",
				url: "cpanel_ops.php?buy",
				data: postdata,
				success: function(html){
				setTimeout(function() {
					box.modal('hide');
				}, 1000);
				 if(html.match(/Add Balance/)){
					bootbox.alert('<center><img src="images/moneybag.jpg" width="250"><h3><b>No enough balance!</b></h3><a class="btn btn-primary btn-xs" href="addbalance" target="_blank">Add Balance <i class="fas fa-plus-circle"></i></a></center>');
				 }else if(html.match(/You are the seller of this item/)){
					bootbox.alert({
						title: "cPanel #"+cpanelid,
						message: '<center><img src="images/error.png" width="250"><h3><b>You are the seller of this item!<br>You can\'t buy it!</b></h3></center>'
					});
				 }else if(html.match(/Successfully purchased/)){
					 bootbox.alert({
						title: "cPanel #"+cpanelid,
						message: '<center><img src="images/success.png" width="250"><h3><b>Successfully purchased!</b></h3><meta http-equiv="refresh" content="3; url=orders"></center>'
					 });
				 }else{
					document.getElementById("buy"+cpanelid).innerHTML = html;
				 }
				}
				});	
			}else{
			}
		}
	});	
}
function seoinfo(cpanelid){
	$(document).ready(function() {
		if(timeok === 1){
			if(zcheck > 0){
				bootbox.alert("<b>Wait</b> - Other 1 SEO checking operation is executed!");
			} else {
				zcheck++;
				document.getElementById("seoinfo"+cpanelid).innerHTML = "<button class='btn btn-info btn-sm disabled'>Loading...</button>";
				var postdata = "id="+cpanelid;
				$.ajax({
				type: "post",
				url: "cpanel_ops.php?seoinfo",
				data: postdata,
				success: function(html){
				 if(html.match(/Google Pagerank/)){
					bootbox.alert({
						title: "SEO Info",
						message: '<center>' + html + '</center>'
					});
					$('.modal').animate({scrollTop:0}, 500, 'swing');
					document.getElementById("seoinfo"+cpanelid).innerHTML = '<button type="button" class="btn btn-primary btn-sm checkseoinfo" id="checkseoinfo" onclick=seoinfo("'+cpanelid+'")>SEO Info</button>';
				 }else{
					document.getElementById("seoinfo"+cpanelid).innerHTML = 'N/A';
				 }					
				zcheck--;
				timeok = 0;
				timeoutstart = Date.now();
				setTimeout(function() {
					timeok = 1;
				}, 30000);
				}
				});
			}
		}else{
			bootbox.alert("<div id='waitalert'><b>Wait <div id='timeleft' style='display:inline;'>"+Math.ceil((30000-(Date.now()-timeoutstart)) / 1000)+"</div> seconds!<br>Then try again to check SEO Info!<br></b></div>");
			var calctime = setInterval(function() {
				var timeleft = Math.ceil((30000-(Date.now()-timeoutstart)) / 1000);
				if(timeleft === 0 || timeleft < 0){
					document.getElementById("waitalert").innerHTML = '<b>OK! Now you can check SEO Info :)</b>';
				}else{
					document.getElementById("timeleft").innerText = Math.ceil((30000-(Date.now()-timeoutstart)) / 1000);
				}
			}, 1000);
		}

	});
	
}

$(document).ready(function() {
	$('[data-toggle=tooltip]').tooltip();
});