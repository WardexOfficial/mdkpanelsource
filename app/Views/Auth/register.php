
 <?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center pt-5" style="background:url('');
background-size:cover;
background-repeat:no-repeat;" >

       
  
        <div class=" pt-5"> 
            <div class=" card-header h5 text-center"style="color:black; text-shadow: 0 3px 3px #000000, 0 0 5px #ffffff; ">
               <h1> Sign-up </h1>
            <div class=" card-body pt-5" style="color:white;">
                <?= form_open() ?>

                <div class="form-group mb-4 bg-gray">
                    <label for="username">Username</label>
                    <input type="text" class="form-control mt-2" name="username" id="username" aria-describedby="help-username" placeholder="Your username" minlength="4" maxlength="24" value="<?= old('username') ?>" required>
                    <?php if ($validation->hasError('username')) : ?>
                        <small id="help-username" class="form-text text-danger"><?= $validation->getError('username') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-4 bg-gray">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mt-2" name="password" id="password" aria-describedby="help-password" placeholder="Your password" minlength="6" maxlength="24" required>
                    <?php if ($validation->hasError('password')) : ?>
                        <small id="help-password" class="form-text text-danger"><?= $validation->getError('password') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-4 bg-gray">
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="password2" id="password2" class="form-control mt-2" placeholder="Confirm password" aria-describedby="help-password2" minlength="6" maxlength="24" required>
                    <?php if ($validation->hasError('password2')) : ?>
                        <small id="help-password2" class="form-text text-danger"><?= $validation->getError('password2') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-4 bg-gray">
                    <label for="referral">Referreal Code</label>
                    <input type="text" name="referral" id="referral" class="form-control mt-2" placeholder="Referral code" aria-describedby="help-referral" value="<?= old('referral') ?>" maxlength="25" required>
                    <?php if ($validation->hasError('referral')) : ?>
                        <small id="help-referral" class="form-text text-danger"><?= $validation->getError('referral') ?></small>
                    <?php endif; ?>
                </div>                                
                <div class="form-group mb-2">
                    <button type="submit" class="btn btn-xs-outline-secondary"><i class=""></i> Sign Up </button>
                </div>
                </div>
                <?= form_close() ?>
            </div>
        </div>
        <div class="d-grid gap-2 justify-content-center pt-3 mb-4">
                <a class="btn btn-xs-warning" href="<?= site_url('login') ?>" role="button"> LOGIN HERE </a> 
        </div>
        <div class="d-grid gap-4 justify-content-center pt-3 mb-3">          
                <a class="btn btn-xs-warning" href="https://t.me/NOCASH_xD" role="button"> BUY REFERAL FROM HERE </a>
        </div>   
        <div class=" pt-5">    
        </div> 
<?= $this->endSection() ?>