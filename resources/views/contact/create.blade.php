@extends('layout.main')

@section('content')
    <section>
        <div class="login-form glass-effect card d-flex justify-content-center text-white">

            <h1>Daftar Akun</h1>

            <form action="{{ url('register') }}" method="POST">
                @csrf
                <div class="input-email">
                    <br>Nama Pengguna</br>
                    <input class="input-field glass-effect" name="nama_user" type="text" placeholder="Masukan Nama Lengkap"
                        @required(true)>
                </div>

                <div class="input-email">
                    <br>Email Address</br>
                    <input class="input-field glass-effect" name="email_user" type="email" placeholder="Masukan Email"
                        @required(true)>
                </div>
                <div class="input-password ">
                    <br>Password</br>
                    <input class="input-field glass-effect" name="password_user" type="password"
                        placeholder="Masukan Password" @required(true)>
                </div>
                <div class="login-button d-flex justify-content-center mt-3 mb-2">
                    <input name="submit" id="" class="submit btn btn-sm" type="submit" value="Daftar"
                        @required(true)>
                </div>
                <div>
                    Atau
                    <a href="{{ url('login') }}" class="badge ">Login</a>
                </div>

            </form>

        </div>
    </section>
@endsection
