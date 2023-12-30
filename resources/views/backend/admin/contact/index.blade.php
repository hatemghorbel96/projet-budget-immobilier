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
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h1 class="h2 mb-0">Contacts</h1><a class="fw-bold text-decoration-none" href="#"><i class="fi-trash mt-n1 me-2"></i>Delete all</a>
            </div>
            <p class="pt-1 mb-4">Ici, vous pouvez voir vos offres immobilières et les modifier facilement.</p>
            <!-- Nav tabs-->
           
            <!-- Item-->
            <!-- Basic table -->
<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
         
          <th>First Name</th>
          <th>Telephone</th>
          <th>Email</th>
           <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contacts as $c)
        <tr>
            
            <td>{{$c->name}}</td>
            <td>{{$c->telephone}}</td>
            <td>{{$c->email}}</td>
            <td>
                
                    <button class="btn btn-icon btn-light btn-xs rounded-circle shadow-sm" type="button"
                        id="contextMenu1" data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="fi-dots-vertical"></i></button>
                    <ul class="dropdown-menu my-1" aria-labelledby="contextMenu1">
                        <li>
                            <button class="dropdown-item" type="button"><i
                                    class="fi-eye opacity-60 me-2"></i>View</button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button"><i
                                    class="fi-edit opacity-60 me-2"></i>Modifier</button>
                        </li>

                        <li>
                            <button class="dropdown-item" type="button"><i
                                    class="fi-trash opacity-60 me-2"></i>Supprimer</button>
                        </li>
                    </ul>
                
            </td>
          </tr>
        @endforeach
       
       
      </tbody>
    </table>
  </div>
        </div>
    </div>
</div>
