
<header>
    <button class="nav-icon-btn bars-container" aria-label="menu">
        <i class="fas fa-bars nav-icon"></i>
    </button>
    <a href="{{route('index')}}" class="nav-link center"><img src="{{asset('assets/udemy-logo.svg')}}" alt="udemy-logo" class="nav-logo" /></a>
    <nav>
        <a href="{{route('index')}}" class="nav-link">
            <p class="nav-text">Бүх сургалт</p>
        </a>
        <div class="nav-search-container">
            <button class="nav-icon-btn" aria-label="search-top">
                <i class="fas fa-search nav-icon"></i>
            </button>
            <input type="text" placeholder="Хайх..." class="nav-search-input" />
        </div>
        <a href=""></a>
        <a href="{{route('cart')}}"></a>
        <div class="nav-btn-container">
            <a href="{{route('login')}}" class="nav-btn login-btn">Нэвтрэх</a>
            @if (Route::has('register'))
                
            @endif
            <a href="{{route('register')}}" class="nav-btn signup-btn">Бүртгүүлэх</a>
        </div>
    </nav>
    <button class="nav-icon-btn bars-container" aria-label="search-top">
        <i class="fas fa-search nav-icon"></i>
    </button>
</header>
