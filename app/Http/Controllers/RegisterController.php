<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request-> validate([
            'nama_user' => 'required','min:3','max:30',
            'email_user'=> 'required','email',
            'password_user'=> 'required','min:8','confirmed'

        ]
        );

        if ($validate){

            // MMembuat Input Ke Database
            $input =$request->all();

            User::create([
                'name' => $input['nama_user'],
                'email'=> $input['email_user'],
                'password'=> Hash::make($input['password_user'])
            ]);
            return view('contact.hasCreate');



        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //

   }
}

