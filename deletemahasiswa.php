<?php				
			include 'koneksi.php'; //menghubungkan ke file koneksi untuk ke database
			$id = $_GET['id']; //menampung id

			//query hapus
			$datas = mysqli_query($koneksi, "delete from mahasiswa where id ='$id'") or die(mysqli_error($koneksi));
			
			header("location:mahasiswa.php");
	?>