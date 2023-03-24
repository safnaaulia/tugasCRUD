@extends('layout.master')

@section('content')
<div class="container">
  <form method="post" action="{{route('product.store')}}">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Harga</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">category</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_id">
    </div>
    <button type="submit" class="btn btn-primary">Tambah dong</button>
    
  </form>
</div>

@endsection