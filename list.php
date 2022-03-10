<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

    <h1 style="text-align : center">Ticket</h1>
    <div class="container">
        <div class="row">
            <div class="col">
        <table class="table table-striped" border="1">
        <tr>
            <td>Id Ticket</td>
            <td>Jenis Tiket</td>
            <td>Harga Tiket</td>
            <td>Jumlah Tiket</td>
            <td>Action</td>
        </tr>
</div>
</div>
</div>
<?php

    include 'koneksi.php';

    $query = "SELECT * FROM tiket_stadion";
    $result = mysqli_query($koneksi, $query);
    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_assoc($result)) {?>
        <tr>
            <td><?php echo $data["id_tiket"] ?></td>
            <td><?php echo $data["jenis_tiket"] ?></td>
            <td><?php echo $data["harga_tiket"] ?><t/d>
            <td><?php echo $data["jumlah_tiket"] ?></td>
            <td>
            <a class="btn btn-primary" href="#" role="button">Delete</a>
            <a class="btn btn-primary" href="edit.php?id_tiket=<?php echo $data["id_tiket"] ?>" role="button">Update</a>
        </td>
        </tr>
<?php }
        }else{ ?>
        <tr>
            <td>tidak ada data</td>
        </tr>
        <?php }?>
            
    