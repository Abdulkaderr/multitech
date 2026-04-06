<div class="row">
    <div class="col-lg-12">
        <div class="p-b-10 text-right"><small><?php echo e(runtimeDate($note->note_created)); ?></small></div>
        <div class="p-b-30"><?php echo clean($note->note_description) ?? '---'; ?></div>
    </div>
    <div class="col-lg-12">
        <div class="p-t-30">
            <h6><?php echo app('translator')->get('lang.attachments'); ?></h6>
            <table class="table table-bordered">
                <tbody>
                    <?php $__currentLoopData = $attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="note_attachment_<?php echo e($attachment->attachment_id); ?>">
                        <td><a href="notes/attachments/download/<?php echo e($attachment->attachment_uniqiueid); ?>" download>
                                <?php echo e($attachment->attachment_filename); ?>

                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/u446360577/domains/multitech-mt.nl/public_html/my/application/resources/views/pages/notes/components/modals/show-note.blade.php ENDPATH**/ ?>