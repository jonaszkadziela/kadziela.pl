<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function change(Request $request, string $code): RedirectResponse
    {
        $request
            ->merge(['code' => $code])
            ->validate([
                'code' => 'required|in:' . join(',', config('app.languages')),
            ]);

        Session::put('language', $request['code']);

        return redirect()->back();
    }
}
