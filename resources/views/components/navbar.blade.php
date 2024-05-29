<nav class="navbar navbar-expand-lg custom_navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="">
        <img class="img-fluid" src="{{asset('img/logo.png')}}" alt="">
       </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars hamburger-ico"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link txt_white" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link txt_white" href="">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link txt_white " href="">Servizi Offerti</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 nav_social">
          @auth
          <li>
            <p>Benvenuto,{{Auth::user()->name}}</p>
          </li>
          <li>
            <a href="{{route('articles.index')}}">
              <button class="button">Dashboard</button>
            </a>
          </li>
          <li>
            <form action="{{route('logout')}}" method="post"> 
              @csrf
                <button type="submit" class="button">Esci</button>
            </form> 
          </li>
        @else
        <li>
          <a href="{{route('register')}}">
            <button class="button">Registrati</button>
          </a>
        </li>
        <li>
          <a href="{{route('login')}}">
            <button class="button">Login</button>
          </a>
        </li>
        @endauth
            
      </ul>
      </div>
    </div>
  </nav>