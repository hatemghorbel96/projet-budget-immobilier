@extends('main')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="container mt-5 mb-md-4 py-5">
    <div class="row">
     
    
        <div class="col-lg-8">
            <form action="{{ route('properties.update', ['id' => $property->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <!-- Breadcrumb-->
            <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Accueil</a></li>
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
                    <input class="form-control" type="text" name="title" placeholder="Titre" value="{{$property->title}}"  required><span class="form-text"></span>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-category">Catégorie <span class="text-danger">*</span></label>
                        <select class="form-select" name="for" id="ap-category" required>
                            <option name="for" value="" disabled hidden>Choisir une catégorie</option>
                            <option @if($property->for == 'rent') selected @endif value="À Louer">Louer</option>
                            <option @if($property->for == 'sale') selected @endif value="À Vendre">Vendre</option>
                        </select>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-type">Bien Type:  <span class="text-danger">*</span></label>
                        <select class="form-select" id="ap-type" required name="bientype_id">
                                <option value="" disabled hidden>Choisir type bien</option>
                            @foreach($bientypes as $bientype)
                                <option value="{{ $bientype->id }}" {{ $property->bientype_id == $bientype->id ? 'selected' : '' }}>{{ $bientype->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </section>
            <!-- Location-->
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="location">
                <h2 class="h4 mb-4"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>Location</h2>
                <div class="row">
                   
                    <div class="col-sm-12 mb-3">
                        <label class="form-label" for="ap-city">Ville <span class="text-danger">*</span></label>
                        <select class="form-select" id="ap-city" name="location_id" required>
                            <option value="" disabled>Choisir ville</option>
                            @foreach($locations as $location)
                            <option value="{{ $location->id }}" {{ $property->location_id == $location->id ? 'selected' : '' }}>{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mb-3">
                        <label class="form-label" for="ap-district" >Adresse <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="address" id="ap-address" placeholder="Adresse" required value="{{$property->address}}">
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label" for="ap-zip">Code postal  <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-zip" value="{{$property->codepostal}}" name="codepostal" placeholder="Code postal"  required>
                    </div>
                </div>

            </section>
       
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="details">
                <h2 class="h4 mb-4"><i class="fi-edit text-primary fs-5 mt-n1 me-2"></i>Détails de bien</h2>
                <div class="mb-4" style="max-width: 25rem;">
                    <label class="form-label" for="ap-area">Surface totale</label>
                    <input class="form-control" type="number" name="surface" id="ap-area" min="20" placeholder="Surface totale" value="{{$property->surface}}" required>
                </div>
                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Chambres</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bedrooms">
                        <input class="btn-check" type="radio" id="studio" name="rooms" value="0" @if($property->rooms == 0) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="studio">Studio</label>
                
                        <input class="btn-check" type="radio" id="bedrooms-1" name="rooms" value="1" @if($property->rooms == 1) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-1">1</label>
                
                        <input class="btn-check" type="radio" id="bedrooms-2" name="rooms" value="2" @if($property->rooms == 2) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-2">2</label>
                
                        <input class="btn-check" type="radio" id="bedrooms-3" name="rooms" value="3" @if($property->rooms == 3) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-3">3</label>
                
                        <input class="btn-check" type="radio" id="bedrooms-4" name="rooms" value="4" @if($property->rooms == 4) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-4">4</label>
                
                        <input class="btn-check" type="radio" id="bedrooms-5" name="rooms" value="5" @if($property->rooms == 5) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="bedrooms-5">5+</label>
                    </div>
                </div>
                

                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Salles de bains</label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bathrooms">
                        <input class="btn-check" type="radio" id="bathrooms-1" name="bathroom" value="1" @if($property->bathroom == 1) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-1">1</label>
                        <input class="btn-check" type="radio" id="bathrooms-2" name="bathroom" value="2" @if($property->bathroom == 2) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-2">2</label>
                        <input class="btn-check" type="radio" id="bathrooms-3" name="bathroom" value="3" @if($property->bathroom == 3) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-3">3</label>
                        <input class="btn-check" type="radio" id="bathrooms-4" name="bathroom" value="4" @if($property->bathroom == 4) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="bathrooms-4">4</label>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label d-block fw-bold mb-2 pb-1">Parking </label>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of parking spots">
                        <input class="btn-check" type="radio" id="parking-1" name="parking" value="1" @if($property->parking == 1) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="parking-1">1</label>
                        <input class="btn-check" type="radio" id="parking-2" name="parking" value="2" @if($property->parking == 2) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="parking-2">2</label>
                        <input class="btn-check" type="radio" id="parking-3" name="parking" value="3" @if($property->parking == 3) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="parking-3">3</label>
                        <input class="btn-check" type="radio" id="parking-4" name="parking" value="4" @if($property->parking == 4) checked @endif>
                        <label class="btn btn-outline-secondary fw-normal" for="parking-4">4</label>
                    </div>
                </div>


                <label class="form-label" for="ap-description">Description </label>
                <textarea class="form-control" value="{{$property->description}}" name="description" id="ap-description" rows="5" placeholder="Description de votre bien"></textarea><span class="form-text"></span>
            </section>
         
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="price">
                <h2 class="h4 mb-4"><i class="fi-cash text-primary fs-5 mt-n1 me-2"></i>Prix</h2>
                <label class="form-label" for="ap-price">Prix <span class="text-danger">*</span></label>
                <div class="d-sm-flex">

                    <input class="form-control w-100 me-2 mb-2" name="budget" placeholder="Prix" type="number" value="{{$property->budget}}">
                    
                </div>
            </section>

          
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="photos">
                <div class="row">

               
                @foreach($property->images as $image)
                <div class="col-3">
                    <div class="existing-image">
                        <img src="{{ asset($image->path) }}" alt="Existing Image" class="w-50 h-50">
                        <input type="checkbox" name="delete_images[]" value="{{ $image->id }}"> Delete
                    </div></div>
                @endforeach
            </div>

                <h2 class="h4 mb-4"><i class="fi-image text-primary fs-5 mt-n1 me-2"></i>Upload plus d'images</h2>      
                <input type="file" name="images[]" class="file-uploader file-uploader-grid" multiple accept="image/*">
            
            </section>
            
            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="contacts">
                <h2 class="h4 mb-4"><i class="fi-phone text-primary fs-5 mt-n1 me-2"></i>Contacts</h2>
               
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-email">Adresse e-mail<span class="text-danger">*</span></label>
                        <input class="form-control" name="email" type="text" id="ap-email"  placeholder="Adresse e-mail" value="{{$property->email}}">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label" for="ap-phone">Numéro de téléphone <span class="text-danger">*</span></label>
                        <input class="form-control" name="phone_number" type="text" id="ap-phone"  placeholder="Numéro de téléphone" value="{{$property->phone_number}}">
                    </div>
                </div>

            </section>
            <!-- Action buttons -->
            <section class="d-sm-flex justify-content-between pt-2">
              <button type="submit" class="btn btn-primary btn-lg d-block mb-2" >Sauvegarder </button></section>
        </form></div>

        <!-- Progress of completion-->
        <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
            <div class="sticky-top pt-5">

                <h6 id="progress-text" class="pt-5 mt-3 mb-2">0% content filled</h6>
                <div id="progress-container" class="progress mb-4" style="height: .25rem;">
                    <div id="progress-bar" class="progress-bar bg-warning" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="list-unstyled">
                    <li class="step-item d-flex align-items-center" data-step="basic-info"><a class="nav-link fw-normal ps-1 p-0" href="#basic-info" data-scroll data-scroll-offset="20">Basic info</a></li>
                    <li class="step-item d-flex align-items-center" data-step="location"><a class="nav-link fw-normal ps-1 p-0" href="#location" data-scroll data-scroll-offset="20">Location</a></li>
                    <li class="step-item d-flex align-items-center" data-step="details"><a class="nav-link fw-normal ps-1 p-0" href="#details" data-scroll data-scroll-offset="20">Property details</a></li>
                    <li class="step-item d-flex align-items-center" data-step="price"><a class="nav-link fw-normal ps-1 p-0" href="#price" data-scroll data-scroll-offset="20">Price</a></li>
                    <li class="step-item d-flex align-items-center" data-step="photos"><a class="nav-link fw-normal ps-1 p-0" href="#photos" data-scroll data-scroll-offset="20">Photos / video</a></li>
                    <li class="step-item d-flex align-items-center" data-step="contacts"><a class="nav-link fw-normal ps-1 p-0" href="#contacts" data-scroll data-scroll-offset="20">Contacts</a></li>

                </ul>
            </div>
        </aside>
    </div>
</div>




<script>
    $(document).ready(function () {
        $(':input:visible:enabled').not('[type="hidden"]').not('button').each(function(index, element) {
            console.log(index, element);
        });

        $(':input:visible:enabled').not('button').change(updateProgressBar);

      
        $(':input:visible:enabled').not('button').change();

        function updateProgressBar() {
            var totalFields = $(':input:visible:enabled').not('[type="hidden"]').not('button').length;
            var totalFields = totalFields- 11;
            var filledFields = $(':input:visible:enabled').not('[type="hidden"]').not('button').filter(function () {
                if ($(this).is(':checkbox') || $(this).is(':radio')) {
                    return $(this).prop('checked');
                } else {
                    return $(this).val().trim() !== '';
                }
            }).length;

            var progress = (filledFields / totalFields) * 100;
            progress = Math.round(progress);
            $('#progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);

      
        $('#progress-text').text(progress + '% content filled');

        if (progress >= 0 && progress < 40) {
            $('#progress-bar').removeClass('bg-warning bg-success').addClass('bg-danger');
         
        } else if (progress >= 40 && progress < 100) {
            $('#progress-bar').removeClass('bg-danger bg-success').addClass('bg-warning');
        
        } else if (progress === 100) {
            $('#progress-bar').removeClass('bg-danger bg-warning').addClass('bg-success');
          
           
        }
    }

    
    });
</script>
