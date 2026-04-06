<!--product_task_title-->
<div class="form-group row">
    <label class="col-sm-12 text-left control-label col-form-label required">Title</label>
    <div class="col-sm-12">
        <input type="text" class="form-control form-control-sm" id="product_task_title" name="product_task_title"
            value="<?php echo e($task->product_task_title ?? ''); ?>">
    </div>
</div>

<!--product_task_description-->
<div class="form-group row">
    <label class="col-sm-12 text-left control-label col-form-label"><?php echo app('translator')->get('lang.description'); ?></label>
    <div class="col-sm-12">
        <textarea class="form-control form-control-sm tinymce-textarea" rows="5" name="product_task_description"
            id="product_task_description"><?php echo e($task->product_task_description ?? ''); ?></textarea>
    </div>
</div>

<!--assigned users-->
<div class="form-group row">
    <label class="col-sm-12 text-left control-label col-form-label"><?php echo app('translator')->get('lang.automation_assign_project'); ?></label>
    <div class="col-sm-12 ">
        <select name="automation_assigned_users" id="automation_assigned_users"
            class="form-control form-control-sm select2-basic select2-multiple select2-tags select2-hidden-accessible"
            multiple="multiple" tabindex="-1" aria-hidden="true">
            <?php $__currentLoopData = config('system.team_members'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($user->id); ?>" <?php echo e(runtimePreselectedInArray($user->id ?? '', $assigned ?? [])); ?>><?php echo e($user->full_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>


<div class="modal-selector m-t-50">
    <h5 class="m-t-10"><?php echo app('translator')->get('lang.dependencies'); ?></h5>

    <!--dependencies - prevent from completing-->
    <div class="form-group row m-t-20">
        <label
            class="col-sm-12 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.dependency_prevents_task_from_completing'); ?></label>
        <div class="col-sm-12">
            <select name="dependencies_cannot_complete" id="dependencies_cannot_complete"
                class="form-control  form-control-sm select2-basic select2-multiple select2-hidden-accessible"
                multiple="multiple" tabindex="-1" aria-hidden="true">
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($product_task->product_task_id); ?>"
                    <?php echo e(runtimePreselectedInArray($product_task->product_task_id ?? '', $cannot_complete_dependencies ?? [])); ?>>
                    <?php echo e($product_task->product_task_title); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>


    <!--dependencies - prevent from starting-->
    <div class="form-group row m-t-20">
        <label
            class="col-sm-12 text-left control-label col-form-label required"><?php echo app('translator')->get('lang.dependency_prevents_task_from_starting'); ?></label>
        <div class="col-sm-12">
            <select name="dependencies_cannot_start" id="dependencies_cannot_start"
                class="form-control  form-control-sm select2-basic select2-multiple select2-hidden-accessible"
                multiple="multiple" tabindex="-1" aria-hidden="true">
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($product_task->product_task_id); ?>"
                    <?php echo e(runtimePreselectedInArray($product_task->product_task_id ?? '', $cannot_start_dependencies ?? [])); ?>>
                    <?php echo e($product_task->product_task_title); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div><?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/itemtasks/modals/add-edit-inc.blade.php ENDPATH**/ ?>