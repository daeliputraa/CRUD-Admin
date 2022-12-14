<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- link Css -->
    <link rel="stylesheet" href="style.css" />

    <!-- link Icon Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <!-- Link Aos Animated -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Halaman Admin | Slamat Karunia</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand ms-5 text-white">Hi! <strong>Admin</strong></a>
        <div class="icon d-flex">
          <h5 class="ps-4"><i class="bi bi-envelope-fill" data-bs-toggle="tooltip" title="Surat Masuk"></i></h5>
          <h5 class="ps-4"><i class="bi bi-bell-fill" data-bs-toggle="tooltip" title="Notifikasi"></i></h5>
          <h5 class="ps-4 pe-5"> <a href="index.php"><i class="bi bi-box-arrow-right text-white" onclick="return confirm('Anda yakin keluar?');" data-bs-toggle="tooltip" title="Sign Out"></i></a></h5>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Side Bar -->
    <div id="sidebar" class="row mt-5">
      <div class="col-md-2 mt-2 pt-4 side-bar">
        <div class="profile text-center mb-3">
          <img src="img/profil.png" alt="admin" class="rounded-circle" width="40%" />
          <h5 class="fs-6 mt-2">Administrator</h5>
        </div>
        <ul class="nav flex-column ms-3 mb-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="bi bi-speedometer"></i>Dashboard</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mahasiswa.php"><i class="bi bi-mortarboard-fill"></i>Daftar Mahasiswa</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dosen.php"><i class="bi bi-people-fill"></i>Daftar Dosen</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pegawai.php"><i class="bi bi-person-lines-fill"></i>Daftar Pegawai</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jadwal.php"><i class="bi bi-calendar-check"></i> Jadwal Kuliah</a>
            <hr class="bg-secondary" />
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nilai.php"><i class="bi bi-magic"></i>Nilai Mahasiswa</a>
          </li>
        </ul>
      </div>
      <!-- Main Content -->
      <div id="mainbar" class="col-md-10 p-5 main-content">
        <h3 data-aos="fade-in" data-aos-duration="2000"><i class="bi bi-person-plus-fill"></i>Form Data Dosen</h3>
        <hr />

        <form  action="" method="post" role="form" data-aos="fade-up" data-aos-duration="1000">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" aria-describedby="namaHelp">
          </div>
          <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" name="nik">
          </div>
          <div class="mb-3">
            <label for="lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" name="lahir">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat">
          </div>
          <button type="submit" name="submit" value="simpan"><a class="btn btn-detail">Tambah Dosen</a></button>
          
        </form>
        <?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$nama = $_POST['nama'];
					$nik = $_POST['nik'];
					$lahir = $_POST['lahir'];
					$alamat = $_POST['alamat'];

					//query untuk menambahkan mahasiswa ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into dosen (nama,nik,lahir,alamat) values('$nama', '$nik', '$lahir','$alamat')") or die(mysqli_error($koneksi));
					//id mahasiswa tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('Data Berhasil Disimpan.');window.location='dosen.php';</script>";
				}
				?>

          
          </tbody>
        </table>
      </div>
      <!-- Akhir Main Content -->
    </div>
    <!-- Akhir Side Bar -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
