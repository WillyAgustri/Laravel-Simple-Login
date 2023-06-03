@extends('layout.main')


@section('content')
    <div class="card bg-secondary px-2 py-2">
        <h1 class="text-white">Berhasil Masuk Akun!</h1>
        <button class="btn btn-primary bg-primary">
            <span class="bg-primary">
                <a class="text-white text-decoration-none" href="{{ url('login') }}">Kembali ke halaman Login</a>
            </span>
        </button>
    </div>
@endsection
