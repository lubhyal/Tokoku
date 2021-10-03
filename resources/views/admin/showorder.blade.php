@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <div class="card">
        <div class="card-header">
            <div class="row">
            @foreach ($ids as $id)
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 pt-2">
                <h5>DETAIL PESANAN</h5>
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
                <h5>PENGIRIMAN</h5>
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
                        <textarea class="form-control" name="message" id="" cols="30" rows="4"> Hai {{ $id->name }}, Terima Kasih Telah berbelanja di TOKOKU.com,
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
                                    <h5>{{ $item['item']['name'] }}</h5>
                                </div>
                                <div class="detail-3">
                                    <h6>Jumlah: {{ $item['quantity'] }}</h6>
                                </div>
                                <div class="detail-4">
                                    <h6>Harga: Rp.   {{ format_uang($item['price']) }}</h6>
                                </div>
                            </div> 
                        </div>
                    @endforeach
                </div>                      
            </div>
            @endforeach
</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success col-sm-5"><i class="fa fa-send"></i>&nbsp;KIRIM EMAIL</button>
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