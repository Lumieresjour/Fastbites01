@extends('layouts.frontend.app')
@section('content')
     <!-- Breadcrumb Begin -->
     <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Reward</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Reward Hero Section Begin -->
    <section class="reward-hero spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="reward-hero__content text-center">
                        <h2>Program Reward</h2>
                        <p>Dapatkan poin setiap kali berbelanja dan tukarkan dengan berbagai hadiah menarik!</p>
                        <div class="reward-hero__stats">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="reward-stat">
                                        <div class="reward-stat__icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="reward-stat__text">
                                            <h4>{{ auth()->check() ? auth()->user()->total_points ?? 0 : 0 }}</h4>
                                            <span>Total Poin Anda</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="reward-stat">
                                        <div class="reward-stat__icon">
                                            <i class="fa fa-gift"></i>
                                        </div>
                                        <div class="reward-stat__text">
                                            <h4>{{ $data['total_rewards'] ?? 0 }}</h4>
                                            <span>Total Hadiah</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="reward-stat">
                                        <div class="reward-stat__icon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <div class="reward-stat__text">
                                            <h4>{{ $data['total_redeemed'] ?? 0 }}</h4>
                                            <span>Sudah Ditukar</span>
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
    <!-- Reward Hero Section End -->

    <!-- How It Works Section Begin -->
    <section class="how-it-works spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Cara Kerja Program Reward</h2>
                        <p>Ikuti langkah mudah berikut untuk mendapatkan dan menukar poin reward</p>
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
                            <p>Lakukan pembelian produk apapun di toko kami untuk mendapatkan poin reward.</p>
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
                            <h5>Kumpulkan Poin</h5>
                            <p>Setiap Rp 10.000 pembelian = 1 poin reward yang akan masuk ke akun Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="how-it-works__item">
                        <div class="how-it-works__item__number">3</div>
                        <div class="how-it-works__item__icon">
                            <i class="fa fa-gift"></i>
                        </div>
                        <div class="how-it-works__item__text">
                            <h5>Pilih Hadiah</h5>
                            <p>Pilih hadiah menarik dari katalog reward yang tersedia di bawah ini.</p>
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
                            <h5>Tukar Poin</h5>
                            <p>Tukarkan poin Anda dengan hadiah yang dipilih dan nikmati hadiahnya!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section End -->

    <!-- Reward Catalog Section Begin -->
    <section class="reward-catalog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Katalog Reward</h2>
                        <p>Pilih hadiah menarik yang bisa Anda dapatkan dengan poin reward</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($data['rewards'] ?? [] as $reward)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="reward-catalog__item">
                        <div class="reward-catalog__item__pic">
                            <img src="{{ asset('storage/' . $reward->image) }}" alt="{{ $reward->name }}">
                            <div class="reward-catalog__item__points">
                                <span>{{ $reward->points_required }} Poin</span>
                            </div>
                        </div>
                        <div class="reward-catalog__item__text">
                            <h6>{{ $reward->name }}</h6>
                            <p>{{ $reward->description }}</p>
                            @auth
                                @if(auth()->user()->total_points >= $reward->points_required)
                                    <form action="{{ route('reward.redeem', $reward->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-sm">Tukar Sekarang</button>
                                    </form>
                                @else
                                    <button class="btn btn-secondary btn-sm" disabled>
                                        Poin Tidak Cukup
                                    </button>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login untuk Tukar</a>
                            @endauth
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-lg-12">
                    <div class="text-center">
                        <p>Belum ada reward yang tersedia saat ini. Silakan cek kembali nanti!</p>
                    </div>
                </div>
                @endforelse
            </div>
            @if(isset($data['rewards']) && $data['rewards']->hasPages())
            <div class="row">
                <div class="col-lg-12 text-center">
                    {{ $data['rewards']->links('vendor.pagination.custom') }}
                </div>
            </div>
            @endif
        </div>
    </section>
    <!-- Reward Catalog Section End -->

    <!-- Point History Section Begin -->
    @auth
    <section class="point-history spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Riwayat Poin</h2>
                        <p>Lihat riwayat perolehan dan penggunaan poin reward Anda</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="point-history__table">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Deskripsi</th>
                                    <th>Poin</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data['point_history'] ?? [] as $history)
                                <tr>
                                    <td>{{ $history->created_at->format('d/m/Y H:i') }}</td>
                                    <td>{{ $history->description }}</td>
                                    <td>
                                        <span class="{{ $history->type == 'earned' ? 'text-success' : 'text-danger' }}">
                                            {{ $history->type == 'earned' ? '+' : '-' }}{{ $history->points }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-{{ $history->type == 'earned' ? 'success' : 'warning' }}">
                                            {{ $history->type == 'earned' ? 'Diperoleh' : 'Digunakan' }}
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">Belum ada riwayat poin</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endauth
    <!-- Point History Section End -->

    <!-- Reward Terms Section Begin -->
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
                        <h5>Cara Mendapatkan Poin:</h5>
                        <ul>
                            <li>Setiap pembelian Rp 10.000 = 1 poin reward</li>
                            <li>Poin akan otomatis masuk setelah pesanan selesai</li>
                            <li>Poin berlaku selama 1 tahun sejak diperoleh</li>
                            <li>Poin tidak dapat ditransfer ke akun lain</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="reward-terms__content">
                        <h5>Penukaran Poin:</h5>
                        <ul>
                            <li>Poin dapat ditukar dengan hadiah yang tersedia</li>
                            <li>Penukaran tidak dapat dibatalkan</li>
                            <li>Hadiah akan dikirim dalam 3-7 hari kerja</li>
                            <li>Ketersediaan hadiah dapat berubah sewaktu-waktu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reward Terms Section End -->
@endsection