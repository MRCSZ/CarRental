<a class="nav-link" href="{{ route('home.homePage') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
    Strona główna
</a>
<div class="sb-sidenav-menu-heading">Użytkownicy</div>
<a class="nav-link" href="{{ route('cars.dashboard') }}">
    <div class="sb-nav-link-icon"><i class="fa fa-star"></i></div>
    Dashboard
<a class="nav-link" href="{{ route('get.users.list') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
    Ostatnie wypożyczenia
</a>
<div class="sb-sidenav-menu-heading">Samochody</div>
<a class="nav-link" href="{{ route('cars.index') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
    Wypożycz samochód
</a>
<a class="nav-link" href="#">
    <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
    Dodaj
</a>