<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressPemesananController extends Controller
{
    public function store(Request $request, $pemesananId)
    {
        $data = $request->validate([
            'desain_jersey' => 'nullable|image|max:2048',
            'pola_jersey'   => 'nullable|image|max:2048',
            'revisi'        => 'nullable|image|max:2048',
            'layout_print'  => 'nullable|image|max:2048',
            'status'        => 'required|in:draft,revisi,selesai',
        ]);

        $progress = ProgressPemesanan::updateOrCreate(
            ['pemesanan_id' => $pemesananId],
            $data
        );

        return redirect()->route('progress-pemesanan.index', $pemesananId)
            ->with('success', 'Progress pemesanan berhasil disimpan.');
    }
}
