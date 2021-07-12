<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">@yield('app-name')</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="/DataUser/{{ auth()->user()->nip }}" class="d-block">{{ auth()->user()->email }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <!-- Dropdown Menu -->
                <li class="nav-item">
                    <a href="/Home" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                @if (auth()->user()->level == 'karyawan' || auth()->user()->level == 'admin')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Memo
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            @if (auth()->user()->level == 'admin')
                                <li class="nav-item">
                                    <a href="/BuatMemo" class="nav-link">
                                        <i class="fas fa-paper-plane nav-icon"></i>
                                        <p>Buat Memo</p>
                                    </a>
                                </li>
                            @endif

                            @if (auth()->user()->level == 'admin')
                                <li class="nav-item">
                                    <a href="/DaftarBerkas/{{ auth()->user()->nip }}" class="nav-link">
                                        <i class="fas fa-inbox nav-icon"></i>
                                        <p>Surat Masuk</p>
                                    </a>
                                </li>
                            @endif

                            @if (auth()->user()->level == 'admin')
                                <li class="nav-item">
                                    <a href="/ExportData" class="nav-link">
                                        <i class="fas fa-envelope-open nav-icon"></i>
                                        <p>Memo Keluar</p>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="/PersonalData/{{ auth()->user()->nip }}" class="nav-link">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>
                            Personal Data
                        </p>
                    </a>
                </li>

                @if (auth()->user()->level == 'admin')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>
                                Manajemen User
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/TambahUser" class="nav-link">
                                    <i class="fas fa-user-plus nav-icon"></i>
                                    <p>Tambah User</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/DaftarUser" class="nav-link">
                                    <i class="fas fa-users nav-icon"></i>
                                    <p>Daftar User</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                @if (auth()->user()->level == 'admin')
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-cog"></i>
                            <p>
                                Settings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/DaftarDivisi" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daftar Divisi</p>
                                </a>
                                <a href="/DaftarJabatan" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daftar Jabatan</p>
                                </a>
                                <a href="/DaftarJB" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daftar Jenis Berkas</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="/Logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>
                <!-- /.dropdown menu -->
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
