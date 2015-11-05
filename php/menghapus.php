<script>
	function apaja() {
    var txt;
    var r = confirm("File telah terhapus");
    if (r == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
<?php
			$id=$_GET['id'];
			$sql = "DELETE FROM db_banner where banner_id='$id' ";
            $insert_query = mysqli_query($con, $sql);
            if($insert_query){
              echo "<script>window.open('admin.php','_self')</script>";
            } else {
              echo "Error: " . $sql . "<br>" . $con->error;
            }
            
            $con->close();	
			
		
	?>



