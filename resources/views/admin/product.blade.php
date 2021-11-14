@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
  <nav aria-label="breadcrumb" role="navigation" >
    <ol class="breadcrumb">
      <li class="breadcrumb-item" data="green"><a href="#">Index</a></li>
      <li class="breadcrumb-item" data="green"><a href="{{ route('admin.index') }}">Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Produk</li>
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
        
        <div class="card-body">
          <h3>Daftar Produk</h3>
            <a href="{{ route('admin.addform') }}" class="btn btn-success w-100" style="color:white; width:150px;">Tambah Produk</a>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                  <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td><img style="height:100px;" src="{{ url('/storage/'.$product->image) }}" alt=""></td>
                    <td>{{ $product->name }}</td>
                    <td>Rp.{{ format_uang($product->price) }}</td>
                    <td>{{ $product->desc }}</td>
                    <td>
                        <a href="{{ route('product.editform',['id'=>$product->id]) }}" class="btn btn-primary w-100 m-1 animation-on-hover" style="color:white;">EDIT</a>
                        <a href="{{ route('product.remove',['id'=>$product->id]) }}" class="btn btn-danger w-100 m-1 animation-on-hover" style="color:white;">HAPUS</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
    
@endsection