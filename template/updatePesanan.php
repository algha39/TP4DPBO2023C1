<!DOCTYPE html>
<html>

<head>
    <title>Edit Data pesanan</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">LIST MEMBER</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../pesanan.php">Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-lg-6 m-auto">

        <form method="post" action="../pesanan.php">

            <br><br>
            <div class="card">

                <div class="card-header bg-primary">
                    <h1 class="text-white text-center"> Edit Data pesanan </h1>
                </div><br>
                <label> Id:</label>
                <input type="text" name="id_pesanan" value="<?php echo $_GET['id_pesanan']; ?>" class="form-control" disabled> <br>

                <label> Nama Pesanan: </label>
                <input type="text" name="nama_barang" value="<?php echo $_GET['nama_barang']; ?>" class="form-control"> <br>

                <label> Jenis Pesanan: </label>
                <input type="text" name="jenis_barang" value="<?php echo $_GET['jenis_barang']; ?>" class="form-control"> <br>

                <button type="submit" name="edit" class="btn btn-primary mt-3">Edit</button><br>

            </div>
        </form>
    </div>
</body>

</html>