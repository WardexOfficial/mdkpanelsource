 <?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center pt-5" style="background:url(''); background-size:cover; background-repeat:no-repeat;" >


        <div class=" pt-5"> 
            <div class=" card-header h5 text-center"style="color:black; text-shadow: 0 3px 3px #000000, 0 0 5px #ffffff; ">
            <h1> Login Page </h1>
           
            <div class=" card-body pt-5" style="color:white;">
                <?= form_open() ?>
                <div class="form-group mb-4 bg-grey">
                    <label for="username" >Username</label>
                    <input type="text" class="form-control mt-2" name="username" id="username" aria-describedby="help-username" placeholder="Your username" required minlength="4">
                    <?php if ($validation->hasError('username')) : ?>
                        <small id="help-username" class="form-text text-danger"><?= $validation->getError('username') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-4 bg-gray">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mt-2" name="password" id="password" aria-describedby="help-password" placeholder="Your password" required minlength="6">
                    <?php if ($validation->hasError('password')) : ?>
                        <small id="help-password" class="form-text text-danger"><?= $validation->getError('password') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-check mb-4">
                    <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="top" title="Keep session more than 60 minutes">
                        <input type="checkbox" class="form-check-input bg-dark" name="stay_log" id="stay_log" value="yes">
                        Stay login?
                    </label>
                </div>
                <div class="form-group mb-2">
                    <button type="submit" class="btn btn-xs-outline-secondary"><i class=""></i> Log in</button>
                </div>
                </div>
                <?= form_close() ?>
            </div>
        </div> 
        <div class="d-grid gap-2 justify-content-center pt-3 mb-4">
                <a class="btn btn-muted" href="<?= site_url('register') ?>" role="button"> SIGN-UP HERE </a> 
        </div>
        <div class="d-grid gap-4 justify-content-center pt-3 mb-3">          
                <a class="btn btn-muted" href="https://t.me/NOCASH_xD" role="button"> BUY PANEL FROM HERE </a>
        </div>   
        <div class=" pt-5">    
        </div> 
<?= $this->endSection() ?>