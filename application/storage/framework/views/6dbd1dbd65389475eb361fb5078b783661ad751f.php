<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" id="meta-csrf" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo e(config('system.settings_company_name')); ?></title>


    <!--
        web preview example
        http://example.com/invoices/29/pdf?view=preview
        <?php echo e(BASE_DIR . '/'); ?>

    -->

    <?php if(request('view') == 'preview'): ?>
        <base href="<?php echo e(url('/')); ?>" target="_self">
        <link href="public/vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <?php else: ?>
        <base href="" target="_self">
        <link href="<?php echo e(BASE_DIR); ?>/public/vendor/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <?php endif; ?>

    <!-- [DYNAMIC] style sets dynamic paths to font files-->
    <style>
        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: normal;
            src: url('<?php echo e(storage_path('app/DejaVuSans.ttf')); ?>') format("truetype");
        }

        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: 400;
            src: url('<?php echo e(storage_path('app/DejaVuSans.ttf')); ?>') format("truetype");
        }

        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: bold;
            src: url('<?php echo e(storage_path('app/DejaVuSans-Bold.ttf')); ?>') format("truetype");
        }

        @font-face {
            font-family: 'DejaVuSans';
            font-style: normal;
            font-weight: 600;
            src: url('<?php echo e(storage_path('app/DejaVuSans-Bold.ttf')); ?>') format("truetype");
        }
    </style>



    <?php if(request('view') == 'preview'): ?>
        <link href="<?php echo e(config('theme.selected_theme_pdf_css')); ?>" rel="stylesheet">
    <?php else: ?>
        <link href="<?php echo e(BASE_DIR); ?>/<?php echo e(config('theme.selected_theme_pdf_css')); ?>" rel="stylesheet">
    <?php endif; ?>

    <!--custom CSS file (DB) -->
    <?php echo customDPFCSS(config('system.settings2_bills_pdf_css')); ?>


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
</head>

