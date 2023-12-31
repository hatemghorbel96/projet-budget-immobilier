@extends('main')

<div class="container mt-5 mb-md-4 pt-5">
    <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact </li>
        </ol>
    </nav>
</div>
<!-- Hero-->
<section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <div class="row align-items-md-start align-items-center gy-4">
        <div class="col-lg-5 col-md-6">
            <div class="mx-md-0 mx-auto mb-md-5 mb-4 pb-md-4 text-md-start text-center" style="max-width: 416px;">
                <h1 class="mb-4">Contact </h1>
                <p class="mb-0 fs-lg text-muted">Complétez le formulaire, et notre équipe tentera de vous répondre dans les 24 heures.</p>
            </div><img class="d-block mx-auto" src="{{asset('front/assets/img/real-estate/illustrations/contact.svg')}}" alt="Illustration">
        </div>
        <div class="col-md-6 offset-lg-1">
            <div class="card border-0 bg-secondary p-sm-3 p-2">
                <div class="card-body m-1">
                    <form class="needs-validation" novalidate action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label" for="name">Nom complet</label>
                            <input class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-tooltip mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="c-email">Votre adresse e-mail (Optional)</label>
                            <input class="form-control form-control-lg" name="email" id="c-email" type="email" required>
                            <div class="invalid-tooltip mt-1">S'il vous plaît, saisissez votre adresse e-mail.</div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="telephone">Numéro de téléphone</label>
                            <input class="form-control form-control-lg @error('telephone') is-invalid @enderror" id="telephone" name="telephone" type="tel" value="{{ old('telephone') }}" required>
                            @error('telephone')
                                <div class="invalid-tooltip mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control form-control-lg @error('message') is-invalid @enderror" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-tooltip mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="pt-sm-2 pt-1">
                            <button class="btn btn-lg btn-primary w-sm-auto w-100" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact cards-->
<section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
    <div class="row g-2">
        <!-- Item-->
        <div class="col-md-4"><a class="icon-box card card-hover h-100" href="mailto:example@email.com">
                <div class="card-body">
                    <div class="icon-box-media text-primary rounded-circle shadow-sm ">
                        <i class="fi-mail me-2 mt-3"></i>
                    </div><span class="d-block mb-1 text-body">Laissez-nous un mot</span>
                    <h3 class="h6 icon-box-title mb-0 opacity-90">budgetimmobilier.hammamet@gmail.com</h3>
                </div></a></div>
        <!-- Item-->
        <div class="col-md-4"><a class="icon-box card card-hover h-100" >
                <div class="card-body">
                    <div class="icon-box-media text-primary rounded-circle shadow-sm mb-3 d-flex justify-content-center align-items-center">
                        <i class="fi-device-mobile me-2 mt-3"></i>
                    </div>
                    
                    <span class="d-block mb-1 text-body">Appelez-nous à tout moment</span>
                    <h3 class="h6 icon-box-title mb-0 opacity-90">(+216) 27 300 446</h3>
                </div></a></div>
        <!-- Item-->
        <div class="col-md-4"><a class="icon-box card card-hover h-100" href="https://www.facebook.com/profile.php?id=100076515694659">
                <div class="card-body">
                    <div class="icon-box-media text-primary rounded-circle shadow-sm mb-3"><i class="fi-facebook me-2 mt-3"></i></div><span class="d-block mb-1 text-body">Suivez-nous</span>
                    <h3 class="h6 icon-box-title mb-0 opacity-90">Budget Immobilier</h3>
                </div></a></div>
    </div>
</section>
