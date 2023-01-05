<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive"
                        src="{{ asset('assets/images/logo/logo_icon.png') }}" alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="" {{-- <div class="user_img"><img
                        class="img-responsive" src="{{ asset('/image/rt/' . $rt->image) }}" --}} alt="#" /></div>
                <div class="user_info">
                    <h6>{{ Auth::user()->name }} </h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <ul class="list-unstyled components">
            <h4>
                Halaman Admin RT
            </h4>
            <li><a href="{{ route('penduduk.index') }}"><i class="fa fa-user blue_color2"></i>
                    <span>Tabel Penduduk</span></a>
            </li>
            <li>
                <a href="{{ route('ronda.index') }}"><i class="fa fa-users blue_color"></i>
                    <span>Tabel Ronda</span></a>
            </li>
            <li>
                <a href="{{ route('kegiatan.index') }}"><i class="fa fa-users blue_color"></i>
                    <span>Tabel Kegiatan</span></a>
            </li>
        </ul>
    </div>
</nav>