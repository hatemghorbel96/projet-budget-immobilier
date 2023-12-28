@extends('main')

<div class="modal fade" id="preview-modal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header d-block d-sm-flex">
                <h3 class="h5 text-muted fw-normal modal-title d-none d-sm-block">Property preview</h3>
                <div class="d-flex align-items-center"><a class="btn btn-primary btn-sm me-4" href="real-estate-property-promotion.html">Save and continue</a><span class="fs-xs text-muted ms-auto me-2">[ESC]</span>
                    <button class="btn-close ms-0" type="button" data-bs-dismiss="modal"></button>
                </div>
            </div>
            <div class="modal-body p-0">
                <div class="container mt-2 mt-sm-0 py-4 py-sm-5">
                    <h1 class="h2 mb-2">Pine Apartments</h1>
                    <p class="mb-2 pb-1 fs-lg">28 Jackson Ave Long Island City, NY 67234</p>
                    <ul class="d-flex mb-4 list-unstyled">
                        <li class="me-3 pe-3 border-end"><b class="me-1">4</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                        <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                        <li class="me-3 pe-3 border-end"><b class="me-1">2</b><i class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                        <li><b>56 </b>sq.m</li>
                    </ul>
                    <div class="overflow-auto pb-3 px-2 mx-n2 mb-4" data-simplebar>
                        <div class="row g-2 g-md-3" style="min-width: 30rem;">
                            <div class="col-8"><img class="rounded rounded-md-3" src="img/real-estate/single/01.jpg" alt="Gallery thumbnail"></div>
                            <div class="col-4"><img class="rounded rounded-md-3 mb-2 mb-md-3" src="img/real-estate/single/02.jpg" alt="Gallery thumbnail"><img class="rounded rounded-md-3" src="img/real-estate/single/03.jpg" alt="Gallery thumbnail"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mb-md-0 mb-4"><span class="badge bg-success me-2 mb-3">Verified</span><span class="badge bg-info me-2 mb-3">New</span>
                            <h2 class="h3 mb-4 pb-4 border-bottom">$2,000<span class="d-inline-block ms-1 fs-base fw-normal text-body">/month</span></h2>
                            <!-- Overview-->
                            <div class="mb-4 pb-md-3">
                                <h3 class="h4">Overview</h3>
                                <p class="mb-1">Lorem tincidunt lectus vitae id vulputate diam quam. Imperdiet non scelerisque turpis sed etiam ultrices. Blandit mollis dignissim egestas consectetur porttitor. Vulputate dolor pretium, dignissim eu augue sit ut convallis. Lectus est, magna urna feugiat sed ultricies sed in lacinia. Fusce potenti sit id pharetra vel ornare. Vestibulum sed tellus ullamcorper arcu.</p>
                                <div class="collapse" id="seeMoreOverview">
                                    <p class="mb-1">Asperiores eos molestias, aspernatur assumenda vel corporis ex, magni excepturi totam exercitationem quia inventore quod amet labore impedit quae distinctio? Officiis blanditiis consequatur alias, atque, sed est incidunt accusamus repudiandae tempora repellendus obcaecati delectus ducimus inventore tempore harum numquam autem eligendi culpa.</p>
                                </div><a class="collapse-label collapsed" href="#seeMoreOverview" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="seeMoreOverview"></a>
                            </div>
                            <!-- Property Details-->
                            <div class="mb-4 pb-md-3">
                                <h3 class="h4">Property Details</h3>
                                <ul class="list-unstyled mb-0">
                                    <li><b>Type: </b>apartment</li>
                                    <li><b>Apartment area: </b>56 sq.m</li>
                                    <li><b>Built: </b>2015</li>
                                    <li><b>Bedrooms: </b>4</li>
                                    <li><b>Bathrooms: </b>2</li>
                                    <li><b>Parking places: </b>2</li>
                                    <li><b>Pets allowed: </b>No</li>
                                </ul>
                            </div>
                            <!-- Amenities-->
                            <div class="mb-sm-3">
                                <h3 class="h4">Amenities</h3>
                                <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
                                    <li class="col"><i class="fi-wifi mt-n1 me-2 fs-lg align-middle"></i>WiFi</li>
                                    <li class="col"><i class="fi-thermometer mt-n1 me-2 fs-lg align-middle"></i>Heating</li>
                                    <li class="col"><i class="fi-dish mt-n1 me-2 fs-lg align-middle"></i>Dishwasher</li>
                                    <li class="col"><i class="fi-parking mt-n1 me-2 fs-lg align-middle"></i>Parking place</li>
                                    <li class="col"><i class="fi-snowflake mt-n1 me-2 fs-lg align-middle"></i>Air conditioning</li>
                                    <li class="col"><i class="fi-iron mt-n1 me-2 fs-lg align-middle"></i>Iron</li>
                                    <li class="col"><i class="fi-tv mt-n1 me-2 fs-lg align-middle"></i>TV</li>
                                    <li class="col"><i class="fi-laundry mt-n1 me-2 fs-lg align-middle"></i>Laundry</li>
                                    <li class="col"><i class="fi-cctv mt-n1 me-2 fs-lg align-middle"></i>Security cameras</li>
                                </ul>
                                <div class="collapse" id="seeMoreAmenities">
                                    <ul class="list-unstyled row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-1 mb-1 text-nowrap">
                                        <li class="col"><i class="fi-no-smoke mt-n1 me-2 fs-lg align-middle"></i>No smocking</li>
                                        <li class="col"><i class="fi-pet mt-n1 me-2 fs-lg align-middle"></i>Cats</li>
                                        <li class="col"><i class="fi-swimming-pool mt-n1 me-2 fs-lg align-middle"></i>Swimming pool</li>
                                        <li class="col"><i class="fi-double-bed mt-n1 me-2 fs-lg align-middle"></i>Double bed</li>
                                        <li class="col"><i class="fi-bed mt-n1 me-2 fs-lg align-middle"></i>Single bed</li>
                                    </ul>
                                </div><a class="collapse-label collapsed" href="#seeMoreAmenities" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="seeMoreAmenities"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page container-->
