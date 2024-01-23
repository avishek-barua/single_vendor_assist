<?php $__env->startSection('content'); ?>



    <!-- Hero/Intro Slider Start -->
    <div class="section ">
        <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
            <!-- Hero slider Active -->
            <div class="swiper-wrapper">
                <!-- Single slider item -->
                <?php echo $__env->make('ecommerce.components.single-slider-item', ['sliderTitle' => 'Rent Lens','sliderButtonTitle' => 'Rent Now','sliderAsset' => 'assets/images/slider-image/s-03.png', 'sliderLink' =>  route('shopByCategory', 1)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('ecommerce.components.single-slider-item', ['sliderTitle' => 'Rent Camera','sliderButtonTitle' => 'Rent Now','sliderAsset' => 'assets/images/slider-image/s-03.png', 'sliderLink' =>  route('shopByCategory', 2)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('ecommerce.components.single-slider-item', ['sliderTitle' => 'Rent Accessories','sliderButtonTitle' => 'Rent Now','sliderAsset' => 'assets/images/slider-image/s-03.png', 'sliderLink' =>  route('shopByCategory', 3)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Hero/Intro Slider End -->

    <!-- Banner Area Start -->
    <div class="banner-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="single-col">
                    <div class="single-banner">
                        <img src="<?php echo e(asset('assets/images/banner/main-banner-1.jpg')); ?>" alt="">
                        <div class="banner-content" style="background-color: rgba(0, 0, 0, 0.4)">
                            <span class="category" style="color: white">RENT</span>
                            <span class="title" style="color: white">Lens Accessories
                                     </span>
                            <a href="<?php echo e(route('shopByCategory', 1)); ?>" class="shop-link btn btn-primary text-uppercase">Rent Now</a>
                        </div>
                    </div>
                </div>
                <div class="single-col center-col">
                    <div class="single-banner">
                        <img src="<?php echo e(asset('assets/images/banner/main-banner-2.jpg')); ?>" alt="">
                        <div class="banner-content" style="background-color: rgba(0, 0, 0, 0.4)">
                            <span class="category" style="color: white">RENT</span>
                            <span class="title" style="color: white">Camera Accessories
                                     </span>
                            <a href="<?php echo e(route('shopByCategory', 2)); ?>" class="shop-link btn btn-primary text-uppercase">Rent Now</a>
                        </div>
                    </div>
                </div>
                <div class="single-col">
                    <div class="single-banner">
                        <img src="<?php echo e(asset('assets/images/banner/main-banner-1.jpg')); ?>" alt="">
                        <div class="banner-content" style="background-color: rgba(0, 0, 0, 0.4)">
                            <span class="category" style="color: white">RENT</span>
                            <span class="title" style="color: white">Accessories</span>
                            <a href="<?php echo e(route('shopByCategory', 3)); ?>" class="shop-link btn btn-primary text-uppercase">Rent Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->


    <!-- Product Area Start -->
    <div class="product-area">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-12">
                    <div class="section-title text-center mb-60px">
                        <h2 class="title">Popular Categories</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut labore
                            et dolore magna aliqua. </p>
                    </div>

                </div>
                <!-- Section Title End -->

            </div>
            <!-- Section Title & Tab End -->

            <div class="row">
                <div class="col">
                    <div class="tab-content mt-60px">
                        <!-- 1st tab start -->
                        <div class="tab-pane fade show active" id="tab-jewelry">
                            <div class="row">
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                        <?php echo $__env->make('ecommerce.components.product-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->


    <!-- Feature Area Srart -->
    <div class="feature-area pt-100px">
        <div class="container">
            <div class="feature-wrapper">
                <div class="single-feture-col">
                    <!-- single item -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="<?php echo e(asset('assets/images/icons/1.png')); ?>" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Free Shipping</h4>
                            <span class="sub-title">Capped at $39 per order</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col ">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/2.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Card Payments</h4>
                            <span class="sub-title">12 Months Installments</span>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="single-feture-col">
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="assets/images/icons/3.png" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Easy Returns</h4>
                            <span class="sub-title">Shop With Confidence</span>
                        </div>
                    </div>
                    <!-- single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Area End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('ecommerce.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dokan\resources\views/ecommerce/home.blade.php ENDPATH**/ ?>