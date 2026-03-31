<div class="container mt-5">

<!-- HERO / WELCOME -->
<div class="row">
<div class="col-md-12">
<div class="jumbotron text-center shadow">

<h1 class="display-4 text-primary">
Selamat Datang di Website Si-Adu
</h1>

<p class="lead">
Si-Adu adalah sistem pengaduan sarana dan prasarana sekolah 
yang membantu siswa menyampaikan laporan secara cepat, mudah, dan transparan.
</p>

<hr class="my-4">

<p>
Gunakan menu yang tersedia untuk membuat pengaduan atau melihat status laporan Anda.
</p>

<a class="btn btn-primary btn-lg" href="?menu=form_pengaduan">
Buat Pengaduan
</a>

</div>
</div>
</div>


<!-- FITUR WEBSITE -->

<div class="row text-center mt-4">

<div class="col-md-4 mb-3">
<div class="card shadow h-100">
<div class="card-body">
<h4 class="text-primary">📝 Buat Pengaduan</h4>
<p>
Siswa dapat melaporkan kerusakan atau masalah sarana sekolah
melalui formulir pengaduan yang telah disediakan.
</p>
</div>
</div>
</div>

<div class="col-md-4 mb-3">
<div class="card shadow h-100">
<div class="card-body">
<h4 class="text-success">📊 Pantau Status</h4>
<p>
Setiap pengaduan yang dikirim dapat dipantau statusnya
melalui menu histori pengaduan siswa.
</p>
</div>
</div>
</div>

<div class="col-md-4 mb-3">
<div class="card shadow h-100">
<div class="card-body">
<h4 class="text-warning">📢 Feedback Admin</h4>
<p>
Admin sekolah akan memberikan respon dan
informasi tindak lanjut terhadap pengaduan yang masuk.
</p>
</div>
</div>
</div>

</div>


<!-- STATISTIK -->

<?php

$total = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(*) as total FROM tb_aspirasi"));
$menunggu = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(*) as total FROM tb_aspirasi WHERE status='Menunggu'"));
$proses = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(*) as total FROM tb_aspirasi WHERE status='Proses'"));
$selesai = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(*) as total FROM tb_aspirasi WHERE status='Selesai'"));
$tolak = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT COUNT(*) as total FROM tb_aspirasi WHERE status='Tolak'"));

?>


<!-- BARIS PERTAMA -->

<div class="row text-center">

<div class="col-md-3 mb-3">
<div class="card border-primary shadow">
<div class="card-body">
<h3><?= $total['total'] ?></h3>
<p>Total Pengaduan</p>
</div>
</div>
</div>

<div class="col-md-3 mb-3">
<div class="card border-warning shadow">
<div class="card-body">
<h3><?= $menunggu['total'] ?></h3>
<p>Menunggu</p>
</div>
</div>
</div>

<div class="col-md-3 mb-3">
<div class="card border-info shadow">
<div class="card-body">
<h3><?= $proses['total'] ?></h3>
<p>Diproses</p>
</div>
</div>
</div>

<div class="col-md-3 mb-3">
<div class="card border-success shadow">
<div class="card-body">
<h3><?= $selesai['total'] ?></h3>
<p>Selesai</p>
</div>
</div>
</div>

</div>


<!-- BARIS KEDUA -->

<div class="row justify-content-center mt-4">

<div class="col-md-3 mb-3">
<div class="card border-danger shadow">
<div class="card-body text-center">
<h3><?= $tolak['total'] ?></h3>
<p>Ditolak</p>
</div>
</div>
</div>

</div>

</div>