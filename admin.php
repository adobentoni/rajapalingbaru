<!doctype html>
<html>
<?php error_reporting(0); 
include ("php/validation.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="adobentoni">
<meta property="og:title" content="Personal Website"/>
<title>Admin</title>
<link rel="shortcut icon" href="images/domino.gif">
<link href="css/base.css" rel="stylesheet">
<link href="public/css/reset.css" rel="stylesheet">
<link href="css/panduan.css" rel="stylesheet">

<script type="text/javascript" src="public/js/jquery.js"></script>

</head>

<body>

<div id="wrap">

  <?php
  
  
  if(isset($_SESSION['username'])){
	?>
	<div id="mainAdmin" class="clearfix">

			<?php
            $dir = "images/banner/";
            $a=0;
            // Membuka direktori dan membaca dan menampilkan isinya
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                    while (($file = readdir($dh)) !== false) {
            
                        //echo "filename: $file : filetype: " . filetype($dir . $file) . "<br>";
                        ?>
                        <div class="link"><?php 
						$datagambar[$a]=$file;
						$a=$a+1;
						?>
                        </div>
            
                        <?php
                            }
                    
                    closedir($dh);
                }
            }
            ?>
        <div id="sidebar" class="clearfix">
             <ul class="navAdmin">
             	<li><a href="#ad01">Banner Saat ini </a></li>
                <li><a href="#ad02">Ganti Banner</a></li>
                <li><a href="#ad03">Hapus Banner</a></li>
                <li><a href="#ad04">Upload Banner</a></li>
                <li><a href="#ad05">Edit Status Bank</a></li>
                <li><a href="#ad06">Edit Footer</a></li>
                <li><a href="#ad07">Edit Info</a></li>
                <li class="bottom"><a href="?page=logout">LOG OUT</a></li>
             </ul>     
        </div>       
		<div id="ad01" class="clearfix">
        	<h2> TAMPILAN BANNER SAAT INI </h2>
        	<?php
				include("php/banner.php");
			?>
        </div>
        <div id="ad02" class="clearfix">
            <h2> MENGGANTI BANNER</h2>
        	<?php
				include("php/ganti.php");
			?>
        </div>
        <div id="ad03" class="clearfix">
            <h2> MENGHAPUS Data BANNER</h2>
        	<?php
				include("php/hapus.php");
			?>
        </div>
        <div id="ad04" class="clearfix">
            <h2> UPLOAD BANNER</h2>
        	<?php
				include("php/upload.php");
			?>
        </div>
        <div id="ad05" class="clearfix">
            <h2>Edit Status Bank</h2>
            <?php
                include("php/editbank.php");
            ?>
        </div>
        <div id="ad06" class="clearfix">
            <h2>Edit Footer</h2>
            <?php
                include("php/editfooter.php");
            ?>
        </div>
        <?php if($_GET['page']=='logout'){
				include("php/logout.php");
		}
			?>
        <div id="ad07" class="clearfix">
        <h2>Edit Info</h2>
        <?php 
                include("php/editmarquee.php");
            ?>
        </div>
	</div>
<?php
  }
  else {
	include("php/login.php");  
  }
?>
</div>
<script type="text/javascript">
    $(".bgrMenu").click(
        function(){
            $("#gnav").slideToggle();
        }
    );
</script>
</body>
</html>