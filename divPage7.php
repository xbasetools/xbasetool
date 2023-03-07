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
          <?php
          $query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `accounts` WHERE `sold` = '0' ORDER BY country ASC");
          while($row = mysqli_fetch_assoc($query)){
          echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
          }
          ?>
          <option value="">All Countries</option>
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
