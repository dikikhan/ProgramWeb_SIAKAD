<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Kelas</h1>
    </div>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('project/data_kelas/kelas/add') ?>" class="btn btn-success btn-sm mb-2">Tambah
                    Data</a>
                <table class="table table-hover table-sm">
                    <thead class="thead-light text-wrap">
                        <tr>
                            <th class="text-center">ID Kelas</th>
                            <th class="text-center">Nama Kelas</th>
                            <th class="text-center">Program Studi</th>
                            <th class="text-center">Nama Dosen</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td class="text-center">
                                    <?= $datas->id_kelas ?>
                                </td>
                                <td>
                                    <?= $datas->nama_kelas ?>
                                </td>
                                <td>
                                    <?= $datas->nama_prodi ?>
                                </td> <!-- Display the prodi name -->
                                <td>
                                    <?= $datas->nama_lengkap ?>
                                </td> <!-- Display the dosen name -->
                                <td class="text-center">
                                    <a href="<?= base_url('project/data_kelas/kelas/edit/' . $datas->id_kelas) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('project/data_kelas/kelas/delete/' . $datas->id_kelas) ?>"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>