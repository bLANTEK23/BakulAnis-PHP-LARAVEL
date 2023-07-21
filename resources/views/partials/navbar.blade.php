<ul class="navbar-nav bg-grey sidebar sidebar-dark accordion" id="accordionSidebar" style="width: 253px!important;">

    <a class="sidebar-brand d-flex align-items-center justify-content-center mt-5" href="{{ url('/dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3 mt-5">
            <img class="img-fluid" src="{{ url('/images/baju.jpg') }}" width="150px" alt="logo">
        </div>
    </a>

    <li class="nav-item mt-5 pt-5 ml-2">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <img src="{{ url('/images/icon/ic_home.svg') }}" class="img-fluid" width="24px" alt="home">
            <span
                class="text-grey hover-underline-animation {{ $active === 'dashboard' ? 'active' : '' }}">Dashboard</span></a>
    </li>

    <li class="nav-item m-2">
        <span class="text-grey text-red" style="margin-left: 20px;font-weight: 500;">SISTEM</span>
    </li>

    <li class="nav-item ml-2">
        <a class="nav-link" href="{{ url('/category') }}">
            <img src="{{ url('/images/icon/ic_category.svg') }}" class="img-fluid" width="24px" alt="home">
            <span class="text-grey hover-underline-animation {{ $active === 'category' ? 'active' : '' }}">Data
                Kategori</span></a>
    </li>

    <li class="nav-item ml-2">
        <a class="nav-link" href="{{ url('/goods') }}">
            <img src="{{ url('/images/icon/ic_goods.svg') }}" class="img-fluid" width="24px" alt="home">
            <span class="text-grey hover-underline-animation {{ $active === 'goods' ? 'active' : '' }}">Data
                Barang</span></a>
    </li>

    <li class="nav-item ml-2">
        <a class="nav-link" href="{{ url('/recap') }}">
            <img src="{{ url('/images/icon/ic_recap.svg') }}" class="img-fluid" width="24px" alt="home">
            <span class="text-grey hover-underline-animation {{ $active === 'recap' ? 'active' : '' }}">Data
                Rekap</span></a>
    </li>


    <li class="nav-item m-2">
        <span class="text-grey text-red" style="margin-left: 20px;font-weight: 500;">INFO</span>
    </li>

    <li class="nav-item ml-2">

        <a class="nav-link" href="{{ url('/account') }}">
            <img src="{{ url('/images/icon/ic_profile.svg') }}" class="img-fluid" width="24px" alt="akun">
            <span
                class="text-grey hover-underline-animation {{ $active === 'account' ? 'active' : '' }}">Akun</span></a>
    </li>


    <li class="nav-item ml-2">
        <a class="nav-link" href="{{ url('/about') }}">
            <img src="{{ url('/images/icon/ic_question.svg') }}" class="img-fluid" width="22px" alt="faq">
            <span
                class="text-grey hover-underline-animation {{ $active === 'about' ? 'active' : '' }}">Tentang</span></a>
    </li>


    <li class="nav-item ml-2">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <img src="{{ url('/images/icon/ic_logout.svg') }}" class="img-fluid" width="24px" alt="logout">
            <span
                class="text-grey hover-underline-animation {{ $active === 'logout' ? 'active' : '' }}">Keluar</span></a>
    </li>

    <!-- Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-title1 text-blue" id="exampleModalLabel">Anda yakin ingin logout ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button type="button" class="btn btn-secondary text-body1 mx-2" data-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-danger text-body1 mx-2">Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</ul>
