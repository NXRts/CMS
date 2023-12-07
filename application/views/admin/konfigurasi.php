<style>
    .d {
        color: white;
        text-shadow: 1px;
        padding: 2px;
        margin: 3px;
        text-decoration: none;
    }
</style>

<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Konfigurasi</h5>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Judul Websait</label>
                <input type="text" class="form-control" name="judul_website" value="<?= $konfig->judul_website; ?>"></input>
            </div>
        </div>
            <!-- <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Profil Website</label>
                    <textarea type="text" class="form-control" name="profil_website"><?= $konfig->profil_website; ?></textarea>
                </div>
            </div> -->
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Profil Website</label>
                <div class="form-floating">
                    <textarea class="form-control" name="profil_website"><?= $konfig->profil_website; ?></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>"></input>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Facebook</label>
                <input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>"></input>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?= $konfig->email; ?>"></input>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input   type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>"></input>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">No_Wa</label>
                <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>"></input>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">
            <d class="d">Simpan</d>
        </button>
    </div>
</form>