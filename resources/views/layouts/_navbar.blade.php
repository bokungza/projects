<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-fixed">

  <h1 class="navbar-brand" >Shop</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">หน้าหลัก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="products">สินค้า <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="payments">วิธีการซื้อสินค้า <span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <a class="btn text-white" href="{{ route('register') }}">Register 
    <a class="btn text-white" href="{{ route('login') }}">Login <i class="fas fa-sign-in-alt"></i> <span class="sr-only">(current)</span></a>

  </div>
</nav>
