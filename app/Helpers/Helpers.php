<?php
if (!function_exists('user')) {

/**
 * Return current logged in user
 */
function user()
{
    if (session()->has('user')) {
        return session('user');
    }

    if (auth()->id()) {

        if (session()->has('company')) {
            $user = User::where('user_auth_id', auth()->id())->where('status', 'active')->first();
        }
        else {
            $user = DB::table('users')->where('user_auth_id', auth()->id())->where('status', 'active')->first();
        }

        if ($user) {
            session(['user' => $user]);
            return session('user');
        }
    }

    return null;
}

}