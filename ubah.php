<?php
require "function.php";

//mengambil data di url
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$list = query("SELECT * FROM konten where id = $id")[0];


//cek apakah sdh ditekah ato belum
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script> 
           alert('data berhasil diubah!');
           document.location.href = 'index.php';
         </script>";
    } else {
        echo "<script> 
    alert('data gagal diubah!');    
  </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h1>Update data mahasiswa</h1>

    <div class="container">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $list["id"];?>">
        <input type="text" name="list" id="list" required value="<?= $list["list"];?>">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>       
        <a href="index.php">kembali</a>
    </form>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>