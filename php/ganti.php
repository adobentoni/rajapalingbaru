
<table class="ganti">
<tr>
	<td>Nomor slider </td>
    <td>Gambar slider </td>
    <td>Alt </td>
    <td>Title</td>
    <td>Tindakan</td>
</tr>

<?php
	$sql_page="select * from db_banner";
	$result_page= $con->query($sql_page);
	$x=1;
    while($row_page = $result_page->fetch_array()) {
            echo "<tr><td>".$x."</td><td><img src='images/banner/".$row_page['banner_file']."' width='300' heigth='160''></td><td>".$row_page['banner_alt']."</td><td>".$row_page['banner_title']."</td><td><a href='?page=edit&id=".$row_page['banner_id']."'>Edit</a><br><a href='?page=delete&id=".$row_page['banner_id']."'>Hapus</a>"	;
			$x=$x+1;
			$lastid=$row_page['banner_id'];
	}
	$_SESSION['lastid']=$lastid;
//if ($_GET['page']=="edit"){
		
	
	
	
//}elseif($_GET['page']=="delete"){
	
	
//}


?></table>
<h2><a href="?page=tambah#tambah">TAMBAH SLIDER </a></h2>
<?php
	if($_GET['page']=='tambah'){
		include('php/tambah.php');
	}elseif($_GET['page']=='edit'){
		include('php/edit.php');
		
	}elseif($_GET['page']=='delete'){
		include('php/menghapus.php');
		
	}
	
	
	?>