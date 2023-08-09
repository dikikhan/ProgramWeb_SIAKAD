<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif ?>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('admin/user/add') ?>" class="btn btn-success btn-sm">Tambah User</a>
                <br>
                <table class=" table table-bordred">
                    <thead>
                        <tr>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Password</th>
                            <th class="text-center">Aktif</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $datas): ?>
                            <tr>
                                <td>
                                    <?= $datas->nama ?>
                                </td>
                                <td>
                                    <?= $datas->email ?>
                                </td>
                                <td>
                                    <?= $datas->password ?>
                                </td>
                                <td class="text-center">
                                    <?= $datas->aktif ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('admin/user/edit/' . $datas->email) ?>"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?= base_url('admin/user/delete/' . $datas->email) ?>"
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