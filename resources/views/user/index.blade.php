<?php
// mengambil data / query data
function  query($query){
    $conn = mysqli_connect("localhost", "root","","pertemuan19");
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}
    $mahasiswa = query('SELECT * FROM mahasiswa');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
</head>
<body>
    <h1>Data Pengguna</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Avatar</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Role</th>

    </tr>
    <?php $i = 1 ?>
    <?php foreach($mahasiswa as $row): ?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="hapus.php?id= <?= $row["id"]; ?>" >Hapus</a>


        </td>
        <td><img src="img/<?php echo $row["gambar"] ?>"  width="50" alt=""></td>
        <td><?= $row ["nama"];?></td>
        <td><?= $row ["email"];?></td>
        <Td><?= $row ["phone"];?></Td>
        <td><?= $row ["role"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table><br>
    <a href="tambah.php"> Tambah pengguna</a>

</body>
</html>

