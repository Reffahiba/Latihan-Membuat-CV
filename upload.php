<?php
$file_name = $_FILES['gambar']['name'];
$file_size = $_FILES['gambar']['size'];
$file_tmp = $_FILES['gambar']['tmp_name'];
$file_type = $_FILES['gambar']['type'];
$target_file = $file_name;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["gambar"]["tmp_name"]);
  if($check !== false) {
    echo "File ini adalah gambar - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File ini bukanlah gambar.";
    $uploadOk = 0;
  }
}

if ($uploadOk == 0) {
  echo "Maaf, file belum terupload.";
} else {
  if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
    echo "<img src='$target_file', alt='Gambar telah diupload'>";
  } else {
    echo "Maaf, terjadi error saat proses upload.";
  }
}
?>