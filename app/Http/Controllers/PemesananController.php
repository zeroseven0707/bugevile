<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Pelanggan;
use App\Models\Product;
use App\Models\Progress;
use App\Models\Lampiran;
use App\Models\Attribute;
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
        try {
            // Menghasilkan nomor transaksi dengan prefix dan nomor acak
            $prefix = 'PO';
            $randomNumber = mt_rand(100000000000, 999999999999);
            $request['nomor_transaksi'] = $prefix . $randomNumber;

            // Ubah format tanggal masuk dan tanggal selesai
            $dateTime = \DateTime::createFromFormat('d/m/Y', $request->tanggal_masuk);
            $dateTimeKeluar = \DateTime::createFromFormat('d/m/Y', $request->tanggal_selesai);

            if ($dateTime && $dateTimeKeluar) {
                $tanggalMasuk = $dateTime->format('Y-m-d');
                $tanggalKeluar = $dateTimeKeluar->format('Y-m-d');
                $request['tanggal_masuk'] = $tanggalMasuk;
                $request['tanggal_selesai'] = $tanggalKeluar;
            } else {
                // Tangani kesalahan jika format tanggal tidak valid
                return redirect()->back()->with('error', 'Format tanggal tidak valid. Gunakan format d/m/Y.')->withInput();
            }
            $product = Product::where('nama_produk',$request->jenis_produk)->where('jenis_pola',$request->jenis_pola)->where('jenis_print',$request->jenis_print)->first();
            $request['product_id'] = $product->id;
            // Simpan data pemesanan ke database
            Pemesanan::create($request->all());

            // Jika berhasil, kembalikan pesan sukses
            return redirect()->back()->with('success', 'Pemesanan berhasil ditambahkan.');

        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi exception
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['pemesanan'] = Pemesanan::with('product')->find($id);
        $data['attribute'] = Attribute::where('product_id',$data['pemesanan']->product->id)->with('master_attribute')->get();
        $data['lampiran'] = Lampiran::where('detail_pemesanan_id',$id)->get();
        // dd($data['attribute']);
        return view('admin.pemesanan.detail-pemesanan',$data);

    }
    public function progress($id)
    {
        $data['pemesanan'] = Pemesanan::with('product')->find($id);
        $data['progress'] = Progress::where('pemesanan_id',$data['pemesanan']->id)->first();
        return view('admin.pemesanan.progress',$data);
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
