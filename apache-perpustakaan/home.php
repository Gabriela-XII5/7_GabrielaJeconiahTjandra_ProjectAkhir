<!DOCTYPE html>
<html>
<head>
    <title>E-Library</title>
    <link rel="icon" type="image/png" href="image/favicon.png">
    <link href="bootstrap-5.3.8-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
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
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="home.php">Koleksi Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="tambah.php">Tambah Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br/>
    <br/>
    <form>
    <div class="container mt-4">
        <h3 class="text-center mb-4">Daftar Buku</h3>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-primary text-center"></thead>
                    <tr>
                        <th>Cover</th>
                        <th>Penulis</th>
                        <th>Judul</th>
                        <th>Tempat Terbit</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Halaman</th>
                        <th>OPSI</th>
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $buku = mysqli_query($koneksi, "select * from buku");
                    while($k = mysqli_fetch_array($buku)){
                        ?>
                        <tr>
                            <td><img src="<?php echo $k['gambar']; ?>" alt="Cover" style="max-width: 100px;"></td>
                            <td><?php echo $k['penulis']; ?></td>
                            <td><?php echo $k['judul']; ?></td>
                            <td><?php echo $k['tempat_terbit']; ?></td>
                            <td><?php echo $k['penerbit']; ?></td>
                            <td><?php echo $k['tahun_terbit']; ?></td>
                            <td><?php echo $k['halaman']; ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $k['id']; ?>" >UPDATE</a>
                                <a href="delete.php?id=<?php echo $k['id']; ?>" >DELETE</a>
                            </td>
                        </tr>
                    <?php
                    }   
                    ?>
                </table>
            </form>
        </div>
    </div>
    <footer class="bg-primary text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2025 E-Library. All rights reserved.</p>
  </footer>
</body>
</html>