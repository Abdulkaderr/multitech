<!-- Nav tabs -->
<ul class="nav nav-tabs profile-tab" role="tablist">
    <!--timeline-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item <?php echo e($page['tabmenu_timeline'] ?? ''); ?>"
            href="<?php echo e(url('clients')); ?>/<?php echo e($client->client_id); ?>"
            role="tab"><?php echo e(cleanLang(__('lang.timeline'))); ?></a>
    </li>
      <!--invoices-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_invoices'] ?? ''); ?>"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container"
            data-dynamic-url="<?php echo e(url('/clients')); ?>/<?php echo e($client->client_id); ?>/invoices"
            data-url="<?php echo e(url('/invoices')); ?>?source=ext&page=1&invoiceresource_id=<?php echo e($client->client_id); ?>&invoiceresource_type=client"
            href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.invoices'))); ?></a>
    </li>
       <!--estimates-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_estimates'] ?? ''); ?>"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container"
            data-dynamic-url="<?php echo e(url('/clients')); ?>/<?php echo e($client->client_id); ?>/estimates"
            data-url="<?php echo e(url('/estimates')); ?>?source=ext&page=1&estimateresource_id=<?php echo e($client->client_id); ?>&estimateresource_type=client"
            href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.estimates'))); ?></a>
    </li>
    <!--expenses-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_expenses'] ?? ''); ?>"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container"
            data-dynamic-url="<?php echo e(url('/clients')); ?>/<?php echo e($client->client_id); ?>/expenses"
            data-url="<?php echo e(url('/expenses')); ?>?source=ext&page=1&expenseresource_id=<?php echo e($client->client_id); ?>&expenseresource_type=client"
            href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.expenses'))); ?></a>
    </li>
    <!--payments-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_payments'] ?? ''); ?>"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container"
            data-dynamic-url="<?php echo e(url('/clients')); ?>/<?php echo e($client->client_id); ?>/payments"
            data-url="<?php echo e(url('/payments')); ?>?source=ext&page=1&paymentresource_id=<?php echo e($client->client_id); ?>&paymentresource_type=client"
            href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.payments'))); ?></a>
    </li>
   
      <!--projects-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_projects'] ?? ''); ?>"
            data-toggle="tab" data-loading-class="loading-tabs" id="tabs-menu-projects"
            data-loading-target="embed-content-container"
            data-dynamic-url="<?php echo e(_url('clients/'.$client->client_id.'/projects')); ?>"
            data-url="<?php echo e(url('/projects')); ?>?projectresource_type=client&projectresource_id=<?php echo e($client->client_id); ?>&source=ext&page=1"
            href="#clients_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.projects'))); ?></a>
    </li>
    <!--contracts-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_contracts'] ?? ''); ?>"
            data-toggle="tab" data-loading-class="loading-tabs" id="tabs-menu-contracts"
            data-loading-target="embed-content-container"
            data-dynamic-url="<?php echo e(url('clients')); ?>/<?php echo e($client->client_id); ?>/projects"
            data-url="<?php echo e(url('/contracts')); ?>?contractresource_id=<?php echo e($client->client_id); ?>&id=<?php echo e($client->client_id); ?>&contractresource_type=client&source=ext&page=1"
            href="#clients_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.contracts'))); ?></a>
    </li>
    <!--details, notes, files (dropdown)-->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle tabs-menu-item" data-toggle="dropdown" href="javascript:void(0)"
            role="button" aria-haspopup="true" aria-expanded="false">
            <span class="hidden-xs-down"><?php echo e(cleanLang(__('lang.other'))); ?></span>
        </a>
        <div class="dropdown-menu" x-placement="bottom-start">
            <!--details-->
            <a class="dropdown-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_details'] ?? ''); ?>"
                data-toggle="tab" data-loading-class="loading-tabs"
                data-loading-target="embed-content-container"
                data-dynamic-url="<?php echo e(_url('/clients')); ?>/<?php echo e($client->client_id); ?>/details"
                data-url="<?php echo e(_url('/clients')); ?>/<?php echo e($client->client_id); ?>/client-details"
                href="#clients_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.details'))); ?></a>
            <!--notes-->
            <a class="dropdown-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_notes'] ?? ''); ?>"
                id="tabs-menu-notes" data-toggle="tab" data-loading-class="loading-tabs"
                data-loading-target="embed-content-container"
                data-dynamic-url="<?php echo e(url('clients')); ?>/<?php echo e($client->client_id); ?>/notes"
                data-url="<?php echo e(url('/notes')); ?>?source=ext&page=1&noteresource_type=client&noteresource_id=<?php echo e($client->client_id); ?>"
                href="#clients_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.notes'))); ?></a>
            <!--files-->
            <a class="dropdown-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_files'] ?? ''); ?>"
                data-toggle="tab" data-loading-class="loading-tabs"
                data-loading-target="embed-content-container"
                data-dynamic-url="<?php echo e(url('/client')); ?>/<?php echo e($client->client_id); ?>/project-files"
                data-url="<?php echo e(url('/files')); ?>?fileresource_type=project&filter_file_clientid=<?php echo e($client->client_id); ?>&source=ext&page=1"
                href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.files'))); ?></a>
        </div>
    </li>
    <!--contacts-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_contacts'] ?? ''); ?>"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container" id="tabs-menu-contacts"
            data-dynamic-url="<?php echo e(url('clients')); ?>/<?php echo e($client->client_id); ?>/contacts"
            data-url="<?php echo e(url('/contacts')); ?>?contactresource_type=client&contactresource_id=<?php echo e($client->client_id); ?>&source=ext&page=1"
            href="#clients_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.email'))); ?></a>
    </li>
  
   
 
</ul>
<?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/client/components/misc/topnav.blade.php ENDPATH**/ ?>