@extends('main')

<main class="page-wrapper">
<section class="container pt-5 mt-5">
    <!-- Breadcrumb-->
    <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
            <li class="breadcrumb-item"><a href="real-estate-catalog-rent.html">Property for rent</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $p->title }}</li>
        </ol>
    </nav>
    <h1 class="h2 mb-2">{{ $p->title }}</h1>
    <p class="mb-2 pb-1 fs-lg">28 Jackson Ave Long Island City, NY 67234</p>
    <!-- Features + Sharing-->
    <div class="d-flex justify-content-between align-items-center">
        <ul class="d-flex mb-4 list-unstyled">
            <li class="me-3 pe-3 border-end"><b class="me-1">4</b><i
                    class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
            <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i
                    class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
            <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i
                    class="fi-car mt-n1 lead align-middle text-muted"></i></li>
            <li><b>56 </b>sq.m</li>
        </ul>
        <div class="text-nowrap">
            <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button"
                data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fi-heart"></i></button>
            <div class="dropdown d-inline-block" data-bs-toggle="tooltip" title="Share">
                <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button"
                    data-bs-toggle="dropdown"><i class="fi-share"></i></button>
                <div class="dropdown-menu dropdown-menu-end my-1">
                    <button class="dropdown-item" type="button"><i
                            class="fi-facebook fs-base opacity-75 me-2"></i>Facebook</button>
                    <button class="dropdown-item" type="button"><i
                            class="fi-twitter fs-base opacity-75 me-2"></i>Twitter</button>
                    <button class="dropdown-item" type="button"><i
                            class="fi-instagram fs-base opacity-75 me-2"></i>Instagram</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery-->
<section class="container overflow-auto mb-4 pb-3" data-simplebar>
    <div class="row g-2 g-md-3 gallery" data-thumbnails="true" style="min-width: 30rem;">

        @php
            $imageCount = count($p->images);
            $displayCount = min($imageCount, 8); 
        @endphp

     
        @if ($imageCount > 0)
            <div class="col-8">
                <a class="gallery-item rounded rounded-md-3" href="{{ asset($p->images[0]->path) }}"
                    data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;{{ $p->images[0]->caption }}&lt;/h6&gt;">
                    <img src="{{ asset($p->images[0]->path) }}" alt="Gallery thumbnail">
                </a>
            </div>
        @endif

      
        @if ($imageCount > 1)
            <div class="col-4">
                @foreach($p->images->slice(1, 2) as $image)
                    <a class="gallery-item rounded rounded-md-3 mb-2 mb-md-3" href="{{ asset($image->path) }}"
                        data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;{{ $image->caption }}&lt;/h6&gt;">
                        <img src="{{ asset($image->path) }}" alt="Gallery thumbnail">
                    </a>
                @endforeach
            </div>
        @endif

       
        @if($imageCount > 3)
            <div class="col-12">
                <div class="row g-2 g-md-3">
                    @foreach($p->images->slice(3, 5) as $image)
                        <div class="col">
                            <a class="gallery-item rounded-1 rounded-md-2" href="{{ asset($image->path) }}"
                                data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;{{ $image->caption }}&lt;/h6&gt;">
                                <img src="{{ asset($image->path) }}" alt="Gallery thumbnail">
                            </a>
                        </div>
                    @endforeach

                    @if($imageCount > 8)
                        <div class="col">
                            <a class="gallery-item more-item rounded-1 rounded-md-2"
                                href="{{ asset($p->images[8]->path) }}"
                                data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;{{ $p->images[8]->caption }}&lt;/h6&gt;">
                                <img src="{{ asset($p->images[8]->path) }}" alt="Gallery thumbnail">
                                <span class="gallery-item-caption fs-base">+{{ $imageCount - 8 }} <span
                                        class='d-none d-md-inline'>photos</span></span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>


