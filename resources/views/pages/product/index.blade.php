@extends('layout.master')

@section('content')
<div class="container">
  <div class="card mb-5">
  <h2>Halaman Produk</h2>
  <a href="{{ url('product/create') }}" class="btn btn-primary my-3">Tambah Produk</a>

  <div class="d-flex justify-content-center row">
  @foreach ($products as $item)
    <div class="col-3">
      <div class="card mb-3">
        <img src="https://asset-a.grid.id//crop/0x0:0x0/700x465/photo/bobofoto/original/20692_apa-yang-terjadi-kalau-kita-makan-makanan-cepat-saji-selama-seminggu-penuh.jpg" class="card-img-top">
        <div class="card-body">
          <p>{{ $item->nama }}</p>
          <p>{{ $item->price }}</p>
          <p>{{ $item->description }}</p>   
          <p>{{ $item->category->name }}</p>
          {{-- <a href="{{url('product/edit')}}" class="btn btn-warning btn-xs">Edit</a> --}}
          <form action="/product/{{ $item->id }}"
            method="POST">
           {{ csrf_field() }}
           {{ method_field('EDIT') }}
           <input type="submit" class="btn btn-warning btn-xs" value="edit">
         </form>
          {{--  <a href="{{url('product/destroy')}}" class="btn btn-danger btn-xs">Delete</a>  --}}
          <form action="/product/{{ $item->id }}"
                                         method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-danger btn-xs" value="Delete">
                                    </form>
          {{-- <a href="{{url('cart')}}" class="btn btn-success">Checkout</a> --}}
          <form action="/product/{{ $item->id }}"
            method="POST">
           {{ csrf_field() }}
           {{ method_field('CEKOUT') }}
           <input type="submit" class="btn btn-primary btn-xs" value="cekout">
         </form>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
    
    {{-- <div class="container">
      <div class="d-flex justify-content-center row">
      <div class="card" style="width: 14rem;">
        
        <div class="card-body">
          <h5 class="card-title">Nasi Penggel</h5>
          <p class="card-text">Nasi penggel merupakan Nasi dengan isian lodeh santan berbumbu gurih sederhana yang dicampur ‘gori’ atan nangka muda, daun singkong, tempe, tahu, melinjo, dan kikil.</p>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgvGcXMwcXCseut77ldM6h3A85uh6_oQApgX8mFB0SPcj5stWQKilLsMWl3tfIPGKBYZeXTlpGBmIAiId37u2ajt771v21WBIzHwf7RpV6QY9qa9_EoHH8fBRL01s9pK6eIvK35KY-YSX51iONzL7WJxrDJ3kMM7Q7aznH1aI_TISjQguQfnSoVbcs6/s419/dawet-ayu.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Es Dawet</h5>
          <p class="card-text">Dawet merupakan minuman khas Jawa dari desa Jabung, Ponorogo yang terbuat dari tepung beras ataupun tepung beras ketan, disajikan dengan es parut serta gula merah cair dan santan. Rasa minuman ini manis dan gurih.</p>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img src="https://cdn.idntimes.com/content-images/community/2021/09/screenshot-2021-09-21-06-21-17-66-1c337646f29875672b5a61192b9010f9-6d2cbb4bbec2340f770674be006d2944-996bca6c452ec94a902c8760c2f1b5d1_600x400.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Soto TMW</h5>
          <p class="card-text">Tidak seperti kebanyakan soto yang menggunakan daging ayam, kambing ataupun sapi, soto TMW sendiri menggunakan daging entok. Soto ini berkuah santan dengan pelengkap kol, tauge, bihun dan perkedel singkong.</p>
        </div>
      </div>

      <div class="card" style="width: 14rem;">
        <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2021/06/15093247/Ketahui-Fakta-Es-Teh-Manis.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Es Teh</h5>
          <p class="card-text">Es teh adalah minuman teh yang disajikan dingin dengan es batu. Biasanya, Es teh seringkali ditambahkan rasa seperti melati, dan buah-buahan seperti lemon, ceri, dan stroberi, atau susu.</p>
        </div>
      </div>

    </div>  --}}