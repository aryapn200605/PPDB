<h2 class="card-title">A. Data Pribadi</h2>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nomor Induk Keluarga</label>
    <div class="col-sm-10">
    <input type="number" name="NIK" class="form-control" placeholder="Nomer Induk Keluarga" required>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
    <input type="text" name="nama_lengkap" class="form-control text-capitalize" placeholder="Nama Lengkap" required>
    </div>
</div>
<div class="form-group row pb-3">
    <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-5 pt-2">
        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki - laki" required>
        <label class="form-check-label">laki - laki</label>
    </div>
    <div class="col-sm-5 pt-2">
        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" required>
        <label class="form-check-label">Perempuan</label>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Tempat / Tanggal Lahir</label>
    <div class="col">
    <input type="text" name="tempat_lahir" class="form-control text-capitalize" placeholder="Tempat Lahir" required>
    </div>
    <div class="col" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
        <input name="tanggal_lahir" class="form-control" type="date" value="12-02-2012" required>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Agama</label>
    <div class="col">
        <select name="agama" class="col form-select" required>
            <option selected disabled>--Pilih--</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen Protestan</option>
            <option value="Katolik">Kristen Katolik</option>
            <option value="Buddha">Buddha</option>
            <option value="Hindu">Hindu</option>
            <option value="Konghucu">Konghucu</option>
        </select>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Cita cita</label>
    <div class="col-sm-10">
    <input type="text" name="cita_cita" class="form-control text-capitalize" placeholder="Cita cita" required>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jumlah Saudara</label>
    <div class="col-sm-10">
    <input type="number" name="jumlah_saudara" class="form-control" placeholder="Jumlah Saudara" required>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Berat / Tinggi Badan</label>
    <div class="col">
    <input type="number" name="berat_badan" class="form-control" placeholder="Berat Badan" required>
    </div>
    <div class="col">
    <input type="number" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan" required>
    </div>
</div>
<div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Golongan Darah</label>
    <div class="col">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="golongan_darah" value="A">
            <label class="form-check-label">A</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="golongan_darah" value="B">
            <label class="form-check-label">B</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="golongan_darah" value="AB">
            <label class="form-check-label">AB</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="golongan_darah" value="O">
            <label class="form-check-label">O</label>
        </div>
    </div>
</div>
<hr>