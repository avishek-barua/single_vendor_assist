 <!-- Single Prodect -->
    <div class="product">
        <div class="thumb" style="background-color: #F7F8FA">
            <a href="<?php echo e(route('product', $product)); ?>" class="image">
                <img src="<?php echo e(asset($product->image_path)); ?>" alt="Product" height="300px" width="280px" style="object-fit: contain"/>
                <img class="hover-image" src="<?php echo e(env('app_url')); ?><?php echo e(substr($product->image_path, 6)); ?>"
                     alt="Product"  height="270px" width="300px" style="object-fit: contain"/>
            </a>
            <span class="badges">
                <span class="new">New</span>
            </span>
        </div>
        <div class="content">
            <span class="ratings">
                <span class="rating-wrap">
                    <span class="star" style="width: 100%"></span>
                </span>
                <span class="rating-num">( 5 Review )</span>
            </span>
            <h5 class="title"><a href="<?php echo e(route('product', $product)); ?>"><?php echo e($product->title); ?>

                </a>
            </h5>
            <span class="price">
                <span class="new"> BDT <?php echo e($product->unit_price); ?></span>
            </span>
        </div>
        <button title="Add To Cart" class=" add-to-cart" onclick="cart.addProduct(<?php echo e(json_encode($product)); ?>)">Add
            To Cart
        </button>
    </div>

<?php /**PATH C:\xampp\htdocs\dokan\resources\views/ecommerce/components/product-card.blade.php ENDPATH**/ ?>