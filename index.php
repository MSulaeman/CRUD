<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    a{
        text-decoration:none;
        color:white;
    }
    .add{
        margin-left:60rem;
        position: absolute;
    }
    h1{
        margin-left:35rem;
    }
    div {
        width:45rem;
    }
</style>
<body>
    <h1>Data Siswa</h1>
    <button class="add btn btn-success"><a href="tambah.php">Tambah Data Siswa</a></button>
    <div class="shadow  m-3">
            
            <table class="table">
                <tr class="table-active">
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Setting</th>
                </tr>
                

            <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, 'select * from siswa');
                while ($siswa = mysqli_fetch_array($query)){
            ?>

                <tr>
                    <td><?= $siswa['nama']?></td>
                    <td><?= $siswa['umur']?></td>
                    <td>
                        <a href="edit.php?nama=<?= $siswa['nama']?>">
                        <button type="submit" class="btn btn-success">Edit</button></a>
                        <a href="delete.php?nama=<?= $siswa['nama']?>">
                        <button type="submit" class="btn btn-danger">Hapus</button></a>
                    </td>   
                </tr>

                <?php } ?>

            </table>       
    </div>
</body>
</html>