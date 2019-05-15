<?php 
session_start();

$koneksi = mysqli_connect("localhost", "root","","Simkari");
if (mysqli_connect_errno()){
    echo "koneksi database gagal:".mysqli_connect_error();
}

if(!isset($_SESSION['login'])){
    header('location: login.php');
}
if(isset($_GET['logout'])){
    session_destroy();
    ?><script>alert('SUKSES\n\nAnda berhasil logout.'); location.href='index.php';</script><?php
}
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
     
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php ">Simkari admin</a> 
            </div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" style="color: white; margin: 5px 8px;  font-size: 14px;" class="dropdown-toggle btn btn-danger square-btn-adjust " data-toggle="dropdown">LAPORAN <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Laporan Tersangka</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Laporan Jaksa</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Laporan Pra Penuntut</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Laporan Penuntutan</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Laporan Barang Bukti</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Laporan Penahanan</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Laporan  Upaya Hukum</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Laporan  Esekusi</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Laporan  hasil dinas</a></li>
						</ul>
					</li>
					<li>
						<a href="?logout" style="color: white; margin: 5px 8px;  font-size: 14px;" class="btn btn-danger square-btn-adjust">LOGOUT</a>
					</li>
				<!--
					<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
					<div class="dropdown" >
						<button class="btn btn-danger square-btn-adjust" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LAPORAN</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<li>
								<a data-toggle="dropdown" data-target="#" href="#">
									 <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Laporan Tersangka</a></li>
									<li><a href="#">Laporan Jaksa</a></li>
									<li><a href="#">Laporan Pra Penuntut</a></li>
									<li><a href="#">Laporan Penuntutan</a></li>
									<li><a href="#">Laporan Barang Bukti</a></li>
									<li><a href="#">Laporan Penahanan</a></li>
									<li><a href="#">Laporan  Upaya Hukum</a></li>
									<li><a href="#">Laporan  Esekusi</a></li>
									<li><a href="#">Laporan  hasil dinas</a></li>
								</ul>
							</li>
						</div>
					</div>
						Last access : April 2019 &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> 
					</div>
				-->
				</ul>
			</div>

        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/logokejaksaan.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-2x"></i> Home</a>
                    </li>
                      <li>
                        <a  href="?page=Tersangka"><i class="fa fa-desktop fa-2x"></i>  Data Tersangka</a>
                    </li>

                    <li>
                        <a  href="?page=Jaksa"><i class="fa fa-desktop fa-2x"></i>  Data Jaksa</a>
                    </li>

                    <li>
                        <a  href="?page=Pra Penuntut"><i class="fa fa-desktop fa-2x"></i>  Data Pra Penuntut</a>
                    </li>

                     <li>
                        <a  href="?page=Penuntutan"><i class="fa fa-desktop fa-2x"></i>  Data Penuntutan</a>
                    </li>
                     <li>
                        <a  href="?page=BarangBukti"><i class="fa fa-desktop fa-2x"></i>  Data Barang Bukti</a>
                    </li>
                    <li>
                        <a  href="?page=Penahanan"><i class="fa fa-desktop fa-2x"></i>  Data Penahanan</a>
                    </li>

                     <li>
                        <a  href="?page=upayahukum"><i class="fa fa-desktop fa-2x"></i>  Data Upaya Hukum</a>
                    </li>
                    <li>
                        <a  href="?page=eksekusi"><i class="fa fa-desktop fa-2x"></i>  Data Eksekusi</a>
                    </li>
                    <li>
                        <a  href="?page=hasildinas"><i class="fa fa-desktop fa-2x"></i>  Data Hasil Dinas</a>
                    </li>   

                               </ul>
                               
                            </li>
                        </ul>
                      </li>  
                    				
					<li  >
                        <a   href="login.php"><i class="fa fa-bolt fa-2x"></i> Login</a>
                    </li>	              
                    
                                 </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">

                    <?php 
                    $page = @$_GET['page'];
                    $aksi = @$_GET['aksi'];

                    if ($page == "Tersangka") {
                    	if ($aksi=="") {
                    		include "page/Tersangka/Tersangka.php";
                        }if ($aksi== "tambah"){ 
                            include "page/Tersangka/tambah.php"; 
                        }if ($aksi== "ubah"){ 
                            include "page/Tersangka/ubah.php"; 
                        }if ($aksi== "hapus"){ 
                            include "page/Tersangka/hapus.php"; 
                        }


                        }elseif ($page == "Penuntutan") {
                        if ($aksi=="") {
                            include "page/Penuntutan/Penuntutan.php";
                        }
                    
                    }  elseif ($page == "eksekusi") {
                        if ($aksi=="") {
                            include "page/eksekusi/eksekusi.php";
                        }
                    
                    }elseif ($page == "Jaksa") {
                        if ($aksi=="") {
                            include "page/Jaksa/Jaksa.php";
                    	}
                    
                    } elseif ($page == "BarangBukti") {
                        if ($aksi=="") {
                            include "page/BarangBukti/BarangBukti.php";
                        }
                    
                    } elseif ($page == "Penahanan") {
                        if ($aksi=="") {
                            include "page/Penahanan/Penahanan.php";
                        }
                    
                    }elseif ($page == "upayahukum") {
                        if ($aksi=="") {
                            include "page/upayahukum/upayahukum.php";
                        }
                    
                    }elseif ($page == "hasildinas") {
                        if ($aksi=="") {
                            include "page/hasildinas/hasildinas.php";
                        }
                    
                    }elseif ($page == "Pra Penuntut") {
                     if ($aksi=="") {
                            include "page/Pra Penuntut/Pra Penuntut.php";
                    }
              } 
                    ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.js"></script>
    
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
                $('#datetimepicker1').datetimepicker({
                    format:'DD-MM-YYYY'
                });
            });
    </script>

    
   
</body>
</html>