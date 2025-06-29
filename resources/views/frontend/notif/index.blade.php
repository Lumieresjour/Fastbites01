@extends('layouts.frontend.app')
@section('content')
     <!-- Breadcrumb Begin -->
     <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Notifikasi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Notification Hero Section Begin -->
    <section class="notification-hero spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="notification-hero__content text-center">
                        <h2>Notifikasi</h2>
                        <p>Lihat semua pemberitahuan dan update terbaru untuk akun Anda</p>
                        <div class="notification-hero__stats">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="notification-stat">
                                        <div class="notification-stat__icon">
                                            <i class="fa fa-bell"></i>
                                        </div>
                                        <div class="notification-stat__text">
                                            <h4>{{ $data['total_notifications'] ?? 15 }}</h4>
                                            <span>Total Notifikasi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="notification-stat">
                                        <div class="notification-stat__icon">
                                            <i class="fa fa-envelope-open"></i>
                                        </div>
                                        <div class="notification-stat__text">
                                            <h4>{{ $data['unread_notifications'] ?? 3 }}</h4>
                                            <span>Belum Dibaca</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="notification-stat">
                                        <div class="notification-stat__icon">
                                            <i class="fa fa-check-circle"></i>
                                        </div>
                                        <div class="notification-stat__text">
                                            <h4>{{ $data['read_notifications'] ?? 12 }}</h4>
                                            <span>Sudah Dibaca</span>
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
    <!-- Notification Hero Section End -->

    <!-- Notification Actions Section Begin -->
    <section class="notification-actions">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="notification-actions__content text-center">
                        <div class="notification-actions__buttons">
                            <button class="btn btn-primary btn-sm active" data-filter="all">
                                <i class="fa fa-list"></i> Semua
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-filter="unread">
                                <i class="fa fa-envelope"></i> Belum Dibaca
                            </button>
                            <button class="btn btn-outline-primary btn-sm" data-filter="read">
                                <i class="fa fa-envelope-open"></i> Sudah Dibaca
                            </button>
                            <button class="btn btn-outline-success btn-sm" data-filter="order">
                                <i class="fa fa-shopping-cart"></i> Pesanan
                            </button>
                            <button class="btn btn-outline-warning btn-sm" data-filter="reward">
                                <i class="fa fa-gift"></i> Reward
                            </button>
                        </div>
                        <div class="notification-actions__tools">
                            <button class="btn btn-success btn-sm">
                                <i class="fa fa-check"></i> Tandai Semua Dibaca
                            </button>
                            <button class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Hapus yang Dibaca
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Notification Actions Section End -->

    <!-- Notification List Section Begin -->
    <section class="notification-list spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="notification-list__content">
                        <!-- Sample notifications -->
                        <div class="notification-item unread order" data-type="order" data-status="unread">
                            <div class="notification-item__icon">
                                <i class="fa fa-shopping-cart text-primary"></i>
                            </div>
                            <div class="notification-item__content">
                                <div class="notification-item__header">
                                    <h6>Pesanan Anda Sedang Diproses</h6>
                                    <span class="notification-item__time">2 jam yang lalu</span>
                                </div>
                                <p>Pesanan #ORD-001234 sedang diproses oleh tim kami. Estimasi pengiriman 2-3 hari kerja.</p>
                                <div class="notification-item__actions">
                                    <button class="btn btn-sm btn-outline-primary">Lihat Detail</button>
                                    <button class="btn btn-sm btn-outline-secondary">Tandai Dibaca</button>
                                </div>
                            </div>
                            <div class="notification-item__status">
                                <span class="badge badge-primary">Baru</span>
                            </div>
                        </div>

                        <div class="notification-item unread reward" data-type="reward" data-status="unread">
                            <div class="notification-item__icon">
                                <i class="fa fa-gift text-warning"></i>
                            </div>
                            <div class="notification-item__content">
                                <div class="notification-item__header">
                                    <h6>Poin Reward Berhasil Ditambahkan</h6>
                                    <span class="notification-item__time">5 jam yang lalu</span>
                                </div>
                                <p>Selamat! Anda mendapat 5 poin reward dari pembelian terakhir. Total poin Anda sekarang 125 poin.</p>
                                <div class="notification-item__actions">
                                    <button class="btn btn-sm btn-outline-warning">Lihat Katalog</button>
                                    <button class="btn btn-sm btn-outline-secondary">Tandai Dibaca</button>
                                </div>
                            </div>
                            <div class="notification-item__status">
                                <span class="badge badge-warning">Reward</span>
                            </div>
                        </div>

                        <div class="notification-item read order" data-type="order" data-status="read">
                            <div class="notification-item__icon">
                                <i class="fa fa-truck text-success"></i>
                            </div>
                            <div class="notification-item__content">
                                <div class="notification-item__header">
                                    <h6>Pesanan Anda Sedang Dikirim</h6>
                                    <span class="notification-item__time">1 hari yang lalu</span>
                                </div>
                                <p>Pesanan #ORD-001233 sedang dalam perjalanan. Nomor resi: JNE123456789</p>
                                <div class="notification-item__actions">
                                    <button class="btn btn-sm btn-outline-success">Lacak Paket</button>
                                </div>
                            </div>
                            <div class="notification-item__status">
                                <i class="fa fa-check-circle text-success"></i>
                            </div>
                        </div>

                        <div class="notification-item unread order" data-type="order" data-status="unread">
                            <div class="notification-item__icon">
                                <i class="fa fa-exclamation-triangle text-danger"></i>
                            </div>
                            <div class="notification-item__content">
                                <div class="notification-item__header">
                                    <h6>Pembayaran Menunggu Konfirmasi</h6>
                                    <span class="notification-item__time">6 jam yang lalu</span>
                                </div>
                                <p>Pembayaran untuk pesanan #ORD-001235 menunggu konfirmasi. Silakan upload bukti pembayaran.</p>
                                <div class="notification-item__actions">
                                    <button class="btn btn-sm btn-outline-danger">Upload Bukti</button>
                                    <button class="btn btn-sm btn-outline-secondary">Tandai Dibaca</button>
                                </div>
                            </div>
                            <div class="notification-item__status">
                                <span class="badge badge-danger">Urgent</span>
                            </div>
                        </div>

                        <div class="notification-item read reward" data-type="reward" data-status="read">
                            <div class="notification-item__icon">
                                <i class="fa fa-star text-warning"></i>
                            </div>
                            <div class="notification-item__content">
                                <div class="notification-item__header">
                                    <h6>Reward Berhasil Ditukar</h6>
                                    <span class="notification-item__time">3 hari yang lalu</span>
                                </div>
                                <p>Voucher Diskon 50% berhasil ditukar dengan 50 poin. Kode voucher: DISC50OFF</p>
                                <div class="notification-item__actions">
                                    <button class="btn btn-sm btn-outline-warning">Gunakan Voucher</button>
                                </div>
                            </div>
                            <div class="notification-item__status">
                                <i class="fa fa-check-circle text-success"></i>
                            </div>
                        </div>

                        <div class="notification-item read order" data-type="order" data-status="read">
                            <div class="notification-item__icon">
                                <i class="fa fa-check-circle text-success"></i>
                            </div>
                            <div class="notification-item__content">
                                <div class="notification-item__header">
                                    <h6>Pesanan Selesai</h6>
                                    <span class="notification-item__time">1 minggu yang lalu</span>
                                </div>
                                <p>Pesanan #ORD-001232 telah selesai. Terima kasih telah berbelanja di toko kami!</p>
                                <div class="notification-item__actions">
                                    <button class="btn btn-sm btn-outline-success">Beri Ulasan</button>
                                </div>
                            </div>
                            <div class="notification-item__status">
                                <i class="fa fa-check-circle text-success"></i>
                            </div>
                        </div>

                        <!-- Empty state -->
                        <div class="notification-empty text-center" style="display: none;">
                            <div class="notification-empty__icon">
                                <i class="fa fa-bell-slash"></i>
                            </div>
                            <h5>Tidak Ada Notifikasi</h5>
                            <p>Belum ada notifikasi untuk filter yang dipilih.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination">
                        <a href="#" class="pagination__prev"><i class="fa fa-chevron-left"></i></a>
                        <a href="#" class="pagination__number active">1</a>
                        <a href="#" class="pagination__number">2</a>
                        <a href="#" class="pagination__number">3</a>
                        <a href="#" class="pagination__next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Notification List Section End -->
