<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Program Studi</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('project/data_prodi/prodi') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('project/data_prodi/prodi/update/' . $data->kode_prodi) ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="kode_prodi">Kode Prodi</label>
                            <input type="text" class="form-control" name="kode_prodi" value="<?= $data->kode_prodi ?>">
                            <input type="hidden" name="where" value="<?= $data->kode_prodi ?>">
                        </div>
                        <div class="form-group">
                            <label for="kode_dikti">Kode Dikti</label>
                            <input type="text" class="form-control" name="kode_dikti" value="<?= $data->kode_dikti ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama_prodi">Nama Prodi</label>
                            <input type="text" class="form-control" name="nama_prodi" value="<?= $data->nama_prodi ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenjang">Jenjang</label>
                            <input type="text" class="form-control" name="jenjang" value="<?= $data->jenjang ?>">
                        </div>
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" class="form-control" name="akreditasi" value="<?= $data->akreditasi ?>">
                        </div>
                        <div class="form-group">
                            <label for="singkatan">Singkatan</label>
                            <input type="text" class="form-control" name="singkatan" value="<?= $data->singkatan ?>">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>