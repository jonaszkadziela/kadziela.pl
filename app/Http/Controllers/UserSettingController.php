<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserSettingController extends Controller
{
    public function language(Request $request, string $code): RedirectResponse
    {
        $request
            ->merge(['code' => $code])
            ->validate([
                'code' => 'required|in:' . join(',', config('app.languages')),
            ]);

        Session::put('language', $request['code']);

        return redirect()->back();
    }

    public function theme(Request $request, string $mode): RedirectResponse
    {
        $request
            ->merge(['mode' => $mode])
            ->validate([
                'mode' => 'required|in:dark,light',
            ]);

        Session::put('theme', $request['mode']);

        return redirect()->back();
    }
}
