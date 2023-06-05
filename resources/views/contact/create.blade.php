@extends('layout.main')

@section('content')
    <section>
        <div class="login-form glass-effect card d-flex justify-content-center text-white">

            <h1>Daftar Akun</h1>

            <form class="d-flex justify-content-center flex-column text-white" action="{{ url('register') }}" method="POST">
                @csrf
                <div class="input-email">
                    <br>Nama Pengguna</br>
                    <input id="nama_user"
                        class="form-control input-field glass-effect  @error('nama_user') is-invalid @enderror"
                        name="nama_user" type="text" placeholder="Masukan Nama Lengkap" value="{{ old('nama_user') }}">
                    @error('nama_user')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div>

                    </div>
                </div>

                <div class="input-email">
                    <br>Email Address</br>
                    <input id="email_user"
                        class="form-control input-field glass-effect  @error('email_user') is-invalid @enderror"
                        name="email_user" type="email" placeholder="Masukan Email" value="{{ old('email_user') }}">
                    @error('email_user')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-password ">
                    <br>Password</br>
                    <input id="password_user"
                        class="form-control input-field glass-effect @error('password_user') is-invalid @enderror"
                        name="password_user" type="password" placeholder="Masukan Password"
                        value="{{ old('password_user') }}">
                    @error('password_user')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <br>
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input id="password_confirmation" class="form-control input-field glass-effect "
                        name="password_confirmation" type="password" placeholder="Masukan Ulang Password">
                </div>

                <div class="login-button d-flex justify-content-center mt-3 mb-2">
                    <input name="submit" id="" class="submit btn btn-sm " type="submit" value="Daftar">
                </div>
                <div>
                    Atau
                    <a href="{{ url('login') }}" class="badge ">Login</a>
                </div>

            </form>

        </div>
    </section>
@endsection
