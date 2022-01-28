<h2 class="card-title">D. Data Sekolah Asal & Berkas</h2>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama Sekolah Asal</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" value="<?php echo @$edit['nama_sekolah'] ?>" disabled>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Pas Foto 3x4</label>
    <div class="col-sm-10 form-group">
        <div class="input-group"> 
            <img src="../img/<?php echo @$edit['foto1'] ?>" alt="">
        </div>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Rapor Sekolah</label>
    <div class="col-sm-10 form-group">
        <div class="input-group">
            <img src="../img/<?php echo @$edit['foto2'] ?>" alt="">
        </div>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kartu Keluarga</label>
    <div class="col-sm-10 form-group">
        <div class="input-group">
            <img src="../img/<?php echo @$edit['foto3'] ?>" alt="">
    </div>
</div>
<hr>
