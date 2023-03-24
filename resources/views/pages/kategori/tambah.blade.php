@extends('layout.master')

@section('content')
<body>
    <div class="container">
      <h2 class="alert alert-primary text-center mt-3">Data Produk</h2>
  
      <form>
        <div class="form-group">
          <label>Nama Kategori</label>
          <input type="text" name="" class="form-control" placeholder="Nama Kategori...">
        </div>
        <div class="form-group">
          <label>Nama Produk</label>
          <input type="text" name="" class="form-control" placeholder="Nama Produk...">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="number" name="" class="form-control" placeholder="Harga Barang...">
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <input type="text" name="" class="form-control" placeholder="Deskripsi Barang...">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </body>
  
  

@endsection