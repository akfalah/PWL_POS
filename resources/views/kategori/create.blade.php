@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">Buat kategori baru</div>
            </div>

            <form action="../kategori" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input 
                            type="text" 
                            name="kodeKategori" 
                            id="kodeKategori" 
                            class="form-control @error('kodeKategori') is-invalid @enderror" 
                            placeholder="Masukkan Kode Kategori"
                        />

                        @error('kodeKategori')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="namaKategori">Nama Kategori</label>
                        <input 
                            type="text" 
                            name="namaKategori" 
                            id="namaKategori" 
                            class="form-control @error('namaKategori') is-invalid @enderror" 
                            placeholder="Masukkan Nama Kategori"
                        />

                        @error('namaKategori')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection