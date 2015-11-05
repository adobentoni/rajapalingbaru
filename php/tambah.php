    <div id="tambah">
	<form method="post" action="">
    	<table>
    		<tr>
            	<td>Pilih Banner</td>
                <td class="gambarbanyak">
                <div class="boximage">
						<?php
							$banyak=count($datagambar);
                            for ($z=2;$z<$banyak;$z++){
                            echo	'<div class="img">
                            <input class="tambahG" id="'.$datagambar[$z].'" type="radio" name="gambar" value="'.$datagambar[$z].'" class="" >
                            <label class="cebok" for="'.$datagambar[$z].'"><img src="images/banner/'.$datagambar[$z].'" width="300" heigth="160">
                            <div class="oncoy">
							</div></label>
                            </div>
                            ';
                            }
                    ?>
                    </div>
                </td>
            </tr>
            <tr>
            	<td>isi Alt/Title</td>
                <td><input type="text" name="alt" placeholder="masukkan alt/title"></td>
            </tr>
            <tr>
            	<td><input type="submit" name="masuk"></td>
             </tr>
    	</table>
    </form>
    <?php
		if(isset($_POST['masuk'])){
			$banner=$_POST['gambar'];
			$lastid=$_SESSION['lastid']+1;
			$alt=$_POST['alt'];
			$sql = "INSERT INTO db_banner (banner_id,banner_file,banner_alt)
            VALUES ($lastid,'$banner','$alt')";
            $insert_query = mysqli_query($con, $sql);
            if($insert_query){
              echo "<script>window.open('admin.php','_self')</script>";
            } else {
              echo "Error: " . $sql . "<br>" . $con->error;
            }
            
            $con->close();	
			
			
			
		}
	
	
	
	?>



</div>