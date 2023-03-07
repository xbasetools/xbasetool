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

    <style>.modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body{
    padding-top: 35px;
    }
    .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,.modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
    max-width: 500px !important;
    margin: 1.75rem auto !important;
    position: relative;
    width: auto !important;
    pointer-events: none;
    }
    a.closearb {
    position: absolute;
    top: 2.5px;
    right: 2.5px;
    display: block;
    width: 30px;
    height: 30px;
    text-indent: -9999px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA8CAYAAAA6/NlyAAAAAXNSR0IArs4c6QAAA3hJREFUaAXlm8+K00Acx7MiCIJH/yw+gA9g25O49SL4AO3Bp1jw5NvktC+wF88qevK4BU97EmzxUBCEolK/n5gp3W6TTJPfpNPNF37MNsl85/vN/DaTmU6PknC4K+pniqeKJ3k8UnkvDxXJzzy+q/yaxxeVHxW/FNHjgRSeKt4rFoplzaAuHHDBGR2eS9G54reirsmienDCTRt7xwsp+KAoEmt9nLaGitZxrBbPFNaGfPloGw2t4JVamSt8xYW6Dg1oCYo3Yv+rCGViV160oMkcd8SYKnYV1Nb1aEOjCe6L5ZOiLfF120EjWhuBu3YIZt1NQmujnk5F4MgOpURzLfAwOBSTmzp3fpDxuI/pabxpqOoz2r2HLAb0GMbZKlNV5/Hg9XJypguryA7lPF5KMdTZQzHjqxNPhWhzIuAruOl1eNqKEx1tSh5rfbxdw7mOxCq4qS68ZTjKS1YVvilu559vWvFHhh4rZrdyZ69Vmpgdj8fJbDZLJpNJ0uv1cnr/gjrUhQMuI+ANjyuwftQ0bbL6Erp0mM/ny8Fg4M3LtdRxgMtKl3jwmIHVxYXChFy94/Rmpa/pTbNUhstKV+4Rr8lLQ9KlUvJKLyG8yvQ2s9SBy1Jb7jV5a0yapfF6apaZLjLLcWtd4sNrmJUMHyM+1xibTjH82Zh01TNlhsrOhdKTe00uAzZQmN6+KW+sDa/JD2PSVQ873m29yf+1Q9VDzfEYlHi1G5LKBBWZbtEsHbFwb1oYDwr1ZiF/2bnCSg1OBE/pfr9/bWx26UxJL3ONPISOLKUvQza0LZUxSKyjpdTGa/vDEr25rddbMM0Q3O6Lx3rqFvU+x6UrRKQY7tyrZecmD9FODy8uLizTmilwNj0kraNcAJhOp5aGVwsAGD5VmJBrWWbJSgWT9zrzWepQF47RaGSiKfeGx6Szi3gzmX/HHbihwBser4B9UJYpFBNX4R6vTn3VQnez0SymnrHQMsRYGTr1dSk34ljRqS/EMd2pLQ8YBp3a1PLfcqCpo8gtHkZFHKkTX6fs3MY0blKnth66rKCnU0VRGu37ONrQaA4eZDFtWAu2fXj9zjFkxTBOo8F7t926gTp/83Kyzzcy2kZD6xiqxTYnHLRFm3vHiRSwNSjkz3hoIzo8lCKWUlg/YtGs7tObunDAZfpDLbfEI15zsEIY3U/x/gHHc/G1zltnAgAAAABJRU5ErkJggg==);
    }
    </style>
    <div class="d-flex flex-row-reverse mt-0">
      <div class="p-2">
        <label id="switch" class="switch">
          <input type="checkbox" onchange="toggleTheme()" id="slider">
          <span class="slider round">
          </span>
        </label>
      </div>
    </div>
    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
      <ul>
        <li>For Any problem for account after buy just open report and seller will fix it or replace.</li>
        <li>There is <b> 133 </b> Accounts Available.</li>
      </ul>
    </div>
    <input type=hidden id="cat" name="cat" value="7" />
    <div class="row m-3 pt-1" style="color: var(--font-color);">
      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Website Name :</label>
        <select name="sitename" id="sitename" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
          <option value="">All</option>
          <?php
          $query = mysqli_query($dbcon, "SELECT DISTINCT(`sitename`) FROM `accounts` WHERE `sold` = '0' ORDER BY sitename. ASC");
          while($row = mysqli_fetch_assoc($query)){
          echo '<option value="'.$row['sitename'].'">'.$row['sitename'].'</option>';
          }
          ?>

        </select>
      </div>
      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Details:</label>
        <input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
      </div>
      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
        <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
           <option value="">All Countries</option>
  <?php
          $query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `accounts` WHERE `sold` = '0' ORDER BY country ASC");
          while($row = mysqli_fetch_assoc($query)){
          echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
          }
          ?>
       
        </select>
        
        
      </div>
      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
        <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
       
          <option value="">All Seller</option>
   <?php
          $query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `accounts` WHERE `sold` = '0' ORDER BY resseller ASC");
          while($row = mysqli_fetch_assoc($query)){
          $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
          while($rpw = mysqli_fetch_assoc($qer))
          $SellerNick = "seller".$rpw["id"]."";
          echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
          }
          ?>
          
        </select>
      </div>
    </div>
    <ul class="nav nav-tabs"
    <div class="d-flex flex-row-reverse mt-0">
      <div class="p-2">
        <label id="switch" class="switch">
          <input type="checkbox" onchange="toggleTheme()" id="slider">
          <span class="slider round">
          </span>
        </label>
      </div>
    </div>
    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
      <ul>
        <li>For Any problem for account after buy just open report and seller will fix it or replace.</li>
        <li>There is <b> 133 </b> Accounts Available.</li>
      </ul>
    </div>
    <input type=hidden id="cat" name="cat" value="7" />
    <div class="row m-3 pt-1" style="color: var(--font-color);">
      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Website Name :</label>
        <select name="sitename" id="sitename" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
          <option value="">All</option>
          <?php
          $query = mysqli_query($dbcon, "SELECT DISTINCT(`sitename`) FROM `accounts` WHERE `sold` = '0' ORDER BY sitename. ASC");
          while($row = mysqli_fetch_assoc($query)){
          echo '<option value="'.$row['sitename'].'">'.$row['sitename'].'</option>';
          }
          ?>

        </select>
      </div>
      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Details:</label>
        <input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
      </div>
      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
           <option value="">All Countries</option>
  <?php
          $query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `accounts` WHERE `sold` = '0' ORDER BY country ASC");
          while($row = mysqli_fetch_assoc($query)){
          echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
          }
          ?>
               <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
        </select>
        
        
      </div>
      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
          <option value="">All Seller</option>
   <?php
          $query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `accounts` WHERE `sold` = '0' ORDER BY resseller ASC");
          while($row = mysqli_fetch_assoc($query)){
          $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
          while($rpw = mysqli_fetch_assoc($qer))
          $SellerNick = "seller".$rpw["id"]."";
          echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
          }
          ?>
        <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
        </select>
          <table id="account_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
            <thead>
              <tr>
                <th data-priority="1"></th>
                <th class="all">ID</th>
                <th data-priority="3">Country</th>
                <th data-priority="4">Website Name</th>
                <th data-priority="7">Available Details</th>
                <th data-priority="8">Seller</th>
                <th data-priority="9">Price</th>
                <th data-priority="10">Date Created</th>
                <th class="all">Buy</th>
              </tr>
            </thead>
          </table>
 <?php
