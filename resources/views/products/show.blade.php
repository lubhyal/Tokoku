@extends('layouts.app')

@section ('content')

<div class="container p-0 show">
   <div class="row sixtyvh">
       <div class="col-lg-8 col-sm-12 mb-3 show-picture">
            <img src="{{ asset('/storage/'.$product->image) }}" alt="">
       </div>
       <div class="col-lg-4 col-sm-12 pl-5 pr-5">
        <h6><strong>{{ $product->name }}</strong></h6>
        <h5>{{ $product->price }}</h5>
            <div class="card">
                <div class="card-body">
                    <div class="show-info">
                        <div class="info-1">
                            <h6>Beli Sekarang</h6>
                        </div>
                        
                        <div class="info-3">
                            <p>{{ $product->desc }}
                            </p>
                        </div>
                        <a href="{{ route('cart.add',['product'=>$product->id]) }}" id="add-to-cart" class="add-to-cart ">
                            <div class="info-4">
                                TAMBAHKAN KE KERANJANG
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>

@endsection