<!-- Post content-->
<section class="container mb-5 pb-1">
    <div class="row">
        <div class="col-md-7 mb-md-0 mb-4"><span class="badge bg-success me-2 mb-3">Verified</span><span
                class="badge bg-info me-2 mb-3">New</span>
            <h2 class="h3 mb-4 pb-4 border-bottom">{{$p->budget}} DT<span
                    class="d-inline-block ms-1 fs-base fw-normal text-body">/month</span></h2>
            <!-- Overview-->
          
          
            
                <div class="mb-4 pb-md-3">
                    <h3 class="h4">Overview</h3>
                    <p class="mb-1">{{$p->description}}</p>
                    <div class="collapse" id="seeMoreOverview">
                      
                    </div>
                   {{--  <a class="collapse-label collapsed" href="#seeMoreOverview" data-bs-toggle="collapse"
                        data-bs-label-collapsed="{{ __('Show more') }}" data-bs-label-expanded="{{ __('Show less') }}" role="button"
                        aria-expanded="false" aria-controls="seeMoreOverview"></a> --}}
                </div>
          

            
            <!-- Property Details-->
            <div class="mb-4 pb-md-3">
                <h3 class="h4">Property Details</h3>
                <ul class="list-unstyled mb-0">
                    <li><b>Type: </b>{{$p->bientype->name}}</li>
                    <li><b>Apartment area: </b>{{$p->surface}}</li>
                    <li><b>Built: </b>2015</li>
                    <li><b>Bedrooms: </b>4</li>
                    <li><b>Bathrooms: </b>{{$p->bathrooms}}</li>
                    <li><b>Parking places: </b>{{$p->parking}}</li>
                  {{--   <li><b>Pets allowed: </b>cats only</li> --}}
                </ul>
            </div>
            <!-- Amenities-->
            <div class="mb-4 pb-md-3">
                <h3 class="h4">Amenities</h3>
                <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
               
                    <li class="col"><i class="fi-thermometer mt-n1 me-2 fs-lg align-middle"></i>Heating</li>
                    @if ($p->parking != 0 || $p->parking != null)
                    <li class="col"><i class="fi-parking mt-n1 me-2 fs-lg align-middle"></i>Parking place</li>
                    @endif
                    <li class="col"><i class="fi-snowflake mt-n1 me-2 fs-lg align-middle"></i>Air conditioning</li>
     
                    <li class="col"><i class="fi-swimming-pool mt-n1 me-2 fs-lg align-middle"></i>Swimming pool
                    </li>
            
                    <li class="col"><i class="fi-cctv mt-n1 me-2 fs-lg align-middle"></i>Security cameras</li>
                </ul>
              
                  
                      
                   
                 
                </div><a class="collapse-label collapsed" href="#seeMoreAmenities" data-bs-toggle="collapse"
                    data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button"
                    aria-expanded="false" aria-controls="seeMoreAmenities"></a>
            </div>
            <!-- Post meta-->
            <div class="mb-lg-5 mb-md-4 pb-lg-2 py-4 border-top">
                <ul class="d-flex mb-4 list-unstyled fs-sm">
                    <li class="me-3 pe-3 border-end">Published: <b>{{$p->created_at}}</b></li>
                    <li class="me-3 pe-3 border-end">Ad number: <b>Bien{{$p->id}}</b></li>
                    <li class="me-3 pe-3">Views: <b>{{$p->views}}</b></li>
                </ul>
            </div>
           
        </div>
        <!-- Sidebar-->
        <aside class="col-lg-4 col-md-5 ms-lg-auto pb-1">
            <!-- Contact card-->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between"><a class="text-decoration-none"
                            href="real-estate-vendor-properties.html"><img class="rounded-circle mb-2"
                                src="img/avatars/22.jpg" width="60" alt="Avatar">
                            <h5 class="mb-1">Floyd Miles</h5>
                            <div class="mb-1"><span class="star-rating"><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i></span><span
                                    class="ms-1 fs-sm text-muted">(45 reviews)</span>
                            </div>
                            <p class="text-body">Imperial Property Group Agent</p>
                        </a>
                        <div class="ms-4 flex-shrink-0"><a
                                class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2"
                                href="#"><i class="fi-facebook"></i></a><a
                                class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2"
                                href="#"><i class="fi-linkedin"></i></a></div>
                    </div>
                    <ul class="list-unstyled border-bottom mb-4 pb-4">
                        <li><a class="nav-link fw-normal p-0" href="tel:3025550107"><i
                                    class="fi-phone mt-n1 me-2 align-middle opacity-60"></i>(302) 555-0107</a></li>
                        <li><a class="nav-link fw-normal p-0" href="mailto:floyd_miles@email.com"><i
                                    class="fi-mail mt-n1 me-2 align-middle opacity-60"></i>floyd_miles@email.com</a>
                        </li>
                    </ul>
                    <!-- Contact form-->
                    <form class="needs-validation" novalidate>
                        <div class="mb-3">
                            <input class="form-control" type="text" placeholder="Your name*" required>
                            <div class="invalid-feedback">Please enter your name!</div>
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="email" placeholder="Email*" required>
                            <div class="invalid-feedback">Please provide valid email address!</div>
                        </div>
                        <input class="form-control mb-3" type="tel" placeholder="Phone">
                        <div class="input-group mb-3">
                            <input class="form-control date-picker rounded pe-5" type="text"
                                placeholder="Choose date"
                                data-datepicker-options="{&quot;altInput&quot;: true, &quot;altFormat&quot;: &quot;F j, Y&quot;, &quot;dateFormat&quot;: &quot;Y-m-d&quot;}"><i
                                class="fi-calendar position-absolute top-50 end-0 translate-middle-y me-3"></i>
                        </div>
                        <textarea class="form-control mb-3" rows="3" placeholder="Message" style="resize: none;"></textarea>
                        <div class="form-check mb-4">
                            <input class="form-check-input" id="form-submit" type="checkbox" checked>
                            <label class="form-check-label fs-sm" for="form-submit">Send news, tips and promos from
                                Finder to my email.</label>
                        </div>
                        <button class="btn btn-lg btn-primary d-block w-100" type="submit">Send request</button>
                    </form>
                </div>
            </div>
           
        </aside>
    </div>
