<!--each category-->
<div class="x-each-category <?php echo e($contracts['search_type'] ?? 'all'); ?>">

    <!--heading-->
    <?php if($contracts['search_type'] == 'all'): ?>
    <div class="x-heading clearfix">
        <span class="pull-left x-title">
            <?php echo app('translator')->get('lang.contracts'); ?>
        </span>
        <span class="pull-right x-count">
            <a href="javascript:void(0);" class="ajax-request" data-url="<?php echo e(url('search?search_type=contracts')); ?>"
                data-type="form" data-form-id="global-search-form" data-ajax-type="post"
                data-loading-target="global-search-form" name="search_query"><?php echo app('translator')->get('lang.view_all'); ?>
                (<?php echo e($contracts['count']); ?>)</a>
        </span>
    </div>
    <?php endif; ?>

    <!--results-->
    <ul>

        <!-- each result -->
        <?php $__currentLoopData = $contracts['results']->take(runtimeSearchDisplyLimit($contracts['search_type'])); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="contracts">
            <a href="javascript:void(0);">
                <!--icon-->
                <span class="x-icon">
                    <i class="ti-write"></i>
                </span>
                <!--title-->
                <span class="x-title">
                    <a href="<?php echo e(url('contracts/'.$contract->doc_id)); ?>"><?php echo e($contract->doc_title); ?></a>
                </span>
                <!--matched  on tags-->
                <?php if($contract->tags->isNotEmpty() && $contract->tags->contains('tag_title', $search_query)): ?>
                <span class="ti-bookmark x-tag-match" title="<?php echo app('translator')->get('lang.matched_tags'); ?>" data-toggle="tooltip"></span>
                <?php endif; ?>
                <!--meta-->
                <span class="x-meta">
                    - #<?php echo e(runtimeContractIdFormat($contract->doc_id)); ?> -
                    <?php echo e(str_limit($contract->project_title ?? '---', 50)); ?>

                </span>
            </a>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!--ajax loading-->

    </ul>
</div><?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/search/results/contracts.blade.php ENDPATH**/ ?>