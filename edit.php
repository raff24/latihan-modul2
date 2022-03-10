<?php
include 'koneksi.php';

if(!isset($_GET['id_tiket']) ){
    header('Location: list.php');
}

$id_tiket = $_GET['id_tiket'];

$sql = "SELECT * FROM tiket_stadion WHERE id_tiket = '$id_tiket'";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query) == 1){
    $data = mysqli_fetch_array($query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

    <form action="proses-edit.php" method="POST">

        <h1>Ticket</h1>
        <br>
        <div class="container">
        <div class="row">
            <div class="col">
        <label for="id_tiket">ID</label>
        <input type="number" class="form-control" name="id_tiket" id="id_tiket" value="<?php echo($data['id_tiket']); ?>">
        <br>
        <label for="jenis_tiket">Jenis Tiket</label>
        <input type="text" class="form-control" name="jenis_tiket" id="jenis_tiket" value="<?php echo($data['jenis_tiket']); ?>">
        <br>
        <label for="harga_tiket">Harga Tiket</label>
        <input type="number" class="form-control" name="harga_tiket" id="harga_tiket" value="<?php echo($data['harga_tiket']); ?>">
        <br>
        <label for="jumlah_tiket">Jumlah Tiket</label>
        <input type="number" class="form-control" name="jumlah_tiket" id="jumlah_tiket" value="<?php echo($data['jumlah_tiket']); ?>">
        <br>

        <input class="btn btn-primary" type="button" value="Input">


        </form>
        </div>
</div>
</div>
</body>
</html>