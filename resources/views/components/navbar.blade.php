<nav class="navbar navbar-expand-lg custom_navbar bg-dark">
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
            <a class="nav-link txt_gray" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link txt_gray" href="{{route('blog.blog')}}">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0 nav_social d-flex align-items-center">
          @auth
          <li class="d-flex mt-3">
            <p class="txt_gray mb-0">Benvenuto,</p>
            <p class="text-white">{{Auth::user()->name}}</p>
          </li>
          <li>
            <a href="{{route('articles.dashboard')}}">
              <i class='bx bxs-dashboard'></i>
            </a>
          </li>
          <div class="btn-group">
            <button class="btn btn-transparent dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="avatar rounded-circle" src="{{auth()->user()->providers[0]->social_avatar ?? ""}}" alt="">
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a href="{{route('profile',['user'=> auth()->user()->id])}}" class="d-flex gap-1">
                  <i class="bi bi-gear-wide-connected"></i>
                  <p class="m-0">Profilo</p>
                </a>
              </li>
              <li>
                <form action="{{route('logout')}}" method="post"> 
                  @csrf
                    <button type="submit" class="btn btn-transparent d-flex text-danger gap-1">
                      <i class=" bi bi-door-closed-fill"></i>
                      <p>Esci</p>
                    </button>
                </form> 
              </li>
            </ul>
          </div>
        @else
        <li class="me-3">
          <a href="{{route('register')}}">
            <button class="button">Registrati</button>
          </a>
        </li>
        <li class="me-2">
          <a href="{{route('login')}}">
            <i class="txt_gray bi bi-person-circle"></i>
          </a>
        </li>
        @endauth
            
      </ul>
      </div>
    </div>
  </nav>