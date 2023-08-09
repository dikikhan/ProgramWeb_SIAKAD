<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="card shadow">
        <div class="card-header">Form Edit User</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="<?= base_url('admin/user/update') ?>" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" value="">
                        </div>
                        <div class="container-fluid">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios1"
                                    value="active" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Aktif
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="exampleRadios2"
                                    value="inactive">
                                <label class="form-check-label" for="exampleRadios2">
                                    Tidak Aktif
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
