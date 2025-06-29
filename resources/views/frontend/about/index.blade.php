@extends('layouts.frontend.app')
@section('content')


    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about__text">
                                    <h2>Tentang Kami</h2>
                                    <p>Selamat datang di toko online kami! Kami adalah perusahaan yang berkomitmen untuk 
                                    memberikan produk berkualitas tinggi dengan layanan terbaik kepada pelanggan. 
                                    Dengan pengalaman bertahun-tahun di industri ini, kami memahami kebutuhan dan 
                                    keinginan pelanggan kami.</p>
                                    
                                    <p>Misi kami adalah menyediakan produk-produk pilihan dengan harga yang kompetitif, 
                                    sambil memberikan pengalaman berbelanja yang menyenangkan dan memuaskan. Kami 
                                    percaya bahwa kepuasan pelanggan adalah prioritas utama dalam setiap transaksi 
                                    yang kami lakukan.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about__image">
                                    <img src="{{ asset('me') }}/img/goku.jpeg" alt="About Us">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Vision Mission Section Begin -->
    <section class="vision-mission spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Visi & Misi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="vision-mission__item">
                        <div class="vision-mission__item__icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="vision-mission__item__text">
                            <h4>Visi</h4>
                            <p>Menjadi toko online terdepan yang dipercaya oleh masyarakat dalam menyediakan 
                            produk berkualitas dengan layanan yang excellent dan harga yang terjangkau.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="vision-mission__item">
                        <div class="vision-mission__item__icon">
                            <i class="fa fa-bullseye"></i>
                        </div>
                        <div class="vision-mission__item__text">
                            <h4>Misi</h4>
                            <p>Memberikan pengalaman berbelanja online yang mudah, aman, dan menyenangkan 
                            dengan menyediakan produk pilihan berkualitas tinggi dan layanan pelanggan terbaik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vision Mission Section End -->

    <!-- Why Choose Us Section Begin -->
    <section class="why-choose spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Mengapa Memilih Kami?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="why-choose__item">
                        <div class="why-choose__item__icon">
                            <i class="fa fa-shield"></i>
                        </div>
                        <div class="why-choose__item__text">
                            <h5>Produk Berkualitas</h5>
                            <p>Kami hanya menjual produk-produk yang telah melalui seleksi ketat untuk memastikan kualitas terbaik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-choose__item">
                        <div class="why-choose__item__icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="why-choose__item__text">
                            <h5>Pengiriman Cepat</h5>
                            <p>Sistem pengiriman yang efisien dengan berbagai pilihan ekspedisi untuk kemudahan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-choose__item">
                        <div class="why-choose__item__icon">
                            <i class="fa fa-headphones"></i>
                        </div>
                        <div class="why-choose__item__text">
                            <h5>Customer Service 24/7</h5>
                            <p>Tim customer service kami siap membantu Anda kapan saja dengan respon yang cepat dan ramah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="why-choose__item">
                        <div class="why-choose__item__icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="why-choose__item__text">
                            <h5>Pembayaran Aman</h5>
                            <p>Berbagai metode pembayaran yang aman dan terpercaya untuk kemudahan transaksi Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Tim Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team__item">
                        <div class="team__item__text">
                            <h5>Dasilva Rachmasary & Muhammad Raviansyah</h5>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team__item">
                        <div class="team__item__text">
                            <h5>Fadhilah Amsury</h5>
                            <span>Marketing Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team__item">
                        <div class="team__item__text">
                            <h5>Octaviandra Adhitia A</h5>
                            <span>Technical Lead</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team__item">
                        <div class="team__item__text">
                            <h5>Fulka Thufail</h5>
                            <span>Customer Service</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
@endsection