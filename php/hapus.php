
	<div class="boximage">
<form method="post" action="">
    	<?php
			$banyak=count($datagambar);
			for ($z=2;$z<$banyak;$z++){
			echo	'<div class="img">
			<input id="'.$z.'" type="checkbox" class="checkboxImage" name="'.$z.'" value="'.$z.'" >
			<label class="cebok dpInBlock" for="'.$z.'"><img class="dpBlock" src="images/banner/'.$datagambar[$z].'" width="300" heigth="160"></label>
			</div>
			';
			}
    ?>
    <div class="clearfix"></div>
	<p style="text-align:center;" class="tombolHapus"><input class="dpInBlock" type="submit" name="hapus" value="HAPUSKAN DARI MUKA BUMI"></p>
	
</form>
    </div>
	
<?php
	$banyak=count($datagambar);
	if(isset($_POST['hapus'])){
		for ($z=2;$z<$banyak;$z++){
			$var=$z;
			if(isset($_POST[$var]))
			{
			$dihapus=$_POST[$var];
			
			echo "<h2>aa".$_POST[$var]."</h2>";	
			$hapusdata="images/banner/".$datagambar[$dihapus];
			unlink($hapusdata);
			}
		}
		echo "<script>window.open('admin.php','_self')</script>";
		
	}
//if ($_GET['page']=="edit"){
		
	
	
	
//}elseif($_GET['page']=="delete"){
	
	
//}


?></table>