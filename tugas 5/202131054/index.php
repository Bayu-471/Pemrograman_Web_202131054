<?php
include 'koneksi.php';

$sql = "SELECT nim, nama_mahasiswa, nama_mata_kuliah, nama_dosen, jumlah_sks, tahun_pengambilan FROM krs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr onclick='highlightRow(this)'>";
        echo "<td>" . $row['nim'] . "</td>";
        echo "<td>" . $row['nama_mahasiswa'] . "</td>";
        echo "<td>" . $row['nama_mata_kuliah'] . "</td>";
        echo "<td>" . $row['nama_dosen'] . "</td>";
        echo "<td>" . $row['jumlah_sks'] . "</td>";
        echo "<td>" . $row['tahun_pengambilan'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6' class='text-center'>Tidak ada data</td></tr>";
}

$conn->close();
?>