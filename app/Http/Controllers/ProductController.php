<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\MasterAtribute;
use App\Models\Attribute;
use App\Models\spesifikasi_print;
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
        try {
            // Validasi data yang masuk
            $validatedData = $request->validate([
                'kode_produk' => 'required|string|max:255',
                'nama_produk' => 'required|string|max:255',
                'jenis_pola' => 'required|string|max:255',
                'total_harga_spesifikasi' => 'required|numeric',
                'jenis_print' => 'required|string|max:255',
                'total_harga_print' => 'required|numeric',
                'harga_jual' => 'required|numeric',
                'file' => 'nullable|file',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput()->with('error', 'Validasi data gagal.');
        }

        try {
            // Persiapkan data produk
            $productData = [
                'kode_produk' => $validatedData['kode_produk'],
                'nama_produk' => $validatedData['nama_produk'],
                'jenis_pola' => $validatedData['jenis_pola'],
                'total_harga_spesifikasi' => (int) $validatedData['total_harga_spesifikasi'],
                'jenis_print' => $validatedData['jenis_print'],
                'total_harga_print' => (int) $validatedData['total_harga_print'],
                'harga_jual' => (int) $validatedData['harga_jual'],
            ];

            // Hitung harga produksi dan laba
            $productData['harga_produksi'] = $productData['total_harga_spesifikasi'] + $productData['total_harga_print'];
            $productData['laba'] = $productData['harga_jual'] - $productData['harga_produksi'];

            // Upload file jika ada
            if ($request->hasFile('file')) {
                try {
                    $productData['foto'] = $request->file('file')->store('products');
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Gagal mengunggah file. Silakan coba lagi.')->withInput();
                }
            }

            // Simpan data produk ke database
            $product = Product::create($productData);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan data produk. Silakan coba lagi.')->withInput();
        }

        // Simpan attribute_id terkait, jika ada
        try {
            $attributeIds = $request->input('master_attribute_id', []);
            foreach ($attributeIds as $attributeId) {
                Attribute::create([
                    'product_id' => $product->id,
                    'attribute_id' => $attributeId,
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan data attribute. Silakan coba lagi.')->withInput();
        }

        // Simpan spesifikasi_print_id terkait, jika ada
        try {
            $printIds = $request->input('master_spesifikasi_print_id', []);
            foreach ($printIds as $printId) {
                spesifikasi_print::create([
                    'product_id' => $product->id,
                    'spesifikasi_print_id' => $printId,
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan data spesifikasi print. Silakan coba lagi.')->withInput();
        }

        // Redirect dengan pesan sukses
        return redirect()->route('admin.master.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return back()->with('success','data berhasil dihapus');
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
