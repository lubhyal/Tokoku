<?php $__env->startSection('content'); ?>


    <?php if(!$orders->isEmpty()): ?>
    <div class="container sixtyvh">
    <div class="row ml-2 mr-2">
        <div class="col-12">
            <h3>PURCHASE HISTORY</h3>
            <hr>
            <div class="row d-flex ">
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-12 col-md-8 col-lg-8 d-flex order-history mx-auto">
                    <div class="row">
                        <?php $__currentLoopData = $order->cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12 d-flex justify-content-between ">
                                <div class="order-image">
                                    <img src="<?php echo e(asset('/storage/'.$item['item']['image'])); ?>" alt="">
                                </div>

                                <div class="order-detail mr-auto d-flex flex-column justify-content-center">
                                    <div class="detail-1">
                                        <h5><?php echo e($item['item']['name']); ?></h5>
                                    </div>
                                    <div class="detail-2">
                                        <h6>Size: <?php echo e($item['size']); ?></h6>
                                    </div>
                                    <div class="detail-3">
                                        <h6>Quantity: <?php echo e($item['quantity']); ?></h6>
                                    </div>
                                    <div class="detail-4">
                                        <h6>Price: RM   <?php echo e($item['price']); ?></h6>
                                    </div>
                                </div> 
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>                      
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 d-flex flex-column justify-content-center mx-auto order-info">
                    <div class="row d-flex   ">
                        <div class="col-4 ">
                            <h6>Order ID</h6>
                            <h6>Date </h6>
                            <h6>Total Price</h6>
                            <h6>Payment ID</h6>
                        </div>
                        <div class="col-8">
                            <h6>: <?php echo e($order['id']); ?></h6>
                            <h6>: <?php echo e($order['created_at']); ?></h6>
                            <h6>: RM <?php echo e($order->cart->totalPrice); ?></h6>
                            <h6>: PAsxz1alfg45</h6>
                        </div>
                    </div>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    </div>

    <?php else: ?>
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center sixtyvh empty-history">
                    <div><i class="fa fa-th-list"></i></div>
                    <div><h4><b>Your purchase history is empty.</b></h4></div>
                    <div><a href="<?php echo e(route('product.index')); ?>">Go grab some product first :)</a></div>
                </div>
            </div>
        </div>
        
    <?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/orders/index.blade.php ENDPATH**/ ?>