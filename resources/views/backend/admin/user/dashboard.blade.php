@extends('main')


<link rel="stylesheet" media="screen"
    href="{{ asset('front/assets/vendor/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('front/assets/vendor/filepond/dist/filepond.min.css') }}" />

<main class="page-wrapper">
    <!-- Navbar-->
    <section class="container  my-5 pb-lg-4">
    <!-- Page content-->
    <div class="container pt-5 pb-10 pb-lg-4 mt-5 mb-10">
        <!-- Breadcrumb-->
        <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Accueil</a></li>
                <li class="breadcrumb-item"><a href="real-estate-account-info.html">Compte</a></li>
                <li class="breadcrumb-item active" aria-current="page">Informations personnelles</li>
            </ol>
        </nav>
        <!-- Page content-->
        <div class="row">
            <!-- Sidebar-->
            @include('layouts.nav')
            <!-- Content-->

            <div class="col-lg-8 col-md-7 mb-5">
                <h1 class="h2">Informations personnelles</h1>
                <div class="mb-4 pt-1">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                    <form method="post" action="{{ route('update-profile') }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="border rounded-3 p-3 mb-4 ">
                            <div class="row pb-6 h-25">
                                    <input type="file" name="image" id="">
                               {{--  <input class="file-uploader bg-secondary" type="file" name="image"                                                                   
                                    data-style-panel-layout="compact" data-image-preview-height="160"
                                    data-image-crop-aspect-ratio="1:1" data-image-resize-target-width="200"
                                    data-image-resize-target-height="200"> --}}
                            </div>

                        </div>
                        <div class="border rounded-3 p-3 mb-4 " id="personal-info">



                            <!-- Name-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold">Nom et prénom</label>
                                        <div id="name-value">{{ auth()->user()->name }}</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#name-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="name-collapse" data-bs-parent="#personal-info">
                                    <input class="form-control mt-3" name="name" type="text"
                                        data-bs-binded-element="#name-value" data-bs-unset-value="Not specified"
                                        value="{{ auth()->user()->name }}">
                                </div>
                            </div>
                            <!-- Email-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold">Adresse e-mail</label>
                                        <div id="email-value">{{ auth()->user()->email }}</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#email-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="email-collapse" data-bs-parent="#personal-info">
                                    <input class="form-control mt-3" type="email" name="email"
                                        data-bs-binded-element="#email-value" data-bs-unset-value="Not specified"
                                        value="{{ auth()->user()->email }}">
                                </div>
                            </div>
                            <!-- Phone number-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold">Numéro de téléphone</label>
                                        <div id="phone-value">{{ auth()->user()->telephone }}</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#phone-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="phone-collapse" data-bs-parent="#personal-info">
                                    <input class="form-control mt-3" type="text" name="telephone"
                                        data-bs-binded-element="#phone-value" data-bs-unset-value="Not specified"
                                        value="{{ auth()->user()->telephone }}">
                                </div>
                            </div>
                            <!-- Address-->
                            <div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold">Addresse</label>
                                        <div id="address-value">{{ auth()->user()->address }}</div>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0"
                                            href="#address-collapse" data-bs-toggle="collapse"><i
                                                class="fi-edit"></i></a>
                                    </div>
                                </div>
                                <div class="collapse" id="address-collapse" data-bs-parent="#personal-info">
                                    <input class="form-control mt-3" name="address" type="text"
                                        data-bs-binded-element="#address-value" data-bs-unset-value="Not specified"
                                        placeholder="Enter address" value="{{ auth()->user()->address }}">
                                </div>
                            </div>

                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Enregister</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</main>

<script
    src="{{ asset('front/assets/vendor/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js') }}">
</script>
<script
    src="{{ asset('front/assets/vendor/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js') }}">
</script>
<script src="{{ asset('front/assets/vendor/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.min.js') }}">
</script>
<script src="{{ asset('front/assets/vendor/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.min.js') }}">
</script>
<script
    src="{{ asset('front/assets/vendor/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js') }}">
</script>
<script src="{{ asset('front/assets/vendor/filepond/dist/filepond.min.js') }}"></script>
