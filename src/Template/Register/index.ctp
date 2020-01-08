<div class="wrap-fullwidth">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Register a new membership</b></a>
        </div>
        <div class="register-box-body">
            <?= $this->Form->create(null, array(
                    'url' => array(
                        'controller' => 'register',
                        'action' => 'index'
                    )
                ));
            ?>
                <?= $this->Form->unlockField('fullname'); ?>
                <?= $this->Form->unlockField('email'); ?>
                <?= $this->Form->unlockField('password'); ?>
                <?= $this->Form->unlockField('re-password'); ?>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control <?= isset($errors['fullname']) ? 'has-error' : '' ?>" name="fullname" placeholder="Full name">
                    <i class="fa fa-user form-control-feedback" aria-hidden="true"></i>
                    <span class="required-color"><?= isset($errors['fullname']) ? reset($errors['fullname']) : '' ?></span>
                </div>
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

                <div class="form-group has-feedback">
                    <input type="password" class="form-control <?= isset($errors['re-password']) ? 'has-error' : '' ?>" name="re-password" placeholder="Retype password">
                    <i class="fa fa-reply-all form-control-feedback" aria-hidden="true"></i>
                    <span class="required-color"><?= isset($errors['re-password']) ? reset($errors['re-password']) : '' ?></span>
                </div>

                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            <?= $this->Form->end(); ?>
        </div>
        <!-- /.form-box -->
    </div>
</div>