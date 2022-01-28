<h2 class="card-title">D. Data Sekolah Asal & Berkas</h2>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama Sekolah Asal</label>
    <div class="col-sm-10">
    <input type="text" name="nama_sekolah" class="form-control text-capitalize" placeholder="Nama Sekolah Asal" required>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Pas Foto 3x4</label>
    <div class="col-sm-10 form-group">
        <div class="input-group"> 
            <input type="file" class="form-control" id="customFile" name="fotoA" required>
        </div>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Rapor Sekolah</label>
    <div class="col-sm-10 form-group">
        <div class="input-group">
            <input type="file" class="form-control" id="customFile" name="fotoB" required>
        </div>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kartu Keluarga</label>
    <div class="col-sm-10 form-group">
        <div class="input-group">
            <input type="file" class="form-control" id="customFile" name="fotoC" required></div>
    </div>
</div>
<hr>
<?php

@$fotoA = $_FILES['fotoA']['name'];
@$fotoB = $_FILES['fotoB']['name'];
@$fotoC = $_FILES['fotoC']['name'];

?>
