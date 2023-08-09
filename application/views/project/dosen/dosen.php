<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Dosen</h1>
    </div>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('project/data_dosen/dosen/add') ?>" class="btn btn-success btn-sm mb-2">Tambah
                    Data</a>
                <table class="table table-hover table-sm">
                    <thead class="thead-light text-wrap">
                        <tr>
                            <th class="text-center">ID Dosen</th>
                            <th class="text-center">Foto Profile</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">Gelar</th>
                            <th class="text-center">NRP</th>
                            <th class="text-center">NIDN</th>
                            <th class="text-center">E-Mail</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Pendidikan Terakhir</th>
                            <th class="text-center">Kode Prodi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td class="text-center">
                                    <?= $datas->id_dosen ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($datas->foto): ?>
                                        <img src="<?= base_url('assets/img/' . $datas->foto) ?>" alt="Foto Profile"
                                            class="rounded" width="80">
                                    <?php else: ?>
                                        <p>Tidak ada foto</p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?= $datas->nama_lengkap ?>
                                </td>
                                <td>
                                    <?= $datas->gelar ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->nrp ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->nidn ?>
                                </td>
                                <td>
                                    <?= $datas->email ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->gender ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->pendidikan_terakhir ?>
                                </td>
                                <td>
                                    <?= $datas->nama_prodi ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('project/data_dosen/dosen/edit/' . $datas->id_dosen) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('project/data_dosen/dosen/delete/' . $datas->id_dosen) ?>"
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