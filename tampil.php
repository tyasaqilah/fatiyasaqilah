<html>
<head>
<title>Tampilan Halaman Nilai</title>
</head>
<body>
<div id="header">
<b><i><u><center>Halaman Nilai</center></u></i></b>
</div><br>
<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<font color="#3399ff"<h3>Berhasil meng-update data!</h3></font><br><br>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<font color="#3399ff"<h3>Berhasil menghapus data!</h3></font><br><br>';
}
?>
<a href="form_nilai.php"><input type="submit" value="Tambah Data" /></a><br><br>
<table border="2" cellpadding="2" cellspacing="1">
	<thead><tr>
<td align="center"><h4>No.</h4></td>
        	<td align="center"><h4>NIM</h4></td>
        	<td align="center"><h4>Nama</h4></td>
        	<td align="center"><h4>Nilai Tugas</h4></td>
        	<td align="center"><h4>Nilai UTS</h4></td>
        	<td align="center"><h4>Nilai UAS</h4></td>
			<td align="center"><h4>Nilai Rata-rata</h4></td>
        	<td align="center"><h4>Grade</h4></td>
        	<td align="center"><h4>Keterangan</h4></td>
 </tr>
		</thead>
		<tbody>
 <?php 
	$sql = mysql_query("select * from tblnilai");
	$no = 1;
	while($simpan = mysql_fetch_array($sql)) {
	?>
<tr>
        	<td><?php echo $no; ?></td>
        	<td><?php echo $data['nim']; ?></td>
        	<td><?php echo $data['nama']; ?></td>
        	<td><?php echo $data['tugas']; ?></td>
        	<td><?php echo $data['uts']; ?></td>
        	<td><?php echo $data['uas']; ?></td>
            <td>
            	<a href="edit_nilai.php?id=<?php echo $data['nim']; ?>"><input type="submit" value="Edit" /></a> 
                <a href="hapus_nilai.php?id=<?php echo $data['nim']; ?>"><input type="reset" value="Delete" /></a>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$rata2 = ($tugas+$uts+$uas)/3;
if($rata2 > 80){
	$grade = 'A';
	$keterangan = 'LULUS';
}
elseif($rata2 < 80 AND $rata2 > 70){
	$grade = 'B';
	$keterangan = 'LULUS';
}
elseif($rata2 < 70 AND $rata2 > 60){
	$grade = 'C';
	$keterangan = 'LULUS';
}
elseif($rata2  < 60 AND $rata2 > 50){
	$grade = 'D';
	$keterangan = 'TIDAK LULUS';
}
elseif($rata2 < 50 AND $rata2 > 10){
	$grade = 'E';
	$keterangan = 'TIDAK LULUS';
}
?>
</thead>
</tbody><br>
</body>
</html>