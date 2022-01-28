<h2 class="card-title">B. Keterangan Tempat Tinggal</h2>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label pt-4">Alamat</label>
    <div class="col">
        <textarea class="form-control" rows="2" disabled><?php echo @$edit['alamat'] ?></textarea>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">RT / RW</label>
    <div class="col">
    <input type="text" class="form-control" value="<?php echo @$edit['rt'] ?>" disabled>
    </div>
    <div class="col">
    <input type="text" class="form-control" value="<?php echo @$edit['rw'] ?>" disabled>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kelurahan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo @$edit['kelurahan'] ?>" disabled>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kecamatan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo @$edit['kecamatan'] ?>" disabled>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kota / Kabupaten</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo @$edit['kota'] ?>" disabled>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Provinsi</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo @$edit['provinsi'] ?>" disabled>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kode Pos</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo @$edit['kode_pos'] ?>" disabled>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">No. Telepon</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo @$edit['telepon'] ?>" disabled>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Tinggal Dengan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo @$edit['tinggal_dengan'] ?>" disabled>
    </div>
</div>
<hr>