@extends('main')

<!-- Page content-->
<div class="bg-dark container-fluid d-flex h-100 align-items-center justify-content-center py-4 py-sm-5">
    <div class="card card-body" style="max-width: 940px">
        <div class="row mx-0 align-items-center">
            <div class="col-md-6 border-end-md p-2 p-sm-5">
                <h2 class="h3 mb-4 mb-sm-5">Bienvenue</h2><img class="d-block mx-auto" src="{{ asset('front/assets/img/signin-modal/signin.svg') }}" width="344" alt="Illustartion">
            </div>
            <div class="col-md-6 px-2 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form class="needs-validation" novalidate id="login-form">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label mb-2" for="email">Adresse e-mail</label>
                        <input class="form-control" id="email" placeholder="Votre adresse e-mail." type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" >
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <div class="password-toggle">
                            <input class="form-control" type="password" name="password" required autocomplete="current-password" id="password" placeholder="Votre mot de passe" required>
                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                            </label>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg w-100" type="button" onclick="submitForm()" id="login-btn">
                        <span id="btn-text">Connexion</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function submitForm() {
    var form = $('#login-form');
    var submitBtn = $('#login-btn');
    var btnText = $('#btn-text');

    $.ajax({
        url: "{{ route('login') }}",
        method: 'POST',
        data: form.serialize(),
        dataType: 'json',
        beforeSend: function () {
            submitBtn.prop('disabled', true);
            btnText.hide().after('<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span><label class="loading">Loading...</label>');
        },
        success: function (response) {
            Swal.fire({
                icon: 'success',
                title: 'Connexion réussie!',
                text: 'Redirection...',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
                submitBtn.prop('disabled', true);
                btnText.hide().after('Connexion...');
                submitBtn.removeClass('btn-primary').addClass('btn-success');
                window.location.href = response.redirect;
            });
        },
        error: function (xhr) {
            var errors = xhr.responseJSON.errors;

            if (errors) {
               
                $('.invalid-feedback').show('');
              
                $.each(errors, function (key, value) {
                    $('#' + key).after('<span class="invalid-feedback" role="alert"><strong>' + value[0] + '</strong></span>');
                });
                Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "Les informations d'identification invalides!",
                    });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "Quelque chose s'est mal passé !!",
                });
            }
        },
        complete: function () {
            submitBtn.prop('disabled', false);
            submitBtn.find('.spinner-border').remove();
            submitBtn.find('.loading').remove();
            btnText.show();
        },
    });
}

</script>