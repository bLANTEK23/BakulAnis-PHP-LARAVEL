@extends('layouts.main')
@section('container')
    @include('partials.overview')
    <div class="row">
        <div class="col-md-12 mt-5 pt-2 rounded aligment-center">
            <div class="col-md-10 offset-md-1">
                <div class="d-flex">
                    <img class="img-fluid m-auto" src="{{ url('/images/baju.jpg') }}" alt="logo">
                </div>
            </div>
            <div class="col-md-10 offset-md-1">
                <div class="d-flex flex-column mt-3 text-justify">
                    <p class="text-title1 text-blue">Bakul Anies merupakan salah satu toko yang menjual
                        pakaian seperti kaos, kemeja, sweeter dan sebagai nya. Dalam Website Bakul Anies menerapkan sistem
                        inventory untuk stok barang
                        yang mampu memproses data secara cepat, akurat dan secara otomatis mampu menyimpan serta menampilkan
                        data transaksi. </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
