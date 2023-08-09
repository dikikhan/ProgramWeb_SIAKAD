<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card shadow">
        <div class="card-header">Form Edit Data Semester</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a href="<?= base_url('project/data_semester/semester') ?>" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="col-sm-6">
                    <form action="<?= base_url('project/data_semester/semester/update/' . $data->id_semester) ?>"
                        class="user form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="id_semester">ID Semester</label>
                            <input type="text" class="form-control" name="id_semester"
                                value="<?= $data->id_semester ?>">
                            <input type="hidden" name="where" value="<?= $data->id_semester ?>">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control" name="semester" value="<?= $data->semester ?>">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="<?= $data->keterangan ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>