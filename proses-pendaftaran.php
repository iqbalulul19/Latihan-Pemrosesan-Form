<?php
echo "Nama Lengkap : ";
if (isset($_POST['nama'])){
    echo $_POST['nama'];
}
echo "<br>";

echo "Tempat lahir : ";
if (isset($_POST['tl'])){
    echo $_POST['tl'];
}
echo "<br>";

echo "Tanggal Lahir : ";
if (isset($_POST['birth'])){
    echo $_POST['birth'];
}
echo "<br>";

echo "Jenis Kelamin : ";
if (isset($_POST['sex'])){
    echo $_POST['sex'];
}
echo "<br>";

echo "Alamat : ";
if (isset($_POST['alamat'])){
    echo $_POST['alamat'];
}
echo "<br>";

echo "Agama : ";
if (isset($_POST['agama'])){
    echo $_POST['agama'];
}
echo "<br>";
?>