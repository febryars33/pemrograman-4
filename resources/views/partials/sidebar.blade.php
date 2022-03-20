<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ URL::to('/assets/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="" class="d-block" onclick="event.preventDefault();">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ URL::to('/') }}" class="nav-link">
                    <i class="nav-icon bi bi-house"></i>
                    <p>Beranda</p>
                </a>
            </li>
            {{-- Jika menu nya pengen auto open tambah class 'menu-open' aja disamping class 'nav-item' --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-folder"></i>
                    <p>
                        Data Produk
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('products_create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Buat Produk Baru</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('products_index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Produk</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->