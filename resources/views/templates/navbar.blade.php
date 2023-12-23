<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/images/logo2.png" alt="Suitemedia" width="100%" height="48">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link {{$title === 'work' ? 'text-white border-bottom' : 'text-light' }}" aria-current="page" href="/work">Work</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{$title === 'about' ? 'text-white border-bottom' : 'text-light' }}" aria-current="page" href="/about">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{$title === 'services' ? 'text-white border-bottom' : 'text-light' }}" aria-current="page" href="/services">Services</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{$title === 'ideas' ? 'text-white border-bottom' : 'text-light' }}" aria-current="page" href="/ideas">Ideas</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{$title === 'careers' ? 'text-white border-bottom' : 'text-light' }}" aria-current="page" href="/careers">Careers</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{$title === 'contact' ? 'text-white border-bottom' : 'text-light' }}" aria-current="page" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>