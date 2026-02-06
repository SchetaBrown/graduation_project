<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        return Inertia::render('admin/Index', [
            'events' => []
        ]);
    }
}
