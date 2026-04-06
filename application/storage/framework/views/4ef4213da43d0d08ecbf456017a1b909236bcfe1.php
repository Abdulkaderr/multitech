



<!--Edit Client-->
<?php if(config('visibility.action_buttons_edit')): ?>
    <button type="button" title="<?php echo e(cleanLang(__('lang.edit'))); ?>"
        class="data-toggle-action-tooltip dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
        data-toggle="modal" data-target="#commonModal"
        data-url="<?php echo e(urlResource('/clients/' . $client->client_id . '/edit')); ?>" data-loading-target="commonModalBody"
        data-modal-title="<?php echo e(cleanLang(__('lang.edit_client'))); ?>"
        data-action-url="<?php echo e(urlResource('/clients/' . $client->client_id . '?ref=list')); ?>" data-action-method="PUT"
        data-action-ajax-loading-target="clients-td-container">
        <span><?php echo e(cleanLang(__('lang.edit_client'))); ?></span>
    </button>
<?php endif; ?>


<!--Edit Client User-->
<?php if(config('visibility.action_buttons_edit')): ?>
    <a class="data-toggle-action-tooltip dropdown-item edit-add-modal-button js-ajax-ux-request reset-target-modal-form"
        data-toggle="modal" data-target="#commonModal"
        data-url="<?php echo e(urlResource('/contacts/' . $client->user->id . '/edit')); ?>" data-loading-target="commonModalBody"
        data-modal-title="<?php echo e(cleanLang(__('lang.edit_user'))); ?>"
        data-action-url="<?php echo e(urlResource('/contacts/' . $client->user->id . '?ref=list')); ?>" data-action-method="PUT"
        data-action-ajax-class="" data-action-ajax-loading-target="contacts-td-container">
        <span><?php echo e(cleanLang(__('lang.edit_user'))); ?></span>
    </a>
<?php endif; ?>
<?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/clients/components/table/dropdown-menu-team.blade.php ENDPATH**/ ?>