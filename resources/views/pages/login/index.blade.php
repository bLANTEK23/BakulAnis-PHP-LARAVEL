@extends('layouts.auth')
@section('container')
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">
            <div class="row mt-5 pt-3">
                <div class="col-5 bg-red rounded-lg">
                    <img class="img-fluid" src="{{ url('/images/bagus.png') }}" alt="onboarding">
                </div>
                <div class="col-7 bg-white rounded-lg d-flex flex-column">
                    <div class="my-auto">
                        @if (session()->has('info'))
                            <div class="col-md-8 offset-md-2 mt-5 pt-4">
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
                        <h3 class="text-blue font-bolder font-weight-bold mb-5 text-center">Welcome</h3>
                        <form action="{{ url('/login') }}" method="POST" class="w-75 m-auto">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="text-title1 text-blue">Email</label>
                                <input type="email"
                                    class="form-control mt-1 text-title1 text-blue @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Masukkan Email" required autofocus
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label for="password" class="text-title1 text-blue">Password</label>
                            <div class="input-group mb-3" id="show_hide_password">
                                <input class="form-control text-title1 text-blue @error('password') is-invalid @enderror"
                                    type="password" name="password" id="password" placeholder="Masukkan password" required
                                    value="{{ old('password') }}">
                                <div class="input-group-append">
                                    <a href="" class="input-group-text text-decoration-none"><i class="fa fa-eye-slash"
                                            aria-hidden="true"></i></a>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn bg-red text-white mt-4 text-title2 w-100" type="submit">Masuk</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{ url('/js/show-password.js') }}"></script>
@endsection
