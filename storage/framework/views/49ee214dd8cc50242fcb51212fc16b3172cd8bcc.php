<?php $__env->startSection('title', __('header.blogs') . ' -'); ?>

<?php $__env->startSection('content'); ?>
<section class="breadcrumb-area d-flex align-items-center"
         style="background-image:url(<?php echo e(asset('assets/img/testimonial/test-bg.png')); ?>)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <?php if(\Illuminate\Support\Facades\Lang::has('header.blogs')): ?>
                        <h2><?php echo e(__('header.blogs')); ?></h2>
                        <?php else: ?>
                        <h2></h2>
                        <?php endif; ?>
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <?php if(\Illuminate\Support\Facades\Lang::has('header.home')): ?>
                                    <li class="breadcrumb-item"><a href="/"><?php echo e(__('header.home')); ?></a></li>
                                    <?php endif; ?>
                                    <?php if(\Illuminate\Support\Facades\Lang::has('header.blogs')): ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('header.blogs')); ?></li>
                                    <?php endif; ?>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner-blog pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bsingle__post mb-50">
                    <a href="<?php echo e(url('/blogs/' . $blog->id . '-' . slug($blog->title))); ?>">
                        <div class="bsingle__post-thumb">
                            <img src="<?php echo e(asset('uploads/' . $blog->image)); ?>" alt="<?php echo e($blog->title); ?>">
                        </div>
                        <div class="bsingle__content">
                            <div class="admin">
                                <a><i class="far fa-user"></i> <?php echo e($blog->user->fullname); ?></a>
                            </div>
                            <h2>
                                <a href="<?php echo e(url('/blogs/' . $blog->id . '-' . slug($blog->title))); ?>">
                                    <?php echo e($blog->title); ?>

                                </a>
                            </h2>
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-calendar-alt"></i><?php echo e($blog->created_at->format('d m, Y')); ?>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($blogs->links()); ?>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar-widget">
                    <section id="custom_html-5" class="widget_text widget widget_custom_html">
                        <?php if(\Illuminate\Support\Facades\Lang::has('third.follow_us')): ?>
                        <h2 class="widget-title"><?php echo e(__('third.follow_us')); ?></h2>
                        <?php else: ?>
                        <h2></h2>
                        <?php endif; ?>
                        <div class="textwidget custom-html-widget">
                            <div class="widget-social">
                                <a href="https://www.linkedin.com/company/76268853/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.facebook.com/Digiuth-111301508002237/"><i
                                            class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/digiuth/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </section>
                    <section id="categories-1" class="widget widget_categories">
                        <?php if(\Illuminate\Support\Facades\Lang::has('Categories')): ?>
                        <h2 class="widget-title"><?php echo e(__('Categories')); ?></h2>
                        <?php else: ?>
                        <h2></h2>
                        <?php endif; ?>
                        <ul>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="cat-item cat-item-16">
                                <a href="<?php echo e(url('/blogs/category/' . $category->id . '-' . slug($category->title))); ?>"><?php echo e($category->title); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel/resources/views/blogs/all.blade.php ENDPATH**/ ?>