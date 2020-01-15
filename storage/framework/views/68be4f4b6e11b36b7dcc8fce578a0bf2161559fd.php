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
                    <a href=""> Teams </a>
                </li>
                <li class="breadcrumb-current-item"> Team Listings </li>
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
                            <span class="panel-title hidden-xs"> Team Lists </span>
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
                                        <th class="text-center">Team Name</th>
                                        <th class="text-center">Manager</th>
                                        <th class="text-center">Team Leader</th>
                                        <th class="text-center">Member</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i =0;?>
                                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-center"><?php echo e($i+=1); ?></td>
                                            <td class="text-center"><?php echo e($team->name); ?></td>
                                            <td class="text-center"><?php echo e($team->manager->name); ?></td>
                                            <td class="text-center"><?php echo e($team->leader->name); ?></td>
                                            <td class="text-center"><?php echo e($team->employee->name); ?></td>

                                             <td class="text-center">
                                                <div class="btn-group text-right">
                                                    <button type="button"
                                                            class="btn btn-success br2 btn-xs fs12 dropdown-toggle"
                                                            data-toggle="dropdown" aria-expanded="false"> Action
                                                        <span class="caret ml5"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="/hrms1/edit-team/<?php echo e($team->team_id); ?>">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="/hrms1/delete-team/<?php echo e($team->member_id); ?>">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php echo $teams->render(); ?>

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