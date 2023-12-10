@extends('master')

@section('title','Edit Data Televisi')

@section('konten')
<div class="container">
    <div class="card-header">
        <h1 class="text-center card-title">Edit Data Televisi</h1>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">


            <br/>
            <br/>

            @foreach($televisi as $p)
            <form action="/televisi/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->kodetelevisi }}">
                <div class="form-group">
                    <label for="kodetelevisi">Kode Televisi</label>
                    <input type="text" class="form-control" required="required" name="kodetelevisi" value="{{ $p->kodetelevisi }}">
                </div>
                <div class="form-group">
                    <label for="merktelevisi">Merk Televisi</label>
                    <input type="text" class="form-control" required="required" name="merktelevisi" value="{{ $p->merktelevisi }}">
                </div>
                <div class="form-group">
                    <label for="stocktelevisi">Stock Televisi</label>
                    <input type="number" class="form-control" required="required" name="stocktelevisi" value="{{ $p->stocktelevisi }}">
                </div>

                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="/televisi" class="btn btn-primary">Kembali</a>

            </form>
            @endforeach
        </div>
    </div>
</div>
<br>
<br>
@endsection
