<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            
            <a class="navbar-brand me-5" href="{{ route('guest.comics.index') }}">
                Comics List
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav w-100">
                <a class="nav-link {{ (Route::currentRouteName() == 'guest.home') ? 'active': ''}}" aria-current="page" href="{{ route('guest.home') }}" >
                    Homepage
                </a>              
            </div>
            </div>
        </div>
    </nav>
</header>