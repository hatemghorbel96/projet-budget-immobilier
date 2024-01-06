<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top bg-opacity-100" data-scroll-header>

    <div class="container"><a class="navbar-brand me-3 me-xl-4" href="/"><img class="d-block" src="{{asset('LOGO_BUDGET_IMMO_FINAL.png')}}" width="50" alt="budget immobilier"></a>




      @auth

      <button class="navbar-toggler ms-auto mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="dropdown d-none d-lg-block order-lg-3 my-n2 me-3"><a class="d-block py-2" href="{{ route('infoperso') }}"><img class="rounded-circle" src="{{ asset(auth()->user()->image ? auth()->user()->image : '/empty.webp') }}" width="40" alt="Annette Black"></a>
        <div class="dropdown-menu dropdown-menu-end">
          <div class="d-flex align-items-start border-bottom px-3 py-1 mb-2" style="width: 16rem;"><img class="rounded-circle" src="{{ asset(auth()->user()->image ? auth()->user()->image : '/empty.webp') }}" width="48" alt="Annette Black">
            <div class="ps-2">
              <h6 class="fs-base mb-0">{{ auth()->user()->name }}</h6>
              <div class="fs-xs py-2">{{ auth()->user()->telephone }}<br>{{ auth()->user()->email }}</div>
            </div>
          </div>
            <a class="dropdown-item" href="{{ route('infoperso') }} "><i class="fi-user opacity-60 me-2"></i>Informations Personnelles</a>
            <a class="dropdown-item" href="{{ route('properties.index') }}"><i class="fi-home opacity-60 me-2"></i>Mes biens</a>
            <a class="dropdown-item" href="{{ route('contact.index') }}"><i class="fi-mail opacity-60 me-2"></i>Contacts</a>
          <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('user.logout') }}" >Déconnexion</a>
        </div>
      </div>
      <a class="btn btn-primary btn-sm ms-2 order-lg-3 mx-2" href="{{route('properties.create')}}"><i class="fi-plus me-2"></i>Ajouter Bien<span class='d-none d-sm-inline'></span></a>
      @else


        <a class="btn btn-sm text-primary d-none d-lg-block order-lg-3" href="{{ route('login') }}" ><i class="fi-user me-2"></i>Se connecter</a>



      @endauth



      <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
        <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
       
          @php
          $type = request('type');
          $route = Route::current()->getName();
          @endphp
          <li class="nav-item dropdown "><a class="nav-link @if($type == 'sale' && $route == 'bien.index') active @endif" href="{{route('bien.index','sale')}}" role="button" >Acheter</a>
          </li>

          <li class="nav-item dropdown "><a class="nav-link @if($type == 'rent' && $route == 'bien.index') active @endif" href="{{route('bien.index','rent')}}" role="button" >Louer</a>
          </li>
            <li class="nav-item dropdown "><a class="nav-link @if($route=='contact.send') active @endif" href="{{route('contact.send')}}" role="button" >Contact</a>
            </li>



          <li class="nav-item d-lg-none"><a class="nav-link" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Sign in</a></li>


        </ul>
      </div>
    </div>
  </header>
