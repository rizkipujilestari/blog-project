<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class UserComposer
{
    public function compose(View $view)
    {
        if (Auth::check()) {
            $view->with('auth_user', Auth::user());
        }
    }
}
