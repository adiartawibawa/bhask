<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\Authorizable;
use Illuminate\Http\Request;

class ApiTokenController extends Controller
{
    // use Authorizable;

    public function __construct()
    {
        parent::__construct();
    }

    public function show(Request $request)
    {
        view()->share('currentAdminMenu', 'api-token');

        return view('api.index', [
            'request' => $request,
            'user' => $request->user()
        ]);

    }
}
