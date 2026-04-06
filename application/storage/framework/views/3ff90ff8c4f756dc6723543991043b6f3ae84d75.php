<!--rows-->
<?php $__currentLoopData = $estimates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estimate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><a href="<?php echo e(url('clients/'.$estimate->bill_clientid)); ?>"><?php echo e(str_limit_reports($estimate->client_company_name ?? '---', 40)); ?></a>
    </td>
    <td data-tableexport-cellformat=""><?php echo e($estimate->estimate_count); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($estimate->sum_bill_amount_before_tax)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($estimate->sum_bill_tax_total_amount)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($estimate->sum_bill_discount_amount)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4">
        <?php echo e(runtimeMoneyFormat($estimate->sum_bill_adjustment_amount)); ?></td>
    <td class="data-type-money" data-tableexport-xlsxformatid="4"><?php echo e(runtimeMoneyFormat($estimate->sum_bill_final_amount)); ?>

    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/reports/estimates/client/ajax.blade.php ENDPATH**/ ?>