<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CV-Reza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <section id="header" class="py-5 bg-info">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto text-center">
                    <img class="rounded-circle" src="/assets/profile.png" alt="" height="250" width="250" style="object-fit: :cover;">
                    <h1><?= $data['nama']?></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="content" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-left">Data Diri</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <p>NPM</p>
                            <p>Tempat Lahir</p>
                            <p>Tanggal Lahir</p>
                            <p>Jenis Kelamin</p>
                            <p>Agama</p>
                            <p>Alamat</p>
                            <p>Email</p>
                            <p>No HP</p>
                        </div>
                        <div class="col-sm-6">
                            <p>: <?= $data['npm'] ?></p>
                            <p>: <?= $data['tempat_lahir'] ?></p>
                            <p>: <?= $data['tanggal_lahir'] ?></p>
                            <p>: <?= $data['jeniskelamin'] ?></p>
                            <p>: <?= $data['agama'] ?></p>
                            <p>: <?= $data['alamat'] ?></p>
                            <p>: <?= $data['email'] ?></p>
                            <p>: <?= $data['nohp'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-left">Riwayat Pendidikan</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>SD Negeri 17 Prabumulih</p>
                            <p>SMP Negeri 3 Prabumulih</p>
                            <p>SMA Negeri 1 Prabumulih</p>
                            <p>Politeknik Negeri Lampung</p>
                        </div>
                        <div class="col-sm-6 text-left">
                            <p>: <?= $data['sd'] ?></p>
                            <p>: <?= $data['smp'] ?></p>
                            <p>: <?= $data['sma'] ?></p>
                            <p>: <?= $data['kuliah'] ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <h2 class="text-center">Skill & Pengalaman</h2>
                <div class="col-md-6">
                    <div class="card" style="width: 40rem;">
                        <div class="card-body">
                            <p class="card-text"><?= $data['skill1'] ?></p>
                            <p class="card-text"><?= $data['skill2'] ?></p>
                            <p class="card-text"><?= $data['skill3'] ?></p>
                            <p class="card-text"><?= $data['skill4'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
                <td>
                    <a href="<?php echo site_url('about/add/'.$data['npm']);?>" class="btn btn-sm btn-info">Tambah</a>
                    <a href="<?php echo site_url('about/get_edit/'.$data['npm']);?>" class="btn btn-sm btn-info">Update</a>
                    <a href="<?php echo site_url('about/delete/'.$data['npm']);?>" class="btn btn-sm btn-danger">Delete</a>
                <td>
        </div>
    </section>

    <footer>
        <p class="text-center py-2 bg-info">Developed By Reza</p>
    </footer>
</body>
</html>