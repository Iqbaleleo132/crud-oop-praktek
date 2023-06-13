<?php 
include 'class/Barang.php';
$barang = new Barang();
$dataBarang = $barang->tampilDataBarang();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Barang</title>
</head>
<body>
    <div class="barang">
      <h1>Data Barang</h1>
      <a href="tambahBarang.php">Tambah</a>
      <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No.</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Foto</th>
          <th>Opsi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($dataBarang as $data) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $data["nama_barang"]; ?></td>
          <td>Rp. <?= number_format($data["harga"]); ?></td>
          <td><img src="foto/<?= $data["photo"]; ?>" alt="Sepatu Nike Black Edition" width="90"></td>
          <td>
            <a href="editBarang.php?id=<?= $data["id_barang"]; ?>" class="edit">Edit</a>
            <a href="hapusBarang.php?id=<?= $data["id_barang"]; ?>" class="hapus" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
      </table>
    </div>
</body>
</html>

    