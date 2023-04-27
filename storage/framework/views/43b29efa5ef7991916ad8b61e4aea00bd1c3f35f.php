<aside class="sidebar">
    <div class="scroll-sidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div class="profile-image">
                    
                    


                    <?php if(auth()->user()->img): ?>
                        <img src="<?php echo e(the_image_url(auth()->user()->img,'thumbnail-70x70')); ?>"
                             alt="user-img"
                             class="img-circle"
                        >

                    <?php else: ?>
                        <img src="<?php echo e(asset(config('settings.admin'))); ?>/plugins/images/users/noavatar.png"
                             alt="user-img"
                             class="img-circle"
                        >

                    <?php endif; ?>

                    <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown"
                       role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-danger">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="<?php echo e(route('admin.users.edit',['users' => $user->id])); ?>"><i
                                        class="fa fa-user"></i><?php echo e(__('admin.Profile')); ?></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo e(route('admin.users.edit',['users' => $user->id])); ?>"><i
                                        class="fa fa-cog"></i><?php echo e(__('admin.Account Settings')); ?></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo e(route('logout')); ?>"><i class="fa fa-power-off"></i><?php echo e(__('admin.Logout')); ?></a></li>
                    </ul>
                </div>
                <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"><?php echo e($user->name); ?></a></p>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="side-menu">

                <?php if(isset($backendMenu)): ?>
                    <?php $__currentLoopData = $backendMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

						<?php
						$allow = true;
						$auth_user =  Auth::user();

						if ( isset( $v['permissions'] ) && is_array( $v['permissions'] ) ) {
							foreach ( $v['permissions'] as $permission ) {
								$allow = $auth_user->can( $permission ) ? $auth_user->can( $permission ) : $auth_user->canDo( $permission ) ;
							}

						} elseif ( isset( $v['permissions'] ) ) {
							$allow =$auth_user->can( $v['permissions'] ) ?  $auth_user->can( $v['permissions'] ) : $auth_user->canDo( $v['permissions'] );

						}
						if($allow){

						$path = str_replace( request()->root() . '/', '', $v['url'] );


						?>


                        <li <?php if(request()->is($path.'/*')): ?> class="active" <?php endif; ?>>

                            <a class=" waves-effect"

                               <?php if(!isset($v['sideMenu'])): ?>
                               href="<?php echo e($v['url']); ?>"
                               <?php else: ?>   href="javascript:void(0);"
                               <?php endif; ?>
                               aria-expanded="false"><i
                                        class="<?php echo e($v['icon'] ?? ''); ?> fa-fw"></i>
                                <span class="hide-menu"> <?php echo e($v['name'] ?? ''); ?>


                                    <?php if(isset($v['label'])): ?>
                                        <span class="label label-rounded label-info pull-right"><?php echo e($v['label']); ?></span></span>
                                <?php endif; ?>
                            </a>

                            <?php if(isset($v['sideMenu'])): ?>
                                <ul aria-expanded="false" class="collapse">
                                    <?php $__currentLoopData = $v['sideMenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sideMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php
										$allowSide = true;

										$path = str_replace( request()->root() . '/', '', $sideMenu['url'] );


										if ( isset( $sideMenu['permissions'] ) && is_array( $sideMenu['permissions'] ) ) {
											foreach ( $sideMenu['permissions'] as $permission ) {

												$allowSide = $auth_user->can( $permission ) ? $auth_user->can( $permission ) : $auth_user->canDo( $permission );
											}

										} elseif ( isset( $v['permissions'] ) ) {
											$allowSide  =$auth_user->can( $v['permissions'] ) ?  $auth_user->can( $v['permissions'] ) : $auth_user->canDo( $v['permissions'] );

										}
										if($allowSide){
										?>
                                        <li <?php if(request()->is($path.'/*')): ?> class="active" <?php endif; ?>><a
                                                    href="<?php echo e($sideMenu['url'] ?? ''); ?>"><?php echo e($sideMenu['name'] ?? ''); ?></a>
                                        </li>
										<?php  } ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            <?php endif; ?>
                        </li>
						<?php  } ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>


            </ul>
        </nav>

    </div>
</aside>