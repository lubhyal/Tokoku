

<?php $__env->startSection('content'); ?>

<div class="container p-0">
  <div class="row">

    <div class="col-lg-3 col-md-3 col-sm-4 col-5 pl-4 filter">
      <div class="fixedfilter">

        <h3><i class="fa fa-filter"></i> Filter </h3>
        <input class="mt-3" type="text" id="search" placeholder="Enter product name" style="width:100%;">

        <div class="filterprice card">
          <div class="card-body">
            <h5 class="card-title">HARGA</h5>
            <input type="range" min="<?php echo e($minPrice); ?>" max="<?php echo e($maxPrice); ?>" value="<?php echo e($maxPrice); ?>" class="slider selector" id="pricerange">
            <p class="p-0 m-0">Maks: Rp. <span id="currentrange"><?php echo e($maxPrice); ?></span></p>
          </div>
        </div>


      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8 col-7 pr-4">
      <h3>Produk</h3>
      
      <div class="row d-flex justify-content-start" id="products">
        
      </div>

    </div>

  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/products/index.blade.php ENDPATH**/ ?>