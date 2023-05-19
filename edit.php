<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
      include ('connect.php');
        $id_pengarang = $_GET['id_pengarang'];
        $pengarang = mysqli_query($conn, "SELECT * FROM pengarang WHERE id_pengarang = '$id_pengarang' ");
        while ($data = mysqli_fetch_array($pengarang)){
            $id_pengarang = $data['id_pengarang'];
            $nama_pengarang = $data ['nama_pengarang'];
            $email = $data ['email'];
            $telp = $data ['telp'];
            $alamat = $data ['alamat'];
        }
    ?>
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3"> << kembali</a>
        <h3 class="fw-bold mt-4 mb-4">Edit Data</h3>
        <form action="prosesEdit.php?id_pengarang=<?= $id_pengarang; ?>" method="POST">
            <table cellpadding="10" cellspacing="0" class="table table-striped">
                <tr>
                    <td>ID Pengarang</td>
                    <td><input type="text" class="form-control" name="id_pengarang" value="<?= $id_pengarang; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Pengarang</td>
                    <td><input type="text" class="form-control" name="nama_pengarang" value="<?= $nama_pengarang; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" class="form-control" name="email" value="<?= $email; ?>"></td>
                </tr>
                <tr>
                    <td>Telpon</td>
                    <td><input type="number" class="form-control" name="telp" value="<?= $telp; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" class="form-control" name="alamat" value="<?= $alamat; ?>"></td>
                </tr>
                <tr>
                    <td>
                    <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>    
</body>
</html>