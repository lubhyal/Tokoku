@extends('layouts.admin')

@section ('content')


<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <nav aria-label="breadcrumb" role="navigation" >
        <ol class="breadcrumb">
          <li class="breadcrumb-item" data="green"><a href="#">Index</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.index') }}">Admin</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
    @if(Session::has('success'))
    <div class="row">
      <div class="col-12">
        <div id="charge-message" class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      </div>
    </div>
    @endif

    <div class="row">
        <div class="col-4 totaluser">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category ">TOTAL PENGGUNA</h5>
                </div>
                <div class="card-body">
                    <h3 class="card-title"><i class="tim-icons icon-single-02 text-success"></i>  {{ $totaluser }}</h3>
                </div>
            </div>
        </div>
        <div class="col-4 totalorder">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category ">TOTAL PESANAN</h5>
                </div>
                <div class="card-body">
                    <h3 class="card-title"><i class="tim-icons icon-bag-16 text-success"></i>  {{ $totalorder }}</h3>
                </div>
            </div>
        </div>
        <div class="col-4 totalgross">
            
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category ">TOTAL PENGHASILAN</h5>
                </div>
                <div class="card-body">
                    <h3 class="card-title"><i class="tim-icons icon-wallet-43 text-success"></i>  Rp {{ format_uang($totalgross) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-sm-12 col-lg-8 latestorder mt-4">
            <div class="card">
                <div class="card-header">
                    PESANAN TERBARU
                </div>
                <div class="card-body">
                    <div class="form-group">
                        @foreach ($latest as $order)
                        <a href="{{ route('admin.showorder',['id'=>$order->id]) }}" class="latest-order">
                            <div>
                                <div class="col-12 d-flex">
                                    <div class="id" style="width:150px">Order ID: {{ $order->id }}</div>
                                    <div class="name">Nama Pelanggan : {{ $order->name }}</div>
                                    <div class="status text-success ml-auto">Terbayar</div> 
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-sm-12 col-lg-4 mt-4">
            <div class="card">
                <div class="card-header">
                    Pengingat
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.reminder') }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $reminder->reminder ?? ''}}</textarea><BR>
                        <button type="submit" class="btn btn-default animation-on-hover w-100">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection