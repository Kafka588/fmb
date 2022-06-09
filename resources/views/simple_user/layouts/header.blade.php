<header>
    <button class="nav-icon-btn bars-container" aria-label="menu">
        <i class="fas fa-bars nav-icon"></i>
    </button>
    <a href="{{route('home')}}" class="nav-link center"><img src="{{asset('assets/udemy-logo.svg')}}" alt="udemy-logo" class="nav-logo" /></a>
    <nav>
        <a href="{{route('home')}}" class="nav-link">
            <p class="nav-text">Бүх сургалт</p>
        </a>
        <div class="nav-search-container">
            <button class="nav-icon-btn" aria-label="search-top">
                <i class="fas fa-search nav-icon"></i>
            </button>
            <input type="text" placeholder="Хайх..." class="nav-search-input" />
        </div>
        <a href="{{route('cart')}}" class="nav-link nav-icon"><i class="fas fa-shopping-cart nav-icon"></i></a>
       
        <p class="profile">{{Auth::user()->name}}</p>
        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </nav>
    <button class="nav-icon-btn bars-container" aria-label="search-top">
        <i class="fas fa-search nav-icon"></i>
    </button>
    
</header>
