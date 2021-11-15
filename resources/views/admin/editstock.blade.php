@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <nav aria-label="breadcrumb" role="navigation" >
        <ol class="breadcrumb">
          <li class="breadcrumb-item" data="green"><a href="#">Index</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.index') }}">Admin</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.stock') }}">Stok produk</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Stok</li>
        </ol>
      </nav>

    <h3>EDIT STOCK</h3>
    <hr>

    <form method="POST" action="{{ route('admin.editstock',['id'=>$stock->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row ">


            <div class="col-12">
                <label for="productkey" class="">{{ __('Masukkan produk key') }}</label>
                <div class="form-group">
                    <div>
                        <input id="productkey" type="text" class="form-control @error('productkey') is-invalid @enderror" name="productkey" value="{{ old('productkey') ?? $stock->productkey}}" required autocomplete="productkey" autofocus>
                        @error('productkey')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

        </div>
        
        <button type="submit" class="btn btn-primary w-100">EDIT STOCK</button>
    
    </form>

</div>
    
@endsection