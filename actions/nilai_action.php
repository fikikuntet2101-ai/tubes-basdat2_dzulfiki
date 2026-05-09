<?php
require '../config/database.php';
$db = getDB();

$db->begin_transaction();

try {
    $nim = $_POST['nim'];
    $kelas = $_POST['id_kelas'];
    $nilai = $_POST['nilai_akhir'];

    $db->query("INSERT INTO nilai (nim,id_kelas,nilai_akhir)
                VALUES ('$nim',$kelas,$nilai)");

    $db->commit();
} catch (Exception $e) {
    $db->rollback();
}

header("Location: ../pages/nilai.php");