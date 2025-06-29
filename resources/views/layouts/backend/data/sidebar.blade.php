<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Fastbites</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">FB</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Menu Admin</li>
          <li><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span> {{ __('menu.dashboard') }}</span></a></li>
          <li><a class="nav-link" href="{{ route('customer.index') }}"><i class="fas fa-users"></i> <span> {{ __('menu.customer') }}</span></a></li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-table"></i><span>Master</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('master.category.index') }}">{{ __('menu.category') }}</a></li>
              <li><a class="nav-link" href="{{ route('master.product.index') }}">{{ __('menu.product') }}</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i><span>{{ __('menu.order') }}</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('feature.order.index') }}">{{ __('menu.order_all') }}</a></li>
              <li><a class="nav-link" href="{{ route('feature.order.index',0) }}">{{ __('menu.order_pending') }}</a></li>
              <li><a class="nav-link" href="{{ route('feature.order.index',1) }}">{{ __('menu.order_process') }}</a></li>
              <li><a class="nav-link" href="{{ route('feature.order.index',2) }}">{{ __('menu.order_shipped') }}</a></li>
              <li><a class="nav-link" href="{{ route('feature.order.index',3) }}">{{ __('menu.order_completed') }}</a></li>
              <li><a class="nav-link" href="{{ route('feature.order.index',4) }}">{{ __('menu.order_canceled') }}</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>{{ __('menu.setting') }}</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('setting.web') }}">{{ __('menu.setting_web') }}</a></li>
              <li><a class="nav-link" href="{{ route('setting.shipping') }}">{{ __('menu.setting_address') }}</a></li>
            </ul>
          </li>
        </ul>
    </aside>
  </div>

<style>
/* CSS untuk mengubah warna font dan icon sidebar ke #FF5962 */

/* Sidebar Brand */
.sidebar-brand a,
.sidebar-brand-sm a {
    color: #FF5962 !important;
    text-decoration: none;
}

.sidebar-brand a:hover,
.sidebar-brand-sm a:hover {
    color: #e04850 !important;
}

/* Menu Header */
.sidebar-menu .menu-header {
    color: #FF5962 !important;
    font-weight: bold;
}

/* Navigation Links */
.sidebar-menu li .nav-link {
    color: #FF5962 !important;
}

.sidebar-menu li .nav-link:hover {
    color: #e04850 !important;
    background-color: rgba(255, 89, 98, 0.1) !important;
}

/* Icons dalam navigation */
.sidebar-menu li .nav-link i {
    color: #FF5962 !important;
}

.sidebar-menu li .nav-link:hover i {
    color: #e04850 !important;
}

/* Dropdown Menu Items */
.sidebar-menu .dropdown-menu li .nav-link {
    color: #FF5962 !important;
    padding-left: 20px;
}

.sidebar-menu .dropdown-menu li .nav-link:hover {
    color: #e04850 !important;
    background-color: rgba(255, 89, 98, 0.1) !important;
}

/* Active Menu Item */
.sidebar-menu li.active > .nav-link,
.sidebar-menu li.active > .nav-link i {
    color: #FF5962 !important;
    background-color: rgba(255, 89, 98, 0.15) !important;
    font-weight: bold;
}

/* Dropdown Arrow */
.sidebar-menu .has-dropdown::after {
    border-left-color: #FF5962 !important;
}

/* Span text dalam menu */
.sidebar-menu li .nav-link span {
    color: #FF5962 !important;
}

.sidebar-menu li .nav-link:hover span {
    color: #e04850 !important;
}

/* Styling untuk dropdown yang terbuka */
.sidebar-menu .nav-item.dropdown.show > .nav-link {
    background-color: rgba(255, 89, 98, 0.1) !important;
}

/* Responsive styling */
@media (max-width: 768px) {
    .sidebar-menu li .nav-link {
        font-size: 14px;
    }
    
    .sidebar-menu li .nav-link i {
        font-size: 16px;
    }
}
</style>