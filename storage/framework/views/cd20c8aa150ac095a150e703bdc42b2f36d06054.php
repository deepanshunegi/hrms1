<!-------------- Sidebar - Author -------------- -->
<div class="sidebar-widget author-widget">
    <div class="media">
        <a href="/profile" class="media-left">
            <?php if(isset(Auth::user()->employee->photo)): ?>
                
            <?php else: ?>
                
            <?php endif; ?>

        </a>

        <div class="media-body">
            <div class="media-author">
                <h5><a href="/profile"><?php echo e(Auth::user()->name); ?></a></h5>
            </div>
        </div>
    </div>
</div>

<!-- -------------- Sidebar Menu  -------------- -->
<ul class="nav sidebar-menu scrollable">
    <li class="active">
        <a  href="<?php echo e(route('dashboard')); ?>">
            <span class="fa fa-dashboard"></span>
            <span class="sidebar-title">Dashboard</span>
        </a>
    </li>
    
    <?php if(Auth::user()->isHR()): ?>
        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa-group"></span>
                <span class="sidebar-title">Teams</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo e(route('add-team')); ?>">
                        <span class="glyphicon glyphicon-book"></span> Add Team </a>
                </li>
                <li>
                    <a href="<?php echo e(route('team-listing')); ?>">
                        <span class="glyphicon glyphicon-modal-window"></span> Team Listings </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa-user"></span>
                <span class="sidebar-title">Employees</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo e(route('add-employee')); ?>">
                        <span class="glyphicon glyphicon-tags"></span> Add Employee </a>
                </li>
                <li>
                    <a href="<?php echo e(route('employee-manager')); ?>">
                        <span class="glyphicon glyphicon-tags"></span> Employee Listing </a>
                </li>
                <li>
                    <a href="<?php echo e(route('upload-emp')); ?>">
                        <span class="glyphicon glyphicon-tags"></span> Upload </a>
                </li>
            </ul>
        </li>

        

        
        
        <li> 

            <a href="/hrms1/bank-account-details">
                <span class="fa fa-bank"></span>
                <span class="sidebar-title">Bank Account</span>

            </a>
        </li>

        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa fa-laptop"></span>
                <span class="sidebar-title">Assets</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo e(route('add-asset')); ?>">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Add Asset </a>
                </li>
                <li>
                    <a href="<?php echo e(route('asset-listing')); ?>">
                        <span class="glyphicon glyphicon-calendar"></span> Asset Listings </a>
                </li>
                <li>
                    <a href="<?php echo e(route('assign-asset')); ?>">
                        <span class="fa fa-desktop"></span> Assign Asset </a>
                </li>
                <li>
                    <a href="<?php echo e(route('assignment-listing')); ?>">
                        <span class="fa fa-clipboard"></span> Assignment Listings </a>
                </li>
            </ul>
        </li>
        
        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa-graduation-cap"></span>
                <span class="sidebar-title">Roles</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo e(route('add-role')); ?>">
                        <span class="glyphicon glyphicon-book"></span> Add Role </a>
                </li>
                <li>
                    <a href="<?php echo e(route('role-list')); ?>">
                        <span class="glyphicon glyphicon-modal-window"></span> Role Listings </a>
                </li>
            </ul>
        </li>
        
    <?php endif; ?>



    <?php if(Auth::user()->isHR()): ?>
        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa-rupee"></span>
                <span class="sidebar-title">Payroll Management</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo e(route('pay-groups')); ?>">
                        <span class="glyphicon glyphicon-book"></span> Payroll Groups </a>
                </li>
                <li>
                    <a href="">
                        <span class="glyphicon glyphicon-modal-window"></span> Payslips For Employees
                    </a>
                </li>
                
            </ul>
        </li>
    <?php endif; ?>







    <li>
        <a class="accordion-toggle" href="/dashboard">
            <span class="fa fa-envelope"></span>
            <span class="sidebar-title">Leaves</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="<?php echo e(route('apply-leave')); ?>">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Apply Leave </a>
            </li>
            <li>
                <a href="<?php echo e(route('my-leave-list')); ?>">
                    <span class="glyphicon glyphicon-calendar"></span> My Leave List </a>
            </li>

            <?php if(\Auth::user()->isHR()): ?>
                <li>
                    <a href="<?php echo e(route('add-leave-type')); ?>">
                        <span class="fa fa-desktop"></span> Add Leave Type </a>
                </li>
                <li>
                    <a href="<?php echo e(route('leave-type-listing')); ?>">
                        <span class="fa fa-clipboard"></span> Leave Type Listings </a>
                </li>
            <?php endif; ?>
            <?php if(Auth::user()->isHR() || Auth::user()->isCoordinator()): ?>
                <li>
                    <a href="<?php echo e(route('total-leave-list')); ?>">
                        <span class="fa fa-clipboard"></span> Total Leave Listings </a>
                </li>
            <?php endif; ?>
        </ul>
    </li>

    <?php if(Auth::user()->isHR()): ?>
        

        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa-money"></span>
                <span class="sidebar-title">Expenses</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo e(route('add-expense')); ?>">
                        <span class="glyphicon glyphicon-book"></span> Add Expense </a>
                </li>
                <li>
                    <a href="<?php echo e(route('expense-list')); ?>">
                        <span class="glyphicon glyphicon-modal-window"></span> Expense Listings </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa-arrow-circle-o-up"></span>
                <span class="sidebar-title">Promotions</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="/hrms1/promotion">
                        <span class="glyphicon glyphicon-book"></span> Promote </a>
                </li>
                <li>
                    <a href="/hrms1/show-promotion">
                        <span class="glyphicon glyphicon-modal-window"></span> Promotion Listings </a>
                </li>
            </ul>
        </li>

        <li>
            <a class="accordion-toggle" href="/dashboard">
                <span class="fa fa fa-trophy"></span>
                <span class="sidebar-title">Awards</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="/hrms1/add-award">
                        <span class="fa fa-adn"></span> Add Award </a>
                </li>
                <li>
                    <a href="/hrms1/award-listing">
                        <span class="glyphicon glyphicon-calendar"></span> Award Listings </a>
                </li>
                <li>
                    <a href="/hrms1/assign-award">
                        <span class="fa fa-desktop"></span> Awardees </a>
                </li>
                <li>
                    <a href="/hrms1/awardees-listing">
                        <span class="fa fa-clipboard"></span> Awardees Listings </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>


    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa fa-gavel"></span>
            <span class="sidebar-title">Trainings</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <?php if(\Auth::user()->notAnalyst()): ?>
                <li>
                    <a href="/hrms1/add-training-program">
                        <span class="fa fa-adn"></span> Add Training Program </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="/hrms1/show-training-program">
                    <span class="glyphicon glyphicon-calendar"></span> Program Listings </a>
            </li>
            <?php if(\Auth::user()->notAnalyst()): ?>
                <li>
                    <a href="/hrms1/add-training-invite">
                        <span class="fa fa-desktop"></span> Training Invite </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="/hrms1/show-training-invite">
                    <span class="fa fa-clipboard"></span> Invitation Listings </a>
            </li>
        </ul>
    </li>
    <?php if(Auth::user()->isHR()): ?>
        <li>
            <a class="accordion-toggle" href="#">
                <span class="fa fa-tree"></span>
                <span class="sidebar-title">Holiday</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="/hrms1/add-holidays">
                        <span class="glyphicon glyphicon-book"></span> Add Holiday </a>
                </li>
                <li>
                    <a href="/hrms1/holiday-listing">
                        <span class="glyphicon glyphicon-modal-window"></span> Holiday Listings </a>
                </li>
            </ul>
        </li>

        <li>
            <a class="accordion-toggle" href="#">
                <span class="fa fa-clock-o"></span>
                <span class="sidebar-title"> Attendance </span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo e(route('attendance-upload')); ?>">
                        <span class="glyphicon glyphicon-book"></span> Upload Sheets</a>
                </li>

            </ul>
        </li>

        

    <?php endif; ?>

    
    <li>
        <a href="/hrms1/create-meeting">
            <span class="fa fa-calendar-o"></span>
            <span class="sidebar-title"> Meeting  &nbsp Invitation </span>
        </a>
    </li>

    <?php if(Auth::user()->isCoordinator() ||  Auth::user()->isHR()): ?>
        <li>
            <a href="/hrms1/create-event">
                <span class="fa fa-calendar-o"></span>
                <span class="sidebar-title"> Event  &nbsp Invitation </span>
            </a>
        </li>
    <?php endif; ?>
    

    <li>
        <a href="/hrms1/hr-policy">
            <span class="fa fa-gavel"></span>
            <span class="sidebar-title"> Company Policy </span>
        </a>
    </li>


    <li>

        <a href="/hrms1/download-forms">
            <span class="fa fa-book"></span>
            <span class="sidebar-title">Download Forms</span>

        </a>
    </li>
    <p> &nbsp; </p>
</ul>
<!-- -------------- /Sidebar Menu  --------------