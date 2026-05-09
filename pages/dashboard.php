<?php include '../includes/header.php'; ?>
<?php
require '../config/database.php';
$db = getDB();

echo "<h3>Struktur Database</h3>";

$tables = $db->query('SHOW TABLES');
while ($t = $tables->fetch_array()) {
    $tname = $t[0];
    echo "<h4>$tname</h4><table>";

    $desc = $db->query("DESCRIBE `$tname`");
    while ($col = $desc->fetch_assoc()) {
        echo "<tr>
                <td>{$col['Field']}</td>
                <td>{$col['Type']}</td>
                <td>{$col['Key']}</td>
              </tr>";
    }
    echo "</table><br>";
}
?>
<?php include '../includes/footer.php'; ?>