<div class="container mt-5 mb-md-4 py-5">
    <div class="row">
        <!-- Page content-->
        <div class="col-lg-8">
            <!-- Breadcrumb-->
            <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter un bien </li>
                </ol>
            </nav>
            <!-- Title-->
            <div class="mb-4">
                <h1 class="h2 mb-0">Ajouter un bien</h1>
                <div class="d-lg-none pt-3 mb-2">65% content filled</div>
                <div class="progress d-lg-none mb-4" style="height: .25rem;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <!-- Basic info-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                <h2 class="h4 mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>Informations de base</h2>
                <div class="mb-3">
                    <label class="form-label" for="ap-title">Titre <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" id="ap-title" placeholder="Titre"  required><span class="form-text">48 characters left</span>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-category">Catégorie <span class="text-danger">*</span></label>
                        <select class="form-select" id="ap-category" required>
                            <option value="" disabled hidden>Choisir une catégorie</option>
                            <option value="Rent">For rent</option>
                            <option value="Sell">For sale</option>
                        </select>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-type">Type de bien  <span class="text-danger">*</span></label>
                        <select class="form-select" id="ap-type" required>
                            <option value="" disabled hidden>Choisir type bien</option>
                            <option value="Apartment">Apartment</option>
                            <option value="House">House</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Commercial">Daily rental</option>
                            <option value="New building">New building</option>
                        </select>
                    </div>
                </div>

            </section>
            <!-- Location-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="location">
                <h2 class="h4 mb-4"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Location</h2>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-country">Pays / région <span class="text-danger">*</span></label>
                        <select class="form-select" id="ap-country" required>
                            <option value="" disabled>choisir pays</option>
                            <option value="Australia">Australia</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Canada">Canada</option>
                            <option value="Germany">Germany</option>
                            <option value="United States" selected>United States</option>
                        </select>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-city">Ville <span class="text-danger">*</span></label>
                        <select class="form-select" id="ap-city" required>
                            <option value="" disabled>Choisir ville</option>
                            <option value="Chicago">Chicago</option>
                            <option value="Dallas">Dallas</option>
                            <option value="Los Angeles">Los Angeles</option>
                            <option value="New York" selected>New York</option>
                            <option value="San Diego">San Diego</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mb-3">
                        <label class="form-label" for="ap-district">Adresse <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-address" placeholder="Adresse" required>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label" for="ap-zip">Code postal  <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-zip" placeholder="Code postal"  required>
                    </div>
                </div>

            </section>
            <!-- Property details-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="details">
                <h2 class="h4 mb-4"><i class="fi-edit text-primary fs-5 mt-n1 me-2"></i>Détails de bien</h2>
                <div class="mb-4" style="max-width: 25rem;">
                    <label class="form-label" for="ap-area">Surface totale</label>
                    <input class="form-control" type="number" id="ap-area" min="20" placeholder="Surface totale" value="56" required>
                </div>
                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Chambres</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bedrooms">
                        <input class="btn-check" type="radio" id="studio" name="bedrooms">
                        <label class="btn btn-outline-secondary fw-normal" for="studio">Studio</label>
                        <input class="btn-check" type="radio" id="bedrooms-1" name="bedrooms">
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-1">1</label>
                        <input class="btn-check" type="radio" id="bedrooms-2" name="bedrooms">
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-2">2</label>
                        <input class="btn-check" type="radio" id="bedrooms-3" name="bedrooms">
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-3">3</label>
                        <input class="btn-check" type="radio" id="bedrooms-4" name="bedrooms" checked>
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-4">4</label>
                        <input class="btn-check" type="radio" id="bedrooms-5" name="bedrooms">
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-5">5+</label>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Salles de bains</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bathrooms">
                        <input class="btn-check" type="radio" id="bathrooms-1" name="bathrooms">
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-1">1</label>
                        <input class="btn-check" type="radio" id="bathrooms-2" name="bathrooms" checked>
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-2">2</label>
                        <input class="btn-check" type="radio" id="bathrooms-3" name="bathrooms">
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-3">3</label>
                        <input class="btn-check" type="radio" id="bathrooms-4" name="bathrooms">
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-4">4</label>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Parking </label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of parking spots">
                        <input class="btn-check" type="radio" id="parking-1" name="parking">
                        <label class="btn btn-outline-secondary fw-normal" for="parking-1">1</label>
                        <input class="btn-check" type="radio" id="parking-2" name="parking" checked>
                        <label class="btn btn-outline-secondary fw-normal" for="parking-2">2</label>
                        <input class="btn-check" type="radio" id="parking-3" name="parking">
                        <label class="btn btn-outline-secondary fw-normal" for="parking-3">3</label>
                        <input class="btn-check" type="radio" id="parking-4" name="parking">
                        <label class="btn btn-outline-secondary fw-normal" for="parking-4">4</label>
                    </div>
                </div>

                <label class="form-label" for="ap-description">Description </label>
                <textarea class="form-control" id="ap-description" rows="5" placeholder="Description de votre bien"></textarea><span class="form-text">1500 characters left</span>
            </section>
            <!-- Price-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="price">
                <h2 class="h4 mb-4"><i class="fi-cash text-primary fs-5 mt-n1 me-2"></i>Prix</h2>
                <label class="form-label" for="ap-price">Prix <span class="text-danger">*</span></label>
                <div class="d-sm-flex">

                    <input class="form-control w-100 me-2 mb-2" placeholder="Prix" type="number" id="ap-price" min="200" step="50" required>
                    <select class="form-select w-50 mb-2">
                        <option value="day">par jour</option>
                        <option value="week">par semaine</option>
                        <option value="month" selected>par mois</option>
                        <option value="year">par an</option>
                    </select>
                </div>
            </section>
            <!-- Photos / video-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="photos">
                <h2 class="h4 mb-4"><i class="fi-image text-primary fs-5 mt-n1 me-2"></i>Photos</h2>
                <div class="alert alert-info mb-4" role="alert">
                    <div class="d-flex"><i class="fi-alert-circle me-2 me-sm-3"></i>
                        <p class="fs-sm mb-1">La taille maximale de la photo est de 8 Mo. Formats : jpeg, jpg, png. Mettez la photo principale en premier.</p>
                    </div>
                </div>
                <input class="file-uploader file-uploader-grid" type="file" multiple data-max-file-size="10MB" accept="image/png, image/jpeg, video/mp4, video/mov" data-label-idle="&lt;div class=&quot;btn btn-primary mb-3&quot;&gt;&lt;i class=&quot;fi-cloud-upload me-1&quot;&gt;&lt;/i&gt;Upload photos / video&lt;/div&gt;&lt;br&gt;or drag them in">
            </section>
            <!-- Contacts-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="contacts">
                <h2 class="h4 mb-4"><i class="fi-phone text-primary fs-5 mt-n1 me-2"></i>Contacts</h2>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-fn">Prénom <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-fn"  placeholder="Prénom" required>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-sn">Nom <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-sn"  placeholder="Nom" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-email">Adresse e-mail<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-email"  placeholder="Adresse e-mail">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-phone">Numéro de téléphone <span class="text-danger">*</span></label>
                        <input class="form-control" type="tel" id="ap-phone" data-format="custom" data-delimiter="-" data-blocks="3 3 4"  placeholder="Numéro de téléphone">
                    </div>
                </div>

            </section>
            <!-- Action buttons -->
            <section class="d-sm-flex justify-content-between pt-2"><a class="btn btn-outline-primary btn-lg d-block mb-3 mb-sm-2" href="#preview-modal" data-bs-toggle="modal"><i class="fi-eye-on ms-n1 me-2"></i>Aperçu</a><a class="btn btn-primary btn-lg d-block mb-2" href="real-estate-property-promotion.html">Sauvegarder </a></section>
        </div>
        <!-- Progress of completion-->
        <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
            <div class="sticky-top pt-5">
                <h6 class="pt-5 mt-3 mb-2">65% content filled</h6>
                <div class="progress mb-4" style="height: .25rem;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#basic-info" data-scroll data-scroll-offset="20">Basic info</a></li>
                    <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#location" data-scroll data-scroll-offset="20">Location</a></li>
                    <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#details" data-scroll data-scroll-offset="20">Property details</a></li>
                    <li class="d-flex align-items-center"><i class="fi-check text-muted me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#price" data-scroll data-scroll-offset="20">Price</a></li>
                    <li class="d-flex align-items-center"><i class="fi-check text-muted me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#photos" data-scroll data-scroll-offset="20">Photos / video</a></li>
                    <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#contacts" data-scroll data-scroll-offset="20">Contacts</a></li>
                </ul>
            </div>
        </aside>
    </div>
