<?php 
require "class/Barang.php";

if (isset($_POST["submit"])) {
    $data = [
    "nama_barang" => $_POST["nama_barang"],
    "harga" => $_POST["harga"],
    "photo" => $_POST["photo"]
    ];
    $barang = new Barang;
    $barang->tambahBarang($data);
    if ($data > 0) {
        echo "
            <script>
                alert('Yay!! Data barang berhasil ditambahkan');
                window.location = 'barang.php';
            </script>
            ";
    } else {
      echo "
      <script>
          alert('Yha.. data gagal ditambahkan');
          window.location = 'barang.php';
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
  <title>Tambah Data Barang</title>
</head>
<body>
  <div class="tambah-barang">
    <h1>Tambah Data Barang</h1>
      <form action="" method="POST">
          <div class="row p-3">
              <div class="col-md-12 mb-4">
                  <label for="" class="form-label">Nama Barang</label><br />
                  <input type="text" name="nama_barang" class="form-control"  required /><br /> <br />
                                             
                  <label for="" class="form-label">Harga</label><br />
                  <input type="text" name="harga" class="form-control"  required /><br /> <br />
                                         
                  <label for="" class="form-label">Foto</label><br />
                  <input type="text" name="photo" class="form-control"  required /><br /> <br />
                       
                  <button type="submit" name="submit">Tambah</button>
              </div>
          </div>
      </form>
  </div>
</body>
</html>
                   