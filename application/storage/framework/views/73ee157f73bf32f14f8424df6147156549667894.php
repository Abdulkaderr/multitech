<div class="row" id="js-trigger-invoices-modal-add-edit" data-payload="<?php echo e($page['section'] ?? ''); ?>">
    <div class="col-lg-12">

        <!--meta data - creatd by-->
        <?php if(isset($page['section']) && $page['section'] == 'edit'): ?>
        <div class="modal-meta-data">
            <small><strong><?php echo e(cleanLang(__('lang.created_by'))); ?>:</strong> <?php echo e($invoice->first_name); ?>

                <?php echo e($invoice->last_name); ?> |
                <?php echo e(runtimeDate($invoice->bill_created)); ?></small>
        </div>
        <?php endif; ?>



        <!--client and project-->
        <?php if(config('visibility.invoice_modal_client_project_fields')): ?>
        <!--client-->
        <div class="client-selector">

            <!--existing client-->
            <div class="client-selector-container" id="client-existing-container">
                <div class="form-group row">
                    <label
                        class="col-sm-12 col-lg-3 text-left control-label col-form-label  required"><?php echo e(cleanLang(__('lang.client'))); ?>*</label>
                    <div class="col-sm-12 col-lg-9">
                        <!--select2 basic search-->
                        <select name="bill_clientid" id="bill_clientid"
                            class="clients_and_projects_toggle form-control form-control-sm js-select2-basic-search-modal select2-hidden-accessible"
                            data-projects-dropdown="bill_projectid" data-feed-request-type="clients_projects"
                            data-ajax--url="<?php echo e(url('/')); ?>/feed/company_names">
                            <!--regular invoices-->
                            <?php if(isset($invoice->bill_clientid) && $invoice->bill_clientid != ''): ?>
                            <option value="<?php echo e($invoice->bill_clientid ?? ''); ?>"><?php echo e($invoice->client_company_name); ?>

                            </option>
                            <?php endif; ?>
                            <!--creating invoice from an expense-->
                            <?php if(config('visibility.invoice_from_expense_client_name')): ?>
                            <option value="<?php echo e($expense->expense_clientid ?? ''); ?>"><?php echo e($expense->client_company_name); ?>

                            </option>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <!--projects-->
                <div class="form-group row">
                    <label
                        class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.project'))); ?></label>
                    <div class="col-sm-12 col-lg-9">
                        <select class="select2-basic form-control form-control-sm dynamic_bill_projectid" data-allow-clear="true"
                            id="bill_projectid" name="bill_projectid" disabled>
                        </select>
                    </div>
                </div>
            </div>

            <!--new client-->
            <div class="client-selector-container hidden" id="client-new-container">
                <div class="form-group row">
                    <label
                        class="col-sm-12 col-lg-4 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.company_name'))); ?>*</label>
                    <div class="col-sm-12 col-lg-8">
                        <input type="text" class="form-control form-control-sm" id="client_company_name"
                            name="client_company_name">
                    </div>
                </div>

                     <input type="hidden" class="form-control form-control-sm" id="first_name" name="first_name"
                value="First Name" placeholder="">




            <input type="hidden" class="form-control form-control-sm" id="last_name" name="last_name" value="Last Name"
                placeholder="">


            <div class="form-group row">
                <label
                    class="col-sm-12 col-lg-3 text-left control-label col-form-label "><?php echo e(cleanLang(__('lang.email_address'))); ?>*</label>
                <div class="col-sm-12 col-lg-9">
                    <input type="email" class="form-control form-control-sm" id="email" name="email"
                        placeholder="">
                </div>
            </div>

        <!--billing address section-->
        <div id="add_client_billing_address_section">
            <div class="form-group row">
                <label
                    class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.street'))); ?></label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" id="client_billing_street"
                        name="client_billing_street" value="<?php echo e($client->client_billing_street ?? ''); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label
                    class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.city'))); ?></label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" id="client_billing_city"
                        name="client_billing_city" value="<?php echo e($client->client_billing_city ?? ''); ?>">
                </div>
            </div>

            <div class="form-group row">
                <label
                    class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.zipcode'))); ?></label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" id="client_billing_zip"
                        name="client_billing_zip" value="<?php echo e($client->client_billing_zip ?? ''); ?>">
                </div>
            </div>



            <div class="form-group row">
                <label
                    class="col-sm-12 col-lg-3 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.vat_tax_number'))); ?></label>
                <div class="col-sm-12 col-lg-9">
                    <input type="text" class="form-control form-control-sm" id="client_vat" name="client_vat"
                        value="<?php echo e($client->client_vat ?? ''); ?>">
                </div>
            </div>
            <div class="line"></div>
        </div>
        <!--billing address section-->
            </div>

            <!--option buttons-->
            <div class="client-selector-links">
                <a href="javascript:void(0)" class="client-type-selector" data-type="new"
                    data-target-container="client-new-container"><?php echo app('translator')->get('lang.new_client'); ?></a> |
                <a href="javascript:void(0)" class="client-type-selector active" data-type="existing"
                    data-target-container="client-existing-container"><?php echo app('translator')->get('lang.existing_client'); ?></a>
            </div>

            <!--client type indicator-->
            <input type="hidden" name="client-selection-type" id="client-selection-type" value="existing">
        </div>

        <?php endif; ?>



        <!--invoice date-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.invoice_date'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control  form-control-sm pickadate" name="bill_date_add_edit"
                    autocomplete="off" value="<?php echo e(runtimeDatepickerDate($invoice->bill_date ?? '')); ?>">
                <input class="mysql-date" type="hidden" name="bill_date" id="bill_date_add_edit"
                    value="<?php echo e($invoice->bill_date ?? ''); ?>">
            </div>
        </div>

        <!--due date-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label required"><?php echo e(cleanLang(__('lang.due_date'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <input type="text" class="form-control form-control-sm pickadate" name="bill_due_date_add_edit"
                    autocomplete="off" value="<?php echo e(runtimeDatepickerDate($invoice->bill_due_date ?? '')); ?>">
                <input class="mysql-date" type="hidden" name="bill_due_date" id="bill_due_date_add_edit"
                    value="<?php echo e($invoice->bill_due_date ?? ''); ?>">
            </div>
        </div>



        <!--clients projects-->
        <?php if(config('visibility.invoice_modal_clients_projects')): ?>
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label  required"><?php echo e(cleanLang(__('lang.project'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm" id="bill_projectid" name="bill_projectid">
                    <?php $__currentLoopData = config('settings.clients_projects'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($project->project_id ?? ''); ?>"><?php echo e($project->project_title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <?php endif; ?>

        <!--invoice category-->
        <div class="form-group row">
            <label
                class="col-sm-12 col-lg-3 text-left control-label col-form-label  required"><?php echo e(cleanLang(__('lang.category'))); ?>*</label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm" id="bill_categoryid" name="bill_categoryid">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->category_id); ?>"
                        <?php echo e(runtimePreselected($invoice->bill_categoryid ?? '', $category->category_id)); ?>><?php echo e(runtimeLang($category->category_name)); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>


         <!--Omar Alsaied:
            invoice ID-->
        <div class="form-group row">
            <label
                    class="col-sm-12 col-lg-3 text-left control-label col-form-label  required">Available IDs *</label>
            <div class="col-sm-12 col-lg-9">
                <select class="select2-basic form-control form-control-sm" id="bill_reusedid" name="bill_reusedid">
                    <option value="default" selected>Default</option>
                    <?php $__currentLoopData = $available_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value); ?>"><?php echo e($label); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div><small><strong> leaving this at default will create the invoice with the automatic generated ID by the Database </strong></small></div>

        </div>
        <!-- end of Omar Updates-->

        <div class="line"></div>


        <!--otions toggle-->
        <div class="spacer row">
            <div class="col-sm-12 col-lg-8">
                <span class="title"><?php echo e(cleanLang(__('lang.additional_information'))); ?></span class="title">
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="switch  text-right">
                    <label>
                        <input type="checkbox" class="js-switch-toggle-hidden-content"
                            data-target="edit_bill_recurring_toggle">
                        <span class="lever switch-col-light-blue"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="hidden" id="edit_bill_recurring_toggle">
            <!--tags-->

            <!-- notes-->
            <div class="form-group row">
                <label class="col-12 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.notes'))); ?></label>
                <div class="col-12">
                    <textarea id="bill_notes" name="bill_notes"
                        class="tinymce-textarea"><?php echo e($invoice->bill_notes ?? ''); ?></textarea>
                </div>
            </div>


            <!-- terms-->
            <div class="form-group row">
                <label
                    class="col-12 text-left control-label col-form-label"><?php echo e(cleanLang(__('lang.terms_and_conditions'))); ?></label>
                <div class="col-12">
                    <textarea id="bill_terms" name="bill_terms" class="tinymce-textarea">
                        <?php if(isset($page['section']) && $page['section'] == 'create'): ?>
                        <?php echo e(config('system.settings_invoices_default_terms_conditions')); ?>

                        <?php else: ?>
                        <?php echo e($invoice->bill_terms ?? ''); ?>

                        <?php endif; ?>                 
                </textarea>
                </div>
            </div>
        </div>
        <!--/#options toggle-->



        <!--source-->
        <input type="hidden" name="source" value="<?php echo e(request('source')); ?>">

        <!--expenses payload-->
        <?php if(config('visibility.invoice_modal_expenses_payload')): ?>
        <input type="hidden" name="expense_payload[]" value="<?php echo e(config('settings.expense_id')); ?>">
        <?php endif; ?>

        <!--notes-->
        <div class="row">
            <div class="col-12">
                <div><small><strong>* <?php echo e(cleanLang(__('lang.required'))); ?></strong></small></div>
            </div>
        </div>

        <!--recurring notes-->
        <div class="alert alert-info m-t-10"><i class="sl-icon-refresh text-warning"></i>
            <?php echo e(cleanLang(__('lang.recurring_invoice_options_info'))); ?></div>
    </div>
</div><?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/invoices/components/modals/add-edit-inc.blade.php ENDPATH**/ ?>