<?php include '../includes/header.php'; ?>
<?php
require '../config/database.php';
$db = getDB();

$sql = "SELECT m.nama_mahasiswa, mk.nama_mk, n.nilai_akhir
        FROM mahasiswa m
        JOIN nilai n ON m.nim=n.nim
        JOIN kelas k ON n.id_kelas=k.id_kelas
        JOIN mata_kuliah mk ON k.kode_mk=mk.kode_mk";

$result = $db->query($sql);
?>

<table>
<tr><th>Nama</th><th>Matkul</th><th>Nilai</th></tr>

<?php while ($r = $result->fetch_assoc()): ?>
<tr>
<td><?= $r['nama_mahasiswa'] ?></td>
<td><?= $r['nama_mk'] ?></td>
<td><?= $r['nilai_akhir'] ?></td>
</tr>
<?php endwhile; ?>

</table>

<?php include '../includes/footer.php'; ?>