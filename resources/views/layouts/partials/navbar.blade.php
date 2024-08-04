<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light bg-orange">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="Launry Online"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"> {{ config('app.name', 'A Laundry') }}</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-black" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('laundry.index') }}">{{ __('Laundry') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('barang.index') }}">{{ __('Barang') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('layanan.index') }}">{{ __('Layanan') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('member.index') }}">{{ __('Member') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('pegawai.index') }}">{{ __('Pegawai') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link text-black dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                            <li>
                                <a class="dropdown-item" tabindex="-1" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- /.navbar -->
