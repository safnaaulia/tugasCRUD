@extends('layout.master')

@section('content')
<div class="container">
  <div class="card mb-5">
  <h2>Halaman Keranjang</h2>
 
  <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>sate ambal</td>
            <td>30.000</td>
            <td>
                <input type="number">
            </td>
            <td>
                <button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger">Delete</button>
                <button class="btn btn-succes">Cekout</button>
            </td>
        </tr>
    </tbody>
</table>
<hr>
<p>Total : <span>0</span></p>
</div>
</body>
  
@endsection