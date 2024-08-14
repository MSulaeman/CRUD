<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    form {
        width:15rem;
        height:23rem;
        border-radius:20px;
        margin-left:2rem;
        margin-top:2rem;
    }

    h1 {
        font-size:30px;
        margin:1rem;
    }

    button {
        margin-left:5rem;
    }

    
    
</style>
<body>
    
    <form action="update.php" method="post" class="shadow">
    <?php
        include 'koneksi.php';
        $id    = $_GET['id'];  
        $query = mysqli_query($conn,"SELECT * FROM siswa WHERE id='$id'");
        $siswa = mysqli_fetch_array($query);
        ?>
    <div class="none"><h1>Update Data</h1></div>
    <div class="mb-3 m-3 ">
        <label  class="form-label">Id</label>
        <input  class="form-control" type="text" name="id" id="" value="<?=$siswa['id']?>" readonly>
    </div>
    <div class="mb-3 m-3 ">
        <label  class="form-label">Nama</label>
        <input  class="form-control" type="text" name="nama" id="" value="<?=$siswa['nama']?>">
    </div>
    <div class="mb-3 m-3">
        <label  class="form-label">Umur</label>
        <input  class="form-control" type="number" name="umur" id="" value="<?=$siswa['umur']?>">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
</body>
</html>
