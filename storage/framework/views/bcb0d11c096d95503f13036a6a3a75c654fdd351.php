<?php $__env->startSection('content'); ?>
    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <form class="form-horizontal form-material" id="loginform"  method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <h3 class="box-title m-b-20"><?php echo e(__('admin.Sign In')); ?></h3>
        <div class="form-group ">
            <div class="col-xs-12">
                <input class="form-control" type="text"  name="login" required="" placeholder="<?php echo e(__('admin.Username')); ?>">
                <?php if($errors->has('login')): ?>
                    <span class="help-block">
				                                        <strong><?php echo e($errors->first('login')); ?></strong>
				                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">

                <input id="password" placeholder="<?php echo e(__('admin.Password')); ?>"
                       type="password"
                       class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                       name="password" required>

                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox checkbox-primary pull-left p-t-0">

                    <input  id="checkbox-signup"  type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label for="checkbox-signup"><?php echo e(__('admin.Remember Me')); ?></label>
                </div>
                <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i>
                    <?php echo e(__('admin.Forgot pwd?')); ?>

                </a> </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">
                    <?php echo e(__('admin.Log In')); ?>

                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">

            </div>
        </div>
        <div class="form-group m-b-0">
            
                
                            
            
        </div>
    </form>
    <form class="form-horizontal" method="POST"  id="recoverform" action="<?php echo e(route('password.email')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group ">
            <div class="col-xs-12">
                <h3><?php echo e(__('admin.Recover Password')); ?></h3>
                <p class="text-muted"><?php echo e(__('admin.Enter your Email and instructions will be sent to you!')); ?> </p>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">

                <input id="email" type="email" placeholder="><?php echo e(__('admin.Email')); ?>" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                       name="email" value="<?php echo e(old('email')); ?>" required>

                <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">
                    <?php echo e(__('admin.Reset')); ?>

                </button>
            </div>
        </div>
    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.'.config('settings.admin').'.layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>