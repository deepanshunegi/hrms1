<?php $__env->startSection('content'); ?>
        <!-- START CONTENT -->
<div class="content">

    <header id="topbar" class="alt">
        <div class="topbar-left">

            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset/{id}'): ?>

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
                    <li class="breadcrumb-current-item"> Edit <?php echo e($result->name); ?> </li>
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
                <li class="breadcrumb-current-item"> Add Asset </li>
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
                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset/{id}'): ?>
                                  <span class="panel-title hidden-xs"> Edit Asset </span>
                                <?php else: ?>
                                  <span class="panel-title hidden-xs"> Add Asset </span>
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
                                            <label class="col-md-3 control-label"> Asset </label>
                                            <div class="col-md-6">
                                                <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset/{id}'): ?>
                                                    <input type="text" name="name" id="input002" class="select2-single form-control" value="<?php if($result && $result->name): ?><?php echo e($result->name); ?><?php endif; ?>" required>
                                                <?php else: ?>
                                                    <input type="text" name="name" id="input002" class="select2-single form-control" placeholder="Asset" required>
                                                <?php endif; ?>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Description </label>
                                            <div class="col-md-6">
                                                    <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset/{id}'): ?>
                                                        <textarea class="select2-single form-control" rows="3" id="textarea1" name="description" required><?php if($result && $result->description): ?><?php echo e($result->description); ?><?php endif; ?> </textarea>
                                                    <?php else: ?>
                                                        <textarea class="select2-single form-control" rows="3" id="textarea1" placeholder="Asset Description" name="description" required></textarea>
                                                    <?php endif; ?>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-2">

                                                <input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">

                                            </div>
                                            <div class="col-md-2"><a href="/hrms1/add-asset" >
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
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>