<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): JsonResponse|RedirectResponse
    {
        try {
            $request->authenticate();

            $request->session()->regenerate();

            if ($request->expectsJson()) {
                return response()->json(['redirect' => RouteServiceProvider::HOME]);
            } else {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        } catch (ValidationException $e) {
            if ($request->expectsJson()) {
                return response()->json(['errors' => $e->validator->errors()], 422);
            } else {
                throw $e;
            }
        }
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
