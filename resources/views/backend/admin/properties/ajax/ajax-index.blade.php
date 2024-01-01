@foreach ($properties as $p)
    <!-- Item-->
    @php
        $firstImage = $p->images->first();
    @endphp
    <div class="card card-hover card-horizontal border-0 shadow-sm mb-4"><a class="card-img-top"
            href="{{ route('bien.show', $p->id) }}" style="background-image: url({{ asset($firstImage->path) }});">
            <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">New</span></div>
        </a>
        <div class="card-body position-relative pb-3">
            <div class="dropdown position-absolute zindex-5 top-0 end-0 mt-3 me-3">
                <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button" id="contextMenu1"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fi-dots-vertical"></i></button>
                <ul class="dropdown-menu my-1" aria-labelledby="contextMenu1">
                    <li>
                        <button class="dropdown-item" type="button"><i
                                class="fi-edit opacity-60 me-2"></i>Modifier</button>
                    </li>

                    <li>
                        <button class="dropdown-item delete-property" type="button" data-property-id="{{ $p->id }}"><i
                                class="fi-trash opacity-60 me-2"></i>Supprimer</button>
                    </li>
                </ul>
            </div>
            <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">For {{ $p->for }}</h4>
            <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link"
                    href="{{ route('bien.show', $p->id) }}">{{ $p->title }}</a></h3>
            <p class="mb-2 fs-sm text-muted">{{ $p->address }}, {{ $p->location->name }}</p>
            <div class="fw-bold"><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>{{ $p->budget }} DT
            </div>
            <div
                class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap">
                <span class="d-inline-block me-4 fs-sm">{{ $p->rooms }}<i
                        class="fi-bed ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block me-4 fs-sm">{{ $p->bathroom }}<i
                        class="fi-bath ms-1 mt-n1 fs-lg text-muted"></i></span><span
                    class="d-inline-block fs-sm">{{ $p->parking }}<i
                        class="fi-car ms-1 mt-n1 fs-lg text-muted"></i></span>
            </div>
        </div>
    </div>
@endforeach
<nav class="border-top pb-md-4 pt-4 mt-2" aria-label="Pagination">
    {!! $properties->links('vendor.pagination.bootstrap-5') !!}
</nav>
