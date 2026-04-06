


<!--[edit project]-->
<?php if(config('visibility.action_buttons_edit')): ?>
    <?php if($project->permission_edit_project): ?>
        <a class="data-toggle-action-tooltip dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
            data-toggle="modal" data-target="#commonModal"
            data-url="<?php echo e(urlResource('/projects/' . $project->project_id . '/edit')); ?>"
            data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.edit_project'))); ?>"
            data-action-url="<?php echo e(urlResource('/projects/' . $project->project_id)); ?>" data-action-method="PUT"
            data-action-ajax-class="" data-action-ajax-loading-target="projects-td-container">
            <span><?php echo e(cleanLang(__('lang.edit_project'))); ?></span>
        </a>
    <?php else: ?>
        <!--optionally show disabled button?-->
        <span class="btn btn-outline-default btn-circle btn-sm disabled  <?php echo e(runtimePlaceholdeActionsButtons()); ?>"
            data-toggle="tooltip" title="<?php echo e(cleanLang(__('lang.actions_not_available'))); ?>"><i
                class="sl-icon-note"></i></span>
    <?php endif; ?>
<?php endif; ?>



<!--Edit Client-->
<?php if(config('visibility.action_buttons_edit')): ?>
    <a class="data-toggle-action-tooltip dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
        data-toggle="modal" data-target="#commonModal"
        data-url="<?php echo e(urlResource('/clients/' . $project->client->client_id . '/edit')); ?>"
        data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.edit_client'))); ?>"
        data-action-url="<?php echo e(urlResource('/clients/' . $project->client->client_id . '?ref=list')); ?>"
        data-action-method="PUT" data-action-ajax-loading-target="clients-td-container">
        <span><?php echo e(cleanLang(__('lang.edit_client'))); ?></span>
    </a>
<?php endif; ?>


<!--Edit Client User-->
<?php if(config('visibility.action_buttons_edit')): ?>
    <a class="data-toggle-action-tooltip dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
        data-toggle="modal" data-target="#commonModal"
        data-url="<?php echo e(urlResource('/contacts/' . $project->user->id . '/edit')); ?>" data-loading-target="commonModalBody"
        data-modal-title="<?php echo e(cleanLang(__('lang.edit_user'))); ?>"
        data-action-url="<?php echo e(urlResource('/contacts/' . $project->user->id . '?ref=list')); ?>" data-action-method="PUT"
        data-action-ajax-class="" data-action-ajax-loading-target="contacts-td-container">
        <span><?php echo e(cleanLang(__('lang.edit_user'))); ?></span>
    </a>
<?php endif; ?>
<?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/projects/views/common/dropdown-menu-team-2.blade.php ENDPATH**/ ?>