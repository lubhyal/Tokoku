@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
  <nav aria-label="breadcrumb" role="navigation" >
    <ol class="breadcrumb">
      <li class="breadcrumb-item" data="green"><a href="#">Index</a></li>
      <li class="breadcrumb-item" data="green"><a href="{{ route('admin.index') }}">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Stok Produk</li>
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

    <div class="card">
        <div class="card-header">
            <h3>DAFTAR STOK</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('admin.addstockform') }}" class="btn btn-success mb-2 w-10 animation-on-hover" style="color:white; width:350px;"><center></i>Tambah Stok</center></a>
            <select name="product-list" id="product-list" class="form-control w-100 p-2 mb-2"  id="exampleFormControlSelect1">
                <option selected="true" value="" disabled hidden>Pilih produk</option>
                @foreach ($product_id as $id)
                <option value="{{ $id->id }}" class="dropdown-item">{{ $id->id." - ".$id->name }}</option>
                @endforeach
                
            </select>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Produk key</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="stock-list">

                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection