<style>
    .d {
        color: white;
        text-shadow: 1px;
        padding: 2px;
        margin: 3px;
    }

    .ja{
        margin: 10px;
    }
</style>

<?= $this->session->flashdata('alert'); ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <d class="d">Tambah Data</d>
</button>

<!-- Modal -->
<div class="ja">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('admin/user/simpan') ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" required></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username" required></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Level</label>
                                <select name="level" class="form-control">
                                    <option value="">...</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Kontributor">Kontributor</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                            <d class="d">Simpan</d>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Penguna </h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($user as $aa) { ?>
                            <tr>
                                <td><?= $aa['username'] ?></td>
                                <td><?= $aa['nama'] ?></td>
                                <td><?= $aa['level'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/user/delete_data/' . $aa['id_user']) ?>"><button type="button" class="btn btn-danger  btn-icon-text" onclick="return confirm('Apakan anda yakin ingin menghapud data ini.')">
                                            <d class="d">Hapus <i class="ti-alert btn-icon-prepend"></i></d>
                                        </button></a>
                                    <!-- <a href="<?php echo site_url('admin/user/edit/' . $aa['id_user']) ?>"><button type="button" class="btn btn-primary btn-icon-text"><d class="d">Edit<i class="ti-file btn-icon-append"></i></d></button></a> -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_user'] ?>">
                                        <d class="d">Edit <i class="ti-file btn-icon-append"></i></d>
                                    </button>
                                    <div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="<?= base_url('admin/user/update') ?>" method="post">
                                                    <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Nama</label>
                                                                <input type="text" class="form-control" value="<?= $aa['nama'] ?>" name="nama"></input>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Username</label>
                                                                <input type="text" class="form-control" value="<?= $aa['username'] ?>" name="username" readonly></input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">
                                                            <d class="d">Simpan</d>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>