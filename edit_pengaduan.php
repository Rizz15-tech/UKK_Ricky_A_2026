<?php

$id_aspirasi = $_GET['id_aspirasi'];

$sql = mysqli_query($koneksi,"SELECT * FROM tb_aspirasi 
WHERE id_aspirasi='$id_aspirasi'");

$data = mysqli_fetch_assoc($sql);

?>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header">
<h5>Edit Pengaduan</h5>
</div>

<div class="card-body">

<form method="post">

<div class="form-group mb-3">
<label>Kategori</label>

<select name="id_kategori" class="form-control" required>

<?php

$kat=mysqli_query($koneksi,"SELECT * FROM tb_kategori");

while($k=mysqli_fetch_assoc($kat)){

$selected = ($data['id_kategori']==$k['id_kategori']) ? 'selected' : '';

echo "<option value='$k[id_kategori]' $selected>$k[nama_kategori]</option>";

}

?>

</select>
</div>


<div class="form-group mb-3">
<label>Lokasi</label>

<input type="text" name="lokasi" class="form-control"
value="<?= $data['lokasi']; ?>" required>

</div>


<div class="form-group mb-3">
<label>Keterangan</label>

<textarea name="ket" class="form-control" required><?= $data['ket']; ?></textarea>

</div>


<button type="submit" name="update" class="btn btn-primary">
Update
</button>

<a href="?menu=data_pengaduan" class="btn btn-secondary">
Kembali
</a>

</form>

<?php

if(isset($_POST['update'])){

$id_kategori = $_POST['id_kategori'];
$lokasi = $_POST['lokasi'];
$ket = $_POST['ket'];

mysqli_query($koneksi,"UPDATE tb_aspirasi SET
id_kategori='$id_kategori',
lokasi='$lokasi',
ket='$ket'
WHERE id_aspirasi='$id_aspirasi'");

echo "

<script>
alert('Data berhasil diubah');
document.location='?menu=data_pengaduan';
</script>

";

}

?>

</div>
</div>
</div>