<?php

include 'koneksi.php';

if(isset($_POST['ubah'])) {
    $penulis = $_POST['penulis'];
    $judul = $_POST['judul'];
    $tempat = $_POST['tempat_terbit'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun_terbit'];
    $halaman = $_POST['halaman'];

    $query= "update buku set penulis='$penulis', judul='$judul', tempat_terbit='$tempat', penerbit='$penerbit', tahun_terbit='$tahun', halaman='$halaman' where id='$id'";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        echo "<script>alert('Data berhasil diubah!');window.location.href='home.php';</script>";
    } else {
        echo "<script>alert('Data gagal diubah! Silakan coba lagi.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>E-Library</title>
    <link href="bootstrap-5.3.8-dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">E-Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"  href="home.php">Koleksi Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="tambah.php">Tambah Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br/>
  <br/>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $buku = mysqli_query($koneksi, "select * from buku where id='$id'");
    while($k = mysqli_fetch_array($buku)){
        ?>
        <div class="card shadow-sm mx-auto" style="max-width: 700px;">
            <div class="card-body">
                <form method="post">
                <input type="hidden" name="id" value="<?php echo $k['id']; ?>">
                <div class="mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" class="form-control" name="penulis" placeholder="Masukkan nama penulis" value="<?php echo $k['penulis']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" name="judul" placeholder="Masukkan judul buku" value="<?php echo $k['judul']; ?>" required>
                </div>
                    
                <div class="mb-3">
                    <label class="form-label">Tempat Terbit</label>
                    <input type="text" class="form-control" name="tempat_terbit" placeholder="Masukkan tempat terbit" value="<?php echo $k['tempat_terbit']; ?>" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" placeholder="Masukkan penerbit" value="<?php echo $k['penerbit']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="date" class="form-control" name="tahun_terbit" placeholder="Masukkan tahun terbit" value="<?php echo $k['tahun_terbit']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Halaman</label>
                    <input type="number" class="form-control" name="halaman" placeholder="Masukkan jumlah halaman" value="<?php echo $k['halaman']; ?>" required>
                </div>
                <input type="hidden" name="ubah" value="1">
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
  <footer class="bg-primary text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2025 E-Library. All rights reserved.</p>
  </footer>
        <?php
    }
    ?>
</body>
</html>