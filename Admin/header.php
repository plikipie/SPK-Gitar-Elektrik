<?php

    include_once 'controller/koneksi.php';

    session_start();
    if (!isset($_SESSION['username'])) {
    echo "<script>location.href='login.php'</script>";
    # code...
}

    $config = new koneksi();
    $db = $config->getConnection();

    $p1 = isset($_GET['p1']) ? $_GET['p1'] : null;
    $p2 = isset($_GET['p2']) ? $_GET['p2'] : null;
    $p3 = isset($_GET['p3']) ? $_GET['p3'] : null;
    $p4 = isset($_GET['p4']) ? $_GET['p4'] : null;
    $p5 = isset($_GET['p5']) ? $_GET['p5'] : null;

    if ($p1 == true) {
      $p1 = "active wow fadeIn";
    }elseif($p2 == true){
      $p2 = "active wow fadeIn";
    }elseif($p3 == true){
      $p3 = "active wow fadeIn";
    }elseif($p4 == true){
      $p4 = "active wow fadeIn";
    }elseif($p5 == true){
      $p5 = "active wow fadeIn";
    }
    $pm = "beranda";
    $menu_active = "menu-top-active";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SPPK Pemilihan Gitar Elektrik</title>
	<!-- core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.dataTables.min.css">

    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">

</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top wow fadeIn" data-wow-duration="2300ms" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="index.php?p1=true"><img style="width:100px; height;50px;" src="assets/images/logo2.png" alt="logo"></a> -->
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll <?php echo $p1 ?>"><a href="index.php?p1=true">Beranda</a></li>
                        <li class="scroll <?php echo $p2 ?>"><a href="admin.php?p2=true">Admin</a></li>
                        <li class="scroll <?php echo $p3 ?>"><a href="tentang.php?p3=true">Tentang</a></li> 
                        <li class="scroll <?php echo $p4 ?>"><a href="controller/logout.php">Logout</a></li>

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
