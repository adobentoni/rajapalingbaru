    <div class="edit">
	<form method="post" action="">
    	<table>
    		<tr>
            	<td>Pilih Banner</td>
                <td class="gambarbanyak">
                <div class="boximage">
						<?php
							$id=$_GET['id'];
                            $banyak=count($datagambar);
                            for ($z=2;$z<$banyak;$z++){
                            echo	'<div class="img">
                            <input id="'.$datagambar[$z].'" type="radio" name="gambar" value="'.$datagambar[$z].'" class="" ><label class="cebok" for="'.$datagambar[$z].'"> <img src="images/banner/'.$datagambar[$z].'" width="300" heigth="160">							<div class="oncoy">
								<h2>Picked</h2>
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
			$alt=$_POST['alt'];
			$sql = "UPDATE  db_banner SET banner_file='$banner', banner_alt='$alt' where banner_id='$id' ";
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