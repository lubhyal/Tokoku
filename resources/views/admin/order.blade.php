@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <nav aria-label="breadcrumb" role="navigation" >
        <ol class="breadcrumb">
          <li class="breadcrumb-item" data="green"><a href="#">Index</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.index') }}">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Pesanan</li>
        </ol>
      </nav>
    <div class="card">
        <div class="card-header">
            <h3>DAFTAR ORDERAN</h3>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($orders as $order)
                <a href="{{ route('admin.showorder',['id'=>$order->id]) }}" class="latest-order">
                    <div class="row">
                    
                        <div class="col-12 d-flex">
                            <div class="id" style="width:150px">ID Pesanan: {{ $order->id }}</div>
                            <div class="name">Nama Pelanggan: {{ $order->name }}</div>
                            <div class="status text-success ml-auto">TERBAYAR</div> 
                        </div>
                    </div>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
</div>
    
@endsection