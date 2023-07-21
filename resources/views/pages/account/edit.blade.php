@extends('layouts.main')
@section('container')
    @include('partials.overview')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="d-flex flex-column mb-5">
                <img src="http://cdn-2.tstatic.net/solo/foto/bank/images/laa-laa_20160520_101354.jpg"
                    class="rounded-circle mx-auto mt-5" width="100px" height="100px" alt="avatar">
            </div>
        </div>
        <div class="col-md-8 offset-md-2 mt-5 pt-4">
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
                <a class="text-decoration-none" href="{{ url()->previous() }}"><i
                        class="fas fa-arrow-left text-red"></i>&emsp;&emsp;</a>
                Edit Akun
            </h3>
            <form action="{{ url('/account/edit') }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group mb-3">
                    <label for="name" class="text-title1 text-blue">Nama Admin</label>
                    <input type="text" class="form-control mt-1 text-title1 text-blue @error('name') is-invalid @enderror"
                        id="name" name="name" placeholder="Nama Admin" required value="{{ auth()->user()->name }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="text-title1 text-blue">Email</label>
                    <input type="email" class="form-control mt-1 text-title1 text-blue @error('email') is-invalid @enderror"
                        id="email" name="email" placeholder="Email" required value="{{ auth()->user()->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-3 d-none">
                    <label for="password" class="text-title1 text-blue">Password</label>
                    <input type="password"
                        class="form-control mt-1 text-title1 text-blue @error('password') is-invalid @enderror"
                        id="password" name="password" placeholder="Password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn bg-red text-white mt-4 w-25 text-title2" type="submit">Simpan</button>
            </form>
        </div>
    </div>
@endsection
