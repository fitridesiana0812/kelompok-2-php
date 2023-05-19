<?php
    $id = $_POST['id_pengarang'];
    $pengarang = $_POST['nama_pengarang'];
    $email = $_POST['email'];
    $telepon = $_POST['telp'];
    $alamat = $_POST['alamat'];

    include ('connect.php');

    $result = mysqli_query($conn, "INSERT INTO `pengarang` (`id_pengarang`,`nama_pengarang`,`email`,`telp`,`alamat`) VALUES ('$id','$pengarang','$email','$telepon','$alamat'); ");
    header("Location:index.php");
?>