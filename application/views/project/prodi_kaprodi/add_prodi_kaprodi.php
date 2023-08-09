<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Tambah Data Ketua Program Studi</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('project/data_prodi_kaprodi/prodi_kaprodi/') ?>"
                        class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('project/data_prodi_kaprodi/prodi_kaprodi/create/') ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_kaprodi">ID Kaprodi</label>
                            <input type="text" class="form-control" name="id_kaprodi" value="">
                        </div>
                        <div class="form-group">
                            <label for="kode_prodi">Kode Prodi</label>
                            <input type="text" class="form-control" name="kode_prodi" value="">
                        </div>
                        <div class="form-group">
                            <label for="id_dosen">ID Dosen</label>
                            <input type="text" class="form-control" name="id_dosen" value="">
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>