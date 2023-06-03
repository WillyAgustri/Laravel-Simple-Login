@extends('layout.main')

@section('content')
    <section>
        <div class="login-form glass-effect card d-flex justify-content-center text-white">

            <h1>Daftar Akun</h1>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-email">
                    <br>Nama Pengguna</br>
                    <input class="input-field glass-effect" name="nama_user" type="text" placeholder="Masukan Nama Lengkap">
                </div>

                <div class="input-email">
                    <br>Email Address</br>
                    <input class="input-field glass-effect" name="email_user" type="text" placeholder="Masukan Email">
                </div>
                <div class="input-password ">
                    <br>Password</br>
                    <input class="input-field glass-effect" name="password_user" type="text"
                        placeholder="Masukan Password">
                </div>
                <div class="login-button d-flex justify-content-center mt-3 mb-2">
                    <input name="submit" id="" class="submit btn btn-sm" type="submit" value="Daftar">
                </div>
                <div>
                    Atau
                    <a href="{{ url('login') }}" class="badge ">Login</a>
                </div>

            </form>

        </div>
    </section>
@endsection
