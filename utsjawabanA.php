<?php
$tabelharga = array(
    array("Pepsodent", 20, 10000),
    array("Sunlight", 15, 11000),
    array("Baygon", 10, 16000),
    array("Dove", 18, 22000),
    array("Rinso", 15, 20000),
    array("Downy", 20, 11500),
    array("Le Mineral", 25, 5000)
);
$totalpembelian = 0;
foreach ($tabelharga as $barang) {
    $totalpembelian += $barang[1] * $barang[2];
}
$diskon = 0;
if ($totalpembelian >= 50000) {
    $diskon = 0.1; 
} elseif ($totalpembelian >= 100000) {
    $diskon = 0.2; 
}
$total_pembayaran = $totalpembelian - ($totalpembelian * $diskon);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
</head>

<body>
    <h1>UTS</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php
        foreach ($tabelharga as $index => $barang) {
            echo "<tr>";
            echo "<td>" . ($index + 1) . ".</td>";
            echo "<td>" . $barang[0] . "</td>";
            echo "<td>" . $barang[1] . "</td>";
            echo "<td>" . number_format($barang[2], 0, ',', '.') . " IDR</td>";
            echo "<td>" . number_format($barang[1] * $barang[2], 0, ',', '.') . " IDR</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>