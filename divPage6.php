<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<?php
include “header.php”;
?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#filter"><i class="fas fa-filter"></i> Filter</a>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade show active" id="filter">
   <table class="table table-borderless "><thead><tr><th class='sorttable_nosort'>Country</th>
<th class='sorttable_nosort'>Description</th>
<th class='sorttable_nosort'>Domains</th>
<th class='sorttable_nosort'>Seller</th>
<th class='sorttable_nosort'></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<select class='filterselect form-control input>-sm' name="leads_country"
                <option value="">ALL</option><?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `leads` WHERE `sold` = '0' ORDER BY country ASC");
	while($row = mysqli_fetch_assoc($query)){
	echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';	}?>
</select>

</td><td>
<input class='filterinput form-control input-sm' name="leads_about" size='3'>
</td><td>
<input class='filterinput form-control input-sm' name="leads_domains" size='3'>
</td><td>
<select class='filterselect form-control input-sm' name="leads_seller">
           <option value="">ALL</option><?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `leads` WHERE `sold` = '0' ORDER BY resseller ASC");
	while($row = mysqli_fetch_assoc($query)){
		 $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
	echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';}?>
</div>

<table width="100%"  class="table table-striped table-bordered table-condensed sticky-header" id="table">
<thead>
    <tr>
      <th scope="col" >ID</th>
      <th scope="col" style="width:12%">Country</th>
      <th scope="col">Source</th>
      <th scope="col">Emails Domains</th>
      <th scope="col">Email N</th>
      <th scope="col">Sample</th>      
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Added on </th>
      <th scope="col">Buy</th>
    </tr>
</thead>
  <tbody>
    {items}
  </tbody>
</table>

<script type="text/javascript">
$('#filterbutton').click(function () {
  $("#table tbody tr").each(function() {
    var ck1 = $.trim( $(this).find("#leads_country").text().toLowerCase() );
    var ck2 = $.trim( $(this).find("#leads_about").text().toLowerCase() );
    var ck3 = $.trim( $(this).find("#leads_domains").text().toLowerCase() );
    var ck4 = $.trim( $(this).find("#leads_seller").text().toLowerCase() ); 
    var val1 = $.trim( $('select[name="leads_country"]').val().toLowerCase() );
    var val2 = $.trim( $('input[name="leads_about"]').val().toLowerCase() );
    var val3 = $.trim( $('input[name="leads_domains"]').val().toLowerCase() );
    var val4 = $.trim( $('select[name="leads_seller"]').val().toLowerCase() ); 
       
      if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || ck3.indexOf(val3)==-1 || (ck4 != val4 && val4 != '' )){ 
        
        $(this).hide();  }else{ $(this).show(); } });
        $('#filterbutton').prop('disabled', true);});
        $('.filterselect').change(function () {
          $('#filterbutton').prop('disabled', false);});
          $('.filterinput').keyup(function () {
            $('#filterbutton').prop('disabled', false);});
         
        function buythistool(id){
  bootbox.confirm(“Are you sure?”, 
    function(result) {
        if(result ==true){
      $.ajax({
     method:”GET”,
     url:”buytool.php?id=“+id+”&t=accounts”,
     dataType:”text”,
     success:function(data){
         if(data.match(/<button/)){
		 $(“#account”+id).html(data).show();
         }else{
            bootbox.alert(‘<center><img src=“files/img/balance.png”><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class=“btn btn-primary btn-xs”  href=“addBalance.html” onclick=“window.open(this.href);return false;” >Add Balance <span class=“glyphicon glyphicon-plus”></span></a></h4></center>’)
         }
     },
   });
       ;}
  });
}

function openitem(order){
  $(“#myModalLabel”).text(‘Order #’+order);
  $(‘#myModal’).modal(‘show’);
  $.ajax({
    type:       ‘GET’,
    url:        ‘showOrder’+order+’.html’,
    success:    function(data)
    {
        $(“#modelbody”).html(data).show();
    }});

}

</script>


</select></td><td><in 