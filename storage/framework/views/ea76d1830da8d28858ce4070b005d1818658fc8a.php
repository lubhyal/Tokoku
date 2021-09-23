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
            <h5>Daftar Produk</h5>
        </div>
        <div class="card-body">
            <a href="<?php echo e(route('admin.addform')); ?>" class="btn btn-success mb-4" style="color:white; width:150px;">Tambah Produk</a>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">desc</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row"><?php echo e($product->id); ?></th>
                    <td><img style="height:100px;" src="<?php echo e(asset('/storage/'.$product->image)); ?>" alt=""></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->brand); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->desc); ?></td>
                    <td>
                        <a href="<?php echo e(route('product.editform',['id'=>$product->id])); ?>" class="btn btn-primary w-100 m-1" style="color:white;">EDIT</a>
                        <a href="<?php echo e(route('product.remove',['id'=>$product->id])); ?>" class="btn btn-danger w-100 m-1" style="color:white;">HAPUS</a>
                    </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/admin/product.blade.php ENDPATH**/ ?>