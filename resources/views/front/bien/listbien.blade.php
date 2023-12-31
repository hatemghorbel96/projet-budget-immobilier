@extends('main')






<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Page content-->
<!-- Page container-->
<div class="container-fluid mt-5 pt-5 p-0">
    <div class="row g-0 mt-n3">
        <!-- Filters sidebar (Offcanvas on mobile)-->
        <aside class="col-lg-4 col-xl-3 border-top-lg border-end-lg shadow-sm px-3 px-xl-4 px-xxl-5 pt-lg-2">
            <div class="offcanvas-lg offcanvas-start" id="filters-sidebar">
                <div class="offcanvas-header d-flex d-lg-none align-items-center">
                    <h2 class="h5 mb-0">Filters</h2>
                    <button class="btn-close" type="button" data-bs-dismiss="offcanvas"
                        data-bs-target="#filters-sidebar"></button>
                </div>
                <div class="offcanvas-header d-block border-bottom pt-0 pt-lg-4 px-lg-0">
                    <ul class="nav nav-tabs mb-0">
                        @php
                            $type = request('type');
                            $route = Route::current()->getName();
                        @endphp
                       <li class="nav-item">
                        <a class="nav-link @if($type == 'rent' && $route == 'bien.index') active @endif" href="{{ route('bien.index', 'rent') }}">
                            <i class="fi-rent fs-base me-2"></i>A louer
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link @if($type == 'sale' && $route == 'bien.index') active @endif" href="{{ route('bien.index', 'sale') }}">
                            <i class="fi-home fs-base me-2"></i>À vendre
                        </a>
                    </li>
                        
                        
                    </ul>
                </div>
                <div class="offcanvas-body py-lg-4">
                    <div class="pb-4 mb-2">
                        <h3 class="h6">Location</h3>
                        <select class="form-select mb-2" id="location_filter">
                            <option value="" >Choose city</option>
                            @foreach ($locations as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option> 
                            @endforeach
                           
                           
                        </select>
                     
                    </div>
                    <div class="pb-4 mb-2">
                        <h3 class="h6">Property type</h3>
                        <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false"
                            style="height: 11rem;">
                            
                            @foreach ($bientypes as $b)
                            <div class="form-check">
                                <input class="form-check-input"  type="checkbox" id="property_type" name="property_type" value="{{$b->id}}">
                                <label class="form-check-label fs-sm" for="apartment">{{$b->name}}</label>
                            </div>
                            @endforeach
                           
                            
                        </div>
                    </div>
                    <div class="pb-4 mb-2">
                        <h3 class="h6">Property price</h3> 
                        <div class="range-slider" data-start-min="0" data-start-max="{{$maxBudget / 2}}" data-min="0"
                            data-max="{{$maxBudget}}" data-step="1">
                            <div class="range-slider-ui"></div>
                            <div class="d-flex align-items-center">
                                <div class="w-50 pe-2">
                                    <div class="input-group"><span class="input-group-text fs-base">DT</span>
                                        <input class="form-control range-slider-value-min" type="text">
                                    </div>
                                </div>
                                <div class="text-muted">&mdash;</div>
                                <div class="w-50 ps-2">
                                    <div class="input-group"><span class="input-group-text fs-base">DT</span>
                                        <input class="form-control range-slider-value-max" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 mb-2">
                        <h3 class="h6 pt-1">Beds &amp; baths</h3>
                        <!-- Bedrooms Section -->
                        <label class="d-block fs-sm mb-1">Bedrooms</label>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bedrooms">
                            <input class="btn-check" type="radio" id="studio" name="bedrooms" value="null">
                            <label class="btn btn-outline-secondary fw-normal" for="studio">Studio</label>
                            <input class="btn-check" type="radio" id="bedrooms-1" name="bedrooms" value="1">
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-1" >1</label>
                            <input class="btn-check" type="radio" id="bedrooms-2" name="bedrooms" value="2">
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-2" >2</label>
                            <input class="btn-check" type="radio" id="bedrooms-3" name="bedrooms" value="3">
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-3" >3</label>
                            <input class="btn-check" type="radio" id="bedrooms-4" name="bedrooms" value="4">
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-4" >4</label>
                        </div>
                        <!-- Bathrooms Section -->
                        <label class="d-block fs-sm pt-2 my-1">Bathrooms</label>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bathrooms">
                            <input class="btn-check" type="radio" id="bathrooms" name="bathrooms" value="null">
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms">Bathroom</label>
                            <input class="btn-check" type="radio" id="bathrooms-1" name="bathrooms" value="1">
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms-1" >1</label>
                            <input class="btn-check" type="radio" id="bathrooms-2" name="bathrooms" value="2">
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms-2" >2</label>
                            <input class="btn-check" type="radio" id="bathrooms-3" name="bathrooms" value="3">
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms-3" >3</label>
                            <input class="btn-check" type="radio" id="bathrooms-4" name="bathrooms" value="4">
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms-4" >4</label>
                        </div>
                    </div>
                    
                    
                  
                    
                   
                    <div class="border-top py-4">
                        <button class="btn btn-outline-primary" type="button" id="apply_filters_btn">Apply Filters</button>
                        <button class="btn btn-outline-secondary" type="button" id="reset_filters_btn">Reset Filters</button>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Page content-->
        <div class="col-lg-8 col-xl-9 position-relative overflow-hidden pb-5 pt-4 px-3 px-xl-4 px-xxl-5">
            <!-- Map popup-->
           
            <!-- Breadcrumb-->
            <nav class="mb-3 pt-md-2" aria-label="Breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Property for {{$type}}</li>
                </ol>
            </nav>
            <!-- Title-->
            <div class="d-sm-flex align-items-center justify-content-between pb-3 pb-sm-4">
                <h1 class="h2 mb-sm-0">Property for {{$type}}</h1>
            </div>
            <!-- Sorting-->
            <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch my-2">
                {{-- <div class="d-flex align-items-center flex-shrink-0">
                    <label class="fs-sm me-2 pe-1 text-nowrap" for="sortby"><i
                            class="fi-arrows-sort text-muted mt-n1 me-2"></i>Sort by:</label>
                    <select class="form-select form-select-sm" id="sortby">
                        <option>Newest</option>
                        <option>Popularity</option>
                        <option>Low - High Price</option>
                        <option>High - Low Price</option>
                        <option>High rating</option>
                        <option>Average Rating</option>
                    </select>
                </div> --}}
                <hr class="d-none d-sm-block w-100 mx-4">
                <div class="d-none d-sm-flex align-items-center flex-shrink-0 text-muted"><i
                        class="fi-check-circle me-2"></i><span class="fs-sm mt-n1">{{ $properties->count() }}
                        results</span></div>
            </div>
            <!-- Catalog grid-->
            <div class="row g-4 py-4" id="table_data">
                <!-- Item-->
                
                    @include('front.bien.ajax.listbien')
              
            </div>
            <!-- Pagination-->
           {{--  <nav class="border-top pb-md-4 pt-4 mt-2" aria-label="Pagination">
                <ul class="pagination mb-1">
                    <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                    <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span
                                class="visually-hidden">(current)</span></span></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                    <li class="page-item d-none d-sm-block">...</li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i
                                class="fi-chevron-right"></i></a></li>
                </ul>
            </nav> --}}
        </div>
    </div>
</div>

<script>
  

        $('#apply_filters_btn').click(function () {
            applyFilters();
        });

        $('#reset_filters_btn').click(function () {
            resetFilters();
        });

        function applyFilters() {
            var locationId = $('#location_filter').val();
            var propertyType = $('input[name="property_type"]:checked').map(function () {
                return this.value;
            }).get();
            var minBudget = $('.range-slider-value-min').val();
            var maxBudget = $('.range-slider-value-max').val();
            var bedrooms = $('input[name="bedrooms"]:checked').val();
            var bathrooms = $('input[name="bathrooms"]:checked').val();
            var type = '{{$type}}';
            console.log('Location ID:', locationId);
            console.log('Property Type:', propertyType);
            console.log('Min Budget:', minBudget);
            console.log('Max Budget:', maxBudget);
            console.log('Bedrooms:', bedrooms);
            console.log('Bathrooms:', bathrooms);
            console.log('type:', type);
            var url = '{{ route('ajax.pagination.fetch') }}';

            $.ajax({
                url: url,
                method: 'GET',
                data: {
                    location: locationId,
                    property_type: propertyType,
                    min_budget: minBudget,
                    max_budget: maxBudget,
                    bedrooms: bedrooms,
                    bathrooms: bathrooms,
                    type:type
                },
                success: function (data) {
                    console.log('Received data:', data);
                    $('#table_data').html(data);
                }
            });
        }

        function resetFilters() {
           
            $('#location_filter').val('');
            $('input[name="property_type"]').prop('checked', false);
            $('.range-slider-value-min').val('');
            $('.range-slider-value-max').val('');
            $('input[name="bedrooms"]').prop('checked', false);
            $('input[name="bathrooms"]').prop('checked', false);


            applyFilters();
        }
 

    
</script>

<script>
    
    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);

    });

    function fetch_data(page) {
        var type = "{{$type}}";
        var url = "{{ route('ajax.pagination.fetch') }}";

        $.ajax({
            url: url + "?page=" + page,
            method: 'GET',
            data: { type: type }, 
            success: function(data) {
                $('#table_data').html(data);
            },
        });
    }
</script>