</section>
<!-- Recently viewed-->
<section class="container mb-5 pb-2 pb-lg-4">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h2 class="h3 mb-0">Recently viewed</h2><a class="btn btn-link fw-normal p-0"
            href="real-estate-catalog-rent.html">View all<i class="fi-arrow-long-right ms-2"></i></a>
    </div>
    <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2">
        <div class="tns-carousel-inner row gx-4 mx-0 pt-3 pb-4"
            data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
            @foreach($otherProperties as $po)
            
        
            <div class="col">
                <div class="card shadow-sm card-hover border-0 h-100">
                    <div class="card-img-top card-img-hover">
                        <a class="img-overlay" href="{{ route('bien.show', $po->id) }}"></a>
                        <div class="position-absolute start-0 top-0 pt-3 ps-3">
                            <span class="d-table badge bg-success mb-1">Verified</span>
                            <span class="d-table badge bg-info">New</span>
                        </div>
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                            <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Wishlist">
                                <i class="fi-heart"></i>
                            </button>
                        </div>
                        @php
                            $firstImage = $po->images->first();
                        @endphp
                        <img src="{{ asset($firstImage->path) }}" alt="Image">
                    </div>
                    <div class="card-body position-relative pb-3">
                        <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">{{ $po->status }}</h4>
                        <h3 class="h6 mb-2 fs-base">
                            <a class="nav-link stretched-link" href="{{ route('bien.show', $po->id) }}">
                                {{ $po->title }} | {{ $po->size }} sq.m
                            </a>
                        </h3>
                        <p class="mb-2 fs-sm text-muted">{{ $po->address }}</p>
                        <div class="fw-bold">
                            <i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>
                            {{ $po->budget }} DT
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap">
                        <span class="d-inline-block mx-1 px-2 fs-sm">{{ $po->bedrooms }}<i
                                class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span>
                        <span class="d-inline-block mx-1 px-2 fs-sm">{{ $po->bathrooms }}<i
                                class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span>
                        <span class="d-inline-block mx-1 px-2 fs-sm">{{ $po->garages }}<i
                                class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                    </div>
                </div>
            </div>
        @endforeach
        
        </div>
    </div>
</section>

</main>