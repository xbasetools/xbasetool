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

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-Commerce - MDBootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
kdyeR2Y.js"></script>
    <link rel="shortcut icon" href="../../favicon.ico" />
    <title>Accounts</title>
    <link rel="stylesheet" href="layout/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="layout/js/clipboard.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="layout/js/bootstrap.min.js"></script>
    <script src="layout/js/bootbox.min.js"></script>
    <link rel="stylesheet" type="text/css" href="layout/css/flags.css" />
 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
 
    <script async src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
 
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', {
            '$usrid': 'USER_ID'
        }); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
    </script>
    <link rel="stylesheet" href="layout/css/all.min.css" />
    <link rel="stylesheet" href="layout/css/main.css?v=12.9" />
    <link rel="stylesheet" href="layout/css/util.css" />
    <style>
        body {
            padding-top: 80px
        }
    </style>
    <link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
    <script src="layout/js/main.js"></script>
    <script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        }
    </script>
    <style>
        @import url(//fonts.googleapis.com/css?family=Roboto:400);
 
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }
    </style>
</head>
<style>
    .display td {
        background: var(--color-card);
        color: var(--font-color);
 
    }
 
    .dataTables_wrapper .dataTables_paginate .paginate_button {
 
        color: var(--font-color);
 
    }
 
    #account_data_paginate .paginate_button {
        color: var(--font-color);
 
    }
 
    .alert-info {
        color: var(--color-info);
        background-color: var(--color-backinfo);
        border-color: var(--color-borderinfo);
 
    }
 
    #account_data_filter {
        color: var(--font-color);
    }
 
    #account_data_length {
        color: var(--font-color);
    }
 
    #account_data_paginate {
        color: var(--font-color);
    }
 
    #account_data_info {
        color: var(--font-color);
    }
</style>
 
<body class="them">
    <style>
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }
 
        .theme-light {
            --color-primary: #0060df;
            --color-secondary: #ffffff;
            --color-secondary2: #ecf0f1;
            --color-accent: #fd6f53;
            --font-color: #000000;
            --color-nav: #ffffff;
            --color-dropdown: #ffffff;
            --color-card: #ffffff;
            --color-card2: #d1ecf1;
            --color-info: #0c5460;
            --color-backinfo: #d1ecf1;
            --color-borderinfo: #bee5eb;
 
        }
 
        .theme-dark {
            --color-primary: #17ed90;
            --color-secondary: #353B50;
            --color-secondary2: #353B50;
            --color-accent: #12cdea;
            --font-color: #ffffff;
            --color-nav: #363947;
            --color-dropdown: rgba(171, 205, 239, 0.3);
            --color-card: #262A37;
            --color-card2: #262A37;
            --color-info: #4DD0E1;
            --color-backinfo: #262A37;
            --color-borderinfo: #262A37;
        }
 
        .them {
 
            background: var(--color-secondary);
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
 
        .them h1 {
            color: var(--font-color);
            font-family: sans-serif;
        }
 
        .card-body {
            color: var(--font-color);
        }
 
        .them button {
            color: var(--font-color);
            background-color: #ffffff;
            padding: 10px 20px;
            border: 0;
            border-radius: 5px;
        }
 
        .navbar.navbar-light .navbar-toggler {
            color: var(--font-color);
        }
 
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }
 
        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
 
        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: 0.4s;
            transition: 0.4s;
        }
 
        .slider:before {
            position: absolute;
            content: "";
            height: 40px;
            width: 40px;
            left: 0px;
            bottom: 4px;
            top: 0;
            bottom: 0;
            margin: auto 0;
            -webkit-transition: 0.4s;
            transition: 0.4s;
            box-shadow: 0 0px 15px #2020203d;
            background: white url('https://i.ibb.co/FxzBYR9/night.png');
            background-repeat: no-repeat;
            background-position: center;
        }
 
        input:checked+.slider {
            background-color: #2196f3;
        }
 
        input:focus+.slider {
            box-shadow: 0 0 1px #2196f3;
        }
 
        input:checked+.slider:before {
            -webkit-transform: translateX(24px);
            -ms-transform: translateX(24px);
            transform: translateX(24px);
            background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
            background-repeat: no-repeat;
            background-position: center;
        }
 
        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }
 
        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <script>
        function setTheme(themeName) {
            localStorage.setItem('theme', themeName);
            document.documentElement.className = themeName;
        }
 
        // function to toggle between light and dark theme
        function toggleTheme() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-light');
            } else {
                setTheme('theme-dark');
            }
        }
 
        // Immediately invoked function to set the theme on initial load
        (function() {
            if (localStorage.getItem('theme') === 'theme-dark') {
                setTheme('theme-dark');
                document.getElementById('slider').checked = false;
            } else {
                setTheme('theme-light');
                document.getElementById('slider').checked = true;
            }
        })();
    </script>
    
    
  <style>

  </style>

</head>


                    </div>
                </li>
 
            </ul>
 
        </div>
    </nav>
    <style>
        .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger .modal-body,
        .modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger .modal-body {
            padding-top: 35px;
        }
 
        .modal-dialog.modal-frame.modal-top.modal-notify.modal-danger,
        .modal-dialog.modal-frame.modal-top.modal-offernov.modal-danger {
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
            <li>There is <b> 109 </b> Accounts Available.</li>
        </ul>
    </div>
    <input type=hidden id="cat" name="cat" value="1" />
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Website Name :</label>
            <select name="sitename" id="sitename" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                <option value="http://gmx.com/">http://gmx.com/</option>
l
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
                <option value="">All</option>
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
    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive">
            <table id="table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
													
													
                <thead>
                    <tr>
      <th scope="col" >Country</th>
      <th scope="col">Site Name</th>
      <th scope="col">Available Information</th>
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Added on </th>
      <th scope="col">Buy</th>
    </tr>
</thead>
  <tbody>

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
    <td id='country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
    <td id='sitename'> ".htmlspecialchars($row['sitename'])." </td> 
	<td> ".htmlspecialchars($row['infos'])." </td>
    <td id='seller'> ".htmlspecialchars($SellerNick)."</td>
  <td id='price'> ".htmlspecialchars($row['price'])."</td>
	    <td id='date'> 
					 ".$row['date']."</td>";
    echo '
    <td class="button">
	<span id="premium'.$row['id'].'" title="buy" type="premium"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td></button>
            </tr>
     ';
 }

 ?>
<script type="text/javascript">
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#account_country").text().toLowerCase() );
  var ck2 = $.trim( $(this).find("#account_sitename").text().toLowerCase() );
  var ck3 = $.trim( $(this).find("#account_seller").text().toLowerCase() ); 
  var val1 = $.trim( $('select[name="account_country"]').val().toLowerCase() );
  var val2 = $.trim( $('input[name="account_sitename"]').val().toLowerCase() );
  var val3 = $.trim( $('select[name="account_seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || (ck3 != val3 && val3 != '' )){ $(this).hide();  }else{ $(this).show(); } });
$('#filterbutton').prop('disabled', true);});$('.filterselect').change(
  function () {$'#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});

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
