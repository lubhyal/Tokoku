@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <nav aria-label="breadcrumb" role="navigation" >
        <ol class="breadcrumb">
          <li class="breadcrumb-item" data="green"><a href="#">Index</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.index') }}">Admin</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.order') }}">Pesanan</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tampilkan Pesanan</li>
        </ol>
      </nav>
    <div class="card">
        <div class="card-header">
            <div class="row">
            @foreach ($ids as $id)
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 pt-2">
                <h3>DETAIL PESANAN</h3>
                <hr>
                <div class="row">
                    <div class="col-5">
                        ID Pemesanan<br>
                        ID Pembayaran<br>
                        ID Pembeli<br>
                        Nama Pembeli <br>
                        Email Pembeli <br>
                        Status
        
                    </div>
                    <div class="col-7">
                        : {{ $id->id }} <br>
                        : PAsxz1alfg45 <br>
                        : {{ $id->user_id }} <br>
                        : {{ $id->name }} <br>
                        : {{ $id->email }} <br>
                        : PAID
                    </div>
                </div> 
            </div>
            

            <div class="col-12 col-lg-6 col-md-6 col-sm-12 pt-2">
                <h3>PENGIRIMAN</h3>
                @if(Session::has('status'))
                    <div class="alert alert-success">{{ Session::get('status') }}</div>
                @endif
                <hr>
                <form action="{{ url('order/{id}') }}" method="post">
                    @method('POST') 
                    @csrf
                    <div class="form-group">
                        <label for="to">Email Pembeli </label>
                        <input class="form-control" type="email" name="to" value="{{ $id->email }}" />
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input class="form-control" type="text" name="subject"  value="[RAHASIA] Pembelian di TOKOKU.com | a.n {{ $id->name }} "/>
                    </div>
                    <div class="form-group">
                        <label for="message">Isi Pesan </label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" cols="30" rows="4"> Hai {{ $id->name }}, Terima Kasih Telah berbelanja di TOKOKU.com,
    Mohon simpan dengan baik Produk key berikut ini.
    @foreach($order as $order)
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex order-history mx-auto">
                <div class="row">
                    @foreach ($order->cart->items as $item)
                        <div class="col-12 d-flex justify-content-between ">
                            <div class="order-image">
                                <img src="{{ asset('/storage/'.$item['item']['image']) }}" alt="">
                            </div>
    
                            <div class="order-detail mr-auto d-flex flex-column justify-content-center">
                                <div class="detail-1">
                                    <h4>{{ $item['item']['name'] }}</h4>
                                </div>
                                <div class="detail-2">
                                    <h4>Serial Key: </h4>
                                </div>
                                <div class="detail-3">
                                    <h4>Jumlah: {{ $item['quantity'] }}</h4>
                                </div>
                                <div class="detail-4">
                                    <h4>Harga: Rp.   {{ format_uang($item['price']) }}</h4>
                                </div>
                            </div> 
                        </div>
                    @endforeach
                </div>                      
            </div>
            @endforeach
    
            
           <h6> Copyright © 2021 TOKOKU.COM, All rights reserved. Anda menerima email ini karena terdaftar sebagai akun aktif di TOKOKU.COM atau telah daftar melalui website TOKOKU.COM.
    <br><br>
    Disclaimer: Semua konten dibuat untuk tujuan informasional dan bukan merupakan rekomendasi untuk membeli/menjual lisensi tertentu. Always do your own research.
           </h6>
    </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success col-sm-5 animation-on-hover"><i class="tim-icons icon-send"></i>&nbsp;KIRIM EMAIL</button>
                    </div>
                <form>   
                </div>
            </div>
           @endforeach
        </div>
        </div>
        <div class="card-body">
            
        </div>
    </div>
</div> 
    
@endsection