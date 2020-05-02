<nav itemscope itemtype="https://schema.org/SiteNavigationElement" aria-label="Navigation"
  class="navbar navbar-expand-md  navbar-dark shadow-sm">
  <div class="container">

    <div class="navbar-toggler navbarmenu" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }} ">
      <i class="fas fa-bars "></i> MENU
    </div>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a itemprop="url" class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Tentang
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a itemprop="url" class="dropdown-item" href="{{ route('pageBySlug','visi-dan-misi') }}">Visi &
              Misi</a>
            <a itemprop="url" class="dropdown-item" href="{{ route('pageBySlug','pembina-dan-pengawas') }}">Pembina & Pengawas</a>
            <a itemprop="url" class="dropdown-item" href="{{ route('pageBySlug','struktur-organisasi') }}">Tenaga Ahli & Staff</a>

          </div>
        </li>
        <li class="nav-item ">
          <a itemprop="url" class="nav-link" href="/program">Program <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a itemprop="url" class="nav-link" href="{{ route('blogpage') }}">Berita <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item ">
          <a itemprop="url" class="nav-link" href="/publikasi">Publikasi <span class="sr-only">(current)</span></a>
        </li>

        {{-- <li class="nav-item ">
          <a itemprop="url" class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> --}}

      </ul>

      <!-- Right Side Of Navbar -->

    </div>
  </div>
</nav>
@yield('breadcumb')
