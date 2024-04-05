@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>

        <div class="card-body">
            @empty($penjualan)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>ID Penjualan</th>
                        <td>{{ $penjualan->penjualan_id }}</td>
                    </tr>
                    <tr>
                        <th>ID Penjualan</th>
                        <td>{{ $penjualan->detail_id }}</td>
                    </tr>
                    <tr>
                        <th>Barang</th>
                        @foreach ($penjualan->detail as $detail)
                            <tr>
                                <td>{{ $detail->barang->barang_nama }}</td>
                            </tr>
                        @endforeach
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>{{ $penjualan->harga }}</td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <td>{{ $penjualan->jumlah }}</td>
                    </tr>
                </table>
            @endempty

            <a href="{{ url('penjualan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
@endpush