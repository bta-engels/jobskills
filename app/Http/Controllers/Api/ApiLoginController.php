<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ApiLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ]);

        $user = Customer::whereEmail($request->email)->first();

        if ( ! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Login Daten sind nicht korrekt.'],
            ]);
        }

        $token = $user->createToken($user->email . '-' .uniqid(), ['write'])->plainTextToken;
        // json rückgabe: name, email, token
        $response = [
            'name'  => $user->name,
            'email' => $user->email,
            'token' => $token,
        ];

        return response()->json($response);
    }
}
