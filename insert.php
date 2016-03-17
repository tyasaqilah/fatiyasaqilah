<?php
include "koneksi.php";
mysql_select_db("fatiyasaqilah");
if(isset($_POST['insert'])){
$sql="insert into tblnilai(nim,nama,tugas,uts,uas)values('$_POST[nim]','$_POST[nama]','$_POST[tugas]','$_POST[uts]','$_POST[uas]')";
$simpan=mysql_query($sql) or die ("tidak berhasil");
}
echo " 1 record ditambahkan";
echo "<a href = 'tampil.php'>Lihat Data tampilan</a>";
mysql_close();
?>