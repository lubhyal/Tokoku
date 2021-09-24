

<?php $__env->startSection('content'); ?>

<div class="container p-0">
  <?php if(Session::has('success')): ?>
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        <?php echo e(Session::get('success')); ?>

      </div>
    </div>
  </div>
  <?php endif; ?>
  <!-- GET FIT FROM HOME [S]-->
    <div class="row">
      <div class="col-12 promowrap">
        <div class="row m-0 p-0">
          <div class="col-4 promo-info h-100">
            <div class="infowrapper d-flex flex-column h-100 justify-content-center">
              <h2>DAPATKAN LISENSI DARI RUMAH</h2>
              <h4>30% Semua Produk!</h4>
              <p>Promo Berakhir pada  23 Desember 2021</p>
              <a href="<?php echo e(route('product.index')); ?>" class="w-100 button">Belanja Sekarang</a>
            </div>   
          </div> 
        </div>
        <img class="d-block w-100" src="<?php echo e(asset('photo/banner.jpeg')); ?>" alt="">
      </div>
    </div>
    <!-- GET FIT FROM HOME [E]-->

    <!-- MEN & WOMEN [S]-->
    <div class="row pt-4">
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="<?php echo e(route('product.index')); ?>">
          <button id="maleBtn">
          <div class="gender">
            <img class="d-block w-100" src="<?php echo e(asset('photo/win11.jpg')); ?>" alt="">
            <h2 class="pt-2">Windows</h2>
          </div>
        </button>
        </a>
      </div>
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="<?php echo e(route('product.index')); ?>">
          <button id="femaleBtn">
          <div class="gender">
            <img class="d-block w-100" src="<?php echo e(asset('photo/defender.png')); ?>" alt="">
            <h2 class="pt-2">Aplikasi</h2>
          </div>
        </button>
        </a>
      </div>
    </div>
  

        <!-- CATEGORY [S]-->
        <div class="row m-0 pt-4">
          <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="<?php echo e(route('product.index')); ?>">
              <div class="category">
                <img class="" height="200px" src="<?php echo e(asset('photo/office.png')); ?>" alt="">
                <h5 class="pt-2">MICROSOFT OFFICE</h5>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="#">
              <div class="category">
                <img class="" height="200px" src="<?php echo e(asset('photo/adobe.png')); ?>" alt="">
                <h5 class="pt-2">ADOBE SOFTWARE</h5>
            </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center categorywrapper">
            <a href="#">
              <div class="category">
                <img class="" height="200px" src="<?php echo e(asset('photo/antivirus.png')); ?>" alt="">
                <h5 class="pt-2">ANTIVIRUS</h5>
              </div>
            </a>
          </div>
        </div>
        <!-- CATEGORY [E]-->

    <!-- FEATURED SHOES [S]-->
    <h2 class="pt-4">BESTSELLER</h2>
    <div class="row d-flex justify-content-center">
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-3">
        <div class="card">
          <a href="<?php echo e(route('product.show',['product'=>$product->id])); ?>">
            <div class="card-body ">
              <div class="product-info">
                <div class="info-1"><img src="<?php echo e(asset('/storage/'.$product->image)); ?>" alt=""></div>
                <div class="info-4"><h5><?php echo e($product->Name); ?></h5></div>
                <div class="info-2"><a href="product/<?php echo e($product->id); ?>"><h4><?php echo e($product->desc); ?></h4></a></div>
                <div class="info-3"><h5>Rp. <?php echo e($product->price); ?></h5></div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


    <!-- ADVANTAGE [S]-->
    <h2 class="pt-4">JAMINAN KAMI</h2>
    <div class="row m-0 pt-4">
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="<?php echo e(asset('photo/delivery2.svg')); ?>" alt="">
          <h4>KODE LISENSI RESMI</h4>
      </div>
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="<?php echo e(asset('photo/guarantee.svg')); ?>" alt="">
          <h4>AMAN</h4>
      </div>
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="<?php echo e(asset('photo/support.svg')); ?>" alt="">
          <h4>LAYANAN PELANGGAN 24/7</h4>
      </div>
    </div>
    <!-- ADVANTAGE [E]-->

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tokoku\resources\views/home/index.blade.php ENDPATH**/ ?>