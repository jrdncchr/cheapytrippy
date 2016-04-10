<div class="row" style="background: #272A2F; padding-bottom: 60px; box-shadow: 0 0 8px 0 rgba(0,0,0,0.2),   inset 0 0 1px 0 rgba(255,255,255,1);">
    <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
        <img style="margin: 0 auto; padding-right: 10px;" src="<?php echo base_url() . "resources/images/logo-with-text.png"; ?>" class="img img-responsive img-center"  />
    </div>
</div>

<h2 class="text-center" style="font-weight: bold; margin-top: 5%; "> LOGIN </h2>

<div class="col-md-4 col-md-offset-4">
    <div class="danero-box">
        <form method="post" action="login">
            <?php if($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger">
                    <i class="fa fa-exclamation-circle"></i> <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Email" />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" placeholder="Password" />
            </div>
            <a href="<?php echo base_url() . "user/sign_up"; ?>" style="font-size: 13px;">Not registered?</a>
            <button type="submit" class="btn btn-default btn-sm pull-right">Login</button>
            <br />
        </form>
    </div>
</div>