<?php $__env->startSection('content'); ?>

    <?php if(Session::has('cart') && $totalQuantity >0): ?>
        <div class="container p-0 filled-cart">
            <div class="mr-2 ml-2">
                <h3>YOUR CART</h3>
                <hr> 
            </div>
           
            <div class="row mr-2 ml-2">
                
                <div class="col-lg-8 col-sm-12 pt-2 pr-4 pl-4">
                    <div class="row">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 d-flex p-2 justify-content-between cart-item">
                                <div class="item-image">
                                    <img src="<?php echo e(asset('/storage/'.$product['item']['image'])); ?>" alt="">
                                </div>
                                <div class="item-detail mr-auto d-flex flex-column justify-content-center">
                                    <div class="info-2"><h5><?php echo e($product['item']['name']); ?></h5> </div> 
                                    <div class="info-3"><h6>Size: <?php echo e($product['size']); ?></h6></div>
                                    <div class="info-4"><h6>Quantity: <?php echo e($product['quantity']); ?></h6></div>
                                    <div class="info-5">
                                        <a href="<?php echo e(route('cart.remove',['id'=>key($products)])); ?>" class="remove-cart">
                                            <i class="fa fa-trash"></i> 
                                        </a>
                                    </div>
                                </div>

                                <div class="item-quantity">Rp. <?php echo e($product['price']); ?></div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>


                </div>

                <div class="col-lg-4 col-sm-12 p-2 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="cart-checkout">
                                <div class="info-1">
                                    SUMMARY
                                </div>
                                <hr>
                                <div class="info-2">
                                    TOTAL: Rp. <?php echo e($totalPrice); ?>

                                </div>
                                <div class="info-3 pt-3">
                                    <a href="<?php echo e(route('checkout.index')); ?>"><button class="button-primary w-100">CHECKOUT</button></a>
                                </div>
                                <div class="info-4 pt-3">
                                    <a href="<?php echo e(route('product.index')); ?>"><button class="button w-100">Lanjut Belanja</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php else: ?>
    <div class="container p-0 ">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center empty-cart">
                <div><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                <div><h4><b>Keranjang anda Kosong.</b></h4></div>
                <div><a href="<?php echo e(route('product.index')); ?>">Go get some shoes first :)</a></div>
            </div>
        </div>
    </div>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/cart/index.blade.php ENDPATH**/ ?>