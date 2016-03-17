<?php
include "koneksi.php";
	$nim= $_GET['nim'];
	
	$sql = "DELETE FROM `fatiyasaqilah`.`tblnilai` WHERE `tblnilai`.`nim` = $nim ";
	
	$hasil = mysql_query($sql) or die ("Query Tidak berhasil di jalankan ");
	
	if($hasil){
		echo '<script language="javascript">alert("1 Record, Success Delete... "); document.location="form_nilai.php";</script>';
	}else{
		echo '<script language="javascript">alert(" GAGAL DELETE...!!! "); document.location="form_nilai.php";</script>';
	}

	mysql_close();
?>
