@extends('main')

<div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
    <!-- Breadcrumb-->
    <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="real-estate-home-v1.html">Accueil</a></li>
            <li class="breadcrumb-item"><a href="real-estate-account-info.html">Compte</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contacts</li>
        </ol>
    </nav>
    <!-- Page content-->
    <div class="row">
        <!-- Sidebar-->
        @include('layouts.nav')
        <!-- Content-->
        <div class="col-lg-8 col-md-7 mb-5">
            <h6 class="h6"><i class="fi-phone opacity-60 me-2"> {{ $c->telephone }} </i></h6>
            {{-- <p class="pt-1 mb-4">Reviews you’ve received will be visible both here and on your public profile.</p> --}}
            <!-- Nav tabs-->

            <!-- Tabs content-->
            <div class="tab-content pt-2">
                <!-- Reviews about you tab-->
                <div class="tab-pane fade show active" id="reviews-about-you" role="tabpanel">

                    <!-- Review-->
                    <div class="mb-4 pb-4 border-bottom">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="d-flex align-items-center pe-2">{{-- <img class="rounded-circle me-1" src="img/avatars/06.jpg" width="48" alt="Avatar"> --}}
                                <div class="ps-2">
                                    <h6 class="fs-base mb-0">{{ $c->name }}</h6>
                                    <p class="text-muted"> {{ $c->email }} </p>
                                    {{--                         <span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span>
 --}}
                                </div>
                            </div>
                            <span class="text-muted fs-sm">Il y'a
                                {{ $c->created_at->locale('fr')->diffForHumans(null, true, false) }}
                                - {{ $c->created_at->formatLocalized('%d %B %Y') }}
                            </span>
                        </div>
                        <p> {{ $c->message }} </p>
                        <div class="d-flex align-items-center fs-8">
                            <span class="badge bg-secondary">
                                Lu il y a {{ $c->updated_at->locale('fr')->diffForHumans(null, true, false) }}
                            </span>

                        </div>
                    </div>

                </div>
                <div align="right">
                    <a class="btn btn-info btn-sm" href="{{ route('contact.index') }}">
                        <span><i class="fi-arrow-left fs-8"></i>
                            Return
                        </span>
                    </a>
                </div>

                <!-- Reviews by you tab-->
                <div class="tab-pane fade" id="reviews-by-you" role="tabpanel">
                    <div
                        class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch justify-content-between pb-4 mb-2 mb-md-3">
                        <h3 class="h4 mb-sm-0">3 reviews</h3>
                        <div class="d-flex align-items-center ms-sm-4">
                            <label class="fs-sm me-2 pe-1 text-nowrap" for="review-sorting2"><i
                                    class="fi-arrows-sort text-muted mt-n1 me-2"></i>Sort by:</label>
                            <select class="form-select form-select-sm" id="review-sorting2">
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Popular</option>
                                <option>High rating</option>
                                <option>Low rating</option>
                            </select>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-4 pb-4 border-bottom">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="pe-2">
                                <h6 class="mb-0"> <span class="fw-normal text-muted me-1">For:</span>3-bed Apartment
                                </h6><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star"></i><i class="star-rating-icon fi-star"></i><i
                                        class="star-rating-icon fi-star"></i></span>
                            </div><span class="text-muted fs-sm">Jan 13, 2021</span>
                        </div>
                        <p>Elementum ut quam tincidunt egestas vitae elit, hendrerit. Ullamcorper nulla amet lobortis
                            elit, nibh condimentum enim. Aliquam felis nisl tellus sodales lectus dictum tristique proin
                            vitae. Odio fermentum viverra tortor quis.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like" type="button"><i class="fi-like"></i><span>(2)</span></button>
                            <div class="border-end me-1">&nbsp;</div>
                            <button class="btn-dislike" type="button"><i
                                    class="fi-dislike"></i><span>(1)</span></button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-4 pb-4 border-bottom">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="pe-2">
                                <h6 class="mb-0"> <span class="fw-normal text-muted me-1">For:</span>Terra Nova
                                    Apartments</h6><span class="star-rating"><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-half active"></i><i
                                        class="star-rating-icon fi-star"></i></span>
                            </div><span class="text-muted fs-sm">Dec 10, 2020</span>
                        </div>
                        <p>Vel dictum nunc ut tristique. Egestas diam amet, ut proin hendrerit. Dui accumsan at
                            phasellus tempus consequat dignissim tellus sodales.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like" type="button"><i class="fi-like"></i><span>(4)</span></button>
                            <div class="border-end me-1">&nbsp;</div>
                            <button class="btn-dislike" type="button"><i
                                    class="fi-dislike"></i><span>(2)</span></button>
                        </div>
                    </div>
                    <!-- Review-->
                    <div class="mb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="pe-2">
                                <h6 class="mb-0"> <span class="fw-normal text-muted me-1">For:</span>Duplex with
                                    Garage</h6><span class="star-rating"><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i><i
                                        class="star-rating-icon fi-star-filled active"></i></span>
                            </div><span class="text-muted fs-sm">Oct 24, 2020</span>
                        </div>
                        <p>Viverra nunc blandit sapien non imperdiet sit. Purus tempus elementum aliquam eu urna. A
                            aenean duis non egestas at libero porttitor integer eget. Sed dictum lobortis laoreet
                            gravida.</p>
                        <div class="d-flex align-items-center">
                            <button class="btn-like" type="button"><i class="fi-like"></i><span>(2)</span></button>
                            <div class="border-end me-1">&nbsp;</div>
                            <button class="btn-dislike" type="button"><i
                                    class="fi-dislike"></i><span>(0)</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
