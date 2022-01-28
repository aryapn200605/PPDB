<?php

include '../library/oop.php';
include '../config/koneksi.php';

$go = new oop();

?>
<div class="col-md-12">
<h4>Dashboard</h4>
</div>
<p>Selamat datang di sistem informasi Pendaftaran Peserta Didik Baru 2021 </p><hr>
<div style="width: 18rem;">
  <div class="card card-stats bg-primary">
    <!-- Card body 1 -->
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5 class="card-title text-light text-uppercase mb-0">Siswa Yang Diterima</h5>
          <span class="h2 font-weight-bold mb-0">
            <?php 

            $diterima = $go -> count($con, "data_pribadi", "Diterima");
            if($diterima == "" || 0){
              echo "0";
            }elseif($diterima > 0){
              echo $diterima;
            }

            ?></span>
        </div>
        <div class="col-auto">
          <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
            <img src="images/account-check.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="width: 18rem;">
  <div class="card card-stats bg-secondary">
    <!-- Card body 2 -->
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5 class="card-title text-light text-uppercase mb-0">Siswa Yang Mendaftar</h5>
          <span class="h2 font-weight-bold mb-0">
            <?php 

            $waiting = $go -> count($con, "data_pribadi", "Waiting...");
            if($waiting == "" || 0){
              echo "0";
            }elseif($waiting > 0){
              echo $waiting;
            }
            
            ?></span>
        </div>
        <div class="col-auto">
          <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
            <img src="images/account-alert.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="width: 18rem;">
  <div class="card card-stats bg-danger">
    <!-- Card body 3 -->
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h5 class="card-title text-light text-uppercase mb-0">Siswa Yang Ditolak</h5>
          <span class="h2 font-weight-bold mb-0">
            <?php 

            $ditolak = $go -> count($con, "data_pribadi", "Ditolak");
            if($ditolak == "" || 0){
              echo "0";
            }elseif($ditolak > 0){
              echo $ditolak;
            }
            
            ?></span>
        </div>
        <div class="col-auto">
          <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
            <img src="images/account-remove.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>