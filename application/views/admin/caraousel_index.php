<style>
    .d {
        color: white;
        text-shadow: 1px;
        padding: 2px;
        margin: 3px;
    }
    
    .o {
        color: #362FD9;
    }

</style>

<?= $this->session->flashdata('alert'); ?>

<div class="col-xl-12">
    <div class="card">
        <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
            <h5 class="card-header">File Input</h5>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Pilih Foto Dengan Ukuran (1:3)</label>
                    <input class="form-control" type="file" name="foto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                    <d class="d">Simpan</d>
                </button>
            </div>
        </form>
    </div>
</div>

<div class="jp">
    <?php foreach ($caraousel as $aa) { ?>
        <div class="col-md-12 mb-3 mt-3">
            <div class="card h-100">
                <img class="card-img-tpo" src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>" alt="" width="100%">
                <div class="card-body">
                    <h5 class="card-title">Judul : <span class="o"><?= $aa['judul'] ?></span></h5>
                    <a href="<?php echo site_url('admin/caraousel/delete_data/' . $aa['foto']) ?>"><button type="button" class="btn btn-danger  btn-icon-text" onclick="return confirm('Apakan anda yakin ingin menghapud data ini.')">
                            <d class="d">Hapus</d>
                        </button></a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

