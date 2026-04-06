        <div class="table-responsive">
            <?php if(@count($tasks) > 0): ?>
            <table id="task-task-addrow" class="table m-t-0 m-b-0 table-hover no-wrap contact-list" data-page-size="10">
                <thead>
                    <tr>
                        <!--product_task_title-->
                        <th class="col_product_task_title"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.title'); ?></a></th>

                        <!--actions-->
                        <th class="col_tasks_actions w-px-100"><a href="javascript:void(0)"><?php echo app('translator')->get('lang.actions'); ?></a></th>
                    </tr>
                </thead>
                <tbody id="task-td-container">
                    <!--ajax content here-->
                    <?php echo $__env->make('pages.itemtasks.table.ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--ajax content here-->
                </tbody>
            </table>
            <?php endif; ?> <?php if(@count($tasks ?? []) == 0): ?>
            <!--nothing found-->
            <?php echo $__env->make('notifications.no-results-found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--nothing found-->
            <?php endif; ?>
        </div><?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/itemtasks/table/table.blade.php ENDPATH**/ ?>