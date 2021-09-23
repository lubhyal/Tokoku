<?php $__env->startSection('content'); ?>

<div class="container p-0 show">
   <div class="row sixtyvh">
       <div class="col-lg-8 col-sm-12 mb-3 show-picture">
            <img src="<?php echo e(asset('/storage/'.$product->image)); ?>" alt="">
       </div>
       <div class="col-lg-4 col-sm-12 pl-5 pr-5">
        <h6><strong><?php echo e($product->name); ?></strong></h6>
        <h5><?php echo e($product->price); ?></h5>
            <div class="card">
                <div class="card-body">
                    <div class="show-info">
                        <div class="info-1">
                            <h6>Beli Sekarang</h6>
                        </div>
                        
                        <div class="info-3">
                            <p>This product is pre-verified, and will be ready to ship instantly. Expedited shipping options will be available in checkout.
                            </p>
                            <h6><strong><?php echo e($product->desc); ?></strong></h6>
                        </div>
                        <a href="<?php echo e(route('cart.add',['product'=>$product->id])); ?>" id="add-to-cart" class="add-to-cart disabled">
                            <div class="info-4">
                                TAMBAHKAN KE KERANJANG
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/products/show.blade.php ENDPATH**/ ?>