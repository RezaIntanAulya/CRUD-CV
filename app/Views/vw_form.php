<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
</head>
<body>
  <div class="container p-3">
    <div class="text-center">
      <h1>BIODATA MAHASISWA</h1>
      <br>
    </div>
    <form action="vw_biodata.php" method="post">
      <label for="npm">NPM :</label>
      <input type="text" name="npm" placeholder="Masukkan NPM....">
      <br></br>
      <label for="nama">Nama :</label>
      <input type="text" name="nama" placeholder="Masukkan Nama...">
      <br></br>
      <label for="email">E-mail :</label>
      <input type="text" name="email" placeholder="Masukkan Email...">
      <br></br>
      <label for="jeniskelamin">Jenis Kelamin :</label>
      <input type="radio" id="laki" name="jeniskelamin" value="Laki-laki">
      <label for="laki">Laki-laki</label>
      <input type="radio" id="perempuan" name="jeniskelamin" value="Perempuan">
      <label for="perempuan">Perempuan</label>
      <br></br>
      <label for="agama">Agama :</label>
      <select id="agama" name="agama">
        <option value="Islam">Islam</option>
        <option value="Katolik">Katolik</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
      </select>
      <br></br>
      <label for="alamat">Alamat :</label>
      <textarea name="alamat" placeholder="Masukkan Alamat Anda..."></textarea>
      <br></br>
      <input type="submit" name="submit" value="Simpan">
      <input type="reset" name="reset"  value="Batal">
    </form>
  </div>
</body>
</html>