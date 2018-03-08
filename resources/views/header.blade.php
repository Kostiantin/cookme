<nav class="navbar navbar-default navbar-fixed-top navbar-transparent">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'CookMe') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                @if (count($languages) > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle lng-flags" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-container {{$currLang->locale}}"></span><span class="lng-name">{{$currLang->name}}</span>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <ul class="langs">
                                @foreach($languages as $language)
                                    @if($currLang->locale != $language->locale)
                                        <li>
                                            <a class="dropdown-item lng-flags" href="/{{$language->locale}}">
                                                <span class="flag-container {{$language->locale}}"></span>
                                                <span class="lng-name">{{$language->name}}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif
                <!-- Authentication Links -->
                @if (Auth::guest())
                        <li class="nav-item dropdown user-links">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp;<span class="user-icons">@lang('everywhere.user')</span>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;<span class="user-icons">@lang('everywhere.login')</span></a>
                                <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;<span class="user-icons">@lang('everywhere.register')</span></a>
                                <a href="/auth/facebook">
                                    <i class="fa fa-facebook"></i>&nbsp;@lang('everywhere.facebook_login')
                                </a>
                                <!--<div class="fb-login-button" data-width="140" data-size="small" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="true" data-scope="public_profile,email"></div>-->
                            </div>
                        </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu user-links" role="menu">
                            <li>
                                <a href="/user/profile">
                                    <i class="fa fa-address-book"></i>&nbsp;@lang('everywhere.profile')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>&nbsp;@lang('everywhere.logout')
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                <!--<a class="user-links" href="/auth/facebook">
                                    <i class="fa fa-facebook"></i>&nbsp;Logout
                                </a>-->
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>