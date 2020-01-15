<?php $__env->startSection('content'); ?>
    <!-- START CONTENT -->
    <div class="content">

        <input type="hidden" value="<?php echo e(csrf_token()); ?>" id="token">

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
                        <a href="/dashboard"> Dashboard </a>
                    </li>
                    <li class="breadcrumb-link">
                        <a href=""> Home </a>
                    </li>
                    <li class="breadcrumb-current-item"> Meetings </li>
                </ol>
            </div>
        </header>
        <!-- -------------- /Topbar -------------- -->

        <!-- -------------- Content -------------- -->
        <section id="content" class="animated fadeIn">
            <div class="box box-success">
            <div class="panel bg-gradient">

            <!-- -------------- Column Center -------------- -->
            <div class="chute chute-center ph45">

                <!-- -------------- Calendar -------------- -->
                
                <h2 class="text-muted" style="text-align:center"> SCHEDULE MEETINGS
                    <a id="compose-event-btn" href="#calendarManagment" data-effect="mfp-flipInY">
                        <span class="fa fa-plus-square"></span>
                    </a>
                </h2>

                <div id="external-events" class="bg-dotted">
                    <div class="mt40">
                        <?php $__currentLoopData = array_chunk($meetings, 3, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $results): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <table class="table">
                                <tr>
                                    <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meeting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td>
                                            <div class='fc-event fc-event-primary' data-event="primary">
                                                <div class="fc-event-icon">
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
                    </div>

            </div>
            <!-- -------------- /Column Center -------------- -->

</div>
            <!-- -------------- /Column Left -------------- -->
        </div>

        </section>

        <!-- -------------- /Content -------------- -->
    </div>
    <!-- -------------- /Body Wrap  -------------- -->

    <!-- -------------- Calendar Management Form -------------- -->
    <div class="allcp-form theme-primary popup-basic popup-lg mfp-with-anim mfp-hide" id="calendarManagment">
        <div class="panel">
            <div class="panel-heading">
        <span class="panel-title">
          <i class="fa fa-pencil-square-o"></i>New Calendar Meeting
        </span>
            </div>

            <form method="post" action="/" id="calendarManagmentForm">
                <div class="panel-body p25">
                    <div class="section-divider mt10 mb40">
                        <span>Meeting Details</span>
                    </div>

                    <!---------------------- Coordinator -------------------->
                    <div class="section row">
                        <div class="col-md-12">
                            <label for="event_name" class="field prepend-icon">
                                <input type="text" class="form-control" id="meeting_name" required>
                            </label>
                        </div>
                    </div>
                    <!-- -------------- /Event Name-------------- -->

                    <div class="section row">
                        <div class="col-xs-12">
                            <label class="field prepend-icon">
                        <textarea class="gui-textarea" id="meeting_description"
                                  placeholder="Meeting Description" required></textarea>
                                <label for="comment" class="field-icon">
                                    <i class="fa fa-comments"></i>
                                </label>
                                <span class="input-footer hidden">
                            <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                            </label>
                        </div>
                    </div>


                    <!---------------------- Coordinator -------------------->
                    <div class="section row">
                        <div class="col-md-12">
                            <label for="firstname" class="field prepend-icon">
                                <select id="meeting_cordinater" class="form-control" required>
                                    <option value=""> Meeting Coordinator </option>
                                    <?php $__currentLoopData = $coordinators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coordinator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($coordinator['id']); ?>"><?php echo e($coordinator['name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </label>
                        </div>
                    </div>

                    <!-- -------------- /Coordinator -------------- -->

                    <!---------------------- Date ------------------->

                    <div class="section row">
                        <div class="col-md-12">
                            <div class="input-group date" id="datetimepicker2">
                                            <span class="input-group-addon cursor">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                <input type="text" class="form-control" id="date_time" required>
                            </div>
                        </div>
                    </div>

                    <!--------------------- /Date ------------------->

                    <!-- -------------- /section -------------- -->

                    <div class="section row">
                        <div class="col-md-12">
                            <label for="firstname" class="field prepend-icon">
                                <select id="meeting_attendees" class="form-control" multiple required>
                                    <option value="">Meeting Attendees</option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </label>
                        </div>
                    </div>
                    <!-- -------------- /section -------------- -->

                    <div class="section row hidden" id="message-section">
                        <div class="alert alert-info light alert-dismissable" id="alert-demo-1">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Meeting created successfully!
                        </div>
                    </div>


                    <!----------- /progress bar ---------->

                </div>
                <div class="panel-footer text-right">
                    <button type="button" id="create-meeting" class="button btn-primary"> Create Meeting </button>
                </div>
            </form>
        </div>
    </div>

    <!-- -------------- Content -------------- -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="/hrms1/public/assets/js/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>