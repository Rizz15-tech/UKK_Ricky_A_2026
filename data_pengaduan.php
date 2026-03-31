<div class="container mt-4">

<div class="card shadow">

<div class="card-header">
    <h5>Data Pengaduan Siswa</h5>
</div>

<div class="card-body">

<!-- FORM INPUT NIS -->
<form method="get" class="row g-2 mb-3">

    <input type="hidden" name="menu" value="data_pengaduan">

    <div class="col-md-11 col-12">
        <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS" required
        value="<?= $_GET['nis'] ?? '' ?>">
    </div>

    <div class="col-md-1 col-12 d-grid">
        <button class="btn btn-primary">Cari</button>
    </div>

</form>


<?php
if(!empty($_GET['nis'])){

$nis = $_GET['nis'];
?>

<div class="table-responsive">

<table class="table table-hover">

<tr class="text-center">
    <th>No</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Lokasi</th>
    <th>Keterangan</th>
    <th width="20%">Aksi</th>
</tr>

<?php

$no = 1;

$sql = mysqli_query($koneksi,"SELECT tb_aspirasi.*, tb_siswa.nama, tb_kategori.nama_kategori
FROM tb_aspirasi
INNER JOIN tb_siswa ON tb_siswa.nis = tb_aspirasi.nis
INNER JOIN tb_kategori ON tb_kategori.id_kategori = tb_aspirasi.id_kategori
WHERE tb_aspirasi.nis = '$nis'
ORDER BY tb_aspirasi.tanggal DESC
");

if(mysqli_num_rows($sql)==0){
    echo "<tr>
            <td colspan='7' class='text-center'>Data tidak ditemukan</td>
          </tr>";
}

while($data=mysqli_fetch_assoc($sql)){
?>

<tr>

<td><?= $no++; ?></td>
<td><?= $data['nis']; ?></td>
<td><?= $data['nama']; ?></td>
<td><?= $data['nama_kategori']; ?></td>
<td><?= $data['lokasi']; ?></td>
<td><?= $data['ket']; ?></td>

<td>

<a href="?menu=edit_pengaduan&id_aspirasi=<?= $data['id_aspirasi']; ?>&nis=<?= $nis ?>" 
class="btn btn-sm btn-warning">
Edit
</a>

<a href="?menu=hapus_pengaduan&id_aspirasi=<?= $data['id_aspirasi']; ?>&nis=<?= $nis ?>" 
class="btn btn-sm btn-danger"
onclick="return confirm('Yakin ingin menghapus data ini?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

<?php } ?>

</div>
</div>
</div>