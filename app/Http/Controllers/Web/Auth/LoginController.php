<?php

namespace App\Http\Controllers\Web\Auth;

use Auth;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function create()
    {
        return inertia('auth/Login');
    }
    public function store(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Неверные учетные данные');
        }

        Auth::login($user);

        if ($user->role->role === 'администратор') {
            return redirect()->route('admin.index');
        }

        return redirect()->route('index');
    }
}
