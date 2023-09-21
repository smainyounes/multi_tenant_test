<?php

namespace App\Http\Controllers\LandLord;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // create tenant
        $tenant1 = Tenant::create(['id' => $request->company]);
        $tenant1->domains()->create(['domain' => $request->company .'.localhost']);

        // create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tenant_id' => $request->company,
        ]);

        // create the user

        $tenant1->run(function () use($user) {
            $user = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password,
                'user_type' => 'super_admin',
            ]);
        });

        return redirect('http://' . $request->company . '.' . env('APP_DOMAIN') . '/login');
    }

    public function login()
    {
        # code...
    }
}
