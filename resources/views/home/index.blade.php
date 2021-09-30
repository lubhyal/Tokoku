@extends('layouts.app')

@section ('content')

<div class="container p-0">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
  <!-- GET FIT FROM HOME [S]-->
    <div class="row">
      <div class="col-12 promowrap">
        <div class="row m-0 p-0">
          <div class="col-4 promo-info h-100">
            <div class="infowrapper d-flex flex-column h-100 justify-content-center">
              <h2>DAPATKAN LISENSI DARI RUMAH</h2>
              <h4>Potongan 30% Semua Produk!</h4>
              <p>Promo Berakhir pada  23 Desember 2021</p>
              <a href="{{ route('product.index') }}" class="w-100 button">Belanja Sekarang</a>
            </div>   
          </div> 
        </div>
        <img class="d-block w-100" src="{{ asset('photo/banner.jpeg') }}" alt="">
      </div>
    </div>
    
    <h2 class="pt-4">BESTSELLER</h2>
    <div class="row d-flex justify-content-center">
      @foreach ($products as $product)    
      <div class="col-lg-3 col-md-6 col-sm-6 col-6 pt-3">
        <div class="card">
          <a href="{{ route('product.show',['product'=>$product->id]) }}">
            <div class="card-body ">
              <div class="product-info">
                <div class="info-1"><img src="{{ url('/storage/'.$product->image) }}" alt="Foto Produk"></div>
                <div class="info-4">{{ $product->name }}</div>
                <div class="info-2"><a href="product/{{ $product->id }}"><h4>{{ $product->desc }}</h4></a></div>
                <div class="info-3"><h5>Rp. {{ format_uang($product->price) }}</h5></div>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>


    <!-- ADVANTAGE [S]-->
    <h2 class="pt-4">JAMINAN KAMI</h2>
    <div class="row m-0 pt-4">
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="{{ asset('photo/delivery2.svg') }}" alt="">
          <h4>KODE LISENSI RESMI</h4>
      </div>
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="{{ asset('photo/guarantee.svg') }}" alt="">
          <h4>AMAN</h4>
      </div>
      <div class="col-lg-4 col-sm-12 d-flex flex-column align-items-center advantagewrapper">
        <img class="" height="80px" src="{{ asset('photo/support.svg') }}" alt="">
          <h4>LAYANAN PELANGGAN 24/7</h4>
      </div>
    </div>
    <!-- ADVANTAGE [E]-->

</div>

@endsection