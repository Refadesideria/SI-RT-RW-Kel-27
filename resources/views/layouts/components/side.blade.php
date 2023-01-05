@if (Auth::user()->role->slug === 'admin-rw')
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
                    <div class="user_img"><img class="img-responsive"
                            src="{{ asset('assets/images/layout_img/user_img.jpg') }}" alt="#" /></div>
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
                    Halaman Admin Rw
                </h4>
                <li><a href="{{ route('rt.index') }}"><i class="fa fa-user orange_color2"></i>
                        <span>Tabel Rt</span></a>
                </li>
                <li>
                    <a href="{{ route('ronda.index') }}"><i class="fa fa-shield blue2_color"></i>
                        <span>Jadwal Ronda</span></a>
                </li>
                <li>
                    <a href="{{ route('kegiatan.index') }}"><i class="fa fa-bell yellow_color"></i>
                        <span>Kegiatan lain </span></a>
                </li>
            </ul>
        </div>
    </nav>
@elseif(Auth::user()->role->slug === 'admin-rt')
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
                    <div class="user_img"><img class="img-responsive" src=""
                    {{-- <div class="user_img"><img class="img-responsive" src="{{ asset('/image/rt/' . $rt->image) }}" --}}
                            alt="#" /></div> 
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
                <li><a href="{{ route('penduduk.index') }}"><i class="fa fa-users orange_color2"></i>
                        <span>Tabel Penduduk</span></a>
                </li>
                <li>
                    <a href="{{ route('jadwal.index') }}"><i class="fa fa-shield blue2_color"></i>
                        <span>Tabel Ronda</span></a>
                </li>
                <li>
                    <a href="{{ route('informasi.index') }}"><i class="fa fa-info yellow_color"></i>
                        <span>Tabel Informasi</span></a>
                </li>
            </ul>
        </div>
    </nav>
@endif
