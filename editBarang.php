<?php 

require "class/Barang.php";

$barang = new Barang; 
$dataBarang = $barang->viewById($_GET["id"]);

if (isset($_POST["submit"])) {
  $data = [
    "id_barang" => $_POST["id_barang"],
    "nama_barang" => $_POST["nama_barang"],
    "harga" => $_POST["harga"],
    "photo" => $_POST["photo"]
    ];

  $barang = new Barang;
  $barang->edit_Barang($data);
  if ($data > 0) {
      echo "
          <script>
              alert('Data barang berhasil diedit');
              document.location.href = 'barang.php';
          </script>
          ";
  } else {
    echo "
    <script>
        alert('Data barang gagal diedit');
        document.location.href = 'barang.php';
    </script>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Barang</title>
</head>
<body>
  <div class="tambah-barang">
    <h1>Edit Data Barang</h1>
      <form action="" method="POST">
          <div class="row p-3">
              <div class="col-md-12 mb-4">
                  <input type="hidden" name="id_barang" value="<?= $dataBarang["id_barang"]; ?>">
                  <label for="" class="form-label">Nama Barang</label><br />
                  <input type="text" name="nama_barang" class="form-control" value="<?= $dataBarang["nama_barang"]; ?>" required /><br /> <br />
                                             
                  <label for="" class="form-label">Harga</label><br />
                  <input type="text" name="harga" class="form-control" value="<?= $dataBarang["harga"]; ?>" required /><br /> <br />
                                         
                  <label for="" class="form-label">Foto</label><br />
                  <input type="text" name="photo" class="form-control" value="<?= $dataBarang["photo"] ?>" required /><br /> <br />
                       
                  <button type="submit" name="submit">Tambah</button>
              </div>
          </div>
      </form>
  </div>
</body>
</html>
                   