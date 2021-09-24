<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Belanja di TOKOKU</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="icon" href="<?php echo e(URL::asset('photo/Logos.png')); ?>" type="image/x-icon"/>
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?php echo e(asset('external-css/style.css')); ?>" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">   
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <div class="d-flex">
                        <div><img src="<?php echo e(asset('photo/Logo.png')); ?>" style="height:40px;" alt=""></div>
                         <div class="pl-3 ml-3 pt-2" style="border-left:1px solid rgba(0, 0, 0, 0); font-size:1.5rem;"></div>
                    </div> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <div class="d-flex">
                                <a class="nav-link" href="<?php echo e(route('cart.index')); ?>">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQuantity : ''); ?></span>
                                </a>
                            </div>
                        </li>
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="<?php echo e(route('profile.edit',['user'=>Auth::user()->id ])); ?>" class="dropdown-item">Edit Profile</a>
                                    
                                    <?php if(Auth::user()->role == 'Customer'): ?>
                                    <a href="<?php echo e(route('order.show',['user'=>Auth::user()->id])); ?>" class="dropdown-item">Purchase History</a>
                                    <?php endif; ?>
                                    
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </div>

    <footer>
        <div class='container-fluid footer'>
            <div class='container p-0 pt-3'>
                <div class='row'>
                    <div class='col-md-4 col-sm-12 pt-3'>
                        <h3>Kontak Kami</h3>
                        <p>Aldona Angelica Syafira <br> Banyuwangi <br> +628542445833 <br> customercare@tokoku.com</p>
                    </div>
                    <div class='col-md-4 col-sm-12 pt-3'>
                        <h3>Follow kami</h3>
                        <ul>
                            <li><a href='https://facebook.com/' target='_blank'>
                                <i class="fa fa-instagram"></i></a></li>
                            <li><a href='https://instagram.com/' target='_blank'>
                                <i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>

                    </div>
                    <div class='col-md-4 col-sm-12 pt-3'>
                        <h3>Buletin</h3>
                        <p>Daftar untuk berlangganan.</p>
                        <div class='newsletter-form p-0'>
                            <form action='<?php echo e(route('newsletter.add')); ?>' method='post' id='newsletter-validate-detail'>
                                <?php echo csrf_field(); ?>
                                <input type='email' name='email' id='newsletter-footer' class=''
                                    placeholder='Enter your email'>
                                <button type='submit' id='signup-newsletter-footer' class='button'>DAFTAR</button>
                            </form>
                        </div>
                    </div>
                    <div class='col-12 divider-footer p-0'>
                    </div>
                    <div class='col-md-6 col-sm-12 copyright'>
                        <p>Created with ♡ by magangGroup</p>
                        <p>magangGroup &copy; 2021. All Rights Reserved</p>
                    </div>
                    <div class='col-md-6 col-sm-12 payment'> <img src="<?php echo e(asset('photo/cards.png')); ?>" alt=''>
                    </div>
                    <div class='col-12 p-0 mt-3'>
                    </div>

                </div>
            </div>
        </div>
    </footer>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php echo $__env->yieldContent('script'); ?>
<script>

    $(document).ready(function(){

        filter_data('');

        function filter_data(query='')
        {
            var search=JSON.stringify(query);
            var price =JSON.stringify($('#pricerange').val());
            $.ajax({
                url:"<?php echo e(route('product.filter')); ?>",
                method:'GET',
                data:{
                    query:search,
                    price:price,
                    },
                dataType:'json',
                success:function(data)
                {
                    $('#products').html(data.table_data);
                }
            })
        }

        function get_filter(class_name)
        {
            var filter=[];
            $('.'+class_name+':checked').each(function(){
                filter.push($(this).val());
            });
            return filter;
        }

        $(document).on('keyup','#search',function(){
            var query = $(this).val();
            filter_data(query);
        });

        $('.selector').click(function(){
            var query = $('#search').val();
            filter_data(query);
        });

        $(document).on('input','#pricerange',function(){
            var range = $(this).val();
            $('#currentrange').html(range);
        });

    });
    
</script>

</html>

<?php /**PATH C:\xampp\htdocs\tokoku\resources\views/layouts/app.blade.php ENDPATH**/ ?>