<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Pelanggan;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pemesanans'] = Pemesanan::all();
        $data['pelanggan'] = Pelanggan::all();
        $data['products'] = Product::select('nama_produk', DB::raw('MIN(id) as id'))->groupBy('nama_produk')->get();
        $data['pola'] = Product::select('jenis_pola', DB::raw('MIN(id) as id'))->groupBy('jenis_pola')->get();
        $data['print'] = Product::select('jenis_print', DB::raw('MIN(id) as id'))->groupBy('jenis_print')->get();
        return view('admin.pemesanan.master-pemesanan',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menghasilkan nomor transaksi
        $prefix = 'PO';
        $randomNumber = mt_rand(100000000000, 999999999999);
        $request['nomor_transaksi'] = $prefix . $randomNumber;

        // Mengubah format tanggal
        $dateTime = \DateTime::createFromFormat('d/m/Y', $request->tanggal_masuk);
        $dateTimeKeluar = \DateTime::createFromFormat('d/m/Y', $request->tanggal_selesai);

        if ($dateTime && $dateTimeKeluar) {
            $tanggalMasuk = $dateTime->format('Y-m-d');
            $tanggalKeluar = $dateTimeKeluar->format('Y-m-d');
            $request['tanggal_masuk'] = $tanggalMasuk;
            $request['tanggal_selesai'] = $tanggalKeluar;
        } else {
            // Tangani kesalahan jika format tidak valid
            throw new Exception("Format tanggal tidak valid");
        }
        // Simpan data pemesanan
        Pemesanan::create($request->all());
        return back()->with('success','Pemesanan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();
        return back()->with('success','Data Pemesanan berhasil dihapus');
    }
}
