<div class="container-fluid">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info panel-transparent">
                <div class="panel-heading"><?php echo e(__('admin.Menus')); ?></div>

                <?php if(count($errors) > 0): ?>

                    <div class="row">
                        <div class="col-md-12">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger"><?php echo e($error); ?></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                    </div>
                <?php endif; ?>

                <?php if(session('status')): ?>
                    <div class="row">
                        <div class="col-md-12">


                            <div class=" alert alert-success"><?php echo e(session('status')); ?></div>


                        </div>
                    </div>


                <?php endif; ?>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="row">

                            <div class="white-box2">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                                              role="tab" data-toggle="tab"
                                                                              aria-expanded="true"><span
                                                    class="visible-xs">
                                                <i class="ti-home"></i></span><span class="hidden-xs">
                                                <?php echo e(__('admin.Edit Menus')); ?></span></a>
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">

                                        <div class="manage-menus  white-box">
                                            <?php if(isset($menus)): ?>
                                                <form id="menu-select-menu" method="get"

                                                      action="#">


                                                    <div class="col-md-8">

                                                        <div class="form-group">
                                                            <div class="col-md-3">
                                                                <label class="control-label ">
                                                                    <?php echo e(__('admin.Select a menu to edit:')); ?>


                                                                </label>

                                                            </div>

                                                            <div class="col-md-9">

                                                                <select id="select_menu_edit" class="form-control"
                                                                        data-placeholder="Choose a Category"
                                                                        tabindex="1">
                                                                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option
                                                                                <?php if( isset($menu)&&  $v->id == $menu->id): ?> selected
                                                                                <?php endif; ?>

                                                                                value="<?php echo e(route('admin.menus.edit',['menus'=>$v->id])); ?>"><?php echo e($v->title); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>;

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                    class="fcbtn btn btn-success btn-outline btn-1f">
                                                                <?php echo e(__('admin.Select')); ?>

                                                                <i class="fa fa-edit"></i>
                                                            </button>


                                                            <a href="<?php echo e(route('admin.menus.create')); ?>"
                                                               class="fcbtn btn btn-warning btn-outline btn-1f">
                                                                <?php echo e(__('admin.New menu')); ?> <i class="fa fa-edit"></i></a>
                                                        </div>
                                                    </div>

                                                </form>
                                            <?php else: ?>
                                                <?php echo e(__('admin.make new menu')); ?>


                                            <?php endif; ?>
                                        </div>

                                        <div class=" ">


                                            <div class="white-box">


                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading"><?php echo e(Lang::get( 'admin.menu-add-or-edit')); ?></div>
                                                            <div class="panel-body">
                                                                <form id="frmEdit" class="form-horizontal">
                                                                    <div class="form-group">
                                                                        <label for="text"
                                                                               class="col-sm-2 control-label"><?php echo e(__('admin.Link Text')); ?></label>
                                                                        <div class="col-sm-10">
                                                                            <div class="input-group">
                                                                                <input type="text"
                                                                                       class="form-control item-menu"
                                                                                       name="text" id="text"
                                                                                       placeholder="Text">
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="href"
                                                                               class="col-sm-2 control-label"><?php echo e(__('admin.URL')); ?></label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text"
                                                                                   class="form-control item-menu"
                                                                                   id="href" name="href"
                                                                                   placeholder="URL">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="target"
                                                                               class="col-sm-2 control-label"><?php echo e(__('admin.Target')); ?></label>
                                                                        <div class="col-sm-10">
                                                                            <select name="target" id="target"
                                                                                    class="form-control item-menu">
                                                                                <option value="_self"><?php echo e(__('admin.Self')); ?></option>
                                                                                <option value="_blank"><?php echo e(__('admin.Blank')); ?></option>
                                                                                <option value="_top"><?php echo e(__('admin.Top')); ?></option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    

                                                                    
                                                                    


                                                                    <div class="form-group">
                                                                        <label for="megamenu"
                                                                               class="col-sm-2 control-label"><?php echo e(__('admin.Enable mega menu?')); ?></label>
                                                                        <div class="col-sm-10">
                                                                            <select name="megamenu" id="megamenu"
                                                                                    class="form-control item-menu">
                                                                                <option value="no"><?php echo e(__('admin.no')); ?></option>
                                                                                <option value="yes"><?php echo e(__('admin.yes')); ?></option>

                                                                            </select>

                                                                        </div>
                                                                    </div>
      <div class="form-group">
                                                                        <label for="Description"
                                                                               class="col-sm-2 control-label"><?php echo e(__('admin.Description')); ?></label>
                                                                        <div class="col-sm-10">
                                                                            <textarea name="Description" id="Description"
                                                                                    class="form-control item-menu">

                                                                            </textarea>

                                                                        </div>
                                                                    </div>





                                                                    <div class="form-group">
                                                                        <label for="title"
                                                                               class="col-sm-2 control-label"><?php echo e(__('admin.Tooltip')); ?></label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="title"
                                                                                   class="form-control item-menu"
                                                                                   id="title" placeholder="Tooltip">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="panel-footer">
                                                                <button type="button" id="btnUpdate"
                                                                        class="btn btn-primary" disabled><i
                                                                            class="fa fa-refresh"></i> <?php echo e(__('admin.Update')); ?>

                                                                </button>
                                                                <button type="button" id="btnAdd"
                                                                        class="btn btn-success"><i
                                                                            class="fa fa-plus"></i> <?php echo e(__('admin.Add')); ?>

                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-8">
                                                        <form method="post"
                                                              action="<?php echo e((isset($menu->id)) ? route('admin.menus.update',['posts'=>$menu->id]) : route('admin.menus.store')); ?>">

                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading"><?php echo e(__('admin.Menu name')); ?></div>
                                                                <div class="panel-body">
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="href"
                                                                               class=" control-label">
                                                                            <strong><?php echo e(__('admin.Menu name')); ?></strong>
                                                                        </label>

                                                                        <input type="text"
                                                                               class="form-control item-menu"
                                                                               id="href" name="title"
                                                                               placeholder="Menu name"
                                                                               value="<?php echo e(old('text', isset($menu->title) ? $menu->title  : '' )); ?>"
                                                                        >

                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="menu_locations"
                                                                               class=" control-label">
                                                                            <strong><?php echo e(__('admin.Select menu Locations')); ?> </strong>
                                                                        </label>

                                                                        <select multiple name="locations[]"
                                                                                id="menu_locations"
                                                                                class="form-control item-menu">

                                                                            <?php $__currentLoopData = config('settings.registered_nav_menus'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <option
                                                                                        <?php if(old('location') == $k  || in_array($k,$locations_arr)): ?>
                                                                                        selected
                                                                                        <?php endif; ?>
                                                                                        value="<?php echo e($k); ?>"><?php echo e($v); ?></option>

                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </select>

                                                                    </div>


                                                                    <ul id="myList" class="sortableLists list-group">

                                                                        <?php if(empty($menu)): ?>
                                                                            <li class="alert alert-warning  not-found">
                                                                                <?php echo e(__('admin.not items found')); ?>

                                                                            </li>
                                                                        <?php endif; ?>
                                                                    </ul>

                                                                    <?php if(!empty($menu)): ?>
                                                                        <input type="hidden" name="id"
                                                                               value="<?php echo e($menu->id); ?>">
                                                                    <?php endif; ?>

                                                                    <button id="save-menu" type="submit"
                                                                            class="btn  btn-primary">
                                                                        <i class="glyphicon glyphicon-ok"></i> <?php echo e(__('admin.Save menu')); ?>

                                                                    </button>


                                                                    <textarea style="display: none" id="out"
                                                                              name="output"
                                                                              class="form-control"
                                                                              cols="50"
                                                                              rows="10"><?php echo e(old('output', isset($menu->output) ? $menu->output : '' )); ?></textarea>

                                                                    <?php if(isset($menu->id)): ?>
                                                                        <input type="hidden" name="_method" value="PUT">

                                                            <?php endif; ?>

                                                            <?php echo e(csrf_field()); ?>


                                                        </form>


                                                        <?php if(isset($menu->id)): ?>
                                                            <form class="pull-right" method="post"
                                                                  action="<?php echo e(route('admin.menus.destroy',['menus'=>$menu->id])); ?>">
                                                                <button
                                                                        class="btn  btn-outline btn-danger pull-right">
                                                                    <i class="ti-trash"></i>
                                                                    <?php echo e(__('admin.Delete menu')); ?>

                                                                </button>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <?php echo e(csrf_field()); ?>


                                                            </form>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <script type="text/javascript" language="javascript">
                                            jQuery(function () {
// menu items
                                                var strjson = [{
                                                    "href": "http://home.com",
                                                    "icon": "fa fa-home",
                                                    "text": "Home",
                                                    "target": "_top",
                                                    "title": "My Home",
                                                    'megamenu': 'no',
                                                    'Description': 'no'
                                                }, {
                                                    "icon": "fa fa-bar-chart-o",
                                                    "text": "Opcion2"
                                                }, {
                                                    "icon": "fa fa-cloud-upload",
                                                    "text": "Opcion3"
                                                }, {
                                                    "icon": "fa fa-crop",
                                                    "text": "Opcion4"
                                                }, {
                                                    "icon": "fa fa-flask",
                                                    "text": "Opcion5"
                                                }, {
                                                    "icon": "fa fa-map-marker",
                                                    "text": "Opcion6"
                                                }, {
                                                    "icon": "fa fa-search",
                                                    "text": "Opcion7",
                                                    "children": [{
                                                        "icon": "fa fa-plug",
                                                        "text": "Opcion7-1",
                                                        "children": [{
                                                            "icon": "fa fa-filter",
                                                            "text": "Opcion7-1-1"
                                                        }]
                                                    }]
                                                }];
                                                //icon picker options
                                                var iconPickerOptions = {
                                                    searchText: 'Buscar...',
                                                    labelHeader: '{0} de {1} Pags.'
                                                };
                                                //sortable list options
                                                var sortableListOptions = {
                                                    /*  placeholderCss: {'background-color': 'cyan'}*/
                                                    hintCss: {'border': '1px dashed #13981D'},
                                                    placeholderCss: {'background-color': 'gray'},
                                                    ignoreClass: 'btn',
                                                    opener: {
                                                        active: true,
                                                        as: 'html',
                                                        close: '<i class="fa fa-minus"></i>',
                                                        open: '<i class="fa fa-plus"></i>',
                                                        openerCss: {'margin-right': '10px'},
                                                        openerClass: 'btn btn-success btn-xs'
                                                    }
                                                };

                                                var editor = new MenuEditor('myList',
                                                    {
                                                        listOptions: sortableListOptions,
                                                        iconPicker:
                                                        iconPickerOptions,
                                                        labelEdit: 'Edit'
                                                    });
                                                editor.setForm($('#frmEdit'));
                                                editor.setUpdateButton($('#btnUpdate'));

                                                $('#btnReload').on('click', function () {
                                                    editor.setData(strjson);
                                                });

                                                editor.setData($("#out").text());
                                                $('#btnOut, #save-menu').on('click', function () {

                                                    var str = editor.getString();

                                                    $("#out").text(str);
                                                });

                                                $("#btnUpdate").click(function () {
                                                    editor.update();
                                                });

                                                $('#btnAdd').click(function () {
                                                    $('.not-found').remove();
                                                    editor.add();
                                                });


                                                $('#select_menu_edit').change(function () {
                                                    var action = $(this).val();
                                                    $("#menu-select-menu").attr("action", action);
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="table-responsive">

                                    <h3 class="box-title">Your theme supports 3 menus. Select which menu appears
                                        in each location.</h3>
                                    <table class="table color-bordered-table info-bordered-table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Theme Location</th>
                                            <th>Assigned Menu
                                            </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = config('settings.registered_nav_menus'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            1
                                                        </div>
                                                    </div>
                                                <td>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <?php echo e($v); ?>

                                                        </div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select class="selectpicker"
                                                                    data-style="form-control">
                                                                <option>Mustard</option>
                                                                <option>Ketchup</option>
                                                                <option>Relish</option>
                                                            </select>

                                                            <select class="selectpicker form-control">
                                                                <option value="Category 1">Category 1</option>
                                                                <option value="Category 2">Category 2</option>
                                                                <option value="Category 3">Category 5</option>
                                                                <option value="Category 4">Category 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button class="fcbtn btn btn-success btn-outline btn-1f">
                                                            Edit
                                                        </button>
                                                        <button class="fcbtn btn btn-primary btn-outline btn-1f">
                                                            Use new menu
                                                        </button>


                                                    </div>


                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </tbody>
                                    </table>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>


</div>
