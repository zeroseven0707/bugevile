<?php

namespace App\Http\Controllers;

use App\Models\Specification;
use App\Models\Attribute;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'attributes' => 'required|array',
            'attributes.*.nama' => 'required|string',
            'attributes.*.harga' => 'required|numeric',
            // Tambahkan validasi lain jika diperlukan
        ]);

        // Simpan spesifikasi, jika Anda tidak menyimpan data lain, Anda bisa langsung membuat entry kosong
        $specification = Specification::create([
            // Misalnya, hanya menyimpan data lain yang relevan
            // Jika tidak ada data yang perlu disimpan, Anda bisa menggunakan:
            // 'name' => null,
            // atau tidak memasukkan apa pun jika memungkinkan
        ]);

        // Simpan atribut yang terkait dengan spesifikasi
        foreach ($request->attributes as $attributeData) {
            Attribute::create([
                'id_spesifikasi' => $specification->id,  // Gunakan ID spesifikasi yang baru dibuat
                'nama' => $attributeData['nama'],
                'harga' => $attributeData['harga'],
            ]);
        }

        // Kembalikan response sukses
        return response()->json(['message' => 'Spesifikasi dan atribut disimpan!', 'specificationId' => $specification->id], 201);
    }
}
