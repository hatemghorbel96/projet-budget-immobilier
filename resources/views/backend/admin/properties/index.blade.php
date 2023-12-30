@extends('main')

<div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
    <!-- Breadcrumb-->
    <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Accueil</a></li>
            <li class="breadcrumb-item"><a href="real-estate-account-info.html">Compte</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mes biens</li>
        </ol>
    </nav>
    <!-- Page content-->
    <div class="row">
        <!-- Sidebar-->
        @include('layouts.nav')
        <!-- Content-->

        <div class="col-lg-8 col-md-7 mb-5">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h1 class="h2 mb-0">Mes biens</h1><a class="fw-bold text-decoration-none" href="#"><i
                        class="fi-trash mt-n1 me-2"></i>Delete all</a>
            </div>
            <p class="pt-1 mb-4">Ici, vous pouvez voir vos offres immobilières et les modifier facilement.</p>
            <!-- Nav tabs-->
            <ul class="nav nav-tabs border-bottom mb-4" role="tablist">
                <li class="nav-item mb-3"><a class="nav-link active" href="#" role="tab"
                        aria-selected="true"><i class="fi-file fs-base me-2"></i>Published</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#" role="tab" aria-selected="false"><i
                            class="fi-file-clean fs-base me-2"></i>Drafts</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#" role="tab" aria-selected="false"><i
                            class="fi-archive fs-base me-2"></i>Archived</a></li>
            </ul>
            @foreach ($properties as $p)
                <!-- Item-->
                        @php
                            $firstImage = $p->images->first();
                        @endphp
                <div class="card card-hover card-horizontal border-0 shadow-sm mb-4"><a class="card-img-top"
                        href="{{route('bien.show',$p->id)}}"
                        style="background-image: url({{ asset($firstImage->path) }});">
                        <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                                class="d-table badge bg-info">New</span></div>
                    </a>
                    <div class="card-body position-relative pb-3">
                        <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
                            <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button"
                                id="contextMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="fi-dots-vertical"></i></button>
                            <ul class="dropdown-menu my-1" aria-labelledby="contextMenu1">
                                <li>
                                    <button class="dropdown-item" type="button"><i
                                            class="fi-edit opacity-60 me-2"></i>Modifier</button>
                                </li>

                                <li>
                                    <button class="dropdown-item" type="button"><i
                                            class="fi-trash opacity-60 me-2"></i>Supprimer</button>
                                </li>
                            </ul>
                        </div>
                        <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For {{$p->for}}</h4>
                        <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                                href="{{route('bien.show',$p->id)}}">{{$p->title}}</a></h3>
                        <p class="mb-2 fs-sm text-muted">{{$p->address}}, {{$p->location->name}}</p>
                        <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>{{$p->budget}} DT</div>
                        <div
                            class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap">
                            <span class="d-inline-block me-4 fs-sm">{{$p->rooms}}<i
                                    class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                                class="d-inline-block me-4 fs-sm">{{$p->bathroom}}<i
                                    class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                                class="d-inline-block fs-sm">{{$p->parking}}<i class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
