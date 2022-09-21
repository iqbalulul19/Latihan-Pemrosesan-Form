<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="proses.css">
</head>
<center>
    <div class="container">
<body>
    <h2>Pendaftaran Siswa Baru </h2>
    <H2>SMKN 1 SAYUNG</h2>
    <form action="proses-pendaftaran.php" method="post">
        <table border="0">
        <tr>
            <td>Nama Lengkap  </td>
            <td>:<input type="text" name="nama"/> </td>
        </tr>
        <tr>
            <td>Tempat Lahir  </td>
            <td>:<input type="text" name="tl"/> </td>
        </tr> 
        <tr>
            <td>Tanggal Lahir  </td>
            <td>:<input type="date" name="birth" /> </td>
        </tr>
        <tr>
            <td>Jenis Kelamin  </td>
            <td>:
            <input type="radio" name="sex" value="Laki-laki">Laki-laki
            <input type="radio" name="sex" value="Perempuan">Perempuan 
        </tr>
        <tr>
            <td>Alamat </td>
            <td>:
                <textarea name="alamat"></textarea>
            </td>
        </tr>
        <tr>
            <td>Agama  </td>
            <td>:
                <select name="agama">
                    <option>Islam</option>
                    <option>kristen</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>katolik</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <br>
                <input type="reset" value="ulangi" />
            </td>
            <td>
                <br>
                <input type="submit" value="submit" />
            </td>
        </tr>
</table>
</form>
</body>
</html>