<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Ketua Program Studi</h1>
    </div>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('project/data_prodi_kaprodi/prodi_kaprodi/add') ?>"
                    class="btn btn-success btn-sm mb-2">Tambah
                    Data</a>
                <table class="table table-hover table-sm">
                    <thead class="thead-light text-wrap">
                        <tr>
                            <th class="text-center">ID Kaprodi</th>
                            <th class="text-center">Kode Prodi</th>
                            <th class="text-center">ID Dosen</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td class="text-center">
                                    <?= $datas->id_kaprodi ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->kode_prodi ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->id_dosen ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('project/data_prodi_kaprodi/prodi_kaprodi/edit/' . $datas->id_kaprodi) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('project/data_prodi_kaprodi/prodi_kaprodi/delete/' . $datas->id_kaprodi) ?>"
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