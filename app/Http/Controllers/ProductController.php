<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\MasterAtribute;
use App\Models\MasterSpesifikasiPrint;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::all();
        return view('admin.master.data-master',$data);
    }

    public function create()
    {
        $data['attributes'] = MasterAtribute::all();
        $data['prints'] = MasterSpesifikasiPrint::all();
        return view('admin.master.index',$data);
    }

    // Simpan data produk
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'kode_produk' => 'required|string|max:255',
            'nama_produk' => 'required|string|max:255',
            'jenis_pola' => 'required|string|max:255',
            'total_harga_spesifikasi' => 'required|numeric',
            'jenis_print' => 'required|string|max:255',
            'total_harga_print' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'file' => 'nullable',
        ]);

        // Prepare data for saving, converting to integer
        $productData = [
            'kode_produk' => $request->input('kode_produk'),
            'nama_produk' => $request->input('nama_produk'),
            'jenis_pola' => $request->input('jenis_pola'),
            'total_harga_spesifikasi' => (int) $request->input('total_harga_spesifikasi'),
            'jenis_print' => $request->input('jenis_print'),
            'total_harga_print' => (int) $request->input('total_harga_print'),
            'harga_jual' => (int) $request->input('harga_jual'),
            'foto' => $request->file('file')->store('products')
        ];

        // Calculate harga_produksi and laba without decimals
        $harga_produksi = $productData['total_harga_spesifikasi'] + $productData['total_harga_print'];
        $laba = (int)$productData['harga_jual'] - $harga_produksi;

        // Add calculated fields to product data
        $productData['harga_produksi'] = $harga_produksi;
        $productData['laba'] = $laba;

        // if ($request->hasFile('file')) {
        //     $productData['foto'] = $request->file('file')->store('products');
        // }

        // Create the product in the database
        Product::create($productData);

        // Redirect back with success message
        return redirect()->route('admin.master.index')->with('success', 'Produk berhasil ditambahkan!');
    }
    public function searchAjax(Request $request)
    {
        $keyword = $request->input('search');

        // Query untuk mencari products berdasarkan nama, nomor telepon, atau alamat
        $products = Product::where('kode_produk', 'like', "%$keyword%")
                            ->orWhere('nama_produk', 'like', "%$keyword%")
                            ->orWhere('jenis_pola', 'like', "%$keyword%")
                            ->orWhere('jenis_print', 'like', "%$keyword%");
        // Kembalikan data dalam format JSON
        return response()->json($products);
    }

    public function filterAjax(Request $request)
    {
        // Ambil nilai filter dari parameter request
        $filter = $request->query('filter');

        // Tentukan urutan berdasarkan filter
        if ($filter) {
            $product = Product::orderBy($filter, 'desc')->get();
        }else {
            // Default tanpa filter, jika tidak ada filter dipilih
            $product = Product::all();
        }

        // Kembalikan respons JSON
        return response()->json($product);
    }

}
