<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    input{
        border:none;
        border:1px solid;
        border-radius:5px;
    }
    div{
        width:20rem;
        height:10rem;
        border:1px solid;
        border-radius:7px;
    }
    h2{
        margin-left:3rem;
    }
</style>
<body>
    <h2>Tambah Data</h2>
    <div class="m-5">
    <form action="insert.php" method="POST" class="m-2  ">
        <p>Nama : <input type="text" name="nama"></p>
        <p>Umur : <input type="number" name="umur"></p>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    </div>
</body>

</html>