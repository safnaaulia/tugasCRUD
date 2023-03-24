<nav class="navbar navbar-expand-lg navbar-dark bg-light bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">KedaiQui</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/categori') }}">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/product') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/cart') }}">Cart</a>
        </li>

      </ul>
    </div>
  </div>
</nav>