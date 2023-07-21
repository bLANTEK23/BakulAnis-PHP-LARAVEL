@extends('layouts.main')
@section('container')
    @include('partials.overview')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="d-flex flex-column mb-5">
                <img src="/images/profile.png"
                    class="rounded-circle mx-auto mt-5" width="100px" height="100px" alt="avatar">
            </div>
        </div>
        @if (session()->has('info'))
            <div class="col-md-8 offset-md-2 mt-2 pt-4">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        {{ session('info') }}
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif
        <div class="col-md-8 offset-md-2">
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <h3 class="text-blue font-weight-bold mb-4">
                Informasi Akun
            </h3>
            <div class="form-group mb-3">
                <label for="name" class="text-title1 text-blue">Nama Admin</label>
                <input type="text" class="form-control mt-1 text-title1 text-blue @error('name') is-invalid @enderror"
                    id="name" name="name" placeholder="Nama Admin" required value="{{ auth()->user()->name }}" readonly>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="email" class="text-title1 text-blue">Email</label>
                <input type="email" class="form-control mt-1 text-title1 text-blue @error('email') is-invalid @enderror"
                    id="email" name="email" placeholder="Email" required value="{{ auth()->user()->email }}" readonly>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3 d-none">
                <label for="password" class="text-title1 text-blue">Password</label>
                <input type="password"
                    class="form-control mt-1 text-title1 text-blue @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="{{ url('/account/edit') }}"
                class="btn bg-red text-white mt-2 w-25 text-title2 text-decoration-none">Edit</a>
        </div>
    </div>
@endsection
