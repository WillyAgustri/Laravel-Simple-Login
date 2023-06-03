@extends('layout.main')

@section('content')
    <section>
        <div class="login-form glass-effect card d-flex justify-content-center text-white">

            <h1>Masuk Akun</h1>

            <form action="">
                @csrf
                <div class="input-email">
                    <br>Email Address</br>
                    <input class="input-field glass-effect" type="text" placeholder="Masukan Email">
                </div>
                <div class="input-password ">
                    <br>Password</br>
                    <input class="input-field glass-effect" type="text" placeholder="Masukan Password">
                </div>
                <div class="login-button d-flex justify-content-center mt-3 mb-2">
                    <input name="submit" id="" class="submit btn btn-sm" type="button" value="Login">
                </div>
                <div>
                    Atau
                    <a href="{{ url('/') }}" class="badge ">Daftar</a>
                </div>

            </form>

        </div>
    </section>
@endsection
