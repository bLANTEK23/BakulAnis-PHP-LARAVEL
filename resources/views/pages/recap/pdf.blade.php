<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rekap Barang - Tanggal Cetak {{ \Carbon\Carbon::now()->format('d F Y')}}</title>
</head>

<body>
<div>
    <h1>Rekap Barang - Tanggal Cetak {{ \Carbon\Carbon::now()->format('d F Y')}}</h1>
    <table width="100%">
        <thead>
        <tr>
            <th style="text-align: start">No.</th>
            <th style="text-align: start">Kode Barang</th>
            <th style="text-align: start">Nama Barang</th>
            <th style="text-align: start">Tanggal Rekap</th>
            <th style="text-align: start">Stok Awal</th>
            <th style="text-align: start">Stok Akhir</th>
            <th style="text-align: start">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dataBarang as $data)
            <tr>
                <th style="font-weight: normal;text-align: start">{{ (int) $loop->index + 1 }}</th>
                <th style="font-weight: normal;text-align: start">{{ $data->kode_barang }}</th>
                <th style="font-weight: normal;text-align: start">{{ $data->nama_barang }}</th>
                <th style="font-weight: normal;text-align: start">{{ \Carbon\Carbon::make($data->tanggal_rekap)->format('d F Y')}}</th>
                <th style="font-weight: normal;text-align: start">{{ $data->stok_awal_rekap }}</th>
                <th style="font-weight: normal;text-align: start">{{ $data->stok_akhir_rekap }}</th>
                <th style="font-weight: normal;text-align: start">{{ $data->kode_status_rekap == 'OUB' ? 'Outbond' : 'Inbound'}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
