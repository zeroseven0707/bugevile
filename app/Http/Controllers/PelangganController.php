<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    // Menampilkan form input pelanggan dan daftar pelanggan
    public function index()
    {
        $pelanggan = Pelanggan::all(); // Ambil semua data pelanggan
        return view('admin.pelanggan.index', compact('pelanggan'));
    }

    // Menyimpan data pelanggan
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'alamat' => 'required|string',
        ]);

        Pelanggan::create([
            'nama' => $request->nama,
            'nomor_telepon' => $request->nomor_telepon,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('admin.pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan.');
    }

     // Metode untuk memperbarui data pelanggan
     public function update(Request $request)
     {
         $request->validate([
             'id_user' => 'required|exists:pelanggan,id',
             'nama' => 'required|string|max:255',
             'nomor_telepon' => 'required|string|max:15',
             'alamat' => 'required|string|max:255',
         ]);

         $pelanggan = Pelanggan::find($request->id_user);
         $pelanggan->nama = $request->nama;
         $pelanggan->nomor_telepon = $request->nomor_telepon;
         $pelanggan->alamat = $request->alamat;
         $pelanggan->save();

         return redirect()->route('admin.pelanggan.index')->with('success', 'Data pelanggan berhasil diperbarui.');
     }

     public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('admin.pelanggan.index')->with('success', 'Data pelanggan berhasil dihapus.');
    }

    public function searchAjax(Request $request)
    {
        $keyword = $request->input('search');

        // Query untuk mencari pelanggan berdasarkan nama, nomor telepon, atau alamat
        $pelanggan = Pelanggan::where('nama', 'like', "%{$keyword}%")
                        ->orWhere('nomor_telepon', 'like', "%{$keyword}%")
                        ->orWhere('alamat', 'like', "%{$keyword}%")
                        ->get();

        // Kembalikan data dalam format JSON
        return response()->json($pelanggan);
    }

    public function filterAjax(Request $request)
    {
        // Ambil nilai filter dari parameter request
        $filter = $request->query('filter');

        // Tentukan urutan berdasarkan filter
        if ($filter === 'terbaru') {
            $pelanggan = Pelanggan::orderBy('created_at', 'desc')->get();
        } elseif ($filter === 'terlama') {
            $pelanggan = Pelanggan::orderBy('created_at', 'asc')->get();
        } elseif ($filter === 'a-z') {
            $pelanggan = Pelanggan::orderBy('nama', 'asc')->get();
        } elseif ($filter === 'z-a') {
            $pelanggan = Pelanggan::orderBy('nama', 'desc')->get();
        } else {
            // Default tanpa filter, jika tidak ada filter dipilih
            $pelanggan = Pelanggan::all();
        }

        // Kembalikan respons JSON
        return response()->json($pelanggan);
    }
    public function find($id)
{
    $pelanggan = Pelanggan::find($id);
    return response()->json($pelanggan);
}
}
