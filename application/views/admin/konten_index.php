<style>
    .d {
        color: white;
        text-shadow: 1px;
        padding: 2px;
        margin: 3px;
        text-decoration: none;
    }

    .ja {
        margin: 10px;
    }
</style>

<?= $this->session->flashdata('alert'); ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <d class="d">Tambah Data Konten</d>
</button>

<!-- Modal -->
<div class="ja">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Konten</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" placeholder="Judul" name="judul" required></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Kategori</label>
                                <select name="id_kategori" class="form-control">
                                    <?php foreach ($kategori as $aa) { ?>
                                        <option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Keterangan</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Keterangan" name="keterangan"></textarea>
                                    <label for="floatingTextarea"><sup>Keterangan</sup></label>
                                </div>
                            </div>
                        </div> -->
                        <div class="container">
                            <div class="row">
                                <div class="col mb-3">
                                    <label class="form-label">Keterangan</label>
                                    <div class="form-floating">
                                        <textarea id="keterangan" name="keterangan"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" name="foto" class="form-control" accept="image/png, image/jpg">
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

<!-- tabel -->

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data kategori Konten</h4>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>Judul</th>
                            <th>Kategori Konten</th>
                            <th>Tanggal</th>
                            <th>Kreator</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($konten as $aa) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $aa['judul'] ?></td>
                                <td><?= $aa['nama_kategori'] ?></td>
                                <td><?= $aa['tanggal'] ?></td>
                                <td><?= $aa['username'] ?></td>
                                <td>
                                    <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                                        <span class="tf-icons bx bx-sezrch "></span> Lihat Foto
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('admin/konten/delete_data/' . $aa['foto']) ?>"><button type="button" class="btn btn-danger  btn-icon-text" onclick="return confirm('Apakan anda yakin ingin menghapud data ini.')">
                                            <d class="d">Hapus</d>
                                        </button></a>

                                    <!-- Edit -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#konten<?= $no ?>">
                                        <d class="d">Edit</d>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="konten<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data [<?= $aa['judul'] ?>]</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Judul</label>
                                                                <input type="text" class="form-control" value="<?= $aa['judul'] ?>" name="judul"></input>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Kategori</label>
                                                                <select name="id_kategori" class="form-control">
                                                                    <?php foreach ($kategori as $uu) { ?>
                                                                        <option <?php if ($uu['id_kategori'] == $aa['id_kategori']) {
                                                                                    echo "selected";
                                                                                } ?> value="<?= $uu['id_kategori'] ?>"><?= $uu['nama_kategori'] ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Keterangan</label>
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" placeholder="Keterangan" name="keterangan"><?= $aa['keterangan'] ?></textarea>
                                                                    <label for="floatingTextarea"><sup>Keterangan</sup></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <label class="form-label">Foto</label>
                                                                <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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