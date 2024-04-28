<?php $__env->startSection('title', $event->title . ' -'); ?>

<?php $__env->startSection('content'); ?>
    <section class="breadcrumb-area d-flex align-items-center"
             style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2><?php echo e($event->title); ?></h2>
                            <div class="breadcrumb-wrap">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                            <li class="breadcrumb-item"><a asp-controller="Home" href="/"
                                                                           asp-action="Index"><?php echo e(__('header.home')); ?></a>
                                            </li>
                                        <?php endif; ?>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($event->title); ?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-blog b-details-p pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <div class="details__content pb-30">
                            <div class="bsingle__post-thumb mb-30">
                                <img src="<?php echo e(asset('uploads/' . $event->image)); ?>" alt="events">
                            </div>
                            <h2><?php echo e($event->title); ?></h2>
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-calendar-alt"></i> <?php echo e($event->start_date->format('d.M.Y')); ?>

                                    </li>
                                </ul>
                            </div>
                            <p><?php echo e($event->content); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar-widget">
                        <section class="widget widget_search">
                            <div class="course-widget-price">
                                <?php if(\Illuminate\Support\Facades\Lang::has('third.event_feature')): ?>
                                    <h2 class="widget-title"><?php echo e(__('third.event_feature')); ?></h2>
                                <?php endif; ?>
                                <ul>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.start_date')): ?>
                                        <li>
                                            <i class="fal fa-calendar-alt"></i>
                                            <span><?php echo e(__('third.start_date')); ?></span>
                                            <span class="time"><?php echo e($event->start_date->format('d.M.Y')); ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.time')): ?>
                                        <li>
                                            <i class="fal fa-clock"></i>
                                            <span><?php echo e(__('third.time')); ?></span>
                                            <span class="time"><?php echo e($event->start_date->format('H:i')); ?></span>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.place')): ?>
                                        <li>
                                            <i class="icon fal fa-map-marker-check"></i>
                                            <span><?php echo e(__('third.place')); ?></span>

                                            <span class="time"><?php echo e($event->place); ?></span>
                                        </li>
                                    <?php endif; ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.organizer')): ?>
                                        <li>
                                            <i class="fal fa-plus-hexagon"></i>
                                            <span><?php echo e(__('third.organizer')); ?></span>
                                            <span class="time"><?php echo e($event->organizer); ?></span>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.phone')): ?>
                                        <li>
                                            <i class="icon fal fa-phone"></i>
                                            <span><?php echo e(__('third.phone')); ?></span>
                                            <span class="time"><?php echo e($event->phone); ?></span>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.email')): ?>
                                        <li>
                                            <i class="icon fal fa-envelope"></i>
                                            <span><?php echo e(__('third.email')); ?></span>
                                            <span class="time"><?php echo e($event->email); ?></span>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(\Illuminate\Support\Facades\Lang::has('third.website')): ?>
                                        <li>
                                            <i class="fal fa-user"></i>
                                            <span><?php echo e(__('third.website')); ?></span>
                                            <span class="time">
                                            <a href="<?php echo e($event->link); ?>"><?php echo e(__('third.zoom')); ?></a>
                                        </span>
                                        </li>
                                    <?php endif; ?>

                                </ul>
                                <?php if($event_user < 1): ?>
                                    <form action="/join-event/<?php echo e($event->id); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php if(\Illuminate\Support\Facades\Lang::has('third.join')): ?>
                                            <button class="btn ss-btn mt-30" href="#"><?php echo e(__('third.join')); ?></button>
                                        <?php endif; ?>
                                    </form>
                                <?php else: ?>
                                    <form action="#">
                                        <button class="btn ss-btn mt-30" href="#"
                                                disabled><?php echo e(__('third.already_joined')); ?></button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/resources/views/events/single.blade.php ENDPATH**/ ?>