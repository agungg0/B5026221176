@extends('master')

@section('title', 'DATABASE KATEGORI')

@section('konten')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Pilih Kategori
                </div>
                <div class="card-body">
                    <form action="/kategori/pilih" method="POST">
                        @csrf <!-- Token CSRF untuk keamanan -->
                        <div class="form-group">
                            <select name="kategori" id="kategori" class="form-control">
                                @foreach($kategori as $kat)
                                    <option value="{{ $kat->ID }}">{{ $kat->Nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">KIRIM</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


