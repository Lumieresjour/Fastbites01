@extends('layouts.frontend.app')
@section('content')
     <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Beranda</a>
                        <span>Reward Point</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Program Reward Point -->
    <section class="reward-hero spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="reward-hero__content text-center">
                        <h2>Program Reward Point</h2>
                        <p>Dapatkan point setiap kali berbelanja dan gunakan untuk diskon pembelian berikutnya!</p>
                        <div class="reward-hero__stats">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="reward-stat">
                                        <div class="reward-stat__icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="reward-stat__text">
                                            <h4>{{ auth()->check() ? number_format(auth()->user()->point) : 0 }}</h4>
                                            <span>Point Anda Saat Ini</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="reward-stat">
                                        <div class="reward-stat__icon">
                                            <i class="fa fa-gift"></i>
                                        </div>
                                        <div class="reward-stat__text">
                                            <h4>5 Point</h4>
                                            <span>Bonus Setiap Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="reward-stat">
                                        <div class="reward-stat__icon">
                                            <i class="fa fa-percentage"></i>
                                        </div>
                                        <div class="reward-stat__text">
                                            <h4>Rp 1.000</h4>
                                            <span>Diskon per Point</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Program Reward Point -->

    <!-- Cara Kerja Program Reward Point -->
    <section class="how-it-works spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Cara Kerja Program Reward Point</h2>
                        <p>Ikuti langkah mudah berikut untuk mendapatkan dan menggunakan point reward</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="how-it-works__item">
                        <div class="how-it-works__item__number">1</div>
                        <div class="how-it-works__item__icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="how-it-works__item__text">
                            <h5>Berbelanja</h5>
                            <p>Lakukan pembelian produk apapun di toko kami untuk mendapatkan point reward.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="how-it-works__item">
                        <div class="how-it-works__item__number">2</div>
                        <div class="how-it-works__item__icon">
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="how-it-works__item__text">
                            <h5>Dapatkan Point</h5>
                            <p>Setiap order berhasil akan mendapatkan 5 point bonus yang langsung masuk ke akun Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="how-it-works__item">
                        <div class="how-it-works__item__number">3</div>
                        <div class="how-it-works__item__icon">
                            <i class="fa fa-percentage"></i>
                        </div>
                        <div class="how-it-works__item__text">
                            <h5>Gunakan untuk Diskon</h5>
                            <p>Gunakan point Anda saat checkout untuk mendapatkan diskon. 1 point = diskon Rp 1.000.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="how-it-works__item">
                        <div class="how-it-works__item__number">4</div>
                        <div class="how-it-works__item__icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="how-it-works__item__text">
                            <h5>Nikmati Diskon</h5>
                            <p>Point akan otomatis dikurangi dan Anda mendapatkan diskon langsung pada total pembayaran!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cara Kerja Program Reward Point -->

    <!-- Keuntungan Program Point -->
    <section class="point-benefits spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Keuntungan Program Point</h2>
                        <p>Berbagai manfaat yang bisa Anda dapatkan dari program point reward kami</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-item text-center">
                        <div class="benefit-item__icon">
                            <i class="fa fa-gift" style="font-size: 3rem; color: #FF5962;"></i>
                        </div>
                        <div class="benefit-item__text">
                            <h5>Bonus Point Otomatis</h5>
                            <p>Setiap order berhasil akan mendapatkan 5 point bonus secara otomatis tanpa syarat tambahan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-item text-center">
                        <div class="benefit-item__icon">
                            <i class="fa fa-percentage" style="font-size: 3rem; color: #FF5962;"></i>
                        </div>
                        <div class="benefit-item__text">
                            <h5>Diskon Langsung</h5>
                            <p>1 point = diskon Rp 1.000 yang langsung mengurangi total pembayaran Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-item text-center">
                        <div class="benefit-item__icon">
                            <i class="fa fa-infinity" style="font-size: 3rem; color: #FF5962;"></i>
                        </div>
                        <div class="benefit-item__text">
                            <h5>Berlaku Selamanya</h5>
                            <p>Point tidak memiliki masa berlaku, bisa digunakan kapan saja untuk pembelian berikutnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Keuntungan Program Point -->

    <!-- Syarat & Ketentuan -->
    <section class="reward-terms spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Syarat & Ketentuan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="reward-terms__content">
                        <h5>Cara Mendapatkan Point:</h5>
                        <ul>
                            <li>Setiap order berhasil = 5 point bonus</li>
                            <li>Point akan otomatis masuk setelah order selesai</li>
                            <li>Point tidak memiliki masa berlaku</li>
                            <li>Point tidak dapat ditransfer ke akun lain</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="reward-terms__content">
                        <h5>Penggunaan Point:</h5>
                        <ul>
                            <li>1 point = diskon Rp 1.000</li>
                            <li>Point dapat digunakan saat checkout</li>
                            <li>Penggunaan point tidak dapat dibatalkan</li>
                            <li>Point akan otomatis dikurangi setelah order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection