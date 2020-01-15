<?php $__env->startSection('content'); ?>
<body class="forms-wizard">
<!-- -------------- Customizer -------------- -->
<div id="customizer">
    <div class="panel">
        <div class="panel-heading">
        <span class="panel-icon">

          <i class="fa fa-cogs"></i>
        </span>
            <span class="panel-title"> Theme Options</span>
        </div>
        <div class="panel-body pn">
            <ul class="nav nav-list nav-list-sm" role="tablist">
                <li class="active">
                    <a href="customizer-header" role="tab" data-toggle="tab">Navbar</a>
                </li>
                <li>
                    <a href="customizer-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                </li>
                <li>
                    <a href="customizer-settings" role="tab" data-toggle="tab">Misc</a>
                </li>
            </ul>
            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="customizer-header">
                    <form id="customizer-header-skin">
                        <h6 class="mv20">Header Skins</h6>

                        <div class="customizer-sample">
                            <table>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-dark mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin5" checked
                                                   value="bg-dark">
                                            <label for="headerSkin5">Dark</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-warning mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin2" value="bg-warning">
                                            <label for="headerSkin2">Warning</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-danger mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin3" value="bg-danger">
                                            <label for="headerSkin3">Danger</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-success mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin4" value="bg-success">
                                            <label for="headerSkin4">Success</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-primary mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin6" value="bg-primary">
                                            <label for="headerSkin6">Primary</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-info mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin7" value="bg-info">
                                            <label for="headerSkin7">Info</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-alert mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin8" value="bg-alert">
                                            <label for="headerSkin8">Alert</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-system mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin9" value="bg-system">
                                            <label for="headerSkin9">System</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <div class="checkbox-custom checkbox-disabled fill mb10">
                                <input type="radio" name="headerSkin" id="headerSkin1" value="bgc-light">
                                <label for="headerSkin1">Light</label>
                            </div>
                        </div>
                    </form>
                    <form id="customizer-footer-skin">
                        <h6 class="mv20">Footer Skins</h6>

                        <div class="customizer-sample">
                            <table>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-dark mb10">
                                            <input type="radio" name="footerSkin" id="footerSkin1" checked value="">
                                            <label for="footerSkin1">Dark</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom checkbox-disabled fill mb10">
                                            <input type="radio" name="footerSkin" id="footerSkin2" value="footer-light">
                                            <label for="footerSkin2">Light</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="customizer-sidebar">
                    <form id="customizer-sidebar-skin">
                        <h6 class="mv20">Sidebar Skins</h6>

                        <div class="customizer-sample">
                            <div class="checkbox-custom fill checkbox-dark mb10">
                                <input type="radio" name="sidebarSkin" checked id="sidebarSkin2" value="">
                                <label for="sidebarSkin2">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb10">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="customizer-settings">
                    <form id="customizer-settings-misc">
                        <h6 class="mv20 mtn">Layout Options</h6>

                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" checked="" id="sidebar-option">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" id="breadcrumb-option">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" id="breadcrumb-hidden">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group mn pb35 pt25 text-center">
                <a href="#" id="clearAll" class="btn btn-primary btn-bordered btn-sm">Clear All</a>
            </div>
        </div>
    </div>
</div>
<!-- -------------- /Customizer -------------- -->

