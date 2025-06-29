<!-- Offcanvas Menu Begin -->
 <div class="offcanvas-menu-overlay"></div>
 <div class="offcanvas-menu-wrapper">
     <div class="offcanvas__close">+</div>
     <ul class="offcanvas__widget">
         <li><span class="icon_search search-switch"></span></li>
         <li><a href="#"><span class="icon_bag_alt"></span>
             <div class="tip">2</div>
         </a></li>
     </ul>
     <div class="offcanvas__logo">
         <a href="{{ url('/') }}"><img src="{{ asset('ashion') }}/img/logo.png" alt=""></a>
     </div>
     <div id="mobile-menu-wrap"></div>
 </div>
 <!-- Offcanvas Menu End -->

 <!-- Header Section Begin -->
 <header class="header">
     <div class="container-fluid">
         <div class="row">
             <div class="col-xl-3 col-lg-2">
                 <div class="">
                <a href="{{ url('/') }}" class="logo-link">
    <img src="{{ asset('ashion/img/logo.png') }}" alt="{{ $app_name }}" class="title-logo-img">
</a>

<style>
/* CSS untuk styling logo */
.logo-link {
    display: inline-block;
    text-decoration: none;
}

.title-logo-img {
    height: 45px; /* Sesuaikan dengan tinggi yang diinginkan */
    width: auto;
    max-width: 100%;
    vertical-align: middle;
    transition: opacity 0.3s ease;
}

.title-logo-img:hover {
    opacity: 0.8;
}

/* CSS untuk mengubah warna font ke #FF5962 */
.header__menu ul li a,
.header__menu ul li.active a,
.header__right__widget li a,
.offcanvas-menu-wrapper,
.offcanvas__close,
.canvas__open i,
.dropdown li a {
    color: #FF5962 !important;
}

/* Styling untuk dropdown menu */
.header__menu ul li .dropdown li a:hover,
.header__menu ul li a:hover {
    color: #e04850 !important;
}

/* Styling untuk active menu */
.header__menu ul li.active a {
    color: #FF5962 !important;
    font-weight: bold;
}

/* Styling untuk tip/counter pada cart */
.tip {
    background-color: #FF5962 !important;
    color: white !important;
}

/* Styling untuk offcanvas menu */
.offcanvas-menu-wrapper ul li a,
.offcanvas-menu-wrapper .offcanvas__close {
    color: #FF5962 !important;
}

/* Styling untuk mobile menu icon */
.canvas__open i {
    color: #FF5962 !important;
}

/* Responsive design */
@media (max-width: 992px) {
    .title-logo-img {
        height: 40px;
    }
}

@media (max-width: 768px) {
    .title-logo-img {
        height: 35px;
    }
}

@media (max-width: 480px) {
    .title-logo-img {
        height: 30px;
    }
}
</style>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-7 text-center">
                 <nav class="header__menu">
                     <ul>
                         <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                         <li class="{{ request()->is('product*') ? 'active' : '' }}"><a href="{{ route('product.index') }}">Shop</a></li>
                         <li class="{{ request()->is('category*') ? 'active' : '' }}"><a href="{{ route('category.index') }}">Category</a></li>
                         <li class="{{ request()->is('about*') ? 'active' : '' }}"><a href="{{ route('about.index') }}">About Us</a></li>
                         <li class="{{ request()->is('reward*') ? 'active' : '' }}"><a href="{{ route('reward.index') }}">Reward</a></li>
                         <li class="{{ request()->is('notif*') ? 'active' : '' }}"><a href="{{ route('notif.index') }}">Notifikasi</a></li>
                         @auth
                          <li class="{{ request()->is('category*') ? 'active' : '' }}"><a href="#"><i class="fa fa-angle-down"></i> {{ auth()->user()->name }}</a>
                            <ul class="dropdown">
                                <li><a href="{{ route('transaction.index') }}">Riwayat Belanja</a></li>
                                <li><a href="{{ route('account.index') }}">Pengaturan Akun</a></li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <li>
                                        <a href="{{ route('logout')  }}" onclick="event.preventDefault();
                                        this.closest('form').submit();" > Logout
                                    </a>
                                    </li>
                                </form>
                            </ul>
                        </li>
                             @else
                             <li><a href="{{ route('login') }}">Login</a></li>
                         @endauth
                     </ul>
                 </nav>
             </div>
             <div class="col-lg-3">
                 <div class="header__right">
                     <ul class="header__right__widget">
                         <li><span class="icon_search search-switch"></span></li>
                         <li><a href="{{ route('cart.index') }}"><span class="icon_bag_alt"></span>
                             <div class="tip">
                                 {{ $totalCart ?? 0 }}
                             </div>
                         </a></li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="canvas__open">
             <i class="fa fa-bars"></i>
         </div>
     </div>
 </header>
 <!-- Header Section End -->