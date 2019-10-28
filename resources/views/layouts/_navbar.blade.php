<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color bg-dark ">
  <a class="navbar-brand" href="/home">shop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      @guest
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">หน้าหลัก
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products">สินค้า</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payments">วิธีการสั่งซื้อสินค้า</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto ">
      @endguest
      @auth
@if(Auth::user()->role == "CUSTOMER")
       <ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="{{route('home')}}">หน้าหลัก
 <span class="sr-only">(current)</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('products.index')}}">สินค้า</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('payments')}}">วิธีการสั่งซื้อสินค้า</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/pays/create">แจ้งชำระเงิน</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/pays">ดูการรายละเอียดการชำระเงิน </a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('cart.index')}}">ตะกร้าสินค้า</a>
</li>

</ul>
<ul class="navbar-nav ml-auto ">
     @endif
     @if(Auth::user()->role == "ADMIN")
     <ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="{{route('home')}}">หน้าหลัก
 <span class="sr-only">(current)</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('products.index')}}">สินค้า</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/products/create">เพิ่มสินค้า</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">แก้ไขสินค้า</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('pays.index')}}">ดูการแจ้งชำระเงิน </a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('users.index')}}">รายชื่อลูกค้า</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/myOrders">รายการสั่งของลูกค้า</a>
</li>
</ul>
<ul class="navbar-nav ml-auto ">
@endif
@endauth
    @guest
      <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

      </li>
      @if (Route::has('register'))
      <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
       </li>
      @endif
      @else
      <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->username }}
          <i class="fas fa-user"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="{{route('profile')}}">โปรไฟล์</a>
          <a class="dropdown-item"  href="/myOrders">รายการสั่งซื้อ</a>
          <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </div>
</nav>
<!--/.Navbar -->
