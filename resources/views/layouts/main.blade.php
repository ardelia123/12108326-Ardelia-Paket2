<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href={{ asset ("assets/img/apple-icon.png")}}>
	<link rel="icon" type="image/png" sizes="96x96" href={{ asset ("assets/img/favicon.png")}}>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href={{ asset ("assets/css/bootstrap.min (2).css")}} rel="stylesheet" />
    <link href={{ asset ("assets/css/animate.min.css")}} rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href={{ asset ("assets/css/paper-dashboard.css")}} rel="stylesheet"/>
    <link href={{ asset ("assets/css/demo.css")}} rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href={{ asset ("http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css")}} rel="stylesheet">
    <link href={{ asset ('https://fonts.googleapis.com/css?family=Muli:400,300')}} rel='stylesheet' type='text/css'>
    <link href={{ asset ("assets/css/themify-icons.css")}} rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/admin" class="simple-text">
                    KasirKu
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/admin">
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="ti-panel"></i>
                        <p>Produk</p>
                    </a>
                </li>
                <li>
                    <a href="/admin/pembelian">
                        <i class="ti-view-list-alt"></i>
                        <p>Pembelian</p>
                    </a>
                </li>
                
                <li>
                    <a href="/admin/user">
                        <i class="ti-user"></i>
                        <p>Data User</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>

@yield('content')


</body>


    <!--   Core JS Files   -->
    <script src={{ asset ("assets/js/jquery-1.10.2.js")}} type="text/javascript"></script>
	<script src={{ asset ("assets/js/bootstrap.min.js")}} type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src={{ asset ("assets/js/bootstrap-checkbox-radio.js")}}></script>

	<!--  Charts Plugin -->
	<script src={{ asset ("assets/js/chartist.min.js")}}></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src={{asset ("https://maps.googleapis.com/maps/api/js")}}></script>

    <!--  Notifications Plugin    -->
    <script src={{ asset ("assets/js/bootstrap-notify.js")}}></script>
    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src={{ asset ("assets/js/paper-dashboard.js")}}></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src={{ asset ("assets/js/demo.js")}}></script>

    
	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Selamat Datang <b>Admin!</b> - KasirKu! Transaksi efisien dan terpercaya."

            },{
                type: 'success',
                timer: 50
            });

    	});
	</script>

</html>
