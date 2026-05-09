<?php include '../includes/header.php'; ?>
<?php
require '../config/database.php';
$db = getDB();

$result = $db->query("SELECT * FROM mahasiswa");
?>

<h3>Data Mahasiswa</h3>

<form method="POST" action="../actions/mahasiswa_action.php">
    <input type="hidden" name="aksi" value="tambah">
    <input name="nim" placeholder="NIM" required>
    <input name="nama_mahasiswa" placeholder="Nama" required>
    <input name="angkatan" placeholder="Angkatan">
    <select name="jenis_kelamin">
        <option value="L">L</option>
        <option value="P">P</option>
    </select>
    <button type="submit">Tambah</button>
</form>

<table>
<tr><th>NIM</th><th>Nama</th><th>Aksi</th></tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['nim'] ?></td>
<td><?= $row['nama_mahasiswa'] ?></td>
<td>
<a href="../actions/mahasiswa_action.php?aksi=hapus&nim=<?= $row['nim'] ?>">Hapus</a>
</td>
</tr>
<?php endwhile; ?>

</table>

<?php include '../includes/footer.php'; ?>