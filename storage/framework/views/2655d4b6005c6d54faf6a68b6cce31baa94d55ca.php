<?php $__env->startSection('content'); ?>
    <!-- START CONTENT -->
    <div class="content">

        <header id="topbar" class="alt">
            <div class="topbar-left">

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
                            <a href=""> Award </a>
                        </li>
                        <li class="breadcrumb-current-item"> Add Award </li>
                    </ol>
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
                                    <span class="panel-title hidden-xs"> Add Award </span>
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
                                            <label class="col-md-3 control-label"> Award </label>
                                            <div class="col-md-6">
                                                    <input type="text" name="name" id="input002" class="select2-single form-control" placeholder="Award" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Description </label>
                                            <div class="col-md-6">
                                                    <textarea class="select2-single form-control" rows="3" id="textarea1" placeholder="Award Description" name="description" required></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-2">

                                                <input type="submit" class="btn btn-bordered btn-info btn-block" value="Submit">

                                            </div>
                                            <div class="col-md-2"><a href="/hrms1/add-award" >
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