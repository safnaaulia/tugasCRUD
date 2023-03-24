@extends('layout.master')

@section('content')
<div class="container">
  <form method="post" action="{{route('categori.update')}}">
  @csrf
    <div class="mb-3">
    <select id="kategori" name="kategori">
        <option value="" selected disabled hidden>-- Pilih Kategori --</option>
        @foreach ($categori as $row)
            <option value="{{ $row->id }}">
                {{ $row->nama_kategori }}
            </option>
        @endforeach

<body>
    <div class="container">
      <h2 class="alert alert-primary text-center mt-3">Data Kategori</h2>
  
      <form>
        <div class="form-group">
          <label>Nama Kategori</label>
          <input type="text" name="" class="form-control" placeholder="Nama Kategori...">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </body>
  
  @endforeach