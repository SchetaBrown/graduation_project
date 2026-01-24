<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        // dd($request->routeIs('admin.*'));

        return Inertia::render('admin/Index', [
            'events' => $this->eventRepository->getAllEvents()
        ]);
    }
}
