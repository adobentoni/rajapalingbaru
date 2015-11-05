<div class="bankArea">
	<form method="POST" action="">
		<table>
			<tr>
				<th>No.</th>
				<th>Nama Bank</th>
				<th>Status Bank</th>
			</tr>
			<tr>
			<?php
				$sql = "select * from db_bank";
				$result_page= $con->query("select * from db_bank");
				$x=0;
			    while($row_page = $result_page->fetch_array()) {
			            echo "<tr><td>".$row_page["bank_id"]."</td><td>".$row_page["bank_nama"]."</td><td>
			            ";
			            $cekstatus[$x]= "bank".$row_page["bank_nama"];
			            $x=$x+1;
			            if($row_page["bank_status"]==1){
			            	echo "<input id='bank1".$row_page["bank_nama"]."' name='bank".$row_page["bank_nama"]."' type='radio' checked='checked' value='1'><label for='bank1".$row_page["bank_nama"]."'>Online</label>
			            	";
			            	echo "<input id='bank2".$row_page["bank_nama"]."' name='bank".$row_page["bank_nama"]."' type='radio' value='2'><label for='bank2".$row_page["bank_nama"]."'>Offline</label>
			            	";
			            	echo "<input id='bank3".$row_page["bank_nama"]."' name='bank".$row_page["bank_nama"]."' type='radio' value='3'><label for='bank3".$row_page["bank_nama"]."'>Gangguan</label>
			            	";
			            }elseif($row_page["bank_status"]==2){
			            	echo "<input id='bank1".$row_page["bank_nama"]."' name='bank".$row_page["bank_nama"]."' type='radio'  value='1'><label for='bank1".$row_page["bank_nama"]."'>Online</label>
			            	";
			            	echo "<input id='bank2".$row_page["bank_nama"]."' name='bank".$row_page["bank_nama"]."' type='radio' checked='checked' value='2'><label for='bank2".$row_page["bank_nama"]."'>Offline</label>
			            	";
			            	echo "<input id='bank3".$row_page["bank_nama"]."' name='bank".$row_page["bank_nama"]."' type='radio' value='3'><label for='bank3".$row_page["bank_nama"]."'>Gangguan</label>
			            	";
			            }elseif($row_page["bank_status"]==3){
			            	echo "<input id='bank1".$row_page["bank_nama"]."' name='bank".$row_page["bank_nama"]."' type='radio' value='1'><label for='bank1".$row_page["bank_nama"]."'>Online</label>
			            	";
			            	echo "<input id='bank2".$row_page["bank_nama"]."' name='bank".$row_page["bank_nama"]."' type='radio' value='2'><label for='bank2".$row_page["bank_nama"]."'>Offline</label>
			            	";
			            	echo "<input id='bank3".$row_page["bank_nama"]."' name='bank".$row_page["bank_nama"]."' type='radio' checked='checked' value='3'><label for='bank3".$row_page["bank_nama"]."'>Gangguan</label>
			            ";	
			            }echo "</td></tr>
			            ";
			         
			          
				}
				?>

				<tr>
					<td>
						<input type="submit" name="editbank">
					</td>
				</tr>
		</table>
	</form>
	<?php
		if(isset($_POST["editbank"])){
			for($x=0;$x<=count($cekstatus);$x++){
			$variabel=$cekstatus[$x];
			$status = $_POST[$variabel];
			$value[$x]=$status;
			$id = $x+1;
			$sql = "UPDATE  db_bank SET bank_status='$status' where bank_id='$id' ";
            $insert_query = mysqli_query($con, $sql);
            if($insert_query){
              echo "<script>window.open('admin.php','_self')</script>";
            } else {
              echo "Error: " . $sql . "<br>" . $con->error;
            }
            $_SESSION['value']=$value;
        }
            
            $con->close();	
		}

	?>
</div>