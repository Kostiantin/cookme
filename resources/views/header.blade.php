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
                @if (count($altLocalizedUrls) > 0 && $controller != 'ChatController')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle lng-flags" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-container {{$currentLanguage->locale}}"></span><span class="lng-name">{{$currentLanguage->name}}</span>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <ul class="langs">
                                @foreach($altLocalizedUrls as $language)
                                    @if($currentLanguage->locale != $language['locale'])
                                        <li>
                                            <a class="dropdown-item lng-flags" href="/{{$language['locale']}}">
                                                <span class="flag-container {{$language['locale']}}"></span>
                                                <span class="lng-name">{{$language['name']}}</span>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif
                <!-- Authentication Links -->
                    <li><a href="{{ route('all_threads') }}">@lang('everywhere.all_threads')</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('everywhere.categories') <span class="caret"></span></a>
                        @if (!empty($categories))
                            <ul class="dropdown-menu">
                                @foreach($categories as $category)
                                    <li><a href="{{route('category_all_threads', ['category' => $category->slug])}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @if (Auth::guest())
                        <li class="nav-item dropdown user-links">
                            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp;<span class="user-icons">@lang('everywhere.user')</span>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;<span class="user-icons">@lang('everywhere.login')</span></a>
                                <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;<span class="user-icons">@lang('everywhere.register')</span></a>

                            </div>
                        </li>
                @else
                    <li><a href="{{route('chat')}}">@lang('everywhere.chat_room')</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu user-links" role="menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-address-book"></i>&nbsp;@lang('everywhere.profile')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('all_threads') }}/?by={{auth()->user()->name}}">
                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                    @lang('everywhere.my_threads')
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('create_thread') }}">
                                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                    @lang('everywhere.new_thread')
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
                            </li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>