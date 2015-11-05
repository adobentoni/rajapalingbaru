<div class="editMarquee">
	<form method="POST" action="" id="formMarquee">
		<table>
			<tr>
				<th></th>
			</tr>
			<tr>
			<?php
				$sql = "select * from db_marquee";
				$result_page= $con->query($sql);
			    while($row_page = $result_page->fetch_array()) {
			    ?>
			    <textarea  name="marquee_text" form="formMarquee" style="width:600px;height:200px;"> <?php echo $row_page['marquee_text'];?></textarea>

			    <?php
				}
				?>

				<tr>
					<td>
						<input type="submit" name="editMarquee">
					</td>
				</tr>
		</table>
	</form>
	<?php
		if(isset($_POST["editMarquee"])){
			$marquee = $_POST['marquee_text'];
			$id=$_POST['id'];
			$sqlmarquee = "UPDATE  db_marquee SET marquee_text='$marquee' where marquee_id='1' ";
            $insert_query = mysqli_query($con, $sqlmarquee);
            if($insert_query){
              echo "<script>window.open('admin.php','_self')</script>";
            } else {
              echo "Error: " . $sql . "<br>" . $con->error;
            }
            $_SESSION['value']=$value;
     
            
            $con->close();	
		}

	?>
</div>