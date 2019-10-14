<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-fixed">

  <h1 class="navbar-brand" ><img src="https://img.icons8.com/cotton/35/000000/steak-rare--v1.png">Shop</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('LoginHomes')}}">หน้าหลัก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('LoginProducts')}}">สินค้า <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('LoginPayments')}}">วิธีการซื้อสินค้า <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
<<<<<<< HEAD
        <a class="nav-link" href="{{url('pays')}}">แจ้งชำระเงิน <span class="sr-only">(current)</span></a>
=======
        <a class="nav-link" href="/pays/create">แจ้งชำระเงิน <span class="sr-only">(current)</span></a>
>>>>>>> c9ba72157a91a7e6a82dd66f35911f1283a7c315
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('trackOrders')}}">ติดตามสินค้า <span class="sr-only">(current)</span></a>
      </li>
    </ul>

      <div class="dropdown">
        <a class="text-white dropdown-toggle" style="margin-right: 10px" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user-circle"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="accounts">โปรไฟล์</a>
          <a class="dropdown-item" href="/">ออกจากระบบ</a>
        </div>
      </div>
  </div>
</nav>
