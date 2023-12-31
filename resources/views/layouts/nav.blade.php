<aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
    <!-- Account nav-->
    <div class="card card-body border-0 shadow-sm pb-1 me-lg-1">
        <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
            
            <img class="rounded-circle" src="{{ asset(auth()->user()->image ? auth()->user()->image : '/empty.webp') }}"
                width="48" alt="Annette Black">

            <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                <h2 class="fs-lg mb-0">{{ auth()->user()->name }}</h2>
                <ul class="list-unstyled fs-sm mt-3 mb-0">
                    <li><a class="nav-link fw-normal p-0" href="tel:3025550107"><i class="fi-phone opacity-60 me-2"></i>{{ auth()->user()->telephone }}</a></li>
                    <li><a class="nav-link fw-normal p-0" ><i class="fi-mail opacity-60 me-2"></i>{{ auth()->user()->email }}</a></li>
                </ul>
            </div>
        </div><a class="btn btn-primary btn-lg w-100 mb-3" href="{{route('properties.create')}}"><i class="fi-plus me-2"></i>Ajouter bien</a><a class="btn btn-outline-secondary d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>Menu</a>
        <div class="collapse d-md-block mt-3" id="account-nav">
            @php
                $route = Route::current()->getName();
            @endphp
            <div class="card-nav">
                <a class="card-nav-link {{ ($route ==  'infoperso')? 'active':  '' }}" href="{{ route('infoperso') }} "><i class="fi-user opacity-60 me-2"></i>Informations Personnelles</a>
                <a class="card-nav-link {{ ($route ==  'properties.index')? 'active':  '' }}" href="{{ route('properties.index') }}"><i class="fi-home opacity-60 me-2"></i>Mes biens</a>
                @php
                    $nbcont = \App\Models\Contact::whereNull('readed')->count();
                    $badge = ($nbcont == 0) ? 'bg-success' : 'bg-danger';
                @endphp
                <a class="card-nav-link {{ ($route ==  'contact.index')? 'active':  '' }}" href="{{ route('contact.index') }}"><i class="fi-mail opacity-60 me-2"></i>Contacts <span class="fs-xxs badge {{ $badge }} text-white ms-2 fs-8">{{$nbcont}}</span></a>
                
                <a class="card-nav-link " href="{{ route('user.logout') }}"><i class="fi-logout opacity-60 me-2"></i>Déconnexion</a></div>
        </div>
    </div>
</aside>
