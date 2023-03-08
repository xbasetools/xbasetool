 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css  -->
    <title>Accounts</title>
    <link rel="stylesheet" href="layout/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
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
    <script src="js/premium.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-177092549-1');
    </script>
    <link rel="stylesheet" href="layout/css/all.min.css" />
    <link rel="stylesheet" href="layout/css/main.css" />
    <link rel="stylesheet" href="layout/css/util.css" />
    <style>body{padding-top:80px}</style>
    <link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
    <script src="layout/js/main.js"></script>
    <script type="text/javascript">
    // Notice how this gets configured before we load Font Awesome
    window.FontAwesomeConfig = { autoReplaceSvg: false }
    </script>
    <style>@import url(https://fonts.googleapis.com/css?family=Roboto:400);
    .navbar-nav .dropdown-menu
    {
    }
    </style>
  </head>
  <style>.display  td {
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
  #account_data_filter{
  color: var(--font-color);
  }
  #account_data_length{
  color: var(--font-color);
  }
  #account_data_paginate{
  color: var(--font-color);
  }
  #account_data_info{
  color: var(--font-color);
  }
  </style>
  <body class="them">
    <style>.navbar-nav .dropdown-menu
    {
    margin:0 !important
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
    input:checked + .slider {
    background-color: #2196f3;
    }
    input:focus + .slider {
    box-shadow: 0 0 1px #2196f3;
    }
    input:checked + .slider:before {
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
    (function () {
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
#table {
  .sortable
}
table th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    content: " \25BE" 
}

.label-as-badge {
    border-radius: 0.5em;
}

body {
    padding-top:50px;
}
table.floatThead-table {
    border-top: none;
    border-bottom: none;
    background-color: #fff;
}
@media (min-width: 768px) {
  .dropdown:hover .dropdown-menu {
    display: block;
  }
}

#mydiv {
  height: 400px;
  position: relative;
}
.ajax-loader {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  margin: auto; /* presto! */

}
.label-primary {
    background-color: #910606;
}
.btn-primary {
    color: #ffffff;
    background-color: #910606;
    border-color: #910606;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 400;
    line-height: 1.1;
    color: #910606;
}

   
    

</style>
<script type="text/javascript">
             function ajaxinfo() {
                $.ajax({
                    type: 'GET',
                    url: 'ajaxinfo.html',
                    timeout: 10000,

                    success: function(data) {
                        if (data != '01') {
                            var data = JSON.parse(data);
                            for (var prop in data) {
                                $("#" + prop).html(data[prop]).show();
                            }
                        } else {
                            window.location = "logout.html";
                        }
                    }
                });

            }
            setInterval(function() {
                ajaxinfo()
            }, 3000);

            ajaxinfo();

$(document).keydown(function(event){
    if(event.which=="17")
        cntrlIsPressed = true;
});

$(document).keyup(function(){
    cntrlIsPressed = false;
});

var cntrlIsPressed = false;


function pageDiv(n,t,u,x){
  if(cntrlIsPressed){
    window.open(u, '_blank');
    return false;
  }
        var obj = { Title: t, Url: u };
        if ( ("/"+obj.Url) != location.pathname) {
        	if (x != 1) {history.pushState(obj, obj.Title, obj.Url);}
        	else{history.replaceState(obj, obj.Title, obj.Url);}

    	}
      document.title = obj.Title;
    $("#mainDiv").html('<div id="mydiv"><img src="files/img/load2.gif" class="ajax-loader"></div>').show();
    $.ajax({
    type:       'GET',
    url:        'divPage'+n+'.html',
    success:    function(data)
    {
        $("#mainDiv").html(data).show();
        newTableObject = document.getElementById('Account_data');
        sorttable.makeSortable(newTableObject);
        $(".sticky-header").floatThead({top:60});
        if(x==0){ajaxinfo();}
      }});
    if (typeof stopCheckBTC === 'function') { 
    var a = stopCheckBTC();
     }

}

$(window).on("popstate", function(e) {
        location.replace(document.location);

});


$(window).on('load', function() {
$('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
   pageDiv(7,'Main - FeluxShop','accounts',1);
   var clipboard = new Clipboard('.copyit');
    clipboard.on('success', function(e) {
      setTooltip(e.trigger, 'Copied!');
      hideTooltip(e.trigger);
      e.clearSelection();
   });

});


function setTooltip(btn, message) {
  console.log("hide-1");
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
     console.log("show");
}

function hideTooltip(btn) {
  setTimeout(function() {$(btn).tooltip('hide'); console.log("hide-2");}, 1000);
}
</script>
    <nav class="navbar navbar-expand-xl navbar  navbar-light " style="
      position:fixed;
      background-color: var(--color-nav);
      z-index:1;
      top:0;
      left:0;
      right:0;
      line-height: 1.5;
      font-family: 'Lato', sans-serif;
      font-size: 15px;
      padding-top: 0.5rem;
      padding-right: 1rem;
      padding-bottom: 0.5rem;
      padding-left: 1rem;
      ">
      <a class="navbar-brand" href="main" style="color: var(--font-color);"><img width="40px" src="layout/images/logo.png">XBASELEET</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="navbar-toggler-icon"></i>
      </button>
      <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown mr-auto">
            <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-warehouse fa-sm orange-text"></i>
              Hosts
            </a>
            <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="cPanel" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-tools fa-fw"></i> cPanels <span class="badge badge-primary"><span id="cpanel"></span></span></a>
              <a class="dropdown-item" href="rdp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-desktop fa-fw"></i> RDPs <span class="badge badge-primary"><span id="rdp"></span></span></a>
              <a class="dropdown-item" href="shell" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-file-code fa-fw"></i> Shells <span class="badge badge-primary"><span id="shell"></span></span></a>
            </div>
          </li>
          <li class="nav-item dropdown mr-auto">
            <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-google-play fa-sm text-success"></i>
              Send
            </a>
            <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="mailer" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-leaf fa-fw"></i> Mailers <span class="badge badge-primary"><span id="mailer"></span></span></a>
              <a class="dropdown-item" href="smtp" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-envelope fa-fw"></i> SMTPs <span class="badge badge-primary"><span id="smtp"></span></span></a>
            </div>
          </li>
          <li class="nav-item dropdown mr-auto">
            <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-mail-bulk fa-sm pink-color"></i> Leads
            </a>
            <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="leads" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-award"></i> 100% Validated Leads <span class="badge badge-primary"><span id="leads"></span></span></a>
            </div>
            <li class="nav-item dropdown mr-auto">
              <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie fa-sm"></i> Premium
              </a>
              <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Business" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-business-time"></i> <span class="badge badge-primary"><span id="premium"></span></span></a>
              </div>
            </li>
            <li class="nav-item dropdown mr-auto">
              <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-tie fa-sm"></i> USA BAnk(Fullb INFO)
              </a>
              <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="banks" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-business-time"></i> USA(Banks-Log)Email:Access <span class="badge badge-primary"><span id="banks"></span></span></a>
              </div>
            </li>
            <li class="nav-item dropdown mr-auto">
              <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends fa-sm"></i> Accounts
              </a>
              <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="accounts" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-comments-dollar"></i> Marketing <span class="badge badge-primary"><span id="accounts"></span></span></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" style="color: var(--font-color);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-drupal text-primary fa-sm"></i> Requests
              </a>
              <div class="dropdown-menu dropdown-menu-left" style="color: var(--font-color); background-color: var(--color-nav);" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="requests" style="color: var(--font-color);"><span class="px-2"><i class="fas fa-user-plus"></i> Buyers Requests <span class="badge badge-primary"><span id=" "></span></span></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="offers" style="color: var(--font-color);"><i class="fas fa-user-secret text-primary fa-sm"></i> Bulk Offers</a>
            </li>
          </ul>
          <ul class="navbar-nav profile">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell text-danger"></i> <span class="badge badge-success"><span id=" "></span></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                <a class="dropdown-item" href="#" style="color: var(--font-color);">There is no new notifications</a> </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addBalance" style="color: var(--font-color);" role="button" aria-haspopup="true" aria-expanded="false"><span class="badge badge-danger">
                  0
                  <span class="px-2"><i class="fa fa-plus"></i></span></span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ticket <span class="badge badge-success">0</span></a>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
                <a class="dropdown-item" href="tickets" style="color: var(--font-color);"><span class="px-2">My Tickets <span class="badge badge-success">0</span></span></a>
                <a class="dropdown-item" href="reports style="color: var(--font-color);"><span class="px-2">My Reports <span class="badge badge-success">0</span></span></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="color: var(--font-color);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> hustlersfather <i class="fa fa-user-secret" style="color: var(--font-color);"></i></a>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: var(--font-color); background-color: var(--color-nav);">
              <a class="dropdown-item" href="setting" style="color: var(--font-color);"><span class="px-2">Setting <i class="fa fa-cog"></i></span></a>
              <a class="dropdown-item" href="orders" style="color: var(--font-color);"><span class="px-2">My Orders <i class="fa fa-shopping-cart"></i></span></a>
              <a class="dropdown-item" href="addBalance" style="color: var(--font-color);"><span class="px-2">Add Balance <i class="fa fa-money-bill-alt"></i></span></a>
              <a class="dropdown-item" href="login" style="color: var(--font-color);"><span class="px-2">Logout <i class="fa fa-door-open"></i></span></a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
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
<li>There is <b> 18 </b> Accounts Available.</li>

									  </ul>
									  </div>
									  <input type=hidden id="cat" name="cat" value="3" />
															  <div class="row m-3 pt-1" style="color: var(--font-color);">
															  <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
															  <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Website Name :</label>
    <select name="sitename" id="sitename" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
		     <option value="">All</option>
	    <option value=""></option>
																		   </select>

		  </div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="infos" style="margin-bottom: 10px; margin-top: 5px"> Details:</label>
<input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">

															   </div>
<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All Countries</option>
															  
 															  
   </select>
</div>

<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
<label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
<select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
<option value="">All</option>
		</select>
</div>
</div>
<div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive">
				       
				       
				       
				       
				       
				       
				       
				        				       
				       </body>
				       </html>
				       
				       
				       
