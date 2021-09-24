<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-12 col-sm-12 col-lg-10">

    <h5>TAMBAH STOK</h5>
    <hr>

    <form method="POST" action="<?php echo e(route('admin.addstock')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row ">

            <div class="col-12">
                <label for="product" class=""><?php echo e(__('Produk')); ?></label>
                <div class="form-group">
                    <select name="product" id="addproductstock" class="form-control">
                        <option selected="true" value="" disabled hidden>Pilih Produk</option>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($product->id); ?>"><?php echo e($product->id.' - '.$product->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <!-- <div class="col-12">
                <label for="size" class=""><?php echo e(__('Size')); ?></label>
                <div class="form-group">
                    <div>
                        <input id="size" type="text" class="form-control <?php $__errorArgs = ['size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="size" value="<?php echo e(old('size')); ?>" required autocomplete="size" autofocus>
                        <?php $__errorArgs = ['size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div> -->

            <div class="col-12">
                <label for="quantity" class=""><?php echo e(__('Quantity')); ?></label>
                <div class="form-group">
                    <div>
                        <input id="quantity" type="text" class="form-control <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="quantity" value="<?php echo e(old('quantity')); ?>" required autocomplete="quantity" autofocus>
                        <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>

        </div>
        
        <button type="submit" class="btn btn-success w-100">TAMBAHKAN STOK</button>
    
    </form>

</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/admin/addstock.blade.php ENDPATH**/ ?>