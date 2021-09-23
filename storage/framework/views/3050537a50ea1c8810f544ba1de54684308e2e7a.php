<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <h5>TAMBAH PRODUK</h5>
    <hr>

    <form method="POST" action="<?php echo e(route('product.create')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="row ">

            <div class="col-12">
                <label for="name" class=""><?php echo e(__('Nama Barang')); ?></label>
                <div class="form-group">
                    <div>
                        <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
                        <?php $__errorArgs = ['name'];
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

            <div class="col-12">
                <label for="price" class=""><?php echo e(__('Harga')); ?></label>
                <div class="form-group">
                    <div>
                        <input id="price" type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="price" value="<?php echo e(old('price')); ?>" required autocomplete="price" autofocus>
                        <?php $__errorArgs = ['price'];
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

            <!-- <div class="col-12">
                <label for="brand" class=""><?php echo e(__('Brand')); ?></label>
                <div class="form-group">
                    <div>
                        <select name="brand" id="addproductbrand" class="form-control">
                            <option selected="true" value="" disabled hidden>Pilih merek Produk</option>
                            <option value="Nike">Windows</option>
                            <option value="Adidas">Canva</option>
                            <option value="New Balance">Adobe</option>
                            <option value="Asics">Microsoft Office</option>
                            <option value="Puma">Zoom</option>
                            <option value="Skechers">Skechers</option>
                            <option value="Fila">Fila</option>
                            <option value="Bata">Bata</option>
                            <option value="Burberry">Burberry</option>
                            <option value="Converse">Converse</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="gender" class=""><?php echo e(__('Gender')); ?></label>
                <div class="form-group">
                    <div>
                        <select name="gender" id="addproductgender" class="form-control">
                            <option selected="true" value="" disabled hidden>Pilih merek Produk</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Unisex">Unisex</option>
                        </select>
                    </div>
                </div>
            </div> -->

            <div class="col-12">
                <label for="category" class=""><?php echo e(__('Deskripsi Barang')); ?></label>
                <div class="form-group">
                    <div>
                    <input id="desc" type="text" class="form-control <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="desc" value="<?php echo e(old('desc')); ?>" required autocomplete="desc" autofocus>
                        <?php $__errorArgs = ['name'];
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

            <div class="col-12">
                <div class="form-group">
                    <label for="image" class="">Gambar Produk</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div style="color:red; font-weight:bold; font-size:0.7rem;"><?php echo e($message); ?></div>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            


        </div>
        
        <button type="submit" class="btn btn-success w-100">TAMBAH PRODUK</button>
    
    </form>

</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/admin/addproduct.blade.php ENDPATH**/ ?>