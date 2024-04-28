<?php $__env->startSection('title', __('header.contact') . ' -'); ?>

<?php $__env->startSection('content'); ?>
    <section id="certificates" class="certificates-area fix pt-120 pb-120"
             style=" background-image: url(../../assets/img/bg/event-bg-aliments.png); background-repeat: no-repeat; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-align text-center mb-10">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.my_certificates')): ?>
                            <h5><?php echo e(__('third.my_certificates')); ?></h5>
                        <?php else: ?>
                            <h5></h5>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('third.course_name')): ?>
                                            <th>
                                                <?php echo e(__('third.course_name')); ?>

                                            </th>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('third.trainer_name')): ?>
                                            <th>
                                                <?php echo e(__('third.trainer_name')); ?>

                                            </th>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('third.correct_question_count')): ?>
                                            <th>
                                                <?php echo e(__('third.correct_question_count')); ?>

                                            </th>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('third.total_question_count')): ?>

                                            <th>
                                                <?php echo e(__('third.total_question_count')); ?>

                                            </th>
                                        <?php endif; ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('third.operations')): ?>
                                            <th>
                                                <?php echo e(__('third.operations')); ?>

                                            </th>
                                        <?php endif; ?>
                                    </tr>
                                    <?php $__currentLoopData = $certificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($certificate->course?->title); ?>

                                            </td>
                                            <td>
                                                <?php echo e($certificate->course?->user->fullname); ?>

                                            </td>
                                            <td>
                                                <?php echo e($certificate->correct_count); ?>

                                            </td>
                                            <td>
                                                <?php echo e(count($certificate->course?->course_exams ?? [])); ?>

                                            </td>

                                            <td>

                                                <div>
                                                    <a href="/certificates/<?php echo e($certificate->id); ?>" class="setting-icon">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/resources/views/certificates.blade.php ENDPATH**/ ?>