<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Program Studi</h1>
    </div>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('project/data_prodi/prodi/add') ?>" class="btn btn-success btn-sm mb-2">Tambah
                    Data</a>
                <table class="table table-hover table-sm">
                    <thead class="thead-light text-wrap">
                        <tr>
                            <th class="text-center">Kode Prodi</th>
                            <th class="text-center">Kode Dikti</th>
                            <th class="text-center">Nama Prodi</th>
                            <th class="text-center">Jenjang</th>
                            <th class="text-center">Akreditasi</th>
                            <th class="text-center">Singkatan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td class="text-center">
                                    <?= $datas->kode_prodi ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->kode_dikti ?>
                                </td>
                                <td>
                                    <?= $datas->nama_prodi ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->jenjang ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->akreditasi ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->singkatan ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('project/data_prodi/prodi/edit/' . $datas->kode_prodi) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('project/data_prodi/prodi/delete/' . $datas->kode_prodi) ?>"
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