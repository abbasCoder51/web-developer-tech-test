<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <!--  Show this only on mobile to medium screens  -->
    <a class="navbar-brand d-lg-none" href="{{ route('home') }}"><img src="{{ asset('images/logo-white-1.png') }}" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!--  Use flexbox utility classes to change how the child elements are justified  -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>

        <!--   Show this only lg screens and up   -->
        <a class="navbar-brand d-none d-lg-block" href="{{ route('home') }}"><img src="{{ asset('images/logo-white-1.png') }}" alt=""></a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>
</nav>