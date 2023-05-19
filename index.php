<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="display" id ="Table" >
        <a href="create.php" class="btn btn-primary mt-3">Tambah data</a>
        <h3 class="fw-bold mt-3 mb-4">Data Pengarang</h3>
                <thead>
                    <tr>
                    <th widht="50px" class="text-center">ID</th>
                    <th widht="200px" class="text-center">Nama Pengarang</th>
                    <th widht="200px" class="text-center">Email</th>
                    <th widht="300px" class="text-center">Telpon</th>
                    <th widht="200px" class="text-center">Alamat</th>
                    <th widht="200px" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php
                    include ('connect.php');
                    $data_pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
                    while($pengarang = mysqli_fetch_array($data_pengarang)){
                ?>
                <tr>
                    <td class="text-center"><?php echo $pengarang['id_pengarang'] ?></td>
                    <td class="text-center"><?php echo $pengarang['nama_pengarang'] ?></td>
                    <td class="text-center"><?php echo $pengarang['email'] ?></td>
                    <td class="text-center"><?php echo $pengarang['telp'] ?></td>
                    <td class="text-center"><?php echo $pengarang['alamat'] ?></td>
                    <td class="text-center">
                    <a class="btn btn-warning" href="edit.php?id_pengarang=<?= $pengarang['id_pengarang']; ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id_pengarang=<?= $pengarang['id_pengarang']; ?>">Delete</a>
                </tr>
                <?php 
                    } 
                ?>
            </table>
        </div>
    </body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $('#Table').DataTable();
    } );
</script>