<!-- -------------- Body Wrap  -------------- -->
<div id="main">

    <!-- -------------- Header  -------------- -->
    <?php echo $__env->make('hrms.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- -------------- /Header  -------------- -->

    <!-- -------------- Sidebar  -------------- -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- -------------- Sidebar Left Wrapper  -------------- -->
        <div class="sidebar-left-content nano-content">

            <!-- -------------- Sidebar Header -------------- -->
            <header class="sidebar-header">


                <?php echo $__env->make('hrms.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        <!-- -------------- Sidebar Hide Button -------------- -->
                <div class="sidebar-toggler">
                    <a href="/dashboard">
                        <span class="fa fa-arrow-circle-o-left"></span>
                    </a>
                </div>
                <!-- -------------- /Sidebar Hide Button -------------- -->

            </header>
        </div>
        <!-- -------------- /Sidebar Left Wrapper  -------------- -->

    </aside>

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper" style="margin-left: 0px;">

        <!-- -------------- Topbar -------------- -->
        <header id="topbar" class="alt">

            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>

                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-icon">
                            <a href="/dashboard">
                                <span class="fa fa-home"></span>
                            </a>
                        </li>
                        
                        <li class="breadcrumb-link">
                            <a href="/dashboard"> Employees </a>
                        </li>
                        <li class="breadcrumb-current-item"> Edit details of <?php echo e($emps->name); ?> </li>
                    </ol>
                </div>

            <?php else: ?>

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
                            <a href="/add-employee"> Employees </a>
                        </li>
                        <li class="breadcrumb-current-item"> Add Details</li>
                    </ol>
                </div>

            <?php endif; ?>
        </header>
        <!-- -------------- /Topbar -------------- -->

        <!-- -------------- Content -------------- -->
        <section id="content" class="animated fadeIn">

            <div class="mw1000 center-block">
                <?php if(session('message')): ?>
                    <?php echo e(session('message')); ?>

                <?php endif; ?>
                <?php if(Session::has('flash_message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session::get('flash_message')); ?>

                    </div>
                    <?php endif; ?>

                            <!-- -------------- Wizard -------------- -->
                    <!-- -------------- Spec Form -------------- -->
                    <div class="allcp-form">

                        <form method="post" action="/hrms1/" id="custom-form-wizard">
                            <div class="wizard steps-bg steps-left">

                                <!-- -------------- step 1 -------------- -->

                                <h4 class="wizard-section-title">
                                    <i class="fa fa-user pr5"></i> Personal Details</h4>
                                <section class="wizard-section">
                                    <div class="section">
                                        <label for="photo-upload"><h6 class="mb20 mt40"> Photo </h6></label>
                                        <label class="field prepend-icon append-button file">
                                            <span class="button">Choose File</span>
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input tybpe="hidden" value="edit-emp/<?php echo e($emps->id); ?>" id="url">

                                                <input type="file" class="gui-file" name="photo" id="photo_upload"
                                                       value="<?php if($emps && $emps->photo): ?><?php echo e($emps->photo); ?><?php endif; ?>"
                                                       onChange="document.getElementById('uploader1').value = this.value;">
                                                <input type="text" class="gui-input" id="uploader1"
                                                       placeholder="Select File">
                                                
                                            <?php else: ?>
                                                <input type="hidden" value="hrms1/add-employee" id="url">
                                                <input type="file" class="gui-file" name="photo" id="photo_upload"
                                                       onChange="document.getElementById('uploader1').value = this.value;">
                                                 <input type="text" class="gui-input" id="uploader1"
                                                       placeholder="Select File">
                                                
                                            <?php endif; ?>
                                        </label>
                                    </div>

                                    <!-- -------------- /section -------------- -->

                                    


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40">Employee Name</h6></label>
                                        <label for="input002" class="field prepend-icon ">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="emp_name" id="emp_name" class="gui-input"
                                                       value="<?php if($emps && $emps->employee->name): ?><?php echo e($emps->employee->name); ?><?php endif; ?>" required>
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-user"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" name="emp_name" id="emp_name" class="gui-input"
                                                       placeholder="employee name..." required>
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-user"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40">Employment Status </h6></label>
                                        <div class="option-group field">
                                            <label class="field option mb5">
                                                <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="radio" name="emp_status" id="emp_status" value="1"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->status == '1'): ?> checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Present</label>
                                            <label class="field option mb5">
                                                <input type="radio" name="emp_status" id="emp_status" value="0"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->status == '0'): ?> checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Ex</label>
                                            <?php else: ?>
                                                <input type="radio" name="emp_status" id="emp_status" value="1">
                                                <span class="radio"></span>Present</label>
                                                <label class="field option mb5">
                                                    <input type="radio" name="emp_status" id="emp_status" value="0" checked>
                                                    <span class="radio"></span>Ex</label>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                        <div class="section">
                                            <label for="input002"><h6 class="mb20 mt40"> Role </h6></label>
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <select class="select2-single form-control" name="role" id="role" readonly required>
                                                    <option value="">Select role</option>
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($emps->role->role->id == $role->id): ?>
                                                            <option value="<?php echo e($role->id); ?>" selected><?php echo e($role->name); ?></option>
                                                        <?php endif; ?>
                                                        <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php else: ?>
                                                <select class="select2-single form-control" name="role" id="role">
                                                    <option value="">Select role</option>
                                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            <?php endif; ?>
                                        </div>

                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Gender </h6></label>
                                        <div class="option-group field">
                                            <label class="field option mb5">
                                                <input type="radio" value="0" name="gender" id="gender"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->gender == '0'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Male</label>
                                            <label class="field option mb5">
                                                <input type="radio" value="1" name="gender" id="gender"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->gender == '1'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Female</label>
                                        </div>
                                    </div>

                                    <div class="section form-group">
                                        <label for="datepicker1" class="field prepend-icon mb5 "><h6 class="mb20 mt40">
                                                Date of Birth </h6></label>

                                        <div class="input-group field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input dob" name="date_of_birth"
                                                       value="<?php if($emps && $emps->employee->date_of_birth): ?><?php echo e($emps->employee->date_of_birth); ?><?php endif; ?>" required>
                                                <label class="setpadding field-icon">
                                                    <i class=" fa fa-calendar-o fa-4x"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input dob" name="date_of_birth" required >
                                                <label class="setpadding field-icon">
                                                    <i class="fa fa-calendar-o fa-4x"></i>
                                                </label>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="section form-group">
                                        <label for="datepicker4" class="field prepend-icon mb5"><h6 class="mb20 mt40">
                                                Date of Joining </h6></label>

                                        <div class="input-group field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input doj" name="date_of_joining"
                                                       value="<?php if($emps && $emps->employee->date_of_joining): ?><?php echo e($emps->employee->date_of_joining); ?><?php endif; ?>" required />
                                                <label class="field-icon setpadding">
                                                    <i class="fa fa-calendar-o"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input doj" name="date_of_joining" required  />
                                                <label class="field-icon setpadding">
                                                    <i class="fa fa-calendar-o"></i>
                                                </label>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Mobile Number </h6></label>
                                            <p id="mob_no" style="display:none"></p>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="tel" name="mob_number" id="mobile_phone"
                                                       class="gui-input phone-group" maxlength="10" required
                                                       value="<?php if($emps && $emps->employee->number): ?><?php echo e($emps->employee->number); ?><?php endif; ?>">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-mobile-phone" style="top:17px;"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="tel" name="mob_number" id="mobile_phone"
                                                       class="gui-input phone-group" maxlength="10" minlength="10" required
                                                       placeholder="mobile number...">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-mobile-phone"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>

                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40">Email-ID</h6></label>

                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="email" name="email" id="email_id"
                                                       class="gui-input phone-group" required
                                                       value="<?php if($emps && $emps->employee->email): ?><?php echo e($emps->employee->email); ?><?php endif; ?>">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-mobile-phone" style="top:17px;"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="email" name="email" id="email_id"
                                                       class="gui-input phone-group" required
                                                       placeholder="Email Id">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-mobile-phone"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>

                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Qualification </h6></label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>

                                                <?php echo Form::select('qualification_list', qualification(),$emps->employee->qualification, ['class' => 'select2-single form-control qualification_select', 'id' => 'qualification']); ?>

                                                <input type="text" id="qualification" class="gui-input form-control hidden qualification_text" placeholder="enter other qualification" value="<?php echo e($emps->employee->qualification); ?>"/>

                                            <?php else: ?>
                                               <?php echo Form::select('qualification_list', qualification(),'', ['class' => 'select2-single form-control qualification_select', 'id' => 'qualification']); ?>

                                               <input type="text" id="qualification" class="gui-input form-control hidden qualification_text" placeholder="enter other qualification"/>
                                            <?php endif; ?>
                                            </label>
                                    </div>


                                    <div class="section">

                                        <label for="input002"><h6 class="mb20 mt40"> Emergency Number </h6></label>

                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="tel" name="emer_number" id="emergency_number"
                                                       class="gui-input phone-group" maxlength="10" minlength="10"
                                                       value="<?php if($emps && $emps->employee->emergency_number): ?><?php echo e($emps->employee->emergency_number); ?><?php endif; ?>">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-mobile-phone"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="tel" name="emer_number" id="emergency_number"
                                                       class="gui-input phone-group" maxlength="10" minlength="10"
                                                       placeholder="Emergency number">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-mobile-phone"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> PAN Number </h6></label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="pan_number" id="pan_number" class="gui-input" maxlength="10"
                                                       value="<?php if($emps && $emps->employee->pan_number): ?><?php echo e($emps->employee->pan_number); ?><?php endif; ?>">
                                            <?php else: ?>
                                                <input type="text" placeholder="PAN" maxlength="10" name="pan_number"
                                                       id="pan_number" class="gui-input">
                                            <?php endif; ?>
                                        </label>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Father's Name </h6></label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="father_name" id="father_name" class="gui-input"
                                                       value="<?php if($emps && $emps->employee->father_name): ?><?php echo e($emps->employee->father_name); ?><?php endif; ?>">

                                            <?php else: ?>
                                                <input type="text" placeholder="Employees' father name"
                                                       name="father_name" id="father_name" class="gui-input">

                                            <?php endif; ?>
                                        </label>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Current Address </h6></label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="address" id="address" class="gui-input"
                                                       value="<?php if($emps && $emps->employee->current_address): ?><?php echo e($emps->employee->current_address); ?><?php endif; ?>">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-map-marker"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" placeholder="current address..." name="address"
                                                       id="address" class="gui-input">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-map-marker"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Permanent Address </h6></label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="permanent_address" id="permanent_address"
                                                       class="gui-input"
                                                       value="<?php if($emps && $emps->employee->permanent_address): ?><?php echo e($emps->employee->permanent_address); ?><?php endif; ?>">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-send-o"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" placeholder="permanent address..."
                                                       name="permanent_address" id="permanent_address"
                                                       class="gui-input">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-send-o"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->
                                </section>

                                <!-- -------------- step 2 -------------- -->
                                <h4 class="wizard-section-title">
                                    <i class="fa fa-user-secret pr5"></i> Employment details</h4>
                                <section class="wizard-section">
                                    <!-- -------------- /section -------------- -->
                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Joining Formalities </h6></label>

                                        <div class="option-group field">
                                            <label class="field option mb5">
                                                <input type="radio" value="1" name="formalities"
                                                       id="formalities"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->formalities == '1'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Completed</label>
                                            <label class="field option mb5">
                                                <input type="radio" value="0" name="formalities" id="formalities"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->formalities == '0'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Pending</label>
                                        </div>
                                    </div>

                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Offer Acceptance </h6></label>

                                        <div class="option-group field">
                                            <label class="field option mb5">
                                                <input type="radio" value="1" name="offer_acceptance"
                                                       id="offer_acceptance"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->offer_acceptance == '1'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Completed</label>
                                            <label class="field option mb5">
                                                <input type="radio" value="0" name="offer_acceptance"
                                                       id="offer_acceptance"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->offer_acceptance == '0'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Pending</label>
                                        </div>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Probation Period </h6></label>

                                                <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                            <select class="select2-single form-control probation_select" name="prob_period" id="probation_period" >
                                                <option value="">Select probation period</option>
                                                    <?php if($emps->employee->probation_period == '0'): ?>
                                                        <option value="0" selected>0 days</option>
                                                        <option value="90">90 days</option>
                                                        <option value="180">180 days</option>
                                                        <option value="Other">Other</option>
                                                    <?php elseif($emps->employee->probation_period == '90'): ?>
                                                        <option value="0">0 days</option>
                                                        <option value="90" selected>90 days</option>
                                                        <option value="180">180 days</option>
                                                        <option value="Other">Other</option>
                                                    <?php elseif($emps->employee->probation_period == '180'): ?>
                                                        <option value="0">0 days</option>
                                                        <option value="90">90 days</option>
                                                        <option value="180" selected>180 days</option>
                                                        <option value="Other">Other</option>
                                                     <?php else: ?>
                                                        <option value="0">0 days</option>
                                                        <option value="90">90 days</option>
                                                        <option value="180">180 days</option>
                                                        <option value="Other" selected>Other</option>

                                                    <?php endif; ?>
                                            </select>
                                                    <input type="text" class="form-control probation_text hidden" id="probation_text" value=<?php echo e($emps->employee->probation_period); ?>>
                                                <?php else: ?>
                                                    <select class="select2-single form-control probation_select" name="prob_period" id="probation_period" >
                                                    <option value="">Select probation period</option>
                                                    <option value="0">0 days</option>
                                                    <option value="90">90 days</option>
                                                    <option value="180">180 days</option>
                                                    <option value="Other">Other</option>
                                                    </select>
                                            <input type="text" class="form-control probation_text hidden" id="probation_text">
                                                <?php endif; ?>


                                    </div>



                                    <div class="section form-group">
                                        <label for="datepicker5" class="field prepend-icon mb5"><h6 class="mb20 mt40">
                                                Date of Confirmation </h6></label>

                                        <div class="input-group field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input doc" name="date_of_confirmation"
                                                       value="<?php if($emps && $emps->employee->date_of_confirmation): ?><?php echo e($emps->employee->date_of_confirmation); ?><?php endif; ?>"/>
                                                <label class="field-icon setpadding">
                                                    <i class="  fa fa-calendar-o"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input doc" name="date_of_confirmation"/>
                                                <label class="field-icon setpadding">
                                                    <i class="  fa fa-calendar-o"></i>
                                                </label>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Department </h6></label>
                                            <select class="select2-single form-control" name="department" id="department">
                                                <option value="">Select department</option>
                                                <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                    <?php if($emps->employee->department == 'Marketplace'): ?>
                                                        <option value="Marketplace" selected>Marketplace</option>
                                                        <option value="Social Media">Social Media</option>
                                                        <option value="IT">IT</option>
                                                    <?php elseif($emps->employee->department == 'Social Media'): ?>
                                                        <option value="Marketplace">Marketplace</option>
                                                        <option value="Social Media" selected>Social Media</option>
                                                        <option value="IT">IT</option>
                                                    <?php else: ?>
                                                        <option value="Marketplace">Marketplace</option>
                                                        <option value="Social Media">Social Media</option>
                                                        <option value="IT" selected>IT</option>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <option value="Marketplace">Marketplace</option>
                                                    <option value="Social Media">Social Media</option>
                                                    <option value="IT">IT</option>
                                                <?php endif; ?>
                                            </select>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Salary on Confirmation </h6>
                                        </label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="salary" id="salary" class="gui-input"
                                                       value="<?php if($emps && $emps->employee->salary): ?><?php echo e($emps->employee->salary); ?><?php endif; ?>" readonly>
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-money"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" placeholder="e.g 12000" name="salary"
                                                       id="salary" class="gui-input">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-money"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                    <!-- -------------- /section -------------- -->


                                </section>

                                <!-- -------------- step 3 -------------- -->
                                <h4 class="wizard-section-title">
                                    <i class="fa fa-file-text pr5"></i> Banking Details</h4>
                                <section class="wizard-section">


                                    <!-- -------------- /section -------------- -->


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Bank Account Number </h6></label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="account_number" id="bank_account_number"
                                                       class="gui-input" maxlength="21" minlength="21" 
                                                       value="<?php if($emps && $emps->employee->account_number): ?><?php echo e($emps->employee->account_number); ?><?php endif; ?>">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-list"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" placeholder="Bank account number"
                                                       name="account_number" id="bank_account_number" class="gui-input" maxlength="21" minlength="21">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-list"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Bank Name </h6></label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="bank_name" id="bank_name" class="gui-input"
                                                       value="<?php if($emps && $emps->employee->bank_name): ?><?php echo e($emps->employee->bank_name); ?><?php endif; ?>">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-columns"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" placeholder="name of bank..." name="bank_name"
                                                       id="bank_name" class="gui-input">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-columns"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> IFSC Code </h6></label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="ifsc_code" id="ifsc_code" class="gui-input" maxlength="18" minlength="18" 
                                                       value="<?php if($emps && $emps->employee->ifsc_code): ?><?php echo e($emps->employee->ifsc_code); ?><?php endif; ?>">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-font"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" placeholder="ifsc code..." name="ifsc_code"
                                                       id="ifsc_code" class="gui-input" minlength="18" maxlength="18">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-font"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>

                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> PF Account Number </h6></label>
                                        <label for="input002" class="field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" name="pf_account_number" id="pf_account_number"
                                                       class="gui-input"
                                                       value="<?php if($emps && $emps->employee->pf_account_number): ?><?php echo e($emps->employee->pf_account_number); ?><?php endif; ?>">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-list"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" placeholder="PF account number..."
                                                       name="pf_account_number" id="pf_account_number"
                                                       class="gui-input">
                                                <label for="input002" class="field-icon setpadding">
                                                    <i class="fa fa-list"></i>
                                                </label>
                                            <?php endif; ?>
                                        </label>
                                    </div>

                                   <div class="section">
                                       <label for="input002"><h6 class="mb20 mt40"> UN Number</h6></label>
                                       <label for="input002" class="field prepend-icon">
                                           <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                              <input type="text" name="un_number" id="un_number" class="gui-input"
                                              value="<?php if($emps && $emps->employee->un_number): ?><?php echo e($emps->employee->un_number); ?><?php endif; ?>">
                                               <label for="input002" class="field-icon setpadding">
                                                   <i class="fa fa-list"></i>
                                               </label>
                                           <?php else: ?>
                                             <input type="text" placeholder="UN Number" name="un_number" id="un_number" class="gui-input">
                                              <label for="input002" class="field-icon setpadding">
                                                  <i class="fa fa-list"></i>
                                              </label>
                                           <?php endif; ?>
                                       </label>
                                   </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> PF Status </h6></label>

                                        <div class="option-group field">
                                            <label class="field option mb5">
                                                <input type="radio" value="1" name="pf_status" id="pf_status"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->pf_status == '1'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Active</label>
                                            <label class="field option mb5">
                                                <input type="radio" value="0" name="pf_status" id="pf_status"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->pf_status == '0'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Inactive</label>
                                        </div>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                </section>


                                <h4 class="wizard-section-title">
                                    <i class="fa fa-file-text pr5"></i> Ex Employment Details </h4>
                                <section class="wizard-section">


                                    <div class="section">
                                        <label for="datepicker6" class="field prepend-icon mb5"><h6 class="mb20 mt40">
                                                Date of Resignation </h6></label>

                                        <div class="input-group field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input dor" name="date_of_resignation"
                                                       value="<?php if($emps && $emps->employee->date_of_resignation): ?><?php echo e($emps->employee->date_of_resignation); ?><?php endif; ?>"/>
                                                <label class="field-icon setpadding">
                                                    <i class="fa fa-calendar-o"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input dor" name="date_of_resignation"/>
                                                <label class="field-icon setpadding">
                                                    <i class="fa fa-calendar-o"></i>
                                                </label>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Notice Period </h6></label>
                                            <select class="select2-single form-control" name="notice_period" id="notice_period">
                                                <option value="">Select notice period</option>
                                                <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                    <?php if($emps->employee->notice_period == '1'): ?>
                                                        <option value="1" selected>1 Month</option>
                                                        <option value="2">2 Months</option>
                                                    <?php else: ?>
                                                        <option value="1">1 Month</option>
                                                        <option value="2" selected>2 Months</option>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <option value="1">1 Month</option>
                                                    <option value="2">2 Months</option>
                                                <?php endif; ?>
                                            </select>
                                    </div>


                                    <div class="section form-group">
                                        <label for="datepicker7" class="field prepend-icon mb5"><h6 class="mb20 mt40">
                                                Last Working Day </h6></label>

                                        <div class="input-group field prepend-icon">
                                            <?php if(\Route::getFacadeRoot()->current()->uri() == 'edit-emp/{id}'): ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input lwd"
                                                       name="last_working_day"
                                                       value="<?php if($emps && $emps->employee->last_working_day): ?><?php echo e($emps->employee->last_working_day); ?> <?php endif; ?>"/>
                                                <label class="field-icon setpadding">
                                                    <i class="fa fa-calendar-o"></i>
                                                </label>
                                            <?php else: ?>
                                                <input type="text" class="gui-input fs13 date datepicker_input lwd"
                                                       name="last_working_day"/>
                                                <label class="field-icon setpadding">
                                                    <i class="fa fa-calendar-o"></i>
                                                </label>
                                            <?php endif; ?>
                                        </div>
                                    </div>


                                    <div class="section">
                                        <label for="input002"><h6 class="mb20 mt40"> Full & Final </h6></label>

                                        <div class="option-group field">
                                            <label class="field option mb5">
                                                <input type="hidden" value="<?php echo csrf_token(); ?>" id="token">
                                                <input type="radio" value="1" name="full_final" id="full_final"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->full_final == '1'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>Yes</label>
                                            <label class="field option mb5">
                                                <input type="radio" value="0" name="full_final" id="full_final"
                                                       <?php if(isset($emps)): ?><?php if($emps->employee->full_final == '0'): ?>checked <?php endif; ?> <?php endif; ?>>
                                                <span class="radio"></span>No</label>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!-- -------------- /Wizard -------------- -->

                        </form>
                        <!-- -------------- /Form -------------- -->

                    </div>
                    <!-- -------------- /Spec Form -------------- -->

            </div>

        </section>
        <!-- -------------- /Content -------------- -->

    </section>

    <!-- -------------- Sidebar Right -------------- -->
    <aside id="sidebar_right" class="nano affix">

        <!-- -------------- Sidebar Right Content -------------- -->
        <div class="sidebar-right-wrapper nano-content">

            <div class="sidebar-block br-n p15">

                <h6 class="title-divider text-muted mb20"> Visitors Stats
                <span class="pull-right"> 2015
                  <i class="fa fa-caret-down ml5"></i>
                </span>
                </h6>

                <div class="progress mh5">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="34"
                         aria-valuemin="0"
                         aria-valuemax="100" style="width: 34%">
                        <span class="fs11">New visitors</span>
                    </div>
                </div>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="66"
                         aria-valuemin="0"
                         aria-valuemax="100" style="width: 66%">
                        <span class="fs11 text-left">Returnig visitors</span>
                    </div>
                </div>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
                         aria-valuemin="0"
                         aria-valuemax="100" style="width: 45%">
                        <span class="fs11 text-left">Orders</span>
                    </div>
                </div>

                <h6 class="title-divider text-muted mt30 mb10">New visitors</h6>

                <div class="row">
                    <div class="col-xs-5">
                        <h3 class="text-primary mn pl5">350</h3>
                    </div>
                    <div class="col-xs-7 text-right">
                        <h3 class="text-warning mn">
                            <i class="fa fa-caret-down"></i> 15.7% </h3>
                    </div>
                </div>

                <h6 class="title-divider text-muted mt25 mb10">Returnig visitors</h6>

                <div class="row">
                    <div class="col-xs-5">
                        <h3 class="text-primary mn pl5">660</h3>
                    </div>
                    <div class="col-xs-7 text-right">
                        <h3 class="text-success-dark mn">
                            <i class="fa fa-caret-up"></i> 20.2% </h3>
                    </div>
                </div>

                <h6 class="title-divider text-muted mt25 mb10">Orders</h6>

                <div class="row">
                    <div class="col-xs-5">
                        <h3 class="text-primary mn pl5">153</h3>
                    </div>
                    <div class="col-xs-7 text-right">
                        <h3 class="text-success mn">
                            <i class="fa fa-caret-up"></i> 5.3% </h3>
                    </div>
                </div>

                <h6 class="title-divider text-muted mt40 mb20"> Site Statistics
                    <span class="pull-right text-primary fw600">Today</span>
                </h6>
            </div>
        </div>
    </aside>
    <!-- -------------- /Sidebar Right -------------- -->

</div>

<!-- -------------- /Body Wrap  -------------- -->

<!-- Notification modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="notification-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div id="modal-header" class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Ok</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- /Notification Modal -->
<style>
    /*page demo styles*/
    .wizard .steps .fa,
    .wizard .steps .glyphicon,
    .wizard .steps .glyphicon {
        display: none;
    }
</style>

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->

<?php echo Html::script('/public/assets/js/jquery/jquery-1.11.3.min.js'); ?>

<?php echo Html::script('/public/assets/js/jquery/jquery_ui/jquery-ui.min.js'); ?>


        <!-- -------------- HighCharts Plugin -------------- -->
<?php echo Html::script('/public/assets/js/plugins/highcharts/highcharts.js'); ?>


        <!-- -------------- MonthPicker JS -------------- -->
<?php echo Html::script('/public/assets/allcp/forms/js/jquery-ui-monthpicker.min.js'); ?>

<?php echo Html::script('/public/assets/allcp/forms/js/jquery-ui-datepicker.min.js'); ?>

<?php echo Html::script('/public/assets/allcp/forms/js/jquery.spectrum.min.js'); ?>

<?php echo Html::script('/public/assets/allcp/forms/js/jquery.stepper.min.js'); ?>



        <!-- -------------- Plugins -------------- -->
<?php echo Html::script('/public/assets/allcp/forms/js/jquery.validate.min.js'); ?>

<?php echo Html::script('/public/assets/allcp/forms/js/jquery.steps.min.js'); ?>


        <!-- -------------- Theme Scripts -------------- -->
<?php echo Html::script('/public/assets/js/utility/utility.js'); ?>

<?php echo Html::script('/public/assets/js/demo/demo.js'); ?>

<?php echo Html::script('/public/assets/js/main.js'); ?>

<?php echo Html::script('/public/assets/js/demo/widgets_sidebar.js'); ?>

<?php echo Html::script('/public/public/assets/js/custom_form_wizard.js'); ?>


<?php echo Html::script ('/public/assets/js/pages/forms-widgets.js'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script src="/hrms1/public/assets/js/custom_form_wizard.js"></script>
<?php $__env->stopPush(); ?>

        <!-- -------------- Select2 JS -------------- -->
<script src="/hrms1/public/assets/js/plugins/select2/select2.min.js"></script>
<script src="/hrms1/public/assets/js/function.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"> </script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js'></script>

<!-- <script>
$(document).ready(function(){
$('.input-group .date').datepicker({format: "dd.mm.yyyy"});
</script> -->
<script>
    $(document).ready(function(){
        $(".datepicker_input").datepicker();

        $('#salary').on('change', function () {
          var salary = $(this).val().replace(/[,\s\$/₹]/g,"");
          var i = new Intl.NumberFormat('en-IN', {
                    style: 'currency',
                    currency: 'INR'
                }).format(salary);
         $(this).val(i);
        });

        $('select#probation_period').on('change', function() {
          doc = $('.doj').val();
          prob_period = $(this).val();
          if((doc != "" && prob_period !="") || (doc != "" && prob_period !="Other")){
            var date = new Date(doc);
            var newdate = new Date(date);
            newdate.setDate(newdate.getDate() + parseInt(prob_period));
            var dd = newdate.getDate();
            var mm = newdate.getMonth() + 1;
            var y = newdate.getFullYear();
            var someFormattedDate = mm + '/' + dd + '/' + y;
            $('.doc').val(someFormattedDate);
          }
        });

     });

</script>
<!-- -------------- /Scripts -------------- -->
</body>

</html>
<script>
    function redirect(){
      //location.href = "https://hr.soarlogic.com/dashboard";
    }
</script>

<?php echo $__env->make('hrms.layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>