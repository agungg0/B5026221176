@extends('master')

@section('title','View Data Televisi')

@section('konten')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center card-title">Data Televisi</h1>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Kode Televisi:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" value="{{ $televisi->kodetelevisi }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Merk Televisi:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" value="{{ $televisi->merktelevisi }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Stock Televisi:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" value="{{ $televisi->stocktelevisi }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"><strong>Ketersediaan:</strong></label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control" value="{{ $televisi->tersedia }}">
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer text-center">
            <a href="/televisi" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
