@extends('layouts.app')

@section('content')
<div class="content print:mb-4 print:px-6">
<div class="relative mt-11 p-11">
    @if(session('success'))
    @endif
    <div class="flex justify-between text-start items-start">
        <h1 class="text-2xl mb-4">Laporan Progress Pemesanan</h1>
        <div class="mt-4 text-green-600">{{ session('success') }}</div>
    </div>

    <form action="{{ url('upload/progress/'.$pemesanan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-between text-start items-start">
            <button type="button" class="selesai-button rounded-md bg-blue-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700" id="printBtn">
                Print Progress <i class="ri-printer-fill"></i>
            </button>
            <button type="submit" class=" rounded-md bg-green-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700">
                Kirim Laporan
            </button>
        </div>
        <div class="grid grid-cols-3 gap-8 mt-2">

              <!-- Pola Jersey -->
              <div class="bg-white p-8 rounded-2xl max-h-max">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Design Jersey</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                            <img src="{{ asset('storage/'.$pemesanan->product->foto) }}" alt="Pola Jersey" class="w-full h-auto">
                    </div>
                </div>
                <input type="hidden" name="status_design_jersey" id="status_design_jersey" value="{{ $progress ? $progress->status_design_jersey : 'belum' }}">
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ ($progress && $progress->status_design_jersey == 'selesai') ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700" onclick="toggleStatus('status_design_jersey')">
                        {{ ($progress && $progress->status_design_jersey == 'selesai') ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                </div>
            </div>

            <!-- Pola Jersey -->
            <div class="bg-white p-8 rounded-2xl max-h-max">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Pola Jersey</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        @if($progress && $progress->image_pola_jersey)
                            <img src="{{ asset('storage/'.$progress->image_pola_jersey) }}" alt="Pola Jersey" class="w-full h-auto">
                        @else
                            <label for="image_pola_jersey" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 hover:text-indigo-500">
                                <span class="text-center">Klik disini untuk upload</span>
                                <input id="image_pola_jersey" type="file" name="image_pola_jersey" class="sr-only">
                            </label>
                        @endif
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('image_pola_jersey') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <input type="hidden" name="status_pola_jersey" id="status_pola_jersey" value="{{ $progress ? $progress->status_pola_jersey : 'belum' }}">
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ ($progress && $progress->status_pola_jersey == 'selesai') ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700" onclick="toggleStatus('status_pola_jersey')">
                        {{ ($progress && $progress->status_pola_jersey == 'selesai') ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                </div>
            </div>

            <!-- Revisi -->
            <div class="bg-white p-8 rounded-2xl max-h-max">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Revisi</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        @if($progress && $progress->image_revisi)
                            <img src="{{ asset('storage/'.$progress->image_revisi) }}" alt="Revisi" class="w-full h-auto">
                        @else
                            <label for="image_revisi" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 hover:text-indigo-500">
                                <span class="text-center">Klik disini untuk upload</span>
                                <input id="image_revisi" type="file" name="image_revisi" class="sr-only">
                            </label>
                        @endif
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('image_revisi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <input type="hidden" name="status_revisi" id="status_revisi" value="{{ $progress ? $progress->status_revisi : 'belum' }}">
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ ($progress && $progress->status_revisi == 'selesai') ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700" onclick="toggleStatus('status_revisi')">
                        {{ ($progress && $progress->status_revisi == 'selesai') ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                </div>
            </div>


            <!-- Layout Print -->
            <div class="bg-white p-8 rounded-2xl max-h-max">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Layout Print</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        @if($progress && $progress->image_layout_print)
                            <img src="{{ asset('storage/'.$progress->image_layout_print) }}" alt="Layout Print" class="w-full h-auto">
                        @else
                            <label for="image_layout_print" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 hover:text-indigo-500">
                                <span class="text-center">Klik disini untuk upload</span>
                                <input id="image_layout_print" type="file" name="image_layout_print" class="sr-only">
                            </label>
                        @endif
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('image_layout_print') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <input type="hidden" name="status_layout_print" id="status_layout_print" value="{{ $progress ? $progress->status_layout_print : 'belum' }}">
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ ($progress && $progress->status_layout_print == 'selesai') ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700" onclick="toggleStatus('status_layout_print')">
                        {{ ($progress && $progress->status_layout_print == 'selesai') ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                </div>
            </div>

            <!-- Press -->
             <!-- Jahit -->
             <div class="bg-white p-8 rounded-2xl max-h-max">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Press</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        @if($progress && $progress->image_press)
                            <img src="{{ asset('storage/'.$progress->image_press) }}" alt="Jahit" class="w-full h-auto">
                        @else
                            <label for="image_press" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 hover:text-indigo-500">
                                <span class="text-center">Klik disini untuk upload</span>
                                <input id="image_press" type="file" name="image_press" class="sr-only">
                            </label>
                        @endif
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('image_press') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <input type="hidden" name="status_press" id="status_press" value="{{ $progress ? $progress->status_press : 'belum' }}">
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ ($progress && $progress->status_press == 'selesai') ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700" onclick="toggleStatus('status_press')">
                        {{ ($progress && $progress->status_press == 'selesai') ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                </div>
            </div>

            <!-- Jahit -->
            <div class="bg-white p-8 rounded-2xl max-h-max">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Jahit</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        @if($progress && $progress->image_jahit)
                            <img src="{{ asset('storage/'.$progress->image_jahit) }}" alt="Jahit" class="w-full h-auto">
                        @else
                            <label for="image_jahit" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 hover:text-indigo-500">
                                <span class="text-center">Klik disini untuk upload</span>
                                <input id="image_jahit" type="file" name="image_jahit" class="sr-only">
                            </label>
                        @endif
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('image_jahit') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <input type="hidden" name="status_jahit" id="status_jahit" value="{{ $progress ? $progress->status_jahit : 'belum' }}">
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ ($progress && $progress->status_jahit == 'selesai') ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700" onclick="toggleStatus('status_jahit')">
                        {{ ($progress && $progress->status_jahit == 'selesai') ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- <button type="submit" class="mt-4 rounded-md bg-green-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700">
            Kirim Laporan
        </button> --}}
    </form>

    @if($errors->any())
        <div class="mt-4 text-red-600">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif
</div>
</div>

<script>
    function toggleStatus(field) {
        let currentStatus = document.getElementById(field).value;
        let newStatus = currentStatus === 'selesai' ? 'belum' : 'selesai';
        document.getElementById(field).value = newStatus;

        let button = document.querySelector(`button[onclick="toggleStatus('${field}')"]`);
        if (newStatus === 'selesai') {
            button.classList.remove('bg-green-500');
            button.classList.add('bg-red-500');
            button.innerText = 'Batal';
        } else {
            button.classList.remove('bg-red-500');
            button.classList.add('bg-green-500');
            button.innerText = 'Selesai';
        }
        }
    document.getElementById('printBtn').addEventListener('click', function() {
        window.print();
    });
</script>
@endsection