</div>







{{--<section class="container pt-5 my-5 pb-lg-4">--}}
{{--    <div class="container mt-5">--}}
{{--        <h2>Create Property</h2>--}}
{{--        <form action="{{ route('properties.store') }}" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            <div class="form-group">--}}
{{--                <label for="title">Email :</label>--}}
{{--                <input type="text" name="email" class="form-control" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="title">Title:</label>--}}
{{--                <input type="text" name="title" class="form-control" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="purchase_type">Purchase Type:</label>--}}
{{--                <input type="text" name="purchase_type" class="form-control" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="for">Sale/Rent:</label>--}}
{{--                <select name="for" class="form-control" required>--}}
{{--                    <option value="sale">Sale</option>--}}
{{--                    <option value="rent">Rent</option>--}}
{{--                </select>--}}
{{--            </div>--}}

{{--            <div class="form-group">--}}
{{--                <label for="title">surface:</label>--}}
{{--                <input type="number" name="surface" class="form-control" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="title">budget:</label>--}}
{{--                <input type="number" name="budget" class="form-control" required>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="location_id">Location:</label>--}}
{{--                <select name="location_id" class="form-control">--}}
{{--                    @foreach($locations as $location)--}}
{{--                        <option value="{{ $location->id }}">{{ $location->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="bientype_id">Bien Type:</label>--}}
{{--                <select name="bientype_id" class="form-control">--}}
{{--                    @foreach($bientypes as $bientype)--}}
{{--                        <option value="{{ $bientype->id }}">{{ $bientype->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="images">Images:</label>--}}
{{--                <input type="file" name="images[]" multiple accept="image/*">--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</section>--}}
