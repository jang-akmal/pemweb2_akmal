
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form class="container" action="praktikum2.php" method="POST">
  <div class="form-group">
    <label for="customer">Nama Customer</label>
    <input type="text" class="form-control" id="customer" name="customer" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="produk" id="produk" value="RADIO" checked>
        <label class="form-check-label mr-4" for="RADIO">RADIO - 800.000
    </label>
        <input class="form-check-input" type="radio" name="produk" id="produk" value="TELEVISI">
        <label class="form-check-label mr-4" for="TELEVISI">TELEVISI - 3.350.000
    </label>
        <input class="form-check-input" type="radio" name="produk" id="produk" value="DISPENSER">
        <label class="form-check-label mr-4" for="DISPENSER">DISPENSER - 150.000
    </label>
    </div>
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" placeholder="Enter Jumlah">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>

<?php
$jumlah = $_POST['jumlah'];
$nama = $_POST['customer'];
$produk = $_POST['produk'];
$harga = 0;

if($produk == "RADIO"){
    $harga = 800000;
}

elseif($produk == "TELEVISI"){
    $harga = 3350000;
}

elseif ($produk == "DISPENSER") {
    $harga = 150000;
}

$hasil = $harga * $jumlah;

echo "Nama : $nama </br>";
echo "Produk : $produk </br>";
echo "Jumlah : $jumlah </br>";
echo "Harga : $harga </br>";
echo "Total : $hasil </br>";
?>
