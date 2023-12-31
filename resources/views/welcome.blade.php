   @extends('main')
   <section class="container pt-5 my-5 pb-lg-4">
    <div class="row pt-0 pt-md-2 pt-lg-0">
      <div class="col-xl-7 col-lg-6 col-md-5 order-md-2 mb-4 mb-lg-3"><img src="{{asset('front/assets/img/real-estate/acceuil.jpeg')}}" alt="Hero image"></div>
      <div class="col-xl-5 col-lg-6 col-md-7 order-md-1 pt-xl-5 pe-lg-0 mb-3 text-md-start text-center">
        <h1 class="display-4 mt-lg-5 mb-md-4 mb-3 pt-md-4 pb-lg-2">Trouver facilement  <br> les biens parfaits.</h1>
        <p class="position-relative lead me-lg-n5">Nous proposons une gamme complète de services pour la vente, l'achat ou la location de biens immobiliers, avec plus de 10 ans d'expérience. Explorez une multitude d'appartements et de maisons sur Budget Immobilier.</p>
      </div>
      <!-- Search property form group-->
      <div class="col-xl-8 col-lg-10 order-3 mt-lg-n5">
        <form class="form-group d-block">
          <div class="row g-0 ms-sm-n2">
            <div class="col-md-8 d-sm-flex align-items-center">
              <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
                <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-home me-2"></i><span class="dropdown-toggle-label">Louer / Vendre </span></button>
                <input type="hidden">
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label"> Louer</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label"> Acheter</span></a></li>
                </ul>
              </div>
              <hr class="d-sm-none my-2">
              <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
                <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-map-pin me-2"></i><span class="dropdown-toggle-label">Location</span></button>
                <input type="hidden">
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">New York</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Chicago</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Los Angeles</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">San Diego</span></a></li>
                </ul>
              </div>
              <hr class="d-sm-none my-2">
              <div class="dropdown w-sm-50 border-end-md" data-bs-toggle="select">
                <button class="btn btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">Type de biens</span></button>
                <input type="hidden">
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Appartements</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Duplex</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Ville</span></a></li>
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Immeuble</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Terrain</span></a></li>
                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">Commerciale</span></a></li>
                </ul>
              </div>
            </div>
            <hr class="d-md-none mt-2">
            <div class="col-md-4 d-sm-flex align-items-center pt-4 pt-md-0">
              <div class="d-flex align-items-center w-100 pt-2 pb-4 py-sm-0 ps-2 ps-sm-3"><i class="fi-cash fs-lg text-muted me-2"></i><span class="text-muted">Prix</span>
                <div class="range-slider pe-0 pe-sm-3" data-start-min="450" data-min="0" data-max="1000" data-step="1">
                  <div class="range-slider-ui"></div>
                  <input class="form-control range-slider-value-min" type="hidden">
                </div>
              </div>
              <button class="btn btn-icon btn-primary px-3 w-100 w-sm-auto flex-shrink-0" type="button"><i class="fi-search"></i><span class="d-sm-none d-inline-block ms-2">Search</span></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- Property categories-->
  <section class="container mb-5">
    <div class="row row-cols-lg-6 row-cols-sm-3 row-cols-2 g-3 g-xl-4">
      <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-real-estate-house"></i></div>
          <h3 class="icon-box-title fs-base mb-0">Maisons</h3></a></div>
      <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-sale.html">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-apartment"></i></div>
          <h3 class="icon-box-title fs-base mb-0">Appartements</h3></a></div>
      <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-shop"></i></div>
          <h3 class="icon-box-title fs-base mb-0">Commerciale</h3></a></div>
      <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-sale.html">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-computer"></i></div>
          <h3 class="icon-box-title fs-base mb-0">Bureaux</h3></a></div>
      <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
          <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-house-chosen"></i></div>
          <h3 class="icon-box-title fs-base mb-0"> Bâtiments</h3></a></div>
        <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="real-estate-catalog-rent.html">
                <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-real-estate-buy"></i></div>
                <h3 class="icon-box-title fs-base mb-0"> Terrain</h3></a></div>

    </div>
  </section>
  <!-- Services-->
  <section class="container mb-5 mt-n3 mt-lg-0">
    <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2">
      <div class="tns-carousel-inner row gx-4 mx-0 py-3" data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}}}">
        <div class="col">
          <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"><img class="d-block mx-auto my-3" src="{{asset('front/assets/img/real-estate/illustrations/buy.svg')}}" width="256" alt="Illustration">
            <div class="card-body">
              <h2 class="h4 card-title">Acheter  </h2>
              <p class="card-text fs-sm">Explorez notre sélection de propriétés à vendre et trouvez la maison de vos rêves dès aujourd'hui.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"><img class="d-block mx-auto my-3" src="{{asset('front/assets/img/real-estate/illustrations/sell.svg')}}" width="256" alt="Illustration">
            <div class="card-body">
              <h2 class="h4 card-title">Vendre  </h2>
              <p class="card-text fs-sm">Découvrez nos offres exceptionnelles pour vendre votre propriété en toute simplicité.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-hover border-0 h-100 pb-2 pb-sm-3 px-sm-3 text-center"><img class="d-block mx-auto my-3" src="{{asset('front/assets/img/real-estate/illustrations/rent.svg')}}" width="256" alt="Illustration">
            <div class="card-body">
              <h2 class="h4 card-title">Louer  </h2>
              <p class="card-text fs-sm">Parcourez nos locations disponibles, trouvez le lieu idéal pour appeler chez vous.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="mt-n1 mb-5 d-md-none">
  <!-- Top offers (carousel)-->
   <section class="container mt-n3 mt-md-0 mb-5 pb-3 pb-lg-4">
       <div class="d-flex align-items-end justify-content-between mb-4 pb-md-2">
           <h2 class="h3 mb-0">Annonces </h2><a class="btn btn-link fw-normal ms-2 p-0" href="">Afficher tout<i class="fi-arrow-long-right ms-2"></i></a>
       </div>
       <!-- Carousel-->
       <div class="tns-carousel-wrapper">
           <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;speed&quot;: 800, &quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#carousel-controls-lp&quot;}">
               <!-- Item-->
               <div>
                   <div class="row">
                       <div class="col-lg-8 col-md-7 mb-md-0 mb-3">
                           <div class="position-relative pe-lg-5">
                               <div class="position-absolute top-0 start-0 zindex-1 m-3 p-1"><span class="badge bg-info fs-sm me-2">New</span><span class="badge bg-success fs-sm me-2">Verified</span></div><img class="rounded-3 zindex-5" src="{{asset('front/assets/img/real-estate/recent/04.jpg')}}" alt="Article image">
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-5"><span class="d-inline-block fs-sm text-uppercase text-primary mb-2 from-top">For sale</span>
                           <div class="from-start delay-2">
                               <h3 class="h4 mb-2">Duplex with Garage</h3>
                               <p class="mb-md-4 mb-3 fs-sm">28 Jackson Ave Long Island City, NY 67234</p>
                               <ul class="d-flex mb-md-4 mb-3 list-unstyled">
                                   <li class="me-3 pe-3 border-end"><b class="me-1">4</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                                   <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                                   <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                                   <li><b>126 </b>sq.m</li>
                               </ul>
                               <p class="mb-4 pb-md-2">Blandit lorem dictum in velit. Et nisi at faucibus mauris pretium enim. Risus sapien nisi aliquam egestas leo dignissim ut quis ac. Amet, cras orci justo, tortor nisl aliquet.</p>
                           </div>
                           <div class="btn-group btn-group-lg scale-up delay-3" role="group" aria-label="Buy now or add to wishlist"><a class="btn btn-primary" href="real-estate-single-v2.html">Sale for $160,000</a>
                               <button class="btn btn-primary px-3 border-start border-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><i class="fi-heart fs-5"></i></button>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Item-->
               <div>
                   <div class="row">
                       <div class="col-lg-8 col-md-7 mb-md-0 mb-3">
                           <div class="position-relative pe-lg-5">
                               <div class="position-absolute top-0 start-0 zindex-1 m-3 p-1"><span class="badge bg-info fs-sm me-2">New</span><span class="badge bg-success fs-sm me-2">Verified</span></div><img class="rounded-3 zindex-5" src="{{asset('front/assets/img/real-estate/recent/05.jpg')}}" alt="Article image">
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-5"><span class="d-inline-block fs-sm text-uppercase text-primary mb-2 from-top">For rent</span>
                           <div class="from-start delay-2">
                               <h3 class="h4 mb-2">Luxury Rental Villa</h3>
                               <p class="mb-md-4 mb-3 fs-sm">1510 Castle Hill Ave Bronx, NY 10462</p>
                               <ul class="d-flex mb-md-4 mb-3 list-unstyled">
                                   <li class="me-3 pe-3 border-end"><b class="me-1">5</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                                   <li class="me-3 pe-3 border-end"><b class="me-1">3</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                                   <li class="me-3 pe-3 border-end"><b class="me-1">1</b><i class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                                   <li><b>140 </b>sq.m</li>
                               </ul>
                               <p class="mb-4 pb-md-2">Sagittis faucibus feugiat integer quam vel ornare. Tellus, vel consequat, sagittis ut penatibus urna, ante. Mattis fermentum lectus sed nisl ac viverra lacus. A at iaculis etiam nunc, diam urna in.</p>
                           </div>
                           <div class="btn-group btn-group-lg scale-up delay-3" role="group" aria-label="Buy now or add to wishlist"><a class="btn btn-primary" href="#">Rent from $2,850</a>
                               <button class="btn btn-primary px-3 border-start border-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><i class="fi-heart fs-5"></i></button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Carousel custom controls-->
       <div class="tns-carousel-controls pt-2 mt-4" id="carousel-controls-lp">
           <button class="me-3" type="button"><i class="fi-chevron-left fs-xs"></i></button>
           <button type="button"><i class="fi-chevron-right fs-xs"></i></button>
       </div>
   </section>



   <!-- Find your agent-->
   <section class="container mb-5 pb-lg-5 pb-md-4">
       <div class="card py-lg-5 py-4 border-0 bg-secondary">
           <div class="card-body p-4 text-center">
               <h2>Trouvez votre agent</h2>
               <p class="mx-auto mb-md-5 mb-4 pb-lg-3" style="max-width: 53.125rem;">
                   Nous avons le répertoire le plus complet d'agents immobiliers pour vous aider avec tous vos besoins en matière de propriété. Que vous souhaitiez acheter, vendre ou louer, commencez votre recherche pour trouver l'expertise locale adaptée.</p>
               <!-- Agent ava's-->
               <div class="d-flex align-items-center justify-content-center flex-wrap mb-md-5 mb-4 pb-lg-3 ps-3 pt-4">
                   <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="{{asset('front/assets/img/avatars/39.jpg')}}" width="110" alt="Avatar"></div>
                   <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="{{asset('front/assets/img/avatars/40.jpg')}}" width="110" alt="Avatar"></div>
                   <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="{{asset('front/assets/img/avatars/41.jpg')}}" width="110" alt="Avatar"></div>
                   <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="{{asset('front/assets/img/avatars/42.jpg')}}" width="110" alt="Avatar"></div>
                   <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="{{asset('front/assets/img/avatars/43.jpg')}}" width="110" alt="Avatar"></div>
               </div><a class="btn btn-lg btn-primary w-sm-auto w-100" href="#">Trouver un agent<i class="fi-chevron-right ms-2"></i></a>
           </div>
       </div>
   </section>


