<?php $__env->startSection('content'); ?>

        <!-- -------------- Topbar -------------- -->
<header id="topbar" class="alt">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="breadcrumb-icon">
                <a href="/dashboard">
                    <span class="fa fa-home"></span>
                </a>
            </li>
            <li class="breadcrumb-active">
                <a href="/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-link">
                <a href="/dashboard">Home</a>
            </li>
            <li class="breadcrumb-current-item">Dashboard</li>
        </ol>
    </div>

</header>
<!-- -------------- /Topbar -------------- -->

<!-- -------------- Content -------------- -->
<section id="content" class="table-layout animated fadeIn">

    <!-- -------------- Column Center -------------- -->
    <div class="chute chute-center">

        <!-- -------------- Quick Links -------------- -->
        <div class="row">
            <?php if(Auth::user()->isHR()): ?>
            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10">
                                <img src="/assets/img/pages/clipart2.png" class="img-responsive mauto" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted"><a href="<?php echo e(route('employee-manager')); ?>"> EMPLOYEE MANAGER</a></h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart0.png"
                                                            class="img-responsive mauto" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted"> <a href="<?php echo e(route('total-leave-list')); ?>"> LEAVE <br/> MANAGER </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="/assets/img/pages/Laptop Sketch-64x64"
                                                                class="img-responsive mauto" style="height: 100px; width: 100px;" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h3 class="text-muted"> <a href="<?php echo e(route('asset-listing')); ?>"> ASSET <br /> MANAGER </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="/assets/img/pages/dollar.jpg"
                                                                class="img-responsive mauto" style="height: 100px; width: 100px;" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h3 class="text-muted"> <a href="<?php echo e(route('expense-list')); ?>"> EXPENSE <br /> MANAGER </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart5.png"
                                                            class="img-responsive mauto" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted"><a href="<?php echo e(route('attendance-manager')); ?>"> ATTENDANCE MANAGER </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php endif; ?>
                <?php if(!Auth::user()->isHR()): ?>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart0.png"
                                                                class="img-responsive mauto" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h3 class="text-muted"><a href="<?php echo e(route('my-leave-list')); ?>"> LEAVES </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart6.png"
                                                            class="img-responsive mauto" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted"><a href="<?php echo e(route('hr-policy')); ?>"> HR POLICIES </a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <?php if($events): ?>
                <div class="col-md-12">
                    <h3 class="mb10 mr5 notification" data-note-style="primary" style="color: darkturquoise">Latest &nbsp; Events </h3>
                <?php $__currentLoopData = array_chunk($events, 3, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $results): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <table class="table">
                        <tr>
                            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <div class='fc-event fc-event-primary' data-event="primary">
                                <div class="fc-event-icon" style="color: darkslateblue">
                                    <span class="fa fa-exclamation"></span>
                                </div>
                                <div class="fc-event-desc blink" id="blink">
                                    <a href="<?php echo e(route('create-event')); ?>" ><b><?php echo e(\Carbon\Carbon::createFromTimestamp(strtotime($event->date))->diffForHumans()); ?> </b> <?php echo e($event->name); ?></a>
                                </div>
                                    </div>
                            </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </table>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
                <?php endif; ?>

                <?php if($meetings): ?>
                <div class="col-md-12">
                    <h3 class=" mb10 mr5 notification" data-note-style="primary" style="color: darkturquoise"> Latest &nbsp;&nbsp; Meetings </h3>
                    <?php $__currentLoopData = array_chunk($meetings, 3, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $results): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <table class="table">
                            <tr>
                                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <div class='fc-event fc-event-primary' data-event="primary">
                                            <div class="fc-event-icon" style="color: darkslateblue">
                                                <span class="fa fa-exclamation"></span>
                                            </div>
                                            <div class="fc-event-desc blink" id="blink">
                                                <b><?php echo e(\Carbon\Carbon::createFromTimestamp(strtotime($meeting->date))->diffForHumans()); ?> </b> <?php echo e($meeting->name); ?>

                                            </div>
                                        </div>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        </table>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                    <?php endif; ?>


             </div>
           </div>
         </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>