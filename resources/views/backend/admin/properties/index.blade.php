@extends('main')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <h1 class="h2 mb-0">Mes biens</h1>{{-- <a class="fw-bold text-decoration-none" href="#"><i
                        class="fi-trash mt-n1 me-2"></i>Delete all</a> --}}
            </div>
            <p class="pt-1 mb-4">Ici, vous pouvez voir vos offres immobilières et les modifier facilement.</p>
            <!-- Nav tabs-->
            {{-- <ul class="nav nav-tabs border-bottom mb-4" role="tablist">
                <li class="nav-item mb-3"><a class="nav-link active" href="#" role="tab"
                        aria-selected="true"><i class="fi-file fs-base me-2"></i>Published</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#" role="tab" aria-selected="false"><i
                            class="fi-file-clean fs-base me-2"></i>Drafts</a></li>
                <li class="nav-item mb-3"><a class="nav-link" href="#" role="tab" aria-selected="false"><i
                            class="fi-archive fs-base me-2"></i>Archived</a></li>
            </ul> --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    <div class="border-0 mx-n3 p-3 mt-3">
                       <div class="row">
                            <div class="col"></div>
                            <div class="col-4">
                                <div class="input-group">
                                    <i class="fi-search position-absolute text-muted top-50 translate-middle-y ps-1 ms-2"></i>
                                    <input class="form-control text-sm rounded-2" type="text" placeholder="Recherche ..." id="kt_filter_search">
                                    </div>
                            </div>
                       </div>
                  </div>
                    <div id="table_data">
                        @include('backend.admin.properties.ajax.ajax-index')
                    </div>

           
        </div>

    </div>
</div>

<script>
    $('#kt_filter_search').on('input', function() {
        var searchTerm = $(this).val();

       
        var url = "{{ route('ajax.propertieback.fetch') }}";

        $.ajax({
            url: url,
            method: 'GET',
            data: {
                search: searchTerm
            },
            success: function(data) {
                $('#table_data').html(data);
            }
        });
    });


    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);

    });

    function fetch_data(page) {
       
        var url = "{{ route('ajax.propertieback.fetch') }}";

        $.ajax({
            url: url + "?page=" + page,
            method: 'GET',
           
            success: function(data) {
                $('#table_data').html(data);
            },
        });
    }
</script>

<script>
    $(document).on('click', '.delete-property', function() {
        var propertyId = $(this).data('property-id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('property.delete') }}",
                    method: 'DELETE',
                    data: {
                        property_id: propertyId
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire(
                                'Deleted!',
                                'Property has been deleted.',
                                'success'
                            );
                           
                            fetch_data(1);
                        } else {
                            Swal.fire(
                                'Error!',
                                'Failed to delete property. Please try again.',
                                'error'
                            );
                        }
                    }
                });
            }
        });
    });
</script>
