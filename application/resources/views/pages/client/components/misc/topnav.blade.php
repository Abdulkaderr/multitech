<!-- Nav tabs -->
<ul class="nav nav-tabs profile-tab" role="tablist">
    <!--timeline-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item {{ $page['tabmenu_timeline'] ?? '' }}"
            href="{{ url('clients') }}/{{ $client->client_id }}"
            role="tab">{{ cleanLang(__('lang.timeline')) }}</a>
    </li>
      <!--invoices-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_invoices'] ?? '' }}"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container"
            data-dynamic-url="{{ url('/clients') }}/{{ $client->client_id }}/invoices"
            data-url="{{ url('/invoices') }}?source=ext&page=1&invoiceresource_id={{ $client->client_id }}&invoiceresource_type=client"
            href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.invoices')) }}</a>
    </li>
       <!--estimates-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_estimates'] ?? '' }}"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container"
            data-dynamic-url="{{ url('/clients') }}/{{ $client->client_id }}/estimates"
            data-url="{{ url('/estimates') }}?source=ext&page=1&estimateresource_id={{ $client->client_id }}&estimateresource_type=client"
            href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.estimates')) }}</a>
    </li>
    <!--expenses-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_expenses'] ?? '' }}"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container"
            data-dynamic-url="{{ url('/clients') }}/{{ $client->client_id }}/expenses"
            data-url="{{ url('/expenses') }}?source=ext&page=1&expenseresource_id={{ $client->client_id }}&expenseresource_type=client"
            href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.expenses')) }}</a>
    </li>
    <!--payments-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_payments'] ?? '' }}"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container"
            data-dynamic-url="{{ url('/clients') }}/{{ $client->client_id }}/payments"
            data-url="{{ url('/payments') }}?source=ext&page=1&paymentresource_id={{ $client->client_id }}&paymentresource_type=client"
            href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.payments')) }}</a>
    </li>
   
      <!--projects-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_projects'] ?? '' }}"
            data-toggle="tab" data-loading-class="loading-tabs" id="tabs-menu-projects"
            data-loading-target="embed-content-container"
            data-dynamic-url="{{ _url('clients/'.$client->client_id.'/projects') }}"
            data-url="{{ url('/projects') }}?projectresource_type=client&projectresource_id={{ $client->client_id }}&source=ext&page=1"
            href="#clients_ajaxtab" role="tab">{{ cleanLang(__('lang.projects')) }}</a>
    </li>
    <!--contracts-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_contracts'] ?? '' }}"
            data-toggle="tab" data-loading-class="loading-tabs" id="tabs-menu-contracts"
            data-loading-target="embed-content-container"
            data-dynamic-url="{{ url('clients') }}/{{ $client->client_id }}/projects"
            data-url="{{ url('/contracts') }}?contractresource_id={{ $client->client_id }}&id={{ $client->client_id }}&contractresource_type=client&source=ext&page=1"
            href="#clients_ajaxtab" role="tab">{{ cleanLang(__('lang.contracts')) }}</a>
    </li>
    <!--details, notes, files (dropdown)-->
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle tabs-menu-item" data-toggle="dropdown" href="javascript:void(0)"
            role="button" aria-haspopup="true" aria-expanded="false">
            <span class="hidden-xs-down">{{ cleanLang(__('lang.other')) }}</span>
        </a>
        <div class="dropdown-menu" x-placement="bottom-start">
            <!--details-->
            <a class="dropdown-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_details'] ?? '' }}"
                data-toggle="tab" data-loading-class="loading-tabs"
                data-loading-target="embed-content-container"
                data-dynamic-url="{{ _url('/clients') }}/{{ $client->client_id }}/details"
                data-url="{{ _url('/clients') }}/{{ $client->client_id }}/client-details"
                href="#clients_ajaxtab" role="tab">{{ cleanLang(__('lang.details')) }}</a>
            <!--notes-->
            <a class="dropdown-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_notes'] ?? '' }}"
                id="tabs-menu-notes" data-toggle="tab" data-loading-class="loading-tabs"
                data-loading-target="embed-content-container"
                data-dynamic-url="{{ url('clients') }}/{{ $client->client_id }}/notes"
                data-url="{{ url('/notes') }}?source=ext&page=1&noteresource_type=client&noteresource_id={{ $client->client_id }}"
                href="#clients_ajaxtab" role="tab">{{ cleanLang(__('lang.notes')) }}</a>
            <!--files-->
            <a class="dropdown-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_files'] ?? '' }}"
                data-toggle="tab" data-loading-class="loading-tabs"
                data-loading-target="embed-content-container"
                data-dynamic-url="{{ url('/client') }}/{{ $client->client_id }}/project-files"
                data-url="{{ url('/files') }}?fileresource_type=project&filter_file_clientid={{ $client->client_id }}&source=ext&page=1"
                href="#projects_ajaxtab" role="tab">{{ cleanLang(__('lang.files')) }}</a>
        </div>
    </li>
    <!--contacts-->
    <li class="nav-item">
        <a class="nav-link tabs-menu-item js-dynamic-url js-ajax-ux-request {{ $page['tabmenu_contacts'] ?? '' }}"
            data-toggle="tab" data-loading-class="loading-tabs"
            data-loading-target="embed-content-container" id="tabs-menu-contacts"
            data-dynamic-url="{{ url('clients') }}/{{ $client->client_id }}/contacts"
            data-url="{{ url('/contacts') }}?contactresource_type=client&contactresource_id={{ $client->client_id }}&source=ext&page=1"
            href="#clients_ajaxtab" role="tab">{{ cleanLang(__('lang.email')) }}</a>
    </li>
  
   
 
</ul>
