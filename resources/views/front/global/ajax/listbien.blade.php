                   
                   @foreach ($properties as $p)
                        <div class="col-sm-6 col-xl-4">
                            <div class="card shadow-sm card-hover border-0 h-100">
                                <div class="tns-carousel-wrapper card-img-top card-img-hover">
                                    <a class="img-overlay" href="{{ route('bien.show', $p->id) }}"></a>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3"><span
                                            class="d-table badge bg-success mb-1">{{$p->bientype->name}}</span><span
                                            class="d-table badge bg-info">New</span></div>
                                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                        <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle"
                                            type="button" data-bs-toggle="tooltip" data-bs-placement="left"
                                            title="Add to Wishlist"><i class="fi-heart"></i></button>
                                    </div>
                                    <div class="{{-- tns-carousel-inner --}}">
                                        @php
                                            $firstImage = $p->images->first();
                                        @endphp
                                       {{--  @foreach ($p->images as $image) --}}
                                            <img src="{{ asset($firstImage->path) }}" alt="Image">
                                       {{--  @endforeach --}}
                                    </div>
                                </div>
                                <div class="card-body position-relative pb-3">
                                    <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For {{ $p->for }}
                                    </h4>
                                    <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                                            href="{{ route('bien.show', $p->id) }}">{{ $p->title }} | 40 sq.m</a></h3>
                                    <p class="mb-2 fs-sm text-muted">{{ $p->address }}, {{ $p->location->name }}</p>
                                    <div class="fw-bold"><i
                                            class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>{{ $p->budget }}
                                        DT</div>
                                </div>
                                <div
                                    class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap">
                                    <span class="d-inline-block mx-1 px-2 fs-sm">{{$p->rooms}}<i
                                            class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                                        class="d-inline-block mx-1 px-2 fs-sm">{{$p->bathroom}}<i
                                            class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                                        class="d-inline-block mx-1 px-2 fs-sm">{{$p->parking}}<i
                                            class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span></div>
                            </div>
                        </div>
                    @endforeach
                    <nav class="border-top pb-md-4 pt-4 mt-2" aria-label="Pagination">
                    {!! $properties->links('vendor.pagination.bootstrap-5') !!}
                    </nav>


                    