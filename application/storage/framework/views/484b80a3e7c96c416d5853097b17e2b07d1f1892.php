<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" id="js-trigger-nav-team">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" id="main-scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav" id="main-sidenav">
            <ul id="sidebarnav" data-modular-id="main_menu_team">



                <!--home-->
                <?php if(auth()->user()->role->role_homepage == 'dashboard'): ?>
                <li data-modular-id="main_menu_team_home"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_home'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.home'))); ?>">
                    <a class="waves-effect waves-dark" href="/home" aria-expanded="false" target="_self">
                        <i class="ti-home"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.dashboard'))); ?>

                        </span>
                    </a>
                </li>
                <!--home-->
                <?php endif; ?>

     <!-- Customers -->
                <?php if(runtimeGroupMenuVibility([config('visibility.modules.clients'), config('visibility.modules.users')])): ?>
                <li data-modular-id="main_menu_team_clients"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_customers'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.clients'))); ?>">
                    <?php if(config('visibility.modules.clients')): ?>
                    <a class="waves-effect waves-dark" href="/clients" aria-expanded="false" target="_self">
                        <i class="ti-user"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.clients'))); ?></span>
                    </a>
                    <?php endif; ?>
                </li>
                <?php endif; ?>

 <!--projects[done]-->
                <?php if(config('visibility.modules.projects')): ?>
                <li data-modular-id="main_menu_team_projects"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_projects'] ?? ''); ?>">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false">
                        <i class="ti-folder"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.projects'))); ?>

                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <?php if(config('system.settings_projects_categories_main_menu') == 'yes'): ?>
                        <?php $__currentLoopData = config('projects_categories'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="sidenav-submenu" id="submenu_projects">
                            <a href="<?php echo e(_url('/projects?filter_category='.$category->category_id)); ?>"
                                class="<?php echo e($page['submenu_projects_category_'.$category->category_id] ?? ''); ?>"><?php echo e($category->category_name); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <li class="sidenav-submenu <?php echo e($page['submenu_projects'] ?? ''); ?>" id="submenu_projects">
                            <a href="<?php echo e(_url('/projects')); ?>"
                                class="<?php echo e($page['submenu_projects'] ?? ''); ?>"><?php echo e(cleanLang(__('lang.projects'))); ?></a>
                        </li>
                        <?php endif; ?>
                    
                    </ul>
                </li>
                <?php endif; ?>
                <!--projects-->


                <!--tasks[done]-->
                <?php if(config('visibility.modules.tasks')): ?>
                <li data-modular-id="main_menu_team_tasks"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_tasks'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.tasks'))); ?>">
                    <a class="waves-effect waves-dark" href="/tasks" aria-expanded="false" target="_self">
                        <i class="ti-menu-alt"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.tasks'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--tasks-->

                <!--leads[done]-->
                <?php if(config('visibility.modules.leads')): ?>
                <li data-modular-id="main_menu_team_leads"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_leads'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.leads'))); ?>">
                    <a class="waves-effect waves-dark" href="/leads" aria-expanded="false" target="_self">
                        <i class="sl-icon-call-in"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.leads'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--leads-->

                <!-- Sales -->
                <?php if(runtimeGroupMenuVibility([config('visibility.modules.invoices'), config('visibility.modules.estimates'), config('visibility.modules.subscriptions'), config('visibility.modules.expenses'), config('visibility.modules.products')])): ?>
                <!-- Invoices -->
                <?php if(config('visibility.modules.invoices')): ?>
                <li data-modular-id="main_menu_team_invoices"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_invoices'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.invoices'))); ?>">
                    <a class="waves-effect waves-dark" href="/invoices" aria-expanded="false" target="_self">
                        <i class="ti-receipt"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.invoices'))); ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <!-- Estimates -->
                <?php if(config('visibility.modules.estimates')): ?>
                <li data-modular-id="main_menu_team_estimates"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_estimates'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.estimates'))); ?>">
                    <a class="waves-effect waves-dark" href="/estimates" aria-expanded="false" target="_self">
                        <i class="ti-clipboard"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.estimates'))); ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <!-- Subscriptions -->
                <?php if(config('visibility.modules.subscriptions')): ?>
                <li data-modular-id="main_menu_team_subscriptions"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_subscriptions'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.subscriptions'))); ?>">
                    <a class="waves-effect waves-dark" href="/subscriptions" aria-expanded="false" target="_self">
                        <i class="ti-reload"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.subscriptions'))); ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <!-- Expenses -->
                <?php if(config('visibility.modules.expenses')): ?>
                <li data-modular-id="main_menu_team_expenses"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_expenses'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.expenses'))); ?>">
                    <a class="waves-effect waves-dark" href="/expenses" aria-expanded="false" target="_self">
                        <i class="ti-money"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.expenses'))); ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <!-- Products -->
                <?php if(config('visibility.modules.products')): ?>
                <li data-modular-id="main_menu_team_products"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_products'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.products'))); ?>">
                    <a class="waves-effect waves-dark" href="/products" aria-expanded="false" target="_self">
                        <i class="ti-package"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.products'))); ?></span>
                    </a>
                </li>
                <?php endif; ?>
                <?php endif; ?>

                

                <!--proposals [multiple]-->
                <?php if(config('visibility.modules.proposals') && auth()->user()->role->role_templates_proposals > 0): ?>
                <!--multipl menu-->
                <li data-modular-id="main_menu_team_proposals"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_proposals'] ?? ''); ?>">
                    <!--multiple menu-->
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false">
                        <i class="ti-bookmark-alt"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.proposals'))); ?>

                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="sidenav-submenu <?php echo e($page['submenu_proposals'] ?? ''); ?>" id="submenu_proposals">
                            <a href="<?php echo e(_url('/proposals')); ?>"
                                class="<?php echo e($page['submenu_proposals'] ?? ''); ?>"><?php echo e(cleanLang(__('lang.proposals'))); ?></a>
                        </li>
                        <li class="sidenav-submenu <?php echo e($page['submenu_proposal_templates'] ?? ''); ?>"
                            id="submenu_proposal_templates">
                            <a href="<?php echo e(_url('/templates/proposals')); ?>"
                                class="<?php echo e($page['submenu_templates'] ?? ''); ?>"><?php echo e(cleanLang(__('lang.templates'))); ?></a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <!--proposals-->

                <!--proposals [single]-->
                <?php if(config('visibility.modules.proposals') && auth()->user()->role->role_templates_proposals == 0): ?>
                <li data-modular-id="main_menu_team_proposals"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_proposals'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.proposals'))); ?>">
                    <a class="waves-effect waves-dark p-r-20" href="/proposals" aria-expanded="false" target="_self">
                        <i class="ti-bookmark-alt"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.proposals'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>


                <!--contracts [multiple]-->
                <?php if(config('visibility.modules.contracts') && auth()->user()->role->role_templates_contracts > 0): ?>
                <!--multipl menu-->
                <li data-modular-id="main_menu_team_contracts"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_contracts'] ?? ''); ?>">
                    <!--multiple menu-->
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false">
                        <i class="ti-write"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.contracts'))); ?>

                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li class="sidenav-submenu <?php echo e($page['submenu_contracts'] ?? ''); ?>" id="submenu_contracts">
                            <a href="<?php echo e(_url('/contracts')); ?>"
                                class="<?php echo e($page['submenu_contracts'] ?? ''); ?>"><?php echo e(cleanLang(__('lang.contracts'))); ?></a>
                        </li>
                        <li class="sidenav-submenu <?php echo e($page['submenu_contract_templates'] ?? ''); ?>"
                            id="submenu_contract_templates">
                            <a href="<?php echo e(_url('/templates/contracts')); ?>"
                                class="<?php echo e($page['submenu_contract_templates'] ?? ''); ?>"><?php echo e(cleanLang(__('lang.templates'))); ?></a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <!--contracts-->

                <!--contracts [single]-->
                <?php if(config('visibility.modules.contracts') && auth()->user()->role->role_templates_contracts == 0): ?>
                <li data-modular-id="main_menu_team_contracts"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_contracts'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.contracts'))); ?>">
                    <a class="waves-effect waves-dark p-r-20" href="/contracts" aria-expanded="false" target="_self">
                        <i class="ti-write"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.contracts'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>





                <!--messaging-->
                <?php if(config('visibility.modules.messages')): ?>
                <li data-modular-id="main_menu_team_messages"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_messages'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.messages'))); ?>">
                    <a class="waves-effect waves-dark p-r-20" href="/messages" aria-expanded="false" target="_self">
                        <i class="sl-icon-bubbles"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.messages'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>

                <!--[MODULES] - dynamic menu-->
                <?php echo config('module_menus.main_menu_team'); ?>


                <!--spaces-->
                <?php if(config('visibility.modules.spaces')): ?>
                <li data-modular-id="main_menu_team_spaces hidden"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_spaces'] ?? ''); ?>">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false">
                        <i class="ti-layers"></i>
                        <span class="hide-menu"><?php echo app('translator')->get('lang.spaces'); ?>
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <?php if(config('system.settings2_spaces_user_space_status') == 'enabled'): ?>
                        <li class="sidenav-submenu <?php echo e($page['submenu_spaces_my'] ?? ''); ?>" id="submenu_spaces_my">
                            <a href="<?php echo e(_url('/spaces/'.auth()->user()->space_uniqueid)); ?>"
                                class="<?php echo e($page['submenu_spaces_my'] ?? ''); ?>">
                                <?php echo e(config('system.settings2_spaces_user_space_menu_name')); ?>

                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(config('system.settings2_spaces_team_space_status') == 'enabled'): ?>
                        <li class="sidenav-submenu <?php echo e($page['submenu_spaces_team'] ?? ''); ?>" id="submenu_spaces_team">
                            <a href="<?php echo e(_url('/spaces/'.config('system.settings2_spaces_team_space_id'))); ?>"
                                class="<?php echo e($page['submenu_spaces_team'] ?? ''); ?>">
                                <?php echo e(config('system.settings2_spaces_team_space_menu_name')); ?>

                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>
                <!--spaces-->



                <!--tickets [multiple]-->
                <?php if(auth()->user()->is_team): ?>
               
                <?php endif; ?>

                <!--tickets [single]-->
                <?php if(auth()->user()->is_client): ?>
                <li class="sidenav-menu-item <?php echo e($page['mainmenu_support'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.tickets'))); ?>">
                    <a class="waves-effect waves-dark" href="/tickets" aria-expanded="false" target="_self">
                        <i class="ti-comments"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.support'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--tickets-->


                <!--knowledgebase-->
                <?php if(config('visibility.modules.knowledgebase')): ?>
                <li data-modular-id="main_menu_team_knowledgebase"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_kb'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.knowledgebase'))); ?>">
                    <a class="waves-effect waves-dark p-r-20" href="/knowledgebase" aria-expanded="false"
                        target="_self">
                        <i class="sl-icon-docs"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.knowledgebase'))); ?>

                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--knowledgebase-->


                <!--knowledgebase-->
                <?php if(config('visibility.modules.reports')): ?>
                <li data-modular-id="main_menu_reports"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_reports'] ?? ''); ?> menu-tooltip menu-with-tooltip"
                    title="<?php echo e(cleanLang(__('lang.reports'))); ?>">
                    <a class="waves-effect waves-dark p-r-20" href="/reports" aria-expanded="false"
                        target="_self">
                        <i class="sl-icon-chart"></i>
                        <span class="hide-menu"><?php echo app('translator')->get('lang.reports'); ?>
                        </span>
                    </a>
                </li>
                <?php endif; ?>
                <!--knowledgebase-->

                <!--other-->
                <?php if(auth()->user()->is_team): ?>
                <li data-modular-id="main_menu_team_team"
                    class="sidenav-menu-item <?php echo e($page['mainmenu_settings'] ?? ''); ?>">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false">
                        <i class="ti-panel"></i>
                        <span class="hide-menu"><?php echo e(cleanLang(__('lang.other'))); ?>

                        </span>
                    </a>
                    <ul aria-expanded="false" class="position-top collapse">
                        <?php if(config('visibility.modules.team')): ?>
                        <li class="sidenav-submenu mainmenu_team <?php echo e($page['submenu_team'] ?? ''); ?>" id="submenu_team">
                            <a href="/team"
                                class="<?php echo e($page['submenu_team'] ?? ''); ?>"><?php echo e(cleanLang(__('lang.team_members'))); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php if(config('visibility.modules.timesheets')): ?>
                        <li class="sidenav-submenu mainmenu_timesheets <?php echo e($page['submenu_timesheets'] ?? ''); ?>"
                            id="submenu_timesheets">
                            <a href="/timesheets"
                                class="<?php echo e($page['submenu_timesheets'] ?? ''); ?>"><?php echo e(cleanLang(__('lang.time_sheets'))); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php if(auth()->user()->is_admin): ?>
                      
                      
                      
                        <li class="sidenav-submenu mainmenu_settings <?php echo e($page['submenu_settings'] ?? ''); ?>"
                            id="submenu_settings">
                            
                            <a href="/settings"
                                class="<?php echo e($page['submenu_settings'] ?? ''); ?>">E-mails verzonden</a>
                            
                            
                            <!--<a href="/settings"-->
                            <!--    class="<?php echo e($page['submenu_settings'] ?? ''); ?>"><?php echo e(cleanLang(__('lang.settings'))); ?></a>-->
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside><?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/nav/leftmenu-team.blade.php ENDPATH**/ ?>