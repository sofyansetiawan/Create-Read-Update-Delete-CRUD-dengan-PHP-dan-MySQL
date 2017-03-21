<!DOCTYPE html>
<html>
<head>
	<title>Edit DATA MAHASISWA</title>
</head>
<body>
	<h2>Edit Data Mahasiswa</h2>
	<p><a href="index.php">Home</a></p>
	<?php 
	include("koneksi.php");
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM biodata WHERE id_mahasiswa = '$id'");
	if(mysql_num_rows($show) == 0){
		echo "<script>window.history.back()</script>";
	}
	else{
		$data = mysql_fetch_assoc($show);
	}
	?>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nim']; ?>" name="nim" required></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nama']; ?>" name="nama" size="50" required></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="L" required <?php if($data['jenis_kelamin'] == 'L'){ echo 'checked';}?>> Laki-Laki<br>
					<input type="radio" name="jenis_kelamin" value="P" <?php if($data['jenis_kelamin'] == 'P'){ echo 'checked';}?>> Perempuan
				</td>
			</tr>
			<tr>
				<td>ANGKATAN</td>
				<td>:</td>
				<td>
					<select name="angkatan" required="">
						<option value="">- PILIH ANGKATAN - </option>
						<option value="2011" <?php if($data['angkatan'] == '2011'){ echo 'selected';}?>>2011</option>
						<option value="2012" <?php if($data['angkatan'] == '2012'){ echo 'selected';}?>>2012</option>
						<option value="2013" <?php if($data['angkatan'] == '2013'){ echo 'selected';}?>>2013</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="30" rows="4" required><?php echo $data['alamat']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td>NO HP</td>
				<td>:</td>
				<td>
					<input type="text" value="<?php echo $data['no_hp']; ?>" name="no_hp" required>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<input type="submit" value="Simpan" name="simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>