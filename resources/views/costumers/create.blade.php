@extends('layouts.app')
@section('title') Tambah Kategori @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('costumers.index') }}">Data Customers</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Customers</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Tambah Customers') }}</div>
                <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('costumers.store')}}"
                    method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input class="form-control" placeholder="Kode" type="text" name="kode" id="kode" />
                        @if ($errors->has('kode'))
                        <span class="text-danger">{{ $errors->first('kode') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Customers</label>
                        <input class="form-control" placeholder="Nama" type="text" name="nama" id="nama" />
                        @if ($errors->has('nama'))
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="telepon">Nomor Telepon</label>
                        <input class="form-control" placeholder="Nomor telepon" type="text" name="telepon" id="telepon" />
                        @if ($errors->has('telepon'))
                        <span class="text-danger">{{ $errors->first('telepon') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input class="form-control" placeholder="Alamat" type="text" name="alamat" id="alamat" />
                        @if ($errors->has('alamat'))
                        <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        @endif
                    </div>
                    <input class="btn btn-primary" type="submit" value="Simpan" />
                    <a href="{{route('costumers.index')}}" class="btn btn-dark">Kembali</a>
                </form>
            </div>
        </div>
        
    </div>
</div>
@endsection