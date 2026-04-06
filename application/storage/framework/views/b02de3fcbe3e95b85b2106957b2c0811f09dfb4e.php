<!--each category-->
<div class="x-each-category <?php echo e($contacts['search_type'] ?? 'all'); ?>">

    <!--heading-->
    <?php if($contacts['search_type'] == 'all'): ?>
    <div class="x-heading clearfix">
        <span class="pull-left x-title">
            <?php echo app('translator')->get('lang.contacts'); ?>
        </span>
        <span class="pull-right x-count">
            <a href="javascript:void(0);" class="ajax-request" data-url="<?php echo e(url('search?search_type=contacts')); ?>"
                data-type="form" data-form-id="global-search-form" data-ajax-type="post"
                data-loading-target="global-search-form" name="search_query"><?php echo app('translator')->get('lang.view_all'); ?>
                (<?php echo e($contacts['count']); ?>)</a>
        </span>
    </div>
    <?php endif; ?>

    <!--results-->
    <ul>

        <!-- each result -->
        <?php $__currentLoopData = $contacts['results']->take(runtimeSearchDisplyLimit($contacts['search_type'])); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="contacts">
            <!--icon-->
            <span class="x-icon">
                <i class="sl-icon-people"></i>
            </span>
            <!--title-->
            <span class="x-title">
                <a href="<?php echo e(url('clients/'.$contact->client_id.'/contacts')); ?>"><?php echo e($contact->first_name); ?>

                    <?php echo e($contact->last_name); ?></a>
            </span>
            <!--meta-->
            <span class="x-meta">
                - <?php echo e($contact->client_company_name ?? '---'); ?>

            </span>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!--ajax loading-->

    </ul>
</div><?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/search/results/contacts.blade.php ENDPATH**/ ?>