<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
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
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="register.html">kayıt ol</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="login.html">Giriş yap</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
