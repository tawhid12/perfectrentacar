<div id="lradminbar" class="">

    <div class="quicklinks" id="lr-toolbar" role="navigation" aria-label="Toolbar" tabindex="0">
        <ul id="lr-admin-bar-root-default" class="ab-top-menu">

            <li id="lr-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true"
                                                               href="<?php echo e(route('adminIndex')); ?>"><?php echo e(__('admin.Admin panel')); ?></a>
                <div class="ab-sub-wrapper">
                    <ul id="lr-admin-bar-site-name-default" class="ab-submenu">
                        <li id="lr-admin-bar-dashboard"><a class="ab-item"
                                                           href="<?php echo e(route('adminIndex')); ?>"><?php echo e(__('admin.Dashboard')); ?></a>
                        </li>
                    </ul>
                    <ul id="lr-admin-bar-appearance" class="ab-submenu">
                        <li id="lr-admin-bar-themes"><a class="ab-item"
                                                        href="<?php echo e(route( 'admin.themes.index' )); ?>"><?php echo e(__('admin.Themes')); ?></a>
                        </li>
                        <li id="lr-admin-bar-widgets"><a class="ab-item"
                                                         href="<?php echo e(route( 'admin.widgets.index' )); ?>"><?php echo e(__('admin.Widgets')); ?></a>
                        </li>
                        <li id="lr-admin-bar-menus"><a class="ab-item"
                                                       href="<?php echo e(route( 'admin.menus.index' )); ?>"><?php echo e(__('admin.Menus')); ?></a>
                        </li>

                    </ul>
                </div>
            </li>

            <li id="lr-admin-bar-edit">

				<?php


				$routeArray = app( 'request' )->route()->getAction();
				$controllerAction = class_basename( $routeArray['controller'] );

				if($controllerAction == 'PostsController@show' && isset( app( 'request' )->route()->controller->post_id )){
				?>
                <a class="ab-item"
                   href="<?php echo e(route('admin.posts.edit',['id' => app( 'request' )->route()->controller->post_id ])); ?>"><?php echo e(__('admin.Edit Post')); ?></a>
				<?php  } elseif(isset( app( 'request' )->route()->controller->cat_id )) {
				?>
                <a class="ab-item"
                   href="<?php echo e(route('admin.categories.edit',['id' => app( 'request' )->route()->controller->cat_id ])); ?>"><?php echo e(__('admin.Edit Category')); ?></a>
				<?php
				} ?>

                <?php Eventy::action('adminbar.edit', $controllerAction); ?>

            </li>

            <li>

                <a class="ab-item"
                   href="<?php echo e(route('admin.customize.index',['url' =>Request::fullUrl() ])); ?>"><?php echo e(__('admin.Customize')); ?></a>
            </li>

        </ul>
        <ul id="lr-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">

            <li id="lr-admin-bar-search" class="admin-bar-search">
                <div class="ab-item ab-empty-item" tabindex="-1">
                    <form action="https://rentit.lrmix.net/" method="get" id="adminbarsearch"><input
                                class="adminbar-input" name="s" id="adminbar-search" type="text" value=""
                                maxlength="150"><label for="adminbar-search"
                                                       class="screen-reader-text"><?php echo e(__('admin.Search')); ?></label><input
                                type="submit"
                                class="adminbar-button"
                                value="Search">
                    </form>
                </div>
            </li>
            <li id="lr-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true"
                                                                            href=""><?php echo e(__('admin.Howdy,')); ?><span
                            class="display-name"><?php echo e($user->name ?? ''); ?></span>


                    <?php if(auth()->user()->img): ?>
                        <img src="<?php echo e(the_image_url(auth()->user()->img,'thumbnail-70x70')); ?>"
                             alt="user-img"
                             class="avatar avatar-26 photo"
                        >

                    <?php else: ?>
                        <img src="<?php echo e(asset(config('settings.admin'))); ?>/plugins/images/users/noavatar.png"
                             alt="user-img"
                             class="avatar avatar-26 photo"
                        >

                    <?php endif; ?>

                </a>
                <div class="ab-sub-wrapper">
                    <ul id="lr-admin-bar-user-actions" class="ab-submenu">
                        <li id="lr-admin-bar-user-info"><a class="ab-item" tabindex="-1"
                                                           href="<?php echo e(route('admin.users.edit',['users' => auth()->user()->id])); ?>">

                                <?php if(auth()->user()->img): ?>
                                    <img src="<?php echo e(the_image_url(auth()->user()->img,'thumbnail-70x70')); ?>"
                                         alt="user-img"
                                         class="avatar avatar-64 photo"
                                    >

                                <?php else: ?>
                                    <img src="<?php echo e(asset(config('settings.admin'))); ?>/plugins/images/users/noavatar.png"
                                         alt="user-img"
                                         class="avatar avatar-64 photo"
                                    >

                                <?php endif; ?>


                                <span
                                        class="display-name"><?php echo e(Auth::user()->name); ?></span></a></li>
                        <li id="lr-admin-bar-edit-profile"><a class="ab-item"
                                                              href="<?php echo e(route('admin.users.edit',['id' => $user->id ])); ?>"><?php echo e(__('admin.Edit My Profile')); ?></a>
                        </li>
                        <li id="lr-admin-bar-logout"><a class="ab-item"
                                                        href="<?php echo e(route('logout')); ?>"><?php echo e(__('admin.Log Out')); ?></a></li>
                    </ul>
                </div>
            </li>


            <?php Eventy::action('adminbar.center', $controllerAction); ?>
            <li id="lr-admin-bar-comet_cache-clear" class="-clear"><a class="ab-item" tabindex="-1"
                                                                      href="<?php echo e(route('lr-clear-cache')); ?>"><?php echo e(__('admin.Clear Cache')); ?></a>
            </li>
        </ul>
    </div>
    <a class="screen-reader-shortcut" href="<?php echo e(route('logout')); ?>"><?php echo e(__('admin.Log Out')); ?></a>
</div>