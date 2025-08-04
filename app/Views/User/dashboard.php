<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>


<style>
      background: linear-gradient(0.97turn, #e3393988, #2a2225, #622f2f);
  </style>

<?= $this->include('Layout/msgStatus') ?>
<div class="row">
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4>Total Keys</h4>
<h5><?= $keysAll ?></h5>
</div>
<div class="dash-imgs">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4>Sold Keys</h4>
<h5><?= $usedKeys ?></h5>
</div>
<div class="dash-imgs">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
</div>
</div>
</div>

<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4>Unused Key</h4>
<h5><?= $unusedKeys ?></h5>
</div>
<div class="dash-imgs">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
</div>
</div>
</div>

<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4>Total Users</h4>
<h5><?= $userAll ?></h5>
</div>
<div class="dash-imgs">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
</div>
</div>
</div>


</div>
  


<?= $this->endSection() ?>