<?php include '../includes/header.php'; ?>

<h3>Input Nilai</h3>

<form method="POST" action="../actions/nilai_action.php">
<input type="hidden" name="aksi" value="tambah">

<input name="nim" placeholder="NIM">
<input name="id_kelas" placeholder="ID Kelas">
<input name="nilai_akhir" placeholder="Nilai">

<button type="submit">Simpan</button>
</form>

<?php include '../includes/footer.php'; ?>