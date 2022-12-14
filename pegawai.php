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
        <h3 data-aos="fade-in" data-aos-duration="2000"><i class="bi bi-mortarboard-fill"></i>Daftar Pegawai</h3>
        <a href="createpegawai.php" class="btn btn-detail" data-aos="fade-in" data-aos-duration="2000"><i class="bi bi-plus-square"></i>Tambah Pegawai</a>
        <hr />
        <table class="table table-striped table-bordered" data-aos="fade-up" data-aos-duration="1000">
          <thead>
            <tr class="text-center">
              <th scope="col">No</th>
              <th scope="col">Nama Pegawai</th>
              <th scope="col">NIK</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Alamat</th>
              <th class="text-center" colspan="2" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
							include('koneksi.php'); //memanggil file koneksi
							$datas = mysqli_query($koneksi, "select * from pegawai") or die(mysqli_error($koneksi));
							//script untuk menampilkan data pegawai

							$no = 1;//untuk pengurutan nomor

							//melakukan perulangan
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

            <tr>
              <th class="text-center" scope="row"><?= $no; ?></th>
              <td><?= $row['nama']; //untuk menampilkan nama ?></td>
              <td><?= $row['nik']; ?></td>
              <td><?= $row['lahir']; ?></td>
              <td><?= $row['alamat']; ?></td>
              <td class="text-center">
                <a href="updatepegawai.php?id=<?= $row['id']; ?>" class="btn btn-edit">Edit</a>
                <a href="deletepegawai.php?id=<?= $row['id']; ?>" class="btn btn-hapus" onclick="return confirm('Hapus Data?');">Hapus</a>
              </td>
            </tr>
            <?php $no++; } ?>
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
