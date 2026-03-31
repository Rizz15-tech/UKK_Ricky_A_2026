<?php

$id_aspirasi = $_GET['id_aspirasi'];

mysqli_query($koneksi,"DELETE FROM tb_aspirasi
WHERE id_aspirasi='$id_aspirasi'");

?>

<script>

alert('Data berhasil dihapus');

document.location='?menu=data_pengaduan';

</script>