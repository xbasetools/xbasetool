<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
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
 <?php
include(“cr.php”);
$q = mysqli_query($dbcon, “SELECT * FROM leads WHERE sold=‘0’ ORDER BY RAND()”)or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	 
	 	 $countryfullname = $row[‘country’];
	  $code = array_search(“$countryfullname”, $countrycodes);
	 $countrycode = strtolower($code);
	    $qer = mysqli_query($dbcon, “SELECT * FROM resseller WHERE username=‘”.$row[‘resseller’].”’”)or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = “seller”.$rpw[“id”].””;
     echo “
 <tr>     
    <td id=‘leads_country’><i class=‘flag-icon flag-icon-$countrycode’></i>&nbsp;”.htmlspecialchars($row[‘country’]).” </td>
    <td id=‘leads_about’> “.htmlspecialchars($row[‘infos’]).” </td> 
        <td id=‘leads_source’> “.htmlspecialchars($row[‘source’]).” </td> 
	<td> “.htmlspecialchars($row[‘number’]).” </td>
    <td id=‘leads_seller’> “.htmlspecialchars($SellerNick).”</td>
    <td> “.htmlspecialchars($row[‘price’]).”</td>
	    <td> “.$row[‘date’].”</td>”;
    echo ‘
    <td>
	<span id=“leads’.$row[‘id’].’” title=“buy” type=“leads”><a onclick=“javascript:buythistool(‘.$row[‘id’].’)” class=“btn btn-primary btn-xs”><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ‘;
 }

 ?>
  </tbody>
</table>

<script type="text/javascript">
function buyit(id,code,price){
  $('#myModal').modal('hide');
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){

          balance = $('#balance').text();
          if (price <= balance){
              $("#buy_"+id).html('Purchasing...').show();
              $.ajax({
                type:       'GET',
                url:        'leadsbuy'+id+'-'+code+'.html',
                success:    function(data)
                {
                  $("#buy_"+id).html(data).show();
                  ajaxinfo();
                }});
          }
          else {
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>', function() {});}}
  });
}
function leadinfo(id,code){
   $("#myModalLabel").text('Sample');
   $("#modelbody").html('');
   $('#myModal').modal('show');
      $.ajax({
        type:       'GET',
        url:        'leadsshow'+id+'-'+code+'.html',
        success:    function(data)
        {
            $("#modelbody").html(data);
        }});   

}


</script>