   @extends('main')
   <section class="container pt-5 my-5 pb-lg-4">
    <div class="row pt-0 pt-md-2 pt-lg-0">
      <div class="col-xl-7 col-lg-6 col-md-5 order-md-2 mb-4 mb-lg-3"><img src="{{asset('front/assets/img/real-estate/hero-image.jpg')}}" alt="Hero image"></div>
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
                  <li><a class="dropdown-item" href="#"><span class="dropdown-item-label"> Vendre</span></a></li>
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
              <div class="d-flex align-items-center w-100 pt-2 pb-4 py-sm-0 ps-2 ps-sm-3"><i class="fi-cash fs-lg text-muted me-2"></i><span class="text-muted">Price</span>
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
  <section class="container mb-5 pb-md-4">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h2 class="h3 mb-0">Meilleures offres</h2><a class="btn btn-link fw-normal p-0" href="real-estate-catalog-rent.html">Afficher tout<i class="fi-arrow-long-right ms-2"></i></a>
    </div>
    <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2">
      <div class="tns-carousel-inner row gx-4 mx-0 pt-3 pb-4" data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
        <!-- Item-->
        <div class="col">
          <div class="card shadow-sm card-hover border-0 h-100">
            <div class="card-img-top card-img-hover"><a class="img-overlay" href="real-estate-single-v1.html"></a>
              <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
              <div class="content-overlay end-0 top-0 pt-3 pe-3">
                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
              </div><img src="{{asset('front/assets/img/real-estate/catalog/01.jpg')}}" alt="Image">
            </div>
            <div class="card-body position-relative pb-3">
              <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
              <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">3-bed Apartment | 67 sq.m</a></h3>
              <p class="mb-2 fs-sm text-muted">3811 Ditmars Blvd Astoria, NY 11105</p>
              <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$1,629</div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">3<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
          </div>
        </div>
        <!-- Item-->
        <div class="col">
          <div class="card shadow-sm card-hover border-0 h-100">
            <div class="card-img-top card-img-hover"><a class="img-overlay" href="real-estate-single-v1.html"></a>
              <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-danger">Featured</span></div>
              <div class="content-overlay end-0 top-0 pt-3 pe-3">
                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
              </div><img src="{{asset('front/assets/img/real-estate/catalog/02.jpg')}}" alt="Image">
            </div>
            <div class="card-body position-relative pb-3">
              <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
              <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Family Dashboard| 120 sq.m</a></h3>
              <p class="mb-2 fs-sm text-muted">67-04 Myrtle Ave Glendale, NY 11385</p>
              <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$84,000</div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">4<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
          </div>
        </div>
        <!-- Item-->
        <div class="col">
          <div class="card shadow-sm card-hover border-0 h-100">
            <div class="card-img-top card-img-hover"><a class="img-overlay" href="real-estate-single-v1.html"></a>
              <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success">Verified</span></div>
              <div class="content-overlay end-0 top-0 pt-3 pe-3">
                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
              </div><img src="{{asset('front/assets/img/real-estate/catalog/03.jpg')}}" alt="Image">
            </div>
            <div class="card-body position-relative pb-3">
              <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For rent</h4>
              <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Greenpoint Rentals | 85 sq.m</a></h3>
              <p class="mb-2 fs-sm text-muted">1510 Castle Hill Ave Bronx, NY 10462</p>
              <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$1,330</div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
          </div>
        </div>
        <!-- Item-->
        <div class="col">
          <div class="card shadow-sm card-hover border-0 h-100">
            <div class="card-img-top card-img-hover"><a class="img-overlay" href="real-estate-single-v1.html"></a>
              <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span><span class="d-table badge bg-info">New</span></div>
              <div class="content-overlay end-0 top-0 pt-3 pe-3">
                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
              </div><img src="{{asset('front/assets/img/real-estate/catalog/04.jpg')}}" alt="Image">
            </div>
            <div class="card-body position-relative pb-3">
              <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
              <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Studio | 32 sq.m</a></h3>
              <p class="mb-2 fs-sm text-muted">140-60 Beech Ave Flushing, NY 11355</p>
              <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$65,000</div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
          </div>
        </div>
        <!-- Item-->
        <div class="col">
          <div class="card shadow-sm card-hover border-0 h-100">
            <div class="card-img-top card-img-hover"><a class="img-overlay" href="real-estate-single-v1.html"></a>
              <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-success mb-1">Verified</span></div>
              <div class="content-overlay end-0 top-0 pt-3 pe-3">
                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist"><i class="fi-heart"></i></button>
              </div><img src="{{asset('front/assets/img/real-estate/catalog/05.jpg')}}" alt="Image">
            </div>
            <div class="card-body position-relative pb-3">
              <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For sale</h4>
              <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="real-estate-single-v1.html">Cottage | 120 sq.m</a></h3>
              <p class="mb-2 fs-sm text-muted">42 Broadway New York, NY 10004</p>
              <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>$184,000</div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">4<i class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">2<i class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">1<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Cities (carousel)-->
  <section class="container mb-5 pb-2">
    <div class="d-flex align-items-center justify-content-between mb-3">
      <h2 class="h3 mb-0">Rechercher des biens par ville</h2><a class="btn btn-link fw-normal ms-md-3 pb-0" href="real-estate-catalog-rent.html">Afficher tout<i class="fi-arrow-long-right ms-2"></i></a>
    </div>
    <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2">
      <div class="tns-carousel-inner row gx-4 mx-0 py-md-4 py-3" data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
        <!-- Item-->
        <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-sale.html">
            <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="{{asset('front/assets/img/real-estate/city/new-york.jpg')}}" alt="New York">
              <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                <div class="w-100 p-1">
                  <div class="mb-2">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">893</span>
                    </div>
                  </div>
                  <div class="pt-1">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">3756</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <h3 class="mb-0 fs-base text-nav">New York</h3>
            </div></a></div>
        <!-- Item-->
        <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-rent.html">
            <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="{{asset('front/assets/img/real-estate/city/chicago.jpg')}}" alt="Chicago">
              <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                <div class="w-100 p-1">
                  <div class="mb-2">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">268</span>
                    </div>
                  </div>
                  <div class="pt-1">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">1540</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <h3 class="mb-0 fs-base text-nav">Chicago</h3>
            </div></a></div>
        <!-- Item-->
        <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-sale.html">
            <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span><img src="{{asset('front/assets/img/real-estate/city/los-angeles.jpg')}}" alt="Los Angeles">
              <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                <div class="w-100 p-1">
                  <div class="mb-2">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">2750</span>
                    </div>
                  </div>
                  <div class="pt-1">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">692</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <h3 class="mb-0 fs-base text-nav">Los Angeles</h3>
            </div></a></div>
        <!-- Item-->
        <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-rent.html">
            <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span>
              <img src="{{asset('front/assets/img/real-estate/city/san-diego.jpg')}}" alt="San Diego">
              <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                <div class="w-100 p-1">
                  <div class="mb-2">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">1739</span>
                    </div>
                  </div>
                  <div class="pt-1">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">1854</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <h3 class="mb-0 fs-base text-nav">San Diego</h3>
            </div></a></div>
        <!-- Item-->
        <div class="col"><a class="card shadow-sm card-hover border-0" href="real-estate-catalog-sale.html">
            <div class="card-img-top card-img-hover"><span class="img-overlay opacity-65"></span>
            <img src="{{asset('front/assets/img/real-estate/city/dallas.jpg')}}" alt="Dallas">
              <div class="content-overlay start-0 top-0 d-flex align-items-center justify-content-center w-100 h-100 p-3">
                <div class="w-100 p-1">
                  <div class="mb-2">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-wallet mt-n1 me-2 fs-sm align-middle"></i>Property for sale</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">2567</span>
                    </div>
                  </div>
                  <div class="pt-1">
                    <h4 class="mb-2 fs-xs fw-normal text-light"><i class="fi-home mt-n1 me-2 fs-sm align-middle"></i>Property for rent</h4>
                    <div class="d-flex align-items-center">
                      <div class="progress progress-light w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><span class="text-light fs-sm ps-1 ms-2">1204</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body text-center">
              <h3 class="mb-0 fs-base text-nav">Dallas</h3>
            </div></a></div>
      </div>
    </div>
  </section>
  <!-- Partners (carousel)-->
  <section class="container mb-5 pb-2 pb-lg-4">
    <h2 class="h3 mb-4 text-center text-md-start">Our partners</h2>
    <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush">
      <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 6, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:2}, &quot;500&quot;:{&quot;items&quot;:4}, &quot;992&quot;:{&quot;items&quot;:5, &quot;gutter&quot;: 16}, &quot;1200&quot;:{&quot;items&quot;:6, &quot;gutter&quot;: 24}}}">
        <div><a class="swap-image" href="#"><img class="swap-to" src="{{asset('front/assets/img/real-estate/brands/01_color.svg')}}" alt="Logo" width="196"><img class="swap-from" src="{{asset('front/assets/img/real-estate/brands/01_gray.svg')}}" alt="Logo" width="196"></a></div>
        <div><a class="swap-image" href="#"><img class="swap-to" src="{{asset('front/assets/img/real-estate/brands/02_color.svg')}}" alt="Logo" width="196"><img class="swap-from" src="{{asset('front/assets/img/real-estate/brands/02_gray.svg')}}" alt="Logo" width="196"></a></div>
        <div><a class="swap-image" href="#"><img class="swap-to" src="{{asset('front/assets/img/real-estate/brands/03_color.svg')}}" alt="Logo" width="196"><img class="swap-from" src="{{asset('front/assets/img/real-estate/brands/03_gray.svg')}}" alt="Logo" width="196"></a></div>
        <div><a class="swap-image" href="#"><img class="swap-to" src="{{asset('front/assets/img/real-estate/brands/04_color.svg')}}" alt="Logo" width="196"><img class="swap-from" src="{{asset('front/assets/img/real-estate/brands/04_gray.svg')}}" alt="Logo" width="196"></a></div>
        <div><a class="swap-image" href="#"><img class="swap-to" src="{{asset('front/assets/img/real-estate/brands/05_color.svg')}}" alt="Logo" width="196"><img class="swap-from" src="{{asset('front/assets/img/real-estate/brands/05_gray.svg')}}" alt="Logo" width="196"></a></div>
        <div><a class="swap-image" href="#"><img class="swap-to" src="{{asset('front/assets/img/real-estate/brands/06_color.svg')}}" alt="Logo" width="196"><img class="swap-from" src="{{asset('front/assets/img/real-estate/brands/06_gray.svg')}}" alt="Logo" width="196"></a></div>
      </div>
    </div>
  </section>

