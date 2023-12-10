@extends('master')

@section('title','DATABASE TELEVISI')

@section('konten')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <h2>Data Stock Televisi</h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="/televisi/tambah" class="btn btn-primary">Tambah Data Baru</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <form action="/televisi/cari" method="GET" class="form-inline">
                <div class="form-group">
                    <input class="form-control" type="text" name="cari" placeholder="Cari Televisi" value="{{ old('cari', isset($cari) ? $cari : '') }}">
                </div>
                <button type="submit" class="btn btn-primary ml-2">Cari</button>
            </form>
        </div>
    </div>
</div>

	<br/>
	<br/>

	<table class="table table-hover table-striped">
		<tr>
			<th>Kode Televisi</th>
			<th>Merk Televisi</th>
			<th>Stock Televisi</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($televisi as $p)
		<tr>
			<td>{{ $p->kodetelevisi }}</td>
			<td>{{ $p->merktelevisi }}</td>
			<td>{{ $p->stocktelevisi }}</td>
            <td>
                @if($p->stocktelevisi != 0)
                ✅
                @else
                ❌
                @endif
            </td>
			<td>
                <a href="/televisi/view/{{ $p->kodetelevisi }}" class="btn btn-success">View</a>
				<a href="/televisi/edit/{{ $p->kodetelevisi }}" class="btn btn-warning">Edit</a>
				<a href="/televisi/hapus/{{ $p->kodetelevisi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$televisi->links()}}
    @endsection


