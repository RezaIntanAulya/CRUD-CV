<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Update Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>From Update Data Diri</h1>
            </div>
        </div>

    <form action="<?php echo site_url('about/update');?>" method="post">
        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">NPM</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="npm" placeholder="Masukkan NPM...." value="<?= $npm; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Nama</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama...." value="<?= $nama; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Tempat Lahir</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir...." value="<?= $tempat_lahir; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Tanggal Lahir</label>
            </div>
            <div class="col-lg-6">
                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir...." value="<?= $tanggal_lahir; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Jenis Kelamin</label>
            </div>
            <div class="col-lg-6">
                <input type="checkbox" id="laki" name="jeniskelamin" value="Laki-laki"> Laki-laki
                <input type="checkbox" id="perempuan" name="jeniskelamin" value="Perempuan"> Perempuan
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Agama</label>
            </div>
            <div class="col-lg-6">
                <select id="agama" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Katolik">Katolik</option>
                </select>
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Alamat</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat...." value="<?= $alamat; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Email</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="email" placeholder="Masukkan Email...." value="<?= $email; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">No Hp</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="nohp" placeholder="Masukkan No Hp...." value="<?= $nohp; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">SD</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="sd" placeholder="Masukkan Riwayat Pendidikan...." value="<?= $sd; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">SMP</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="smp" placeholder="Masukkan Riwayat Pendidikan...." value="<?= $smp; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">SMA</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="sma" placeholder="Masukkan Riwayat Pendidikan...." value="<?= $sma; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Kuliah</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="kuliah" placeholder="Masukkan Riwayat Pendidikan...." value="<?= $kuliah; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill1</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="skill1" placeholder="Masukkan Skill...." value="<?= $skill1; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill2</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="skill2" placeholder="Masukkan Skill...." value="<?= $skill2; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill3</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="skill3" placeholder="Masukkan Skill...." value="<?= $skill3; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Skill4</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="skill4" placeholder="Masukkan Skill...." value="<?= $skill4; ?>">
            </div>
        </div>

        <div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>