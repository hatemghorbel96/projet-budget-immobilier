@extends('main')
<main class="page-wrapper">
    <!-- Navbar-->

    <!-- Page content-->
    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
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
                <div class="mb-2 pt-1"></div>



                <div class="border rounded-3 p-3 mb-4" id="personal-info">
                    <!-- Name-->
                    <div class="border-bottom pb-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="pe-2">
                                <label class="form-label fw-bold">Nom et prénom</label>
                                <div id="name-value">Annette Black</div>
                            </div>
                            <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#name-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                        </div>
                        <div class="collapse" id="name-collapse" data-bs-parent="#personal-info">
                            <input class="form-control mt-3" type="text" data-bs-binded-element="#name-value" data-bs-unset-value="Not specified" value="Annette Black">
                        </div>
                    </div>
                    <!-- Email-->
                    <div class="border-bottom pb-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="pe-2">
                                <label class="form-label fw-bold">Adresse e-mail</label>
                                <div id="email-value">annette_black@email.com</div>
                            </div>
                            <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#email-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                        </div>
                        <div class="collapse" id="email-collapse" data-bs-parent="#personal-info">
                            <input class="form-control mt-3" type="email" data-bs-binded-element="#email-value" data-bs-unset-value="Not specified" value="annette_black@email.com">
                        </div>
                    </div>
                    <!-- Phone number-->
                    <div class="border-bottom pb-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="pe-2">
                                <label class="form-label fw-bold">Numéro de téléphone</label>
                                <div id="phone-value">(302) 555-0107</div>
                            </div>
                            <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#phone-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                        </div>
                        <div class="collapse" id="phone-collapse" data-bs-parent="#personal-info">
                            <input class="form-control mt-3" type="text" data-bs-binded-element="#phone-value" data-bs-unset-value="Not specified" value="(302) 555-0107">
                        </div>
                    </div>
                    <!-- Address-->
                    <div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="pe-2">
                                <label class="form-label fw-bold">Addresse</label>
                                <div id="address-value">Not specified</div>
                            </div>
                            <div data-bs-toggle="tooltip" title="Edit"><a class="nav-link py-0" href="#address-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                        </div>
                        <div class="collapse" id="address-collapse" data-bs-parent="#personal-info">
                            <input class="form-control mt-3" type="text" data-bs-binded-element="#address-value" data-bs-unset-value="Not specified" placeholder="Enter address">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
