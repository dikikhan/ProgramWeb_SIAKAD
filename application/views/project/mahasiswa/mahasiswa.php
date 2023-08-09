<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Data Mahasiswa</h1>
    </div>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('project/data_mahasiswa/mahasiswa/add') ?>"
                    class="btn btn-success btn-sm mb-2">Tambah
                    Data</a>
                <table class="table table-hover table-sm">
                    <thead class="thead-light text-wrap">
                        <tr>
                            <th class="text-center">ID Mahasiswa</th>
                            <th class="text-center">Foto Profile</th>
                            <th class="text-center">NIM</th>
                            <th class="text-center">Nama Lengkap</th>
                            <th class="text-center">E-Mail</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Status Study</th>
                            <th class="text-center">Jenjang Study</th>
                            <th class="text-center">Semester Awal</th>
                            <th class="text-center">Program Studi</th>
                            <th class="text-center">Semester</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td class="text-center">
                                    <?= $datas->id_mahasiswa ?>
                                </td>
                                <td class="text-center">
                                    <?php if ($datas->foto): ?>
                                        <img src="<?= base_url('assets/img/' . $datas->foto) ?>" alt="Foto Profile"
                                            class="rounded" width="80">
                                    <?php else: ?>
                                        <p>Tidak ada foto</p>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->nim ?>
                                </td>
                                <td>
                                    <?= $datas->nama_lengkap ?>
                                </td>
                                <td>
                                    <?= $datas->email ?>
                                </td>
                                <td>
                                    <?= $datas->gender ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->status_study ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->jenjang_study ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->semester_awal ?>
                                </td>
                                <td>
                                    <?= $datas->nama_prodi ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->semester ?>
                                </td>
                                <td>
                                    <?= $datas->nama_kelas ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('project/data_mahasiswa/mahasiswa/edit/' . $datas->id_mahasiswa) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('project/data_mahasiswa/mahasiswa/delete/' . $datas->id_mahasiswa) ?>"
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