<div class="wrap-fullwidth">
    <div class="register-box">
        <div class="register-logo">
            <a href="<?php echo $BASE_URL;?>/login"><b>Login</b></a>
        </div>
        <div class="register-box-body">
            <?= $this->Form->create(null, array(
                    'url' => array(
                        'controller' => 'users',
                        'action' => 'login'
                    )
                ));
            ?>
                <?= $this->Form->unlockField('email'); ?>
                <?= $this->Form->unlockField('password'); ?>
                <div class="form-group has-feedback">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control <?= isset($errors['email']) ? 'has-error' : '' ?>" name="email" placeholder="Email">
                    <i class="fa fa-envelope form-control-feedback" aria-hidden="true"></i>
                    <span class="required-color"><?= isset($errors['email']) ? reset($errors['email']) : '' ?></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control <?= isset($errors['password']) ? 'has-error' : '' ?>" name="password" placeholder="Password">
                    <i class="fa fa-lock form-control-feedback" aria-hidden="true"></i>
                    <span class="required-color"><?= isset($errors['password']) ? reset($errors['password']) : '' ?></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-float">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="col-float">
                        <a href="<?php echo $BASE_URL;?>/register">Register new member</a>
                    </div>

                    <!-- /.col -->
                </div>
            <?= $this->Form->end(); ?>
        </div>
        <!-- /.form-box -->
    </div>
</div>