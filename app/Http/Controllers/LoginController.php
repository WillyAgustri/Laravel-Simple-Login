<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        return view('contact.login');
    }

    public function check(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required','email',
            'password' =>'required',
        ],

        // ** Keterangan Input Kosong **

        ['email.required' => 'Harap Masukan Email Anda!',
        'password.required' => 'Harap Masukan Password Anda!',
        ]
        );




        if (Auth::attempt($credentials))
        {
            return view('contact.welcome');
        }

        else{
            return back()->withErrors([
                'email' => 'Email yang anda masukan salah!',
                'password' => 'Password yang anda masukan salah!',
            ])->withInput();
        }


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Login $login)
    {
        //
    }
}
