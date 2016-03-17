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
        	<td align="center"><h4>Action</h4></td>

 </tr>
		</thead>
		<tbody>
 <?php 
  include "koneksi.php";
  mysql_select_db("fatyasaqilah");
	$sql = mysql_query("select * from tblnilai");
	$no = 1;
	while($data = mysql_fetch_array($sql)) {

	?>
<tr>
        	<td><?php echo $no++; ?></td>
        	<td><?php echo $data['nim']; ?></td>
        	<td><?php echo $data['nama']; ?></td>
        	<td><?php echo $data['tugas']; ?></td>
        	<td><?php echo $data['uts']; ?></td>
        	<td><?php echo $data['uas']; ?></td>
        	<td><?php avarageScore($data['tugas'],$data['uts'],$data['uas']) ?></td>
        	<td><?php gradeScore($data['tugas'],$data['uts'],$data['uas']) ?></td>
        	<td><?php keterangan($data['tugas'],$data['uts'],$data['uas']) ?></td>
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
function avarageScore($tugas,$uts,$uas)
{
	$avarage=$tugas+$uts + $uas;
	echo $avarage/3;	

}

function gradeScore($tugas,$uts,$uas)
{

	$rata2 = ($tugas+$uts+$uas)/3;
if($rata2 > 80){
	$grade = 'A';
	echo $grade;
	//$keterangan = 'LULUS';
}
elseif($rata2 < 80 AND $rata2 > 70){
	$grade = 'B';
	echo $grade;
	//$keterangan = 'LULUS';
}
elseif($rata2 < 70 AND $rata2 > 60){
	$grade = 'C';
	echo $grade;
	//$keterangan = 'LULUS';
}
elseif($rata2  < 60 AND $rata2 > 50){
	$grade = 'D';
	echo $grade;
	//$keterangan = 'TIDAK LULUS';
}
elseif($rata2 < 50 AND $rata2 > 10){
	$grade = 'E';
	echo $grade;
	//$keterangan = 'TIDAK LULUS';
}

}

function keterangan($tugas,$uts,$uas)
{

	$rata2 = ($tugas+$uts+$uas)/3;
if($rata2 > 80){
	$keterangan = 'LULUS';
	echo $keterangan;
}
elseif($rata2 < 80 AND $rata2 > 70){
	
	$keterangan = 'LULUS';
	echo $keterangan;
}
elseif($rata2 < 70 AND $rata2 > 60){
	$keterangan = 'LULUS';
	echo $keterangan;
}
elseif($rata2  < 60 AND $rata2 > 50){

	$keterangan = 'TIDAK LULUS';
	echo $keterangan;
}
elseif($rata2 < 50 AND $rata2 > 10){
	
	$keterangan = 'TIDAK LULUS';
	echo $keterangan;
}

}


?>
</thead>
</tbody><br>
</body>
</html>