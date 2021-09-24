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
    <div class="row">
        <div class="col-4 totaluser">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-user"> PENGGUNA</i>
                </div>
                <div class="card-body">
                    <h5><?php echo e($totaluser); ?></h5>
                </div>
            </div>
        </div>
        <div class="col-4 totalorder">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-dropbox"> PESANAN</i> 
                </div>
                <div class="card-body">
                    <h5><?php echo e($totalorder); ?> </h5>
                </div>
            </div>
        </div>
        <div class="col-4 totalgross">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-money"> PENGHASILAN</i>
                </div>
                <div class="card-body">
                    
                    <h5>Rp <?php echo e($totalgross); ?></h5>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-sm-12 col-lg-8 latestorder mt-4">
            <div class="card">
                <div class="card-header">
                    PESANAN TERBARU
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('admin.showorder',['id'=>$order->id])); ?>" class="list-group-item latest-order">
                            <div class="row">
                                <div class="col-12 d-flex">
                                    <div class="id" style="width:150px">Order ID: <?php echo e($order->id); ?></div>
                                    <div class="name">Nama Pelanggan : <?php echo e($order->name); ?></div>
                                    <div class="status text-success ml-auto">Terbayar</div> 
                                </div>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-sm-12 col-lg-4 mt-4">
            <div class="card">
                <div class="card-header">
                    Pengingat
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('admin.reminder')); ?>" enctype="multipart/form-data">
                        <?php echo method_field('PATCH'); ?>
                        <?php echo csrf_field(); ?>
                        <textarea name="reminder" id="" cols="27" rows="10"><?php echo e($reminder->reminder ?? ''); ?></textarea>
                        <button type="submit" class="button-primary w-100">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/admin/index.blade.php ENDPATH**/ ?>