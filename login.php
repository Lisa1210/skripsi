<?php
session_start();
include "koneksi.php";

if(isset($_SESSION['login'])){
    header('location: index.php');
}
if(isset($_POST['login'])){
  $username=$_POST['username'];
  $pass=md5($_POST['pass']);
  $q=mysqli_query($koneksi,"select * from user where username='$username' and password='$pass'");
  if(mysqli_num_rows($q)>0){
    $h=mysqli_fetch_array($q);
    $_SESSION['login']=true;
    $_SESSION['username']=$h['username'];
    // $_SESSION['level']=$h['level'];
    ?><script>alert('SUKSES\n\nSelamat Datang <?php echo $_SESSION['username']; ?>');</script><?php
  }else{
    ?><script>alert('ERROR!\n\nUsername atau Password salah, silahkan ulangi lagi.');</script><?php
  }
  ?><script>location.href='index.php';</script><?php
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Login</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Simkari Admin : Login</h2>


            </div>
        </div>

  <img src="assets/img/find_user.png" class="user-image img-responsive"/>
         <div class="row ">

                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Masukkan username dan password </strong>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" action=""> <!-- tambahi actionnya habis dari login terhubung kemana -->
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name = "username"class="form-control" placeholder="Your Username " />
                                        </div>

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name= "pass" class="form-control"  placeholder="Your Password" />
                                        </div>

                                     <input type="submit" name="login" value="login"class="btn btn-primary ">

                                    <hr />

                                    </form>
                            </div>

                        </div>
                    </div>


        </div>
    </div>

  <footer>
      <center><p>Kejaksaan Negeri Kapuas &copy; 2019</p></center>
      <!--<p class="pull-right">Powered by:</p>-->
    </footer>

     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
