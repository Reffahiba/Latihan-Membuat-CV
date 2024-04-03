<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unggah Gambar</title>
  </head>
  <body>
    <h2>Unggah Gambar</h2>
    <form action="terima.php" method="post" enctype="multipart/form-data">
      <input type="file" name="gambar" accept="image/*" />
      <input type="submit" value="Unggah" />
    </form>
  </body>
</html>
