<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Belajar Web</title>
  </head>
    <form action="tujuan.php" method="post">
    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo $_POST["nama"]; ?>" hidden ><br>
    <label>Jenis Kelamin</label>
    <input type="radio" name="jk" value="<?php echo $_POST["jk"]; ?>" />Laki-laki
    <input type="radio" name="jk" value="<?php echo $_POST["jk"]; ?>" />Perempuan <br />
    <input type="submit" value="Kirim">
    </form>
    <br>
  </body>
</html>
