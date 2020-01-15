<?php $__env->startSection('content'); ?>
        <!-- START CONTENT -->
<div class="content">

    <header id="topbar" class="alt">
        <div class="topbar-left">
            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset-assignment/{id}'): ?>
                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="/dashboard">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-active">
                        <a href="/dashboard"> Dashboard </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href=""> Assets </a>
                    </li>
                    <li class="breadcrumb-current-item"> Edit <?php echo e($assets->name); ?> </li>
                </ol>


            <?php else: ?>
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="/dashboard">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-active">
                    <a href="/dashboard"> Dashboard </a>
                </li>
                <li class="breadcrumb-link">
                    <a href=""> Assets </a>
                </li>
                <li class="breadcrumb-current-item"> Assign Assets </li>
            </ol>
            <?php endif; ?>
        </div>
    </header>
    <!-- -------------- Content -------------- -->
    <section id="content" class="table-layout animated fadeIn" >
        <!-- -------------- Column Center -------------- -->
        <div class="chute-affix" data-spy="affix" data-offset-top="200">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-success">
                    <div class="panel">
                        <div class="panel-heading">
                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset-assignment/{id}'): ?>
                                <span class="panel-title hidden-xs"> Edit Asset Assignment </span>
                            <?php else: ?>
                                <span class="panel-title hidden-xs"> Assign Asset</span>
                            <?php endif; ?>
                        </div>

                        <div class="panel-body pn">
                            <div class="table-responsive">
                                <div class="panel-body p25 pb10">
                                    <?php if(Session::has('flash_message')): ?>
                                        <div class="alert alert-success">
                                            <?php echo e(Session::get('flash_message')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <?php echo Form::open(['class' => 'form-horizontal']); ?>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Select Employee </label>
                                            <div class="col-md-6">
                                                <select class="select2-multiple form-control select-primary"
                                                        name="emp_id" required>
                                                    <option value="" selected>Select One</option>
                                                    <?php $__currentLoopData = $emps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($emp->id); ?>"><?php echo e($emp->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Select Asset </label>
                                            <div class="col-md-6">
                                                <select class="select2-multiple form-control select-primary"
                                                        name="asset_id" required>
                                                    <option value="" selected>Select One</option>
                                                    <?php $__currentLoopData = $assets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $asset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($asset->id); ?>"><?php echo e($asset->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Select Issuing Authority </label>
                                            <div class="col-md-6">
                                                <select class="select2-multiple form-control select-primary"
                                                        name="authority_id" required>
                                                    <option value="" selected>Select One</option>
                                                    <?php $__currentLoopData = $emps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($emp->id); ?>"><?php echo e($emp->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                        <label for="datepicker1" class="col-md-3 control-label"> Date of Assignment </label>
                                            <div class="col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar text-alert pr11"></i>
                                                        </div>
                                                        <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-assignment/{id}'): ?>
                                                        <input type="text" id="datepicker1" class="select2-single form-control" name="doa" value="<?php if($emps && $emps->date_of_assignment): ?><?php echo e($emps->date_of_assignment); ?><?php endif; ?>" required>
                                                        <?php else: ?>
                                                            <input type="text" id="datepicker1" class="select2-single form-control" name="doa" required>
                                                        <?php endif; ?>
                                                    </div>
                                            </div>
                                            </div>



                                        <div class="form-group">
                                            <label for="datepicker4" class="col-md-3 control-label"> Date of Release </label>
                                            <div class="col-md-6">
                                                
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar text-alert pr11"></i>
                                                    </div>
                                                    <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-assignment/{id}'): ?>
                                                        <input type="text" id="datepicker4" class="select2-single form-control" name="dor" value="<?php if($emps && $emps->date_of_assignment): ?><?php echo e($emps->date_of_assignment); ?><?php endif; ?>" required>
                                                    <?php else: ?>
                                                        <input type="text" id="datepicker4" class="select2-single form-control" name="dor" required>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-2">

                                                     <input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">
                                            </div>
                                            <div class="col-md-2"><a href="/hrms1/assign-asset" >
                                                    <input type="button" class="btn btn-bordered btn-success btn-block" value="Reset"></a></div>
                                        </div>
                                        </div>

                                    <?php echo Form::close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="/hrms1/public/assets/js/pages/forms-widgets.js"></script>
    <script src="/hrms1/public/assets/js/custom.js"></script>
    <?php $__env->stopPush(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>