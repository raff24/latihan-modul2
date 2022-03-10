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

        

        <form action="simpan.php" method="POST">

        <h1>Ticket</h1>
        <br>
        <div class="container">
                <div class="row">
                        <div class="col">
        <label>ID</label>
        <input type="number" class="form-control" name="id_tiket">
        <br>
        <label>Jenis Tiket</label>
        <input type="text" class="form-control" name="jenis_tiket">
        <br>
        <label>Harga Tiket</label>
        <input type="number" class="form-control" name="harga_tiket">
        <br>
        <label>Jumlah Tiket</label>
        <input type="number" class="form-control" name="jumlah_tiket">
        <br>

        <input class="btn btn-primary" type="submit" value="Submit">
        </form>
</div>
</div>
</div>
</body>
</html>