<!DOCTYPE html>
<html>
<head>
    <title>Biodata Reza Intan Aulya</title>
</head>
<body>
    <div class="container p-3">
        <div class="text-center">
            <h1>IDENTITAS BIODATA MAHASISWA</h1>
            <br>
        </div>
        <label for="npm">NPM :</label>
        <?= $_POST["npm"];?>
        <br></br>
        <label for="nama">Nama :</label>
        <?= $_POST["nama"];?>
        <br></br>
        <label for="email">E-mail :</label>
        <?= $_POST["email"];?>
        <br></br>
        <label for="jeniskelamin">Jenis Kelamin :</label>
        <?php if ($_POST ['jeniskelamin'] == 'Laki-laki') {
            echo "Laki-laki";
        }
        elseif ($_POST ['jeniskelamin'] == 'Perempuan') {
            echo "Perempuan";   
        };
        ?>
        <br></br>
        <label for="agama">Agama :</label>
        <?= $_POST["agama"];?>
        <br></br>
        <label for="alamat">Alamat :</label>
        <?= $_POST["alamat"];?>
        <br></br>
    </div>
</body>
</html>