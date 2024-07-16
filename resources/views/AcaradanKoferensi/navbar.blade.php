
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-white" href="{{route('DashboardGedung')}}">Gedung</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="text-white nav-link navbar-active dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Form
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('FormGedung')}}">Gedung</a>
          <a class="dropdown-item" href="{{route('FormPembayaran')}}">Pembayaran</a>
          <a class="dropdown-item" href="{{route('FormDekor')}}">Dekor</a>
          <div class="dropdown-divider"></div>
      <li class="nav-item dropdown">
        <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('viewgedung')}}">Gedung</a>
          <a class="dropdown-item" href="{{route('viewpembayaran')}}">Pembayaran</a>
          <a class="dropdown-item" href="{{route('viewdekor')}}">Dekor</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </div>
</nav>