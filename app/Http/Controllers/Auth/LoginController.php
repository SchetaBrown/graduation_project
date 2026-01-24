<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Exception;
use App\Models\User;
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
        try {
            $user = User::where('email', $request->email)->first();

            if (!$user || Hash::check($request->password, $user->password)) {
                throw new \Error('Неверные учетные данные');
            }

            Auth::login($user);

            if ($user->role->role === 'администратор') {
                return redirect()->route('admin.index');
            }

            return redirect()->route('index');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
