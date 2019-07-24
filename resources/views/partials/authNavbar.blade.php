<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Laravel Blog</a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{route('home')}}">anasayfa</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{route('about')}}">hakkımızda</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="{{route('contact')}}">iletişim</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="/post/example">rasgele post</a>
                </li>
                @guest
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="{{route('login')}}">Giriş yap</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="{{route('register')}}">kayıt ol</a>
                        </li>
                    @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('post.index') }}">Blog yazısı ekle</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    Çıkış Yap
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
