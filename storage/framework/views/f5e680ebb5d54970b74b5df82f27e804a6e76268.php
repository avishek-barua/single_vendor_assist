<div class="hero-slide-item slider-height swiper-slide d-flex bg-color1"
     data-bg-image="assets/images/slider-image/slider-bg-1.jpg">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 align-self-center sm-center-view">
                <div class="hero-slide-content slider-animated-1">
                    <h2 class="title-1"><?php echo e($sliderTitle); ?><br class="d-sm-none"></h2>
                    <a href="<?php echo e($sliderLink); ?>"
                       class="btn btn-primary m-auto text-uppercase"><?php echo e($sliderButtonTitle); ?></a>
                </div>
            </div>
            <div
                class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center position-relative">
                <div class="show-case">
                    <div class="hero-slide-image">
                        <img src="<?php echo e(asset( $sliderAsset )); ?>" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\dokan\resources\views/ecommerce/components/single-slider-item.blade.php ENDPATH**/ ?>