<style>
    .d {
        color: white;
        text-shadow: 1px;
        padding: 2px;
        margin: 10px;
    }
    .ja {
        margin: 10px;
    }
</style>

<?= $this->session->flashdata('alert'); ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <d class="d">Tambah Data Kategori</d>
</button>

<!-- Modal -->
<div class="ja">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required></input>
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
            <h4 class="card-title">Data kategori Konten</h4>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>Nama kategori Konten</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($kategori as $aa) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $aa['nama_kategori'] ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/kategori/delete_data/' . $aa['id_kategori']) ?>"><button type="button" class="btn btn-danger  btn-icon-text" onclick="return confirm('Apakan anda yakin ingin menghapud data ini.')">
                                            <d class="d">Hapus <i class="ti-alert btn-icon-prepend"></i></d>
                                        </button></a>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_kategori'] ?>">
                                        <d class="d">Edit <i class="ti-file btn-icon-append"></i></d>
                                    </button>
                                    <div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                                                    <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Kategori</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Nama Kategori Konten</label>
                                                                <input type="text" class="form-control" value="<?= $aa['nama_kategori'] ?>" name="nama_kategori"></input>
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
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>