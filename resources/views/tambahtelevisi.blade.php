@extends('master')

@section('konten')
    <h2>Database Stock Televisi</h2>

    <a href="/televisi"> Kembali</a>

    <br />
    <br />

    <form action="/televisi/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "merktelevisi" class = "col-sm-2 control-label">Merk Televisi</label>
            <div class = "col-sm-8 ">
                <input name="merktelevisi" type = "text" class = "form-control" id = "merktelevisi"
                    placeholder = "Masukkan Merk Televisi">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "stocktelevisi" class = "col-sm-2 control-label">Stock Televisi</label>
            <div class = "col-sm-8 ">
                <input name="stocktelevisi" type = "text" class = "form-control" id = "stocktelevisi"
                    placeholder = "Masukkan Stock Televisi">
            </div>
        </div>

        {{-- Nama <input type="text" name="nama" required="required"> <br/> --}}
		{{-- Jabatan <input type="text" name="jabatan" required="required"> <br/> --}}
		{{-- Umur <input type="number" name="umur" required="required"> <br/> --}}
		{{-- Alamat <textarea name="alamat" required="required"></textarea> <br/> --}}
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
