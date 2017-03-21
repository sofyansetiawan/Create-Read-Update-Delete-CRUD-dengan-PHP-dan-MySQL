<?php 
	if(isset($_GET['id'])){
		include("koneksi.php");

		$id = $_GET['id'];

		$cek = mysql_query("SELECT id_mahasiswa FROM biodata WHERE id_mahasiswa = '$id'") or die(mysql_error());

		if(mysql_num_rows($cek) == 0){
			echo "<script>window.history.back()</script>";
		}
		else{
			$del = mysql_query("DELETE FROM biodata WHERE id_mahasiswa = '$id'");

			if($del){
				echo "BERHASIL MENGHAPUS DATA";
				echo "<a href='index.php'>Back</a>";
			}
			else{
				echo "GAGAL MENGHAPUS DATA";
				echo "<a href='index.php'>Back</a>";
			}
		}
	}
?>