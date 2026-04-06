<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" id="meta-csrf" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('system.settings_company_name') }}</title>


    <!--
        web preview example
        http://example.com/invoices/29/pdf?view=preview
        {{ BASE_DIR . '/' }}
    -->

    @if (request('view') == 'preview')
        <base href="{{ url('/') }}" target="_self">
        <link href="public/vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    @else
        <base href="" target="_self">
        <link href="{{ BASE_DIR }}/public/vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    @endif

    <!-- [DYNAMIC] style sets dynamic paths to font files-->
    <style>
        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: normal;
            src: url('{{ storage_path('app/DejaVuSans.ttf') }}') format("truetype");
        }

        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: 400;
            src: url('{{ storage_path('app/DejaVuSans.ttf') }}') format("truetype");
        }

        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: bold;
            src: url('{{ storage_path('app/DejaVuSans-Bold.ttf') }}') format("truetype");
        }

        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: 600;
            src: url('{{ storage_path('app/DejaVuSans-Bold.ttf') }}') format("truetype");
        }
    </style>



    @if (request('view') == 'preview')
        <link href="{{ config('theme.selected_theme_pdf_css') }}" rel="stylesheet">
    @else
        <link href="{{ BASE_DIR }}/{{ config('theme.selected_theme_pdf_css') }}" rel="stylesheet">
    @endif

    <!--custom CSS file (DB) -->
    {!! customDPFCSS(config('system.settings2_bills_pdf_css')) !!}

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
</head>

