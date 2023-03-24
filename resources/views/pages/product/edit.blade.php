@extends('layout.master')

@section('content')
<div class="container">
  <form method="post" action="{{route('product.update')}}">
  @csrf
    <div class="mb-3">
    <select id="kategori" name="kategori">
        <option value="" selected disabled hidden>-- Pilih Kategori --</option>
        @foreach ($categori as $row)
            <option value="{{ $row->id }}">
                {{ $row->nama_kategori }}
            </option>
        @endforeach
    </select>
      <!-- <label for="exampleInputEmail1" class="form-label">Kategori</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_id"> -->
    </div>
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
    <button type="submit" class="btn btn-primary">Tambah</button>
    
  </form>
</div>

@endsection