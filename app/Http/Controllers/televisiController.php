<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class televisiController extends Controller
{

    public function index()
    {
    $televisi = DB::table('televisi')->paginate(10); // Ini mengembalikan Collection
    return view('indextelevisi',['televisi' => $televisi]);
    }


	public function tambah()
	{

		return view('tambahtelevisi');

	}

    public function store(Request $request)
    {
    // Tentukan status ketersediaan berdasarkan stocktelevisi yang diterima dari form
    $ketersediaan = $request->stocktelevisi > 0 ? '✅' : '❌'; // Misalkan 'Y' untuk tersedia dan 'N' untuk tidak tersedia

    // Masukkan data baru ke dalam database
    DB::table('televisi')->insert([
        'merktelevisi' => $request->merktelevisi,
        'stocktelevisi' => $request->stocktelevisi,
        'tersedia' => $ketersediaan, // Isi kolom ketersediaan berdasarkan nilai stocktelevisi
    ]);

    // Alihkan kembali ke halaman index dengan pesan sukses
    return redirect('/televisi')->with('status', 'Data baru berhasil ditambahkan.');
    }


    public function edit($kodetelevisi)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$televisi = DB::table('televisi')->where('kodetelevisi',$kodetelevisi)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edittelevisi',['televisi' => $televisi]);
	}

    public function hapus($kodetelevisi)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('televisi')->where('kodetelevisi',$kodetelevisi)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/televisi');
	}


    public function update(Request $request)
    {
    // Tentukan status ketersediaan berdasarkan stocktelevisi
    $ketersediaan = $request->stocktelevisi > 0 ? '✅' : '❌'; // Anggap 'Y' untuk ada dan 'N' untuk tidak ada

    // Update data televisi
    DB::table('televisi')->where('kodetelevisi', $request->kodetelevisi)->update([
        'merktelevisi' => $request->merktelevisi,
        'stocktelevisi' => $request->stocktelevisi,
        'tersedia' => $ketersediaan, // Update kolom ketersediaan
    ]);

    // Arahkan kembali ke halaman index dengan pesan status
    return redirect('/televisi')->with('status', 'Data berhasil diupdate');
    }


    public function cari(Request $request)
    {
    // menangkap data pencarian
    $cari = $request->cari;

    // mengambil data dari tabel televisi sesuai pencarian data
    $televisi = DB::table('televisi')
        ->where('merktelevisi', 'like', "%" . $cari . "%")
        ->orWhere('kodetelevisi', 'like', "%" . $cari . "%") // Anda bisa menambahkan lebih banyak kolom untuk pencarian
        ->paginate(10); // Menentukan jumlah item per halaman

    // menambahkan query string 'cari' pada link pagination
    $televisi->appends(['cari' => $cari]);

    // mengirim data televisi ke view index
    return view('indextelevisi', [
        'televisi' => $televisi,
        'cari' => $cari]);
    }

    public function view($kodetelevisi)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $televisi = DB::table('televisi')->where('kodetelevisi', $kodetelevisi)->first();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('viewtelevisi', ['televisi' => $televisi]);
    }

}
