<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{'home'}}">Ceremonie de consecration</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{'home'}}">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'events'}}">A propos</a>
          </li>

         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Autres
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{'solidarity'}}">Solidaires</a>
              <a class="dropdown-item" href="{{'don'}}">Faire un don</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'contact'}}">Contact</a>
          </li>
        </ul>
      </div>
      <a href="{{route('login')}}">
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block">
       <span class="fa fa-user" aria-hidden="true"></span> Se connecter
      </button>
    </a>
    </div>
  </nav>