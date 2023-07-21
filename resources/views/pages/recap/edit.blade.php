@extends('layouts.main')
@section('container')
    @include('partials.overview')
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-2">
            <h3 class="text-blue font-weight-bold mt-5 mb-5">
                <a class="text-decoration-none" href="{{ url('/recap') }}"><i
                        class="fas fa-arrow-left text-red"></i>&emsp;&emsp;</a>
                Edit Rekap
            </h3>
            <form action="{{ url("/recap/$data->id_rekap") }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="kode_barang" class="text-title1 text-blue">Barang</label>
                    <select
                        class="custom-select text-title1 text-blue mt-1 @error('kode_barang') is-invalid @enderror"
                        id="kode_barang" name="kode_barang" required>
                        <option value="" disabled selected>Barang</option>
                        @foreach($dataBarang as $barang)
                            <option
                                value="{{ $barang->kode_barang }}" {{ $data->kode_barang == $barang->kode_barang ? 'selected' : '' }}>{{  $barang->kode_barang }}
                                - {{ $barang->nama_barang }}</option>
                        @endforeach
                    </select>
                    @error('kode_barang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="tanggal_rekap" class="text-title1 text-blue">Tanggal Rekap</label>
                    <input type="date"
                           class="form-control mt-1 text-title1 text-blue @error('tanggal_rekap') is-invalid @enderror"
                           id="tanggal_rekap" name="tanggal_rekap"
                           placeholder="Tanggal Rekap" required value="{{ $data->tanggal_rekap }}">
                    @error('tanggal_rekap')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="stok_awal_rekap" class="text-title1 text-blue">Stok Awal</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('stok_awal_rekap') is-invalid @enderror"
                           id="stok_awal_rekap" name="stok_awal_rekap"
                           placeholder="Stok Awal" required value="{{ $data->stok_awal_rekap  }}">
                    @error('stok_awal_rekap')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="stok_akhir_rekap" class="text-title1 text-blue">Stok Akhir</label>
                    <input type="text"
                           class="form-control mt-1 text-title1 text-blue @error('stok_akhir_rekap') is-invalid @enderror"
                           id="stok_akhir_rekap" name="stok_akhir_rekap"
                           placeholder="Stok Akhir" required value="{{ $data->stok_akhir_rekap  }}">
                    @error('stok_akhir_rekap')
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
