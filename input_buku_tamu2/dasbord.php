<?php
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php"><img src="img/logo.png" alt="" width="40px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Data Pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lihat_buku.php">Data Buku</a>
        </li>
      </ul>
      <form class="d-flex" action="logout.php">
        <button class="btn btn-outline-success" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>
<form class="row g-3 container-fluid contoh" action="simpan.php" method="post">
  <div class="col-12">
    <label for="inputAddress" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputAddress" name="nama" placeholder="masukan nama anda...">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputAddress2" name="email" placeholder="masukan email anda...">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Pesan</label>
    <input type="textarea" class="form-control" id="inputAddress2" name="pesan" placeholder="masukan pesan anda...">
  </div>
  <div class="col-12 bott">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</div>  
</form>
</body>
</html>
