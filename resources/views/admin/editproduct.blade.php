@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <nav aria-label="breadcrumb" role="navigation" >
        <ol class="breadcrumb">
          <li class="breadcrumb-item" data="green"><a href="#">Index</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.index') }}">Admin</a></li>
          <li class="breadcrumb-item" data="green"><a href="{{ route('admin.product') }}">Produk</a></li>
          <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
        </ol>
      </nav>
    <h3>EDIT PRODUK</h3>
    <hr>

    <form method="POST" action="{{ route('product.edit',['id'=>$product->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row ">

            <div class="col-12">
                <label for="name" class="">{{ __('Nama') }}</label>
                <div class="form-group">
                    <div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $product->name}}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="price" class="">{{ __('Harga') }}</label>
                <div class="form-group">
                    <div>
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') ?? $product->price  }}" required autocomplete="price" autofocus>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="category" class="">{{ __('Deskripsi Produk') }}</label>
                <div class="form-group">
                    <div>
                    <input id="desc" type="text" class="form-control @error('desc') is-invalid @enderror" name="desc" value="{{ old('desc') ?? $product->desc  }}" required autocomplete="desc" autofocus>
                        @error('desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="image" class="">Product Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')

                    <div style="color:red; font-weight:bold; font-size:0.7rem;">{{ $message }}</div>

                    @enderror
                </div>
            </div>
            


        </div>
        
        <button type="submit" class="btn btn-info w-100 animation-on-hover">PERBARUI PRODUK</button>
    
    </form>

</div>
    
@endsection