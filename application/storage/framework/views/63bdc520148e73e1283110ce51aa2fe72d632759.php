<div class="row">
    <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul data-modular-id="project_tabs_menu" class="nav nav-tabs profile-tab project-top-nav list-pages-crumbs"
            role="tablist">
            <!--overview-->
            <li class="nav-item">
                <a class="nav-link tabs-menu-item" href="/projects/<?php echo e($project->project_id); ?>" role="tab"
                    id="tabs-menu-overview"><?php echo e(cleanLang(__('lang.overview'))); ?></a>
            </li>

            <!--[milestones]-->


            <!--[estimate]-->
            <?php if(auth()->user()->role->role_estimates >= 1): ?>
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_estimates'] ?? ''); ?>"
                        data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="<?php echo e(_url('/projects')); ?>/<?php echo e($project->project_id); ?>/estimates"
                        data-url="<?php echo e(url('/estimates')); ?>?source=ext&estimateresource_id=<?php echo e($project->project_id); ?>&estimateresource_type=project"
                        href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.estimates'))); ?></a>
                </li>
            <?php endif; ?>

            <!--[invoices]-->

            <?php if(config('settings.project_permissions_view_invoices')): ?>
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_invoices'] ?? ''); ?>"
                        data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="<?php echo e(_url('/projects')); ?>/<?php echo e($project->project_id); ?>/invoices"
                        data-url="<?php echo e(url('/invoices')); ?>?source=ext&invoiceresource_id=<?php echo e($project->project_id); ?>&invoiceresource_type=project"
                        href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.invoices'))); ?></a>
                </li>
            <?php endif; ?>


            <!--[payments]-->
            <?php if(config('settings.project_permissions_view_payments')): ?>
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_invoices'] ?? ''); ?>"
                        data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="<?php echo e(_url('/projects')); ?>/<?php echo e($project->project_id); ?>/payments"
                        data-url="<?php echo e(url('/payments')); ?>?source=ext&paymentresource_id=<?php echo e($project->project_id); ?>&paymentresource_type=project"
                        href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.payments'))); ?></a>
                </li>
            <?php endif; ?>
            <!--[expenses]-->
            <?php if(config('settings.project_permissions_view_expenses')): ?>
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_invoices'] ?? ''); ?>"
                        data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="<?php echo e(_url('/projects')); ?>/<?php echo e($project->project_id); ?>/expenses"
                        data-url="<?php echo e(url('/expenses')); ?>?source=ext&expenseresource_id=<?php echo e($project->project_id); ?>&expenseresource_type=project"
                        href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.expenses'))); ?></a>
                </li>
            <?php endif; ?>

            <!--notes-->
            <?php if(config('settings.project_permissions_view_notes')): ?>
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item  js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_notes'] ?? ''); ?>"
                        id="tabs-menu-notes" data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="<?php echo e(_url('/projects')); ?>/<?php echo e($project->project_id); ?>/notes"
                        data-url="<?php echo e(url('/notes')); ?>?source=ext&noteresource_type=project&noteresource_id=<?php echo e($project->project_id); ?>"
                        href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.notes'))); ?></a>
                </li>
            <?php endif; ?>

            <!--[files]-->
            <?php if(config('settings.project_permissions_view_files')): ?>
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request <?php echo e($page['tabmenu_files'] ?? ''); ?>"
                        data-toggle="tab" id="tabs-menu-files" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="<?php echo e(_url('/projects')); ?>/<?php echo e($project->project_id); ?>/files"
                        data-url="<?php echo e(url('/files')); ?>?source=ext&fileresource_type=project&fileresource_id=<?php echo e($project->project_id); ?>&filter_folderid=<?php echo e($project->default_folder_id); ?>"
                        href="#projects_ajaxtab" role="tab"><?php echo e(cleanLang(__('lang.files'))); ?></a>
                </li>
            <?php endif; ?>


            <!--billing-->
            <?php if(auth()->user()->is_team || auth()->user()->is_client_owner): ?>
            <?php endif; ?>

            <!--[MODULES] - dynamic menu-->
            <?php echo config('module_menus.project_tabs_menu'); ?>


            <!--[MODULES]-->

        </ul>
        <!-- Tab panes -->

        <?php echo $__env->make('pages.files.components.actions.checkbox-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/project/components/misc/topnav.blade.php ENDPATH**/ ?>