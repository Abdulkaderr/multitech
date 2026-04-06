<div class="row">
    <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul data-modular-id="project_tabs_menu" class="nav nav-tabs profile-tab project-top-nav list-pages-crumbs"
            role="tablist">
            <!--overview-->
            <li class="nav-item">
                <a class="nav-link tabs-menu-item" href="/projects/{{ $project->project_id }}" role="tab"
                    id="tabs-menu-overview">{{ cleanLang(__('lang.overview')) }}</a>
            </li>

            <!--[milestones]-->


            <!--[estimate]-->
            @if (auth()->user()->role->role_estimates >= 1)
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_estimates'] ?? '' }}"
                        data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="{{ _url('/projects') }}/{{ $project->project_id }}/estimates"
                        data-url="{{ url('/estimates') }}?source=ext&estimateresource_id={{ $project->project_id }}&estimateresource_type=project"
                        href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.estimates')) }}</a>
                </li>
            @endif

            <!--[invoices]-->

            @if (config('settings.project_permissions_view_invoices'))
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_invoices'] ?? '' }}"
                        data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="{{ _url('/projects') }}/{{ $project->project_id }}/invoices"
                        data-url="{{ url('/invoices') }}?source=ext&invoiceresource_id={{ $project->project_id }}&invoiceresource_type=project"
                        href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.invoices')) }}</a>
                </li>
            @endif


            <!--[payments]-->
            @if (config('settings.project_permissions_view_payments'))
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_invoices'] ?? '' }}"
                        data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="{{ _url('/projects') }}/{{ $project->project_id }}/payments"
                        data-url="{{ url('/payments') }}?source=ext&paymentresource_id={{ $project->project_id }}&paymentresource_type=project"
                        href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.payments')) }}</a>
                </li>
            @endif
            <!--[expenses]-->
            @if (config('settings.project_permissions_view_expenses'))
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_invoices'] ?? '' }}"
                        data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="{{ _url('/projects') }}/{{ $project->project_id }}/expenses"
                        data-url="{{ url('/expenses') }}?source=ext&expenseresource_id={{ $project->project_id }}&expenseresource_type=project"
                        href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.expenses')) }}</a>
                </li>
            @endif

            <!--notes-->
            @if (config('settings.project_permissions_view_notes'))
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item  js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_notes'] ?? '' }}"
                        id="tabs-menu-notes" data-toggle="tab" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="{{ _url('/projects') }}/{{ $project->project_id }}/notes"
                        data-url="{{ url('/notes') }}?source=ext&noteresource_type=project&noteresource_id={{ $project->project_id }}"
                        href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.notes')) }}</a>
                </li>
            @endif

            <!--[files]-->
            @if (config('settings.project_permissions_view_files'))
                <li class="nav-item">
                    <a class="nav-link  tabs-menu-item   js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_files'] ?? '' }}"
                        data-toggle="tab" id="tabs-menu-files" data-loading-class="loading-tabs"
                        data-loading-target="embed-content-container"
                        data-dynamic-url="{{ _url('/projects') }}/{{ $project->project_id }}/files"
                        data-url="{{ url('/files') }}?source=ext&fileresource_type=project&fileresource_id={{ $project->project_id }}&filter_folderid={{ $project->default_folder_id }}"
                        href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.files')) }}</a>
                </li>
            @endif


            <!--billing-->
            @if (auth()->user()->is_team || auth()->user()->is_client_owner)
            @endif

            <!--[MODULES] - dynamic menu-->
            {!! config('module_menus.project_tabs_menu') !!}

            <!--[MODULES]-->

        </ul>
        <!-- Tab panes -->

        @include('pages.files.components.actions.checkbox-actions')

    </div>
</div>