@endsection

@push('styles')
<style>
.notification-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.notification-stat {
    background: rgba(255, 255, 255, 0.1);
    padding: 30px 20px;
    border-radius: 10px;
    text-align: center;
    margin-bottom: 20px;
    backdrop-filter: blur(10px);
}

.notification-stat__icon {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.notification-stat__text h4 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 5px;
}

.notification-stat__text span {
    font-size: 0.9rem;
    opacity: 0.8;
}

.notification-actions {
    background: #f8f9fa;
    padding: 20px 0;
}

.notification-actions__content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

.notification-actions__buttons {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.notification-actions__tools {
    display: flex;
    gap: 10px;
}

.notification-item {
    background: white;
    border: 1px solid #e9ecef;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 15px;
    display: flex;
    align-items: flex-start;
    gap: 15px;
    transition: all 0.3s ease;
    position: relative;
}

.notification-item:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transform: translateY(-2px);
}

.notification-item.unread {
    border-left: 4px solid #007bff;
    background: #f8f9ff;
}

.notification-item__icon {
    font-size: 1.5rem;
    width: 40px;
    text-align: center;
    flex-shrink: 0;
}

.notification-item__content {
    flex: 1;
}

.notification-item__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.notification-item__header h6 {
    margin: 0;
    font-weight: 600;
    color: #333;
}