include("cr.php");
$q = mysqli_query($dbcon, "SELECT * FROM accounts WHERE sold='0' ORDER BY RAND()")or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	 
	 	 $countryfullname = $row['country'];
	  $code = array_search("$countryfullname", $countrycodes);
	 $countrycode = strtolower($code);
	    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
     echo "
 <tr>     
    <td id='account_country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
    <td id='account_sitename'> ".htmlspecialchars($row['sitename'])." </td> 
	<td> ".htmlspecialchars($row['infos'])." </td>
    <td id='account_seller'> ".htmlspecialchars($SellerNick)."</td>
    <td> ".htmlspecialchars($row['price'])."</td>
	    <td> ".$row['date']."</td>";
    echo '
    <td>
	<span id="premium'.$row['id'].'" title="buy" type="premium"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ';
 }

 ?>
<script type="text/javascript">
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#account_country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#account_sitename").text().toLowerCase() );var ck3 = $.trim( $(this).find("#account_seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="account_country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="account_sitename"]').val().toLowerCase() );var val3 = $.trim( $('select[name="account_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || (ck3 != val3 && val3 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=accounts",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#account"+id).html(data).show();
         }else{
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}

function openitem(order){
  $("#myModalLabel").text('Order #'+order);
  $('#myModal').modal('show');
  $.ajax({
    type:       'GET',
    url:        'showOrder'+order+'.html',
    success:    function(data)
    {
        $("#modelbody").html(data).show();
    }});

}

</script>
