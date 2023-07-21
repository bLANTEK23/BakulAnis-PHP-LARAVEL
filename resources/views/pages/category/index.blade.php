@extends('layouts.main')
@section('custom-head')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
@endsection
@section('container')
    @include('partials.overview')
    <div class="row">
        @if(session()->has('info'))
            <div class="col-md-12 mt-5">
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
        <div class="col-md-12 mt-5 bg-white pt-2 rounded">
            <a href="{{ url('/category/create') }}" class="btn btn-success float-right mb-3">
                <i class="fas fa-plus-circle"></i>
                Tambah Kategori
            </a>
        </div>
        <div class="col-md-12 p-5 bg-white rounded">
            <table id="myTable" class="table table-stripped text-grey" width="100%">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <br>
@endsection
@section('custom-script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.js"></script>
    <script>
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            "scrollX": true,
            responsive: true,
            ajax: '{{ route('category.data') }}',
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'kode_kategori', name: 'kode_kategori'},
                {data: 'nama_kategori', name: 'nama_kategori'},
                {data: 'action', name: 'action'},
            ]
        });
    </script>
@endsection
