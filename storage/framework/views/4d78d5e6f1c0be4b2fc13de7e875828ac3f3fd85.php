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
                        <a href=""> Promotion </a>
                    </li>
                    <li class="breadcrumb-current-item"> Promotion Listings </li>
                </ol>
            </div>
        </header>


        <!-- -------------- Content -------------- -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- -------------- Column Center -------------- -->
            <div class="chute chute-center">

                <!-- -------------- Products Status Table -------------- -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success">
                            <div class="panel">
                                <div class="panel-heading">
                                    <span class="panel-title hidden-xs"> Promotion Listings </span>
                                </div>
                                <div class="panel-body pn">
                                    <?php if(Session::has('flash_message')): ?>
                                        <div class="alert alert-success">
                                            <?php echo e(Session::get('flash_message')); ?>

                                        </div>
                                    <?php endif; ?>
                                    <?php echo Form::open(['class' => 'form-horizontal']); ?>

                                    <div class="table-responsive">
                                        <table class="table allcp-form theme-warning tc-checkbox-1 fs13">
                                            <thead>
                                            <tr class="bg-light">
                                                <th class="text-center">Id</th>
                                                <th class="text-center">Employee</th>
                                                <th class="text-center">Old Designation</th>
                                                <th class="text-center">New Designation</th>
                                                <th class="text-center">Old Salary</th>
                                                <th class="text-center">New Salary</th>
                                                <th class="text-center">Date of Promotion</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i =0;?>
                                            <?php $__currentLoopData = $promotions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promotion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td class="text-center"><?php echo e($i+=1); ?></td>
                                                    <td class="text-center"><?php echo e($promotion->employee->name); ?></td>
                                                    <td class="text-center"><?php echo e($promotion->old_designation); ?></td>
                                                    <td class="text-center"><?php echo e($promotion->new_designation); ?></td>
                                                    <td class="text-center"><?php echo e($promotion->old_salary); ?></td>
                                                    <td class="text-center"><?php echo e($promotion->new_salary); ?></td>
                                                    <td class="text-center"><?php echo e(getFormattedDate($promotion->date_of_promotion)); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <?php echo $promotions->render(); ?>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php echo Form::close(); ?>

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