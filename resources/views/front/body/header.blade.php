<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top bg-opacity-100" data-scroll-header>

    <div class="container"><a class="navbar-brand me-3 me-xl-4" href="/"><img class="d-block" src="{{asset('LOGO_BUDGET_IMMO_FINAL.png')}}" width="50" alt="budget immobilier"></a>




      @auth

      <button class="navbar-toggler ms-auto mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="dropdown d-none d-lg-block order-lg-3 my-n2 me-3"><a class="d-block py-2" href="real-estate-account-info.html"><img class="rounded-circle" src="{{ asset(auth()->user()->image ? auth()->user()->image : '/empty.webp') }}" width="40" alt="Annette Black"></a>
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
          <!-- Demos switcher-->
         {{--  <li class="nav-item dropdown me-lg-2"><a class="nav-link dropdown-toggle align-items-center pe-lg-4" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false"><i class="fi-layers me-2"></i>Demos<span class="d-none d-lg-block position-absolute top-50 end-0 translate-middle-y border-end" style="width: 1px; height: 30px;"></span></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="real-estate-home-v1.html"><i class="fi-building fs-base opacity-50 me-2"></i>Real Estate Demo</a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="car-finder-home.html"><i class="fi-car fs-base opacity-50 me-2"></i>Car Finder Demo</a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="job-board-home-v1.html"><i class="fi-briefcase fs-base opacity-50 me-2"></i>Job Board Demo</a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="city-guide-home-v1.html"><i class="fi-map-pin fs-base opacity-50 me-2"></i>City Guide Demo</a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="index.html"><i class="fi-home fs-base opacity-50 me-2"></i>Main Page</a></li>
              <li><a class="dropdown-item" href="components/typography.html"><i class="fi-list fs-base opacity-50 me-2"></i>Components</a></li>
              <li><a class="dropdown-item" href="docs/dev-setup.html"><i class="fi-file fs-base opacity-50 me-2"></i>Documentation</a></li>
            </ul>
          </li> --}}
          <!-- Menu items-->
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



         {{--  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="real-estate-catalog-rent.html">Property for Rent</a></li>
              <li><a class="dropdown-item" href="real-estate-catalog-sale.html">Property for Sale</a></li>
              <li><a class="dropdown-item" href="real-estate-single-v1.html">Single Property v.1</a></li>
              <li><a class="dropdown-item" href="real-estate-single-v2.html">Single Property v.2</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="real-estate-account-info.html">Personal Info</a></li>
              <li><a class="dropdown-item" href="real-estate-account-security.html">Password &amp; Security</a></li>
              <li><a class="dropdown-item" href="real-estate-account-properties.html">My Properties</a></li>
              <li><a class="dropdown-item" href="real-estate-account-wishlist.html">Wishlist</a></li>
              <li><a class="dropdown-item" href="real-estate-account-reviews.html">Reviews</a></li>
              <li><a class="dropdown-item" href="real-estate-account-notifications.html">Notifications</a></li>
              <li><a class="dropdown-item" href="signin-light.html">Sign In</a></li>
              <li><a class="dropdown-item" href="signup-light.html">Sign Up</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vendor</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="real-estate-add-property.html">Add Property</a></li>
              <li><a class="dropdown-item" href="real-estate-property-promotion.html">Property Promotion</a></li>
              <li><a class="dropdown-item" href="real-estate-vendor-properties.html">Vendor Page: Properties</a></li>
              <li><a class="dropdown-item" href="real-estate-vendor-reviews.html">Vendor Page: Reviews</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="real-estate-about.html">About</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="real-estate-blog.html">Blog Grid</a></li>
                  <li><a class="dropdown-item" href="real-estate-blog-single.html">Single Post</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="real-estate-contacts.html">Contacts</a></li>
              <li><a class="dropdown-item" href="real-estate-help-center.html">Help Center</a></li>
              <li><a class="dropdown-item" href="real-estate-404.html">404 Not Found</a></li>
            </ul>
          </li> --}}
          <li class="nav-item d-lg-none"><a class="nav-link" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Sign in</a></li>


        </ul>
      </div>
    </div>
  </header>
