<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;
class UploadController extends Controller
{
    public function uploadProgress(Request $request, $pemesananId)
    {
        $request->validate([
            'image_pola_jersey' => 'nullable|image|max:2048',
            'image_revisi' => 'nullable|image|max:2048',
            'image_layout_print' => 'nullable|image|max:2048',
            'image_press' => 'nullable|image|max:2048',
            'image_jahit' => 'nullable|image|max:2048',
        ]);

        // Temukan progress berdasarkan $pemesananId
        $progress = Progress::where('pemesanan_id', $pemesananId)->first();

        // Jika progress belum ada, buat instance baru
        if (!$progress) {
            $progress = new Progress();
            $progress->pemesanan_id = $pemesananId;
        }

        // Update gambar hanya jika file baru diunggah
        if ($request->hasFile('image_pola_jersey')) {
            $progress->image_pola_jersey = $request->file('image_pola_jersey')->store('images');
        }

        if ($request->hasFile('image_revisi')) {
            $progress->image_revisi = $request->file('image_revisi')->store('images');
        }

        if ($request->hasFile('image_layout_print')) {
            $progress->image_layout_print = $request->file('image_layout_print')->store('images');
        }

        if ($request->hasFile('image_press')) {
            $progress->image_press = $request->file('image_press')->store('images');
        }

        if ($request->hasFile('image_jahit')) {
            $progress->image_jahit = $request->file('image_jahit')->store('images');
        }

        // Update status tanpa menyentuh gambar jika gambar tidak diunggah
        $progress->status_pola_jersey = $request->status_pola_jersey;
        $progress->status_revisi = $request->status_revisi;
        $progress->status_layout_print = $request->status_layout_print;
        $progress->status_press = $request->status_press;
        $progress->status_jahit = $request->status_jahit;
        $progress->status_design_jersey = $request->status_design_jersey;

        // Simpan data
        $progress->save();

        return back()->with('success', 'Laporan progress berhasil disimpan.');
    }

}
