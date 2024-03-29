@extends('layout.main')

@section('content')
    <section>
        <div class="login-form glass-effect card d-flex justify-content-center text-white">

            <h1>Masuk Akun</h1>

            <form action="{{ route('check') }}" method="POST" name="check">
                {{ method_field('post') }}
                @csrf

                <div class="input-email">
                    <br>Email Address</br>
                    <input class="form-control @error('email') is-invalid @enderror input-field glass-effect" name="email"
                        type="email" placeholder="Masukan Email" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-password">
                    <br>
                    <label for="password">
                        Password
                    </label>
                    </br>
                    <input id="password"
                        class="form-control @error('password') is-invalid @enderror input-field glass-effect"
                        name="password" type="password" placeholder="Masukan Password" value="{{ old('password') }}">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>





                <div class="login-button d-flex justify-content-center mt-3 mb-2">
                    <input name="submit" class="submit btn btn-sm" type="submit" value="Login">
                </div>
                <div>
                    Atau
                    <a href="{{ url('/') }}" class="badge ">Daftar</a>
                </div>

            </form>

        </div>
    </section>
@endsection
