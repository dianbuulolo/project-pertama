<!DOCTYPE html>
<head>
    <title>Registrasi Mahasiswa</title>
</head>
<body>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Nama lengkap :".($_POST["nama_lengkap"]). "<br>";
        echo "Nim :".($_POST["nim"])."<br>";
        echo "Tanggal lahir :". (isset($_POST["tanggal_lahir"]) ? $_POST["tanggal_lahir"] : 'Tidak diisi') . "<br>";
        echo "Jurusan :". ($_POST["jurusan"]). "<br>";
        echo "Nomor Hp:". ($_POST["Nomor_hp"]). "<br>";
        echo "Alamat :". ($_POST["alamat"]). "<br>";
       
    }else {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method= "POST">
    <table>
        <tr>
                <td><label>Nama Lengkap</label></td>
                <td><input type="text" name="nama_lengkap"><br></td>
            </tr>
        <tr>
                <td><label>Nim</label></td>
                <td><input type="text" name="nim"> <br> </td>
            </tr>
        <tr>
               <td><label>Tanggal lahir</label></td>
               <td><input type="date" name="tanggal_lahir"><br></td>
          </tr>
    <br>
        <tr>
                <td><label>Jurusan</label></td>
                <td>
                    <select name="jurusan" id="">
                        <option value="TI">Teknologi Informasi</option>
                        <option value="SDA">Sumberdaya Akuatik</option>
                        <option value="AGR">Agroteknologi</option>
                        <option value="TS">Teknik Sipil</option>
                    </select>
                </td>
    </br>
            </tr>
            <tr>
                <td><label>Nomor Hp</label></td>
                <td><input type="text" name="Nomor_hp"> <br> </td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td><textarea name="alamat" required></textarea><br></td>
            </tr>
            <tr>
                <td><input type="reset" value="Reset"></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
    </br>
        </table>
    
        </form>
        <?php }?>
    </body>
    </html>

