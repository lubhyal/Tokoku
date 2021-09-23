<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <div class="card">
        <div class="card-header">
            <div class="row">
            <?php $__currentLoopData = $ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 pt-2">
                <h5>DETAIL PESANAN</h5>
                <hr>
                <div class="row">
                    <div class="col-5">
                        Order ID<br>
                        Payment ID <br>
                        Buyer ID<br>
                        Buyer Name <br>
                        Phone Number <br>
                        Status
        
                    </div>
                    <div class="col-7">
                        : <?php echo e($id->id); ?> <br>
                        : <?php echo e($id->payment_id); ?> <br>
                        : <?php echo e($id->user_id); ?> <br>
                        : <?php echo e($id->name); ?> <br>
                        : <?php echo e($id->phonenumber); ?> <br>
                        : PAID
                    </div>
                </div>
                
            </div>
            

            <div class="col-12 col-lg-6 col-md-6 col-sm-12 pt-2">
                <h5>ALAMAT PEMGIRIMAN</h5>
                <hr>
                <div class="row">
                    <div class="col-5">
                        Country <br>
                        City <br>
                        Zipcode <br>
                        Address <br>
                        
                    </div>
                    <div class="col-7">
                        : <?php echo e($id->country); ?> <br>
                        : <?php echo e($id->city); ?> <br>
                        : <?php echo e($id->zipcode); ?> <br>
                        : <?php echo e($id->address); ?> <br>
                        
                    </div>
                </div>
            </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
        <div class="card-body">
            <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex order-history mx-auto">
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div> 
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/admin/showorder.blade.php ENDPATH**/ ?>