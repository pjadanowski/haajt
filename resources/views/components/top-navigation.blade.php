@php
    use Illuminate\Support\Facades\Route;
        $shouldBeTransparentIn = [
            'about',
        ];
        $isTransparent = in_array(Route::currentRouteName(), $shouldBeTransparentIn, true);

@endphp

<header class="tp-header-height">
    <!-- tp-header-area-start -->
    <div id="header-sticky"
         class="header-bottom__area header-sticky-bg-2 header-bottom__transparent header-bottom__bdr z-index-5 px-4 {{ $isTransparent ? '' : 'bg-white' }}">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-6">
                    <div class="header-bottom__logo">
                        <a href="/" wire:navigate><img src="assets/img/logo/logo-black.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-lg-8 d-none d-lg-block">
                    <div
                        class="header-bottom__main-menu header-bottom__main-menu-{{ $isTransparent ? '4' : '5' }} text-center">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="/" wire:navigate>{{ __('Home') }}</a>
                                </li>
                                <li><a href="{{ route('about') }}" wire:navigate>{{ __('About') }}</a></li>

                                <li><a href="{{ route('projects') }}" wire:navigate>{{ __('Our projects') }}</a></li>

                                <li>
                                    <a href="">FAQ</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{ route('privacy-policy') }}" wire:navigate>
                                                {{ __('Privacy policy') }}
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}" wire:navigate>{{ __('Contact') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-2 col-md-8 col-6">
                    <div class="header-bottom__right header-five__btn d-flex align-items-center justify-content-end">
                        <div class="header-bottom__btn d-flex align-items-center">
                            <a class="tp-btn-yellow inner-color tp-btn-hover alt-color-black d-none d-md-inline-block"
                               href="{{ route('contact') }}" wire:navigate>
                                <span class="white-text">{{ __('Contact us') }}</span>
                            </a>
                            <a class="header-bottom__bar tp-menu-bar d-lg-none" href="javascript:void(0)">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-header-area-end -->

    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn">&times;</button>
            </div>
            <div class="tpoffcanvas__logo text-center">
                <a href="/" wire:navigate>
                    <img src="/images/logo/logo-white.png" alt="">
                </a>
            </div>
            <div class="mobile-menu"></div>

            <div class="tpoffcanvas__info text-center">
                <h4 class="offcanva-title">Adres</h4>
                <a href="https://www.google.com/maps/@23.506657,90.3443647,7z" target="_blank">
                    27 Division St, New York, <br>
                    NY 10002, USA
                </a>
            </div>
            <div class="tpoffcanvas__social">
                <div class="social-icon text-center">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->


</header>