<body class="pdf-page">

    <div class="bill-pdf <?php echo e(config('css.bill_mode')); ?> <?php echo e($page['bill_mode'] ?? ''); ?>">

        <!--HEADER-->
        <div class="bill-header">
            <!--INVOICE HEADER-->
            <?php if($bill->bill_type == 'invoice'): ?>
                <table>
                    <tbody>
                        <tr>
                            <td class="x-left">
                                <div class="x-logo">
                                    <img
                                        src="<?php echo e(BASE_DIR); ?>/storage/logos/app/<?php echo e(config('system.settings_system_logo_large_name')); ?>">
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

                                <h4><strong><?php echo e(cleanLang(__('lang.invoice'))); ?> | <?php echo e($bill->formatted_bill_invoiceid); ?></strong></h4>
                             
                            </div>
                        </td>
                        </tr>
                        
                    </tbody>
                </table>
                                 <hr class="billing-mode-only-item">

            <?php endif; ?>
            <!--ESTIMATE HEADER-->
            <?php if($bill->bill_type == 'estimate'): ?>
                <table>
                    <tbody>
                        <tr>
                            <td class="x-left">
                                <div class="x-logo">
                                    <img
                                        src="<?php echo e(BASE_DIR); ?>/storage/logos/app/<?php echo e(config('system.settings_system_logo_large_name')); ?>">
                                </div>
                            </td>
                            <!--<td class="x-right">-->
                            <!--    <div class="x-bill-type">-->
                            <!--</td>-->
                             <td class="x-right">
                            <div class="x-bill-type">
                               
                            <div class="x-bill-type">
                                <h4><strong><?php echo e(cleanLang(__('lang.estimate'))); ?> | <?php echo e($bill->formatted_bill_estimateid); ?></strong></h4>
                            </div>
                        </td>
                        </tr>
                       
                    </tbody>
                </table>
                 <hr class="billing-mode-only-item">
            <?php endif; ?>
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
                                    <strong><?php echo e(config('system.settings_company_name')); ?></strong>
                                </h5>
                            </div>
                            <?php if(config('system.settings_company_address_line_1')): ?>
                                <div class="x-line"><?php echo e(config('system.settings_company_address_line_1')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_state')): ?>
                                <div class="x-line">
                                    <?php echo e(config('system.settings_company_state')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_city')): ?>
                                <div class="x-line">
                                    <?php echo e(config('system.settings_company_city')); ?>, <?php if(config('system.settings_company_zipcode')): ?>
                                        <?php echo e(config('system.settings_company_zipcode')); ?>

                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <?php if(config('system.settings_company_country')): ?>
                                <div class="x-line">
                                    <?php echo e(config('system.settings_company_country')); ?>

                                </div>
                            <?php endif; ?>
                            
                            <!--custom company fields-->
                            <?php if(config('system.settings_company_customfield_1') != ''): ?>
                                <div class="x-line">
                                    <?php echo e(config('system.settings_company_customfield_1')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_customfield_2') != ''): ?>
                                <div class="x-line">
                                    <?php echo e(config('system.settings_company_customfield_2')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_customfield_3') != ''): ?>
                                <div class="x-line">
                                    <?php echo e(config('system.settings_company_customfield_3')); ?>

                                </div>
                            <?php endif; ?>
                            <?php if(config('system.settings_company_customfield_4') != ''): ?>
                                <div class="x-line">
                                    <?php echo e(config('system.settings_company_customfield_4')); ?>

                                </div>
                            <?php endif; ?>
                        </td>


                        <td></td>
                        <!--customer-->
                        <!--<td style="padding-left: 18%;"  class=" text-left ">-->
                        <td style="padding-left: 18%;" class=" text-left ">

                            <div class="x-company-name">

                                <h5 class="p-b-0 m-b-0"><?php echo e(cleanLang(__('lang.bill_to'))); ?>

                                    <strong ><?php echo e($bill->client_company_name); ?></strong>
                                </h5>
                            </div>
                            <?php if($bill->client_billing_street): ?>
                                <div class="x-line">
                                    <?php echo e($bill->client_billing_street); ?>

                                </div>
                            <?php endif; ?>
                            <?php if($bill->client_billing_city): ?>
                                <div class="x-line">
                                    <?php echo e($bill->client_billing_city); ?>, <?php if($bill->client_billing_zip): ?>
                                        <?php echo e($bill->client_billing_zip); ?>

                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>


                            <?php if($bill->client_billing_country): ?>
                                <div class="x-line">
                                    <?php echo e($bill->client_billing_country); ?>

                                </div>
                            <?php endif; ?>

                            <!--custom fields-->
                            <?php $__currentLoopData = $customfields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($field->customfields_show_invoice == 'yes' && $field->customfields_status == 'enabled'): ?>
                                    <?php $key = $field->customfields_name; ?>
                                    <?php $customfield = $bill[$key] ?? ''; ?>
                                    <?php if($customfield != ''): ?>
                                        <div class="x-line">
                                            <?php echo e($field->customfields_title); ?>:
                                            <?php echo e(runtimeCustomFieldsFormat($customfield, $field->customfields_datatype)); ?>

                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php echo e($bill->owner_email); ?>


                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="bill-dates">
                <tbody>
                    <tr>
                        <!-- Omar Alsaied-->
                        <!--<td class="x-left">-->
                        <!--    <?php if($bill->bill_type == 'invoice'): ?>-->
                        <!--        <?php echo $__env->make('pages.bill.components.elements.invoice.dates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
                        <!--        <h6> <strong><?php echo e(cleanLang(__('lang.invoice'))); ?> | <?php echo e($bill->formatted_bill_invoiceid); ?></strong></h6>-->

                        <!--    <?php endif; ?>-->
                        <!--    <?php if($bill->bill_type == 'estimate'): ?>-->
                        <!--        <?php echo $__env->make('pages.bill.components.elements.estimate.dates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
                        <!--        <h6> <strong><?php echo e(cleanLang(__('lang.estimate'))); ?> | <?php echo e($bill->formatted_bill_estimateid); ?></strong></h6> -->

                        <!--    <?php endif; ?>-->
                        <!--</td>                        -->
                        <td class="x-right">
                            <?php if($bill->bill_type == 'invoice'): ?>
                                <?php echo $__env->make('pages.bill.components.elements.invoice.payments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
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
            <?php echo clean($bill->bill_notes); ?>

        </div>
        
       <!--<div class="invoice-pdf-terms">-->
       <!--     <h6><strong><?php echo e(cleanLang(__('lang.terms_and_conditions'))); ?>: </strong></h6>-->
       <!--     <?php echo clean($bill->bill_notes); ?>-->
       <!-- </div>-->


        <!--INVOICE TABLE-->
        <div class="bill-table-pdf">
            
            <?php echo $__env->make('pages.bill.components.elements.main-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!-- TOTAL & SUMMARY -->
        <div class="bill-totals-table-pdf"><hr class="billing-mode-only-item">
            <?php echo $__env->make('pages.bill.components.elements.totals-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <!--TERMS-->
        <div class="invoice-pdf-terms">
            <h6><strong><?php echo e(cleanLang(__('lang.terms'))); ?></strong></h6>
            <?php echo clean($bill->bill_terms); ?>

        </div>
    </div>
</body>

</html>
<?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/bill/bill-pdf.blade.php ENDPATH**/ ?>