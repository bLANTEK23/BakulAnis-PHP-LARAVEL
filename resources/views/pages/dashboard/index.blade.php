@extends('layouts.main')
@section('container')
    @include('partials.overview')
    <div class="row">
        <div class="col-md-4 col-sm-12 mt-3">
            <div class="bg-white rounded p-3">
                <p class="text-title1 text-blue mb-3">Jumlah Data Rekap</p>
                <div class="d-flex justify-content-between">
                    <h1 class="text-blue">{{ $totalBarang }}<span class="text-title1">item</span></h1>
                    <img src="{{ url('/images/icon/ic_all.svg') }}" alt="all">
                </div>

                </h1>
                <p class="text-title2 text-blue">/Minggu ini</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-3">
            <div class="bg-white rounded p-3">
                <p class="text-title1 text-blue mb-3">Inbound</p>
                <div class="d-flex justify-content-between">
                    <h1 class="text-blue">{{ $dataInbound }}<span class="text-title1">item</span></h1>
                    <img src="{{ url('/images/icon/ic_inbound.svg') }}" alt="all">
                </div>

                </h1>
                <p class="text-title2 text-blue">/Minggu ini</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-3">
            <div class="bg-white rounded p-3">
                <p class="text-title1 text-blue mb-3">Outbond</p>
                <div class="d-flex justify-content-between">
                    <h1 class="text-blue">{{ $dataOutbound }}<span class="text-title1">item</span></h1>
                    <img src="{{ url('/images/icon/ic_outbound.svg') }}" alt="all">
                </div>

                </h1>
                <p class="text-title2 text-blue">/Minggu ini</p>
            </div>
        </div>
    </div>
@endsection
