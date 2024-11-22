<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Progress;

class ProgressReport extends Component
{
    use WithFileUploads;

    public $pemesanan_id;
    public $pola_jersey;
    public $revisi;
    public $layout_print;
    public $press;
    public $jahit;

    public $status_pola = 'belum';
    public $status_revisi = 'belum';
    public $status_layout_print = 'belum';
    public $status_press = 'belum';
    public $status_jahit = 'belum';

    // Validation rules for file uploads
    protected $rules = [
        'image_pola_jersey' => 'nullable|image|max:2048',
        'image_revisi' => 'nullable|image|max:2048',
        'image_layout_print' => 'nullable|image|max:2048',
        'image_press' => 'nullable|image|max:2048',
        'image_jahit' => 'nullable|image|max:2048',
    ];

    public function mount($pemesanan_id)
    {
        $this->pemesanan_id = $pemesanan_id;

        // Load progress data if it exists
        $progress = Progress::where('pemesanan_id', $this->pemesanan_id)->first();

        if ($progress) {
            $this->status_pola = $progress->status_pola_jersey;
            $this->status_revisi = $progress->status_revisi;
            $this->status_layout_print = $progress->status_layout_print;
            $this->status_press = $progress->status_press;
            $this->status_jahit = $progress->status_jahit;
        }
    }

    public function markAsCompleted($field)
    {
        dd($this->status_pola, $this->status_revisi, $this->status_layout_print, $this->status_press, $this->status_jahit);
        // Update the corresponding status field when marked as completed
        $this->$field = 'selesai';

        // Save the data to the Progress model
        $progress = Progress::updateOrCreate(
            ['pemesanan_id' => $this->pemesanan_id],
            [
                'status_pola_jersey' => $this->status_pola == 'selesai' ? 'selesai' : 'belum',
                'status_revisi' => $this->status_revisi == 'selesai' ? 'selesai' : 'belum',
                'status_layout_print' => $this->status_layout_print == 'selesai' ? 'selesai' : 'belum',
                'status_press' => $this->status_press == 'selesai' ? 'selesai' : 'belum',
                'status_jahit' => $this->status_jahit == 'selesai' ? 'selesai' : 'belum',
            ]
        );

        // If a file is uploaded, store the file and update the image field
        if ($this->image_pola_jersey) {
            $progress->image_pola_jersey = $this->pola_jersey->store('images/pola_jersey');
        }
        if ($this->image_revisi) {
            $progress->image_revisi = $this->revisi->store('images/revisi');
        }
        if ($this->image_layout_print) {
            $progress->image_layout_print = $this->layout_print->store('images/layout_print');
        }
        if ($this->image_press) {
            $progress->image_press = $this->press->store('images/press');
        }
        if ($this->image_jahit) {
            $progress->image_jahit = $this->jahit->store('images/jahit');
        }

        $progress->save();

        session()->flash('message', 'Progress has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.progress-report');
    }
}
