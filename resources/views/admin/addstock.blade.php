@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <nav aria-label="breadcrumb" role="navigation" >
        <ol class="breadcrumb">
          <li class="breadcrumb-item" data="green"><a href="#">Index</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.index') }}">Admin</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.stock') }}">Stok Produk</a></li>
          <li class="breadcrumb-item active" aria-current="page">Tambah Stok</li>
        </ol>
      </nav>

    <h3>TAMBAH STOK</h3>
    <hr>

    <form method="POST" action="{{ route('admin.addstock')}}" enctype="multipart/form-data">
        @csrf
        <div class="row ">

            <div class="col-12">
                <label for="product" class="">{{ __('Produk') }}</label>
                <div class="form-group">
                    <select name="product" id="addproductstock" class="form-control " >
                        <option selected="true" value="" disabled hidden>Pilih Produk</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" class="dropdown-item">{{ $product->id.' - '.$product->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12">
                <label for="productkey" class="">{{ __('Key Produk') }}</label>
                <div class="form-group">
                    <div>
                        <input id="productkey" type="text" class="form-control @error('productkey') is-invalid @enderror" name="productkey" value="{{ old('productkey')}}" required autocomplete="productkey" autofocus>
                        @error('productkey')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

        </div>
        
        <button type="submit" class="btn btn-success w-100 animation-on-hover">TAMBAHKAN STOK</button>
    
    </form>

</div>
    
@endsection