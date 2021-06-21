<nav class="navbar navbar-expand navbar-light navbar-laravel shadow-none border-bottom sticky-top py-1 kalanto-text">
    <div class="container kalanto-text">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('timeline.personal') }}" title="Logo">
                <img src="/img/pixelfed-icon-color.svg" height="30px" class="px-2" loading="eager" alt="Pixelfed logo">
                <span class="font-weight-bold mb-0 d-none d-sm-block kalanto-text" style="font-size:20px;">{{ config_cache('app.name') }}</span>
            </a>

            <div class="collapse navbar-collapse">
            @auth
                <div class="navbar-nav d-none d-md-block mx-auto">
                  <form class="form-inline search-bar" method="get" action="/i/results">
                    <input class="form-control form-control-sm" name="q" placeholder="{{__('navmenu.search')}}" aria-label="search" autocomplete="off" required style="line-height: 0.6;width:200px" role="search">
                  </form>
                </div>
            @endauth

            @guest

                <ul class="navbar-nav ml-auto kalanto-text">
                    <li>
                        <a class="nav-link font-weight-bold kalanto-text" href="{{ route('login') }}" title="Login">
                            {{ __('Login') }}
                        </a>
                    </li>
                @if(config_cache('pixelfed.open_registration') && config('instance.restricted.enabled') == false)
                    <li>
                        <a class="ml-3 nav-link font-weight-bold kalanto-text" href="{{ route('register') }}" title="Register">
                            {{ __('Register') }}
                        </a>
                    </li>
                @endif
            @else
                <div class="ml-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item px-md-2 d-none d-md-block">
                            <a class="nav-link font-weight-bold kalanto-text" href="/timeline/public" title="Home" data-toggle="tooltip" data-placement="bottom">
                                <i class="fas fa-home fa-lg"></i>
                                <span class="sr-only">Home</span>
                            </a>
                        </li>
                        <li class="nav-item px-md-2 d-none d-md-block">
                            <div class="nav-link font-weight-bold kalanto-text cursor-pointer" title="Compose" data-toggle="tooltip" data-placement="bottom" onclick="App.util.compose.post()">
                                <i class="far fa-plus-square fa-lg"></i>
                                <span class="sr-only">Compose</span>
                            </div>
                        </li>
                        <li class="nav-item px-md-2">
                            <a class="nav-link font-weight-bold kalanto-text" href="/account/direct" title="Direct" data-toggle="tooltip" data-placement="bottom">
                                <i class="far fa-comment-dots fa-lg"></i>
                                <span class="sr-only">Direct</span>
                            </a>
                        </li>
                        <li class="nav-item px-md-2 d-none d-md-block">
                            <a class="nav-link font-weight-bold kalanto-text" href="/account/activity" title="Notifications" data-toggle="tooltip" data-placement="bottom">
                                <i class="far fa-bell fa-lg"></i>
                                <span class="sr-only">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown ml-2">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="User Menu" data-toggle="tooltip" data-placement="bottom">
                                <i class="far fa-user fa-lg kalanto-text"></i>
                                <span class="sr-only">User Menu</span>
                                <img class="d-none" src="/storage/avatars/default.png?v=0" class="rounded-circle border shadow" width="34" height="34" onerror="this.onerror=null;this.src='/storage/avatars/default.png?v=0';">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(config('federation.network_timeline'))
                                <a class="dropdown-item font-weight-bold kalanto-text" href="{{route('timeline.public')}}">
                                    <span class="fas fa-stream pr-2 kalanto-text"></span>
                                    Public
                                </a>
                                <a class="dropdown-item font-weight-bold kalanto-text" href="{{route('timeline.network')}}">
                                    <span class="fas fa-globe pr-2 kalanto-text"></span>
                                    Network
                                </a>
                                @else
                                <a class="dropdown-item font-weight-bold kalanto-text" href="/timeline/public">
                                    <span class="fas fa-home pr-2 kalanto-text"></span>
                                    Home
                                </a>
                                <a class="dropdown-item font-weight-bold kalanto-text" href="{{route('timeline.public')}}">
                                    <span class="fas fa-stream pr-2 kalanto-text"></span>
                                    Public
                                </a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font-weight-bold kalanto-text" href="{{route('discover')}}">
                                    <span class="far fa-compass pr-2 kalanto-text"></span>
                                    {{__('navmenu.discover')}}
                                </a>
                                <a class="dropdown-item font-weight-bold kalanto-text" href="/i/stories/new">
                                    <span class="fas fa-history kalanto-text pr-2"></span>
                                    Stories
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font-weight-bold kalanto-text" href="/i/me">
                                    <span class="far fa-user pr-2 kalanto-text"></span>
                                    {{__('navmenu.myProfile')}}
                                </a>
                                <a class="dropdown-item font-weight-bold kalanto-text" href="{{route('settings')}}">
                                    <span class="fas fa-cog pr-2 kalanto-text"></span>
                                    {{__('navmenu.settings')}}
                                </a>
                                @if(Auth::user()->is_admin == true)
                                <a class="dropdown-item font-weight-bold kalanto-text" href="{{ route('admin.home') }}">
                                    <span class="fas fa-shield-alt fa-sm pr-2 kalanto-text"></span>
                                    {{__('navmenu.admin')}}
                                </a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item font-weight-bold kalanto-text" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <span class="fas fa-sign-out-alt pr-2"></span>
                                    {{ __('navmenu.logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </div>
            @endguest
                </ul>
            </div>
    </div>
</nav>
