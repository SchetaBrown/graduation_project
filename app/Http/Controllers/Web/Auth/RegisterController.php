<?php

namespace App\Http\Controllers\Web\Auth;

use App\Models\Manager;
use App\Models\Participant;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return inertia('auth/Register');
    }

    public function store(RegisterRequest $request)
    {
        try {
            $user = User::create([
                'email' => $request->email,
                'password' => $request->password,
            ]);

            switch ($request->role_id) {
                case 1: {
                    Participant::create([
                        'surname' => $request->surname,
                        'name' => $request->name,
                        'patronymic' => $request->patronymic,
                        'cours_number' => $request->cours_number,
                        'user_id' => $user->id,
                    ]);
                }
                case 2: {
                    Manager::create([
                        'surname' => $request->surname,
                        'name' => $request->name,
                        'patronymic' => $request->patronymic,
                        'phone' => $request->phone,
                        'user_id' => $user->id,
                        'education_school_id' => $request->education_school_id,
                    ]);
                }
            }

            Auth::login($user);

            return redirect()->intended();
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
