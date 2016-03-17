<html>
<head>
<title>Form Nilai</title>
<body>
<form name = "form_nilai" method = "post" action = "insert.php">
<div id="header">
<h1><u>Form Nilai</u></h1>
<input type="hidden" name="ID"value="<?php echo "$row[0]"?>">
<table width="100%" border="0"cellspacing="0"cellpadding="0">
<tr>
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<font color="blue"<h3>Berhasil menambah data!</h3></font>';
}
?>
<div id="isi">
<table border="4" cellpadding="2" cellspacing="2">
    <tbody>
    	<tr>
        	<td><b>NIM</b></td>
        	<td><b>:</b></td>
        	<td><input type="varchar" name="nim" maxlength="8" required="required" /></td>
        </tr>
    	<tr>
        	<td><b>Nama</b></td>
        	<td><b>:</b></td>
        	<td><input type="varchar" name="nama" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td><b>Nilai Tugas</b></td>
        	<td><b>:</b></td>
        	<td><input type="integer" name="tugas" maxlength="2" required="required" /></td>
        </tr>
    	<tr>
        	<td><b>Nilai UTS</b></td>
        	<td><b>:</b></td>
        	<td><input type="integer" name="uts" maxlength ="2" required="required" /></td>
        </tr>
    	<tr>
        	<td><b>Nilai UAS</b></td>
        	<td><b>:</b></td>
        	<td><input type="integer" name="uas" maxlength = "2" required="required" /></td>
        </tr>
    	
 <td align="center" colspan="5"><input id="input" type="submit" name="insert" value="Simpan" />
 </tr>
 </tbody>
</table>
</form><br>
<div>
