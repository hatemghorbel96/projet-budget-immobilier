@extends('main')
<main class="page-wrapper">
    <!-- Page content-->
    <div class="container-fluid d-flex h-100 align-items-center justify-content-center py-4 py-sm-5">
        <div class="card card-body" style="max-width: 940px">
            <div class="row mx-0 align-items-center">
                <div class="col-md-6 border-end-md p-2 p-sm-5">
                    <h2 class="h3 mb-4 mb-sm-5">Bienvenue</h2><img class="d-block mx-auto" src="{{ asset('front/assets/img/signin-modal/signin.svg') }}" width="344" alt="Illustartion">

                </div>
                <div class="col-md-6 px-2 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                    <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label mb-2" for="email" :value="__('Email')">Adresse e-mail</label>
                            <input class="form-control"  id="email" placeholder="Votre adresse e-mail." type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        </div>
                        <div class="mb-4">

                            <div class="password-toggle">
                                <input class="form-control" type="password"
                                       name="password"
                                       required autocomplete="current-password" id="password" placeholder="Votre mot de passe" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg w-100" type="submit">Connexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up">   </i></a>

