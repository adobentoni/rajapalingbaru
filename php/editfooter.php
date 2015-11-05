<div class="editFooter">
	<form method="POST" action="" id="formfooter">
		<table>
			<tr>
				<th></th>
			</tr>
			<tr>
			<?php
				$sql = "select * from db_footer";
				$result_page= $con->query("select * from db_footer");
			    while($row_page = $result_page->fetch_array()) {
			    ?>
			    <textarea  name="footer_text" form="formfooter" style="width:600px;height:500px;"> <?php echo $row_page['footer_text'];?></textarea>

			    <?php
				}
				?>

				<tr>
					<td>
						<input type="submit" name="editFooter">
					</td>
				</tr>
		</table>
	</form>
	<?php
		if(isset($_POST["editFooter"])){
			$footer = $_POST['footer_text'];
			$id=$_POST['id'];
			$sql = "UPDATE  db_footer SET footer_text='$footer' where footer_id='1' ";
            $insert_query = mysqli_query($con, $sql);
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