.notification-item__time {
    font-size: 0.8rem;
    color: #6c757d;
}

.notification-item__content p {
    margin-bottom: 15px;
    color: #555;
    line-height: 1.5;
}

.notification-item__actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.notification-item__status {
    position: absolute;
    top: 15px;
    right: 15px;
}

.notification-empty {
    padding: 60px 20px;
    color: #6c757d;
}

.notification-empty__icon {
    font-size: 4rem;
    margin-bottom: 20px;
    opacity: 0.5;
}

.btn-sm {
    padding: 0.25rem 0.75rem;
    font-size: 0.875rem;
    border-radius: 0.375rem;
}

.badge {
    font-size: 0.75rem;
    padding: 0.35em 0.65em;
    border-radius: 0.375rem;
}

.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin-top: 30px;
}

.pagination a {
    display: inline-block;
    padding: 10px 15px;
    border: 1px solid #dee2e6;
    color: #6c757d;
    text-decoration: none;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.pagination a:hover,
.pagination a.active {
    background: #007bff;
    color: white;
    border-color: #007bff;
}

@media (max-width: 768px) {
    .notification-actions__content {
        flex-direction: column;
        align-items: stretch;
    }
    
    .notification-actions__buttons,
    .notification-actions__tools {
        justify-content: center;
    }
    
    .notification-item {
        flex-direction: column;
        text-align: center;
    }
    
    .notification-item__header {
        flex-direction: column;
        text-align: center;
        gap: 5px;
    }
    
    .notification-item__status {
        position: static;
        margin-top: 10px;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('[data-filter]');
    const notificationItems = document.querySelectorAll('.notification-item');
    const emptyState = document.querySelector('.notification-empty');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter notifications
            let visibleCount = 0;
            notificationItems.forEach(item => {
                const shouldShow = filter === 'all' || 
                                 item.classList.contains(filter) ||
                                 item.dataset.type === filter ||
                                 item.dataset.status === filter;
                
                if (shouldShow) {
                    item.style.display = 'flex';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            
            // Show/hide empty state
            emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });
    
    // Mark as read functionality
    const markReadButtons = document.querySelectorAll('.notification-item__actions .btn-outline-secondary');
    markReadButtons.forEach(button => {
        button.addEventListener('click', function() {
            const notificationItem = this.closest('.notification-item');
            notificationItem.classList.remove('unread');
            notificationItem.classList.add('read');
            
            // Update the status indicator
            const statusElement = notificationItem.querySelector('.notification-item__status');
            if (statusElement) {
                statusElement.innerHTML = '<i class="fa fa-check-circle text-success"></i>';
            }
            
            // Remove the button
            this.remove();
            
            // Show success message (optional)
            alert('Notifikasi berhasil ditandai sebagai dibaca!');
        });
    });
    
    // Mark all as read functionality
    const markAllReadButton = document.querySelector('.btn-success');
    if (markAllReadButton) {
        markAllReadButton.addEventListener('click', function() {
            const unreadItems = document.querySelectorAll('.notification-item.unread');
            unreadItems.forEach(item => {
                item.classList.remove('unread');
                item.classList.add('read');
                
                // Update status indicator
                const statusElement = item.querySelector('.notification-item__status');
                if (statusElement) {
                    statusElement.innerHTML = '<i class="fa fa-check-circle text-success"></i>';
                }
                
                // Remove mark as read button
                const markReadBtn = item.querySelector('.btn-outline-secondary');
                if (markReadBtn) {
                    markReadBtn.remove();
                }
            });
            
            alert('Semua notifikasi berhasil ditandai sebagai dibaca!');
        });
    }
    
    // Delete read notifications functionality
    const deleteReadButton = document.querySelector('.btn-danger');
    if (deleteReadButton) {
        deleteReadButton.addEventListener('click', function() {
            if (confirm('Apakah Anda yakin ingin menghapus semua notifikasi yang sudah dibaca?')) {
                const readItems = document.querySelectorAll('.notification-item.read');
                readItems.forEach(item => {
                    item.style.animation = 'fadeOut 0.3s ease';
                    setTimeout(() => {
                        item.remove();
                    }, 300);
                });
                
                setTimeout(() => {
                    alert('Notifikasi yang sudah dibaca berhasil dihapus!');
                }, 300);
            }
        });
    }
});
</script>
@endpush