<body class="pdf-page">

    <div class="bill-pdf {{ config('css.bill_mode') }} {{ $page['bill_mode'] ?? '' }}">

        <!--HEADER-->
        <div class="bill-header">
            <!--INVOICE HEADER-->
            @if ($bill->bill_type == 'invoice')
                <table>
                    <tbody>
                        <tr>
                            <td class="x-left">
                                <div class="x-logo">
                                    <img
                                        src="{{ BASE_DIR }}/storage/logos/app/{{ config('system.settings_system_logo_large_name') }}">
                                </div>
                            </td>
                            <td class="x-right">
                                <div class="x-bill-type">
                                    <!--draft-->

                                </div>
                            </td>
                            <!--abdul-->
                             <td class="x-right">
                            <div class="x-bill-type">
                                <!--draft-->
                               
                            </div>
                            <div class="x-bill-type">
                                <!--abdul-->

                                <h4><strong>{{ cleanLang(__('lang.invoice')) }} | {{ $bill->formatted_bill_invoiceid }}</strong></h4>
                             
                            </div>
                        </td>
                        </tr>
                        
                    </tbody>
                </table>
                                 <hr class="billing-mode-only-item">

            @endif
            <!--ESTIMATE HEADER-->
            @if ($bill->bill_type == 'estimate')
                <table>
                    <tbody>
                        <tr>
                            <td class="x-left">
                                <div class="x-logo">
                                    <img
                                        src="{{ BASE_DIR }}/storage/logos/app/{{ config('system.settings_system_logo_large_name') }}">
                                </div>
                            </td>
                            <!--<td class="x-right">-->
                            <!--    <div class="x-bill-type">-->
                            <!--</td>-->
                             <td class="x-right">
                            <div class="x-bill-type">
                               
                            <div class="x-bill-type">
                                <h4><strong>{{ cleanLang(__('lang.estimate')) }} | {{ $bill->formatted_bill_estimateid }}</strong></h4>
                            </div>
                        </td>
                        </tr>
                       
                    </tbody>
                </table>
                 <hr class="billing-mode-only-item">
            @endif
        </div>

        <!--ADDRESSES & DATES-->
        <div class="bill-addresses">
            <table>
                <tbody>
                    <tr>
                        <!--company-->
                        <td class="x-left">
                            <div class="x-company-name">
                                <h5 class="p-b-0 m-b-0 ">
                                    <strong>{{ config('system.settings_company_name') }}</strong>
                                </h5>
                            </div>
                            @if (config('system.settings_company_address_line_1'))
                                <div class="x-line">{{ config('system.settings_company_address_line_1') }}
                                </div>
                            @endif
                            @if (config('system.settings_company_state'))
                                <div class="x-line">
                                    {{ config('system.settings_company_state') }}
                                </div>
                            @endif
                            @if (config('system.settings_company_city'))
                                <div class="x-line">
                                    {{ config('system.settings_company_city') }}, @if (config('system.settings_company_zipcode'))
                                        {{ config('system.settings_company_zipcode') }}
                                    @endif
                                </div>
                            @endif

                            @if (config('system.settings_company_country'))
                                <div class="x-line">
                                    {{ config('system.settings_company_country') }}
                                </div>
                            @endif
                            
                            <!--custom company fields-->
                            @if (config('system.settings_company_customfield_1') != '')
                                <div class="x-line">
                                    {{ config('system.settings_company_customfield_1') }}
                                </div>
                            @endif
                            @if (config('system.settings_company_customfield_2') != '')
                                <div class="x-line">
                                    {{ config('system.settings_company_customfield_2') }}
                                </div>
                            @endif
                            @if (config('system.settings_company_customfield_3') != '')
                                <div class="x-line">
                                    {{ config('system.settings_company_customfield_3') }}
                                </div>
                            @endif
                            @if (config('system.settings_company_customfield_4') != '')
                                <div class="x-line">
                                    {{ config('system.settings_company_customfield_4') }}
                                </div>
                            @endif
                        </td>


                        <td></td>
                        <!--customer-->
                        <!--<td style="padding-left: 18%;"  class=" text-left ">-->
                        <td style="padding-left: 18%;" class=" text-left ">

                            <div class="x-company-name">

                                <h5 class="p-b-0 m-b-0">{{ cleanLang(__('lang.bill_to')) }}
                                    <strong >{{ $bill->client_company_name }}</strong>
                                </h5>
                            </div>
                            @if ($bill->client_billing_street)
                                <div class="x-line">
                                    {{ $bill->client_billing_street }}
                                </div>
                            @endif
                            @if ($bill->client_billing_city)
                                <div class="x-line">
                                    {{ $bill->client_billing_city }}, @if ($bill->client_billing_zip)
                                        {{ $bill->client_billing_zip }}
                                    @endif
                                </div>
                            @endif


                            @if ($bill->client_billing_country)
                                <div class="x-line">
                                    {{ $bill->client_billing_country }}
                                </div>
                            @endif

                            <!--custom fields-->
                            @foreach ($customfields as $field)
                                @if ($field->customfields_show_invoice == 'yes' && $field->customfields_status == 'enabled')
                                    @php $key = $field->customfields_name; @endphp
                                    @php $customfield = $bill[$key] ?? ''; @endphp
                                    @if ($customfield != '')
                                        <div class="x-line">
                                            {{ $field->customfields_title }}:
                                            {{ runtimeCustomFieldsFormat($customfield, $field->customfields_datatype) }}
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                      {{ $bill->owner_email }}

                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="bill-dates">
                <tbody>
                    <tr>
                        <!-- Omar Alsaied-->
                        <!--<td class="x-left">-->
                        <!--    @if ($bill->bill_type == 'invoice')-->
                        <!--        @include('pages.bill.components.elements.invoice.dates')-->
                        <!--        <h6> <strong>{{ cleanLang(__('lang.invoice')) }} | {{ $bill->formatted_bill_invoiceid }}</strong></h6>-->

                        <!--    @endif-->
                        <!--    @if ($bill->bill_type == 'estimate')-->
                        <!--        @include('pages.bill.components.elements.estimate.dates')-->
                        <!--        <h6> <strong>{{ cleanLang(__('lang.estimate')) }} | {{ $bill->formatted_bill_estimateid }}</strong></h6> -->

                        <!--    @endif-->
                        <!--</td>                        -->
                        <td class="x-right">
                            @if ($bill->bill_type == 'invoice')
                                @include('pages.bill.components.elements.invoice.payments')
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!--DATES & AMOUNT DUE-->


        <!--NOTES-->
        <!-- Omar Alsaied -->
        <div class="invoice-pdf-terms">
            <h6><strong>Details:</strong></h6>
            {!! clean($bill->bill_notes) !!}
        </div>
        
       <!--<div class="invoice-pdf-terms">-->
       <!--     <h6><strong>{{ cleanLang(__('lang.terms_and_conditions')) }}: </strong></h6>-->
       <!--     {!! clean($bill->bill_notes) !!}-->
       <!-- </div>-->


        <!--INVOICE TABLE-->
        <div class="bill-table-pdf">
            
            @include('pages.bill.components.elements.main-table')
        </div>

        <!-- TOTAL & SUMMARY -->
        <div class="bill-totals-table-pdf"><hr class="billing-mode-only-item">
            @include('pages.bill.components.elements.totals-table')
        </div>

        <!--TERMS-->
        <div class="invoice-pdf-terms">
            <h6><strong>{{ cleanLang(__('lang.terms')) }}</strong></h6>
            {!! clean($bill->bill_terms) !!}
        </div>
    </div>
</body>

</html>
