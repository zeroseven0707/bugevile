<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttributePhotos;
use Illuminate\Support\Facades\Storage;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    // Validasi data yang diterima
    $request->validate([
        'image_attributes' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi gambar
        'name_attributes' => 'required|string|max:255',
        'attribute_id' => 'required', // Validasi ID atribut
    ]);

    // Proses upload gambar
    if ($request->hasFile('image_attributes')) {
        $file = $request->file('image_attributes');
        $filePath = $file->store('attributes_photos', 'public'); // Menyimpan gambar ke storage/app/public/attributes_photos
    }

    // Simpan data ke database
    $attributePhoto = AttributePhotos::create([
        'attribute_id' => $request->attribute_id,    // Menyimpan ID atribut
        'name' => $request->name_attributes,         // Menyimpan nama kain
        'foto' => $filePath,                         // Menyimpan path gambar
    ]);

    // Kirim respons JSON yang berisi data baru
    return response()->json([
        'success' => true,
        'name' => $attributePhoto->name,
        'foto' => $attributePhoto->foto, // URL foto yang bisa diakses publik
    ]);
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
        //
    }
}
