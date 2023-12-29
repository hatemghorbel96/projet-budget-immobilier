@extends('main')

{{-- <link rel="stylesheet" media="screen" href="{{asset('front/assets/vendor/simplebar/dist/simplebar.min.css')}}"/>
<link rel="stylesheet" media="screen" href="{{asset('front/assets/vendor/leaflet/dist/leaflet.css')}}"/>
<link rel="stylesheet" media="screen" href="{{asset('front/assets/vendor/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css')}}"/>
<link rel="stylesheet" media="screen" href="{{asset('front/assets/vendor/filepond/dist/filepond.min.css')}}"/> --}}
<!-- Page container-->
<div class="container mt-5 mb-md-4 py-5">
    <div class="row">
        <!-- Page content-->
        {{-- <form action="{{ route('properties.store') }}" method="post" enctype="multipart/form-data"> --}}
        <div class="col-lg-8">
            <form action="{{ route('properties.store') }}" method="post" enctype="multipart/form-data">
                @csrf
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
                    <input class="form-control" type="text" name="title" placeholder="Titre"  required><span class="form-text">48 characters left</span>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-category">Catégorie <span class="text-danger">*</span></label>
                        <select class="form-select" name="for" id="ap-category" required>
                            <option name="for" value="" disabled hidden>Choisir une catégorie</option>
                            <option value="rent">For rent</option>
                            <option value="sale">For sale</option>
                        </select>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-type">Bien Type:  <span class="text-danger">*</span></label>
                        <select class="form-select" id="ap-type" required name="bientype_id">
                                <option value="" disabled hidden>Choisir type bien</option>
                            @foreach($bientypes as $bientype)
                                <option value="{{ $bientype->id }}">{{ $bientype->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </section>
            <!-- Location-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="location">
                <h2 class="h4 mb-4"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Location</h2>
                <div class="row">
                    {{-- <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-country">Pays / région <span class="text-danger">*</span></label>
                        <select class="form-select" id="ap-country" required>
                            <option value="" disabled>choisir pays</option>
                            <option value="Australia">Australia</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Canada">Canada</option>
                            <option value="Germany">Germany</option>
                            <option value="United States" selected>United States</option>
                        </select>
                    </div> --}}
                    <div class="col-sm-12 mb-3">
                        <label class="form-label" for="ap-city">Ville <span class="text-danger">*</span></label>
                        <select class="form-select" id="ap-city" name="location_id" required>
                            <option value="" disabled>Choisir ville</option>
                            @foreach($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mb-3">
                        <label class="form-label" for="ap-district" name="address">Adresse <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-address" placeholder="Adresse" required>
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label" for="ap-zip">Code postal  <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-zip" name="codepostal" placeholder="Code postal"  required>
                    </div>
                </div>

            </section>
            <!-- Property details-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="details">
                <h2 class="h4 mb-4"><i class="fi-edit text-primary fs-5 mt-n1 me-2"></i>Détails de bien</h2>
                <div class="mb-4" style="max-width: 25rem;">
                    <label class="form-label" for="ap-area">Surface totale</label>
                    <input class="form-control" type="number" name="surface" id="ap-area" min="20" placeholder="Surface totale" value="20" required>
                </div>
                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Chambres</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bedrooms">
                        <input class="btn-check" type="radio" id="studio" name="rooms" value="0">
                        <label class="btn btn-outline-secondary fw-normal" for="studio">Studio</label>
                        <input class="btn-check" type="radio" id="bedrooms-1" name="rooms" value="1">
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-1">1</label>
                        <input class="btn-check" type="radio" id="bedrooms-2" name="rooms" value="2">
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-2">2</label>
                        <input class="btn-check" type="radio" id="bedrooms-3" name="rooms" value="3">
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-3">3</label>
                        <input class="btn-check" type="radio" id="bedrooms-4" name="rooms" value="4" checked>
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-4">4</label>
                        <input class="btn-check" type="radio" id="bedrooms-5" name="rooms" value="5+">
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-5">5+</label>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Salles de bains</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bathrooms">
                        <input class="btn-check" type="radio" id="bathrooms-1" name="bathroom" value="1">
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-1">1</label>
                        <input class="btn-check" type="radio" id="bathrooms-2" name="bathroom" value="2">
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-2">2</label>
                        <input class="btn-check" type="radio" id="bathrooms-3" name="bathroom" value="3">
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-3">3</label>
                        <input class="btn-check" type="radio" id="bathrooms-4" name="bathroom" value="4">
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-4">4</label>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Parking </label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of parking spots">
                        <input class="btn-check" type="radio" id="parking-1" name="parking" value="1">
                        <label class="btn btn-outline-secondary fw-normal" for="parking-1">1</label>
                        <input class="btn-check" type="radio" id="parking-2" name="parking" value="2">
                        <label class="btn btn-outline-secondary fw-normal" for="parking-2">2</label>
                        <input class="btn-check" type="radio" id="parking-3" name="parking" value="3">
                        <label class="btn btn-outline-secondary fw-normal" for="parking-3">3</label>
                        <input class="btn-check" type="radio" id="parking-4" name="parking" value="4">
                        <label class="btn btn-outline-secondary fw-normal" for="parking-4">4</label>
                    </div>
                </div>
                

                <label class="form-label" for="ap-description">Description </label>
                <textarea class="form-control" name="description" id="ap-description" rows="5" placeholder="Description de votre bien"></textarea><span class="form-text">1500 characters left</span>
            </section>
            <!-- Price-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="price">
                <h2 class="h4 mb-4"><i class="fi-cash text-primary fs-5 mt-n1 me-2"></i>Prix</h2>
                <label class="form-label" for="ap-price">Prix <span class="text-danger">*</span></label>
                <div class="d-sm-flex">

                    <input class="form-control w-100 me-2 mb-2" name="budget" placeholder="Prix" type="number" >
                    <select class="form-select w-50 mb-2">
                        <option value="day">par jour</option>
                        <option value="week">par semaine</option>
                        <option value="month" selected>par mois</option>
                        <option value="year">par an</option>
                    </select>
                </div>
            </section>
           
            <!-- Photos / video-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" >
                <h2 class="h4 mb-4"><i class="fi-image text-primary fs-5 mt-n1 me-2"></i>Photos</h2>
                {{-- <div class="alert alert-info mb-4" role="alert">
                    <div class="d-flex"><i class="fi-alert-circle me-2 me-sm-3"></i>
                        <p class="fs-sm mb-1">La taille maximale de la photo est de 8 Mo. Formats : jpeg, jpg, png. Mettez la photo principale en premier.</p>
                    </div>
                </div> --}}
                <input type="file" name="images[]" class="file-uploader file-uploader-grid" multiple accept="image/*">
{{--                 <input class="file-uploader file-uploader-grid" type="file" name="images[]" multiple accept="image/*">
 --}}{{--                 <input class="file-uploader file-uploader-grid" name="images[]" type="file" multiple data-max-file-size="10MB" accept="image/png, image/jpeg, video/mp4, video/mov" data-label-idle="&lt;div class=&quot;btn btn-primary mb-3&quot;&gt;&lt;i class=&quot;fi-cloud-upload me-1&quot;&gt;&lt;/i&gt;Upload photos / video&lt;/div&gt;&lt;br&gt;or drag them in">
 --}}             </section>
            <!-- Contacts-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="contacts">
                <h2 class="h4 mb-4"><i class="fi-phone text-primary fs-5 mt-n1 me-2"></i>Contacts</h2>
               {{--  <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-fn">Prénom <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-fn"  placeholder="Prénom" required>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-sn">Nom <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-sn"  placeholder="Nom" required>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-email">Adresse e-mail<span class="text-danger">*</span></label>
                        <input class="form-control" name="email" type="text" id="ap-email"  placeholder="Adresse e-mail">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-phone">Numéro de téléphone <span class="text-danger">*</span></label>
                        <input class="form-control" name="phone_number" type="text" id="ap-phone"  placeholder="Numéro de téléphone">
                    </div>
                </div>

            </section>
            <!-- Action buttons -->
            <section class="d-sm-flex justify-content-between pt-2"><a class="btn btn-outline-primary btn-lg d-block mb-3 mb-sm-2" href="#preview-modal" data-bs-toggle="modal"><i class="fi-eye-on ms-n1 me-2"></i>Aperçu</a><button type="submit" class="btn btn-primary btn-lg d-block mb-2" >Sauvegarder </button></section>
        </form></div>
       
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



{{-- <script src="{{asset('front/assets/vendor/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/leaflet/dist/leaflet.js')}}"></script>
<script src="{{asset('front/assets/vendor/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/filepond/dist/filepond.min.js')}}"></script>
<script src="{{asset('front/assets/vendor/cleave.js/dist/cleave.min.js')}}"></script> --}}


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
