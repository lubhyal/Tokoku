

<?php $__env->startSection('content'); ?>

<div class="col-12 col-md-12 col-sm-12 col-lg-10">

    <?php if(Session::has('success')): ?>
    <div class="row">
      <div class="col-12">
        <div id="charge-message" class="alert alert-success">
          <?php echo e(Session::get('success')); ?>

        </div>
      </div>
    </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-header">
            <h5>DAFTAR STOK</h5>
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('admin.addstockform')); ?>" class="btn btn-success mb-2" style="color:white; width:150px;">ADD SIZE</a>
            <select name="product-list" id="product-list" class="w-100 p-2 mb-2">
                <option selected="true" value="" disabled hidden>Pilih produk</option>
                <?php $__currentLoopData = $product_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($id->id); ?>"><?php echo e($id->id." - ".$id->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </select>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <!-- <th scope="col">Size</th> -->
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="stock-list">

                </tbody>
              </table>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/admin/stock.blade.php ENDPATH**/ ?>