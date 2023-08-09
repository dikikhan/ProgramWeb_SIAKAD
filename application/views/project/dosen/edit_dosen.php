<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Dosen</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('project/data_dosen/dosen') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('project/data_dosen/dosen/update/' . $data->id_dosen) ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_dosen">ID Dosen</label>
                            <input type="text" class="form-control" name="id_dosen" value="<?= $data->id_dosen ?>">
                            <input type="hidden" name="where" value="<?= $data->id_dosen ?>">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Profile</label>
                            <input type="file" class="form-control" name="foto" id="foto" accept="assets/img/"
                                value="<?= $data->foto ?>">
                        </div>

                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap"
                                value="<?= $data->nama_lengkap ?>">
                        </div>
                        <div class="form-group">
                            <label for="gelar">Gelar</label>
                            <input type="text" class="form-control" name="gelar" value="<?= $data->gelar ?>">
                        </div>
                        <div class="form-group">
                            <label for="nrp">NRP</label>
                            <input type="text" class="form-control" name="nrp" value="<?= $data->nrp ?>">
                        </div>
                        <div class="form-group">
                            <label for="nidn">NIDN</label>
                            <input type="text" class="form-control" name="nidn" value="<?= $data->nidn ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" name="email" value="<?= $data->email ?>">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="P" <?php if ($data->gender == 'P')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="gender">Perempuan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="L" <?php if ($data->gender == 'L')
                                    echo 'checked' ?>>
                                    <label class="form-check-label" for="gender">Laki-Laki</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <input type="text" class="form-control" name="pendidikan_terakhir"
                                    value="<?= $data->pendidikan_terakhir ?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_prodi">Program Studi</label>
                            <br>
                            <select name="kode_prodi" id="kode_prodi">
                                <?php foreach ($prodi_list as $prodi): ?>
                                    <option value="<?= $prodi['kode_prodi'] ?>" <?php if ($data->kode_prodi == $prodi['kode_prodi'])
                                          echo 'selected' ?>>
                                      <?= $prodi['nama_prodi'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary btn-sm">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>