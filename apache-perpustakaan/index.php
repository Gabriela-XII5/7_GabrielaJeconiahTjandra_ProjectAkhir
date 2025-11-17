
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="image/favicon.png">
    <title>E-Library</title>
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
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Masuk</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height:500px; overflow-y:hidden">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="image_hero/perpus.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image_hero/perpus2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image_hero/perpus3.png" alt="Third slide">
            </div>
        </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
        <header class="bg-light py-5">
            <div class="container text-center">
                <h1 class="display-4">Selamat Datang di E-Library</h1>
                <p class="lead">Temukan berbagai buku digital untuk menunjang kegiatan belajarmu.</p>
            </div>
        </header>

    <footer class="bg-primary text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; 2025 E-Library. All rights reserved.</p>
    </footer>
</body>
</html>