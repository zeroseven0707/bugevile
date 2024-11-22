<div class="relative mt-11">
    <div class="flex justify-between text-start items-start">
        <h1 class="text-2xl mb-4">Laporan Progress Pemesanan</h1>
        <button type="button" class="selesai-button rounded-md bg-blue-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Print Progress <i class="ri-printer-fill"></i>
        </button>
    </div>
    <div class="grid grid-cols-3 gap-8 mt-2">
        <!-- Pola Jersey -->
        <div class="bg-white p-8 rounded-2xl max-h-max">
            <div class="col-span-full">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Pola Jersey</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        <label for="pola_jersey" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span class="text-center">Klik disini untuk upload</span>
                            <input id="pola_jersey" type="file" wire:model="image_pola_jersey" class="sr-only">
                        </label>
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('pola_jersey') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ $status_revisi == 'selesai' ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" wire:click="markAsCompleted('status_pola')">
                        {{ $status_pola == 'selesai' ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                    <button type="button" class="selesai-button rounded-md bg-blue-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Print <i class="ri-printer-fill"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Revisi -->
        <div class="bg-white p-8 rounded-2xl max-h-max">
            <div class="col-span-full">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Revisi</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        <label for="revisi" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span class="text-center">Klik disini untuk upload</span>
                            <input id="revisi" type="file" wire:model="image_revisi" class="sr-only">
                        </label>
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('revisi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ $status_revisi == 'selesai' ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" wire:click="markAsCompleted('status_revisi')">
                        {{ $status_revisi == 'selesai' ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                    <button type="button" class="selesai-button rounded-md bg-blue-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Print <i class="ri-printer-fill"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Layout Print -->
        <div class="bg-white p-8 rounded-2xl max-h-max">
            <div class="col-span-full">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Layout Print</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        <label for="layout_print" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span class="text-center">Klik disini untuk upload</span>
                            <input id="layout_print" type="file" wire:model="image_layout_print" class="sr-only">
                        </label>
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('layout_print') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ $status_revisi == 'selesai' ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" wire:click="markAsCompleted('status_layout_print')">
                        {{ $status_layout_print == 'selesai' ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                    <button type="button" class="selesai-button rounded-md bg-blue-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Print <i class="ri-printer-fill"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Press -->
        <div class="bg-white p-8 rounded-2xl max-h-max">
            <div class="col-span-full">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Press</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        <label for="press" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span class="text-center">Klik disini untuk upload</span>
                            <input id="press" type="file" wire:model="image_press" class="sr-only">
                        </label>
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('press') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="grid grid-cols- 2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ $status_revisi == 'selesai' ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" wire:click="markAsCompleted('status_press')">
                        {{ $status_press == 'selesai' ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                    <button type="button" class="selesai-button rounded-md bg-blue-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Print <i class="ri-printer-fill"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Jahit -->
        <div class="bg-white p-8 rounded-2xl max-h-max">
            <div class="col-span-full">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Jahit</h1>
                </div>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:24vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                        <label for="jahit" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span class="text-center">Klik disini untuk upload</span>
                            <input id="jahit" type="file" wire:model="image_jahit" class="sr-only">
                        </label>
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                        @error('jahit') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="grid grid-cols-2 items-center mt-6 gap-4">
                    <button type="button" class="selesai-button rounded-md {{ $status_revisi == 'selesai' ? 'bg-red-500' : 'bg-green-500' }} px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" wire:click="markAsCompleted('status_jahit')">
                        {{ $status_jahit == 'selesai' ? 'Batal' : 'Selesai' }} <i class="ri-check-line"></i>
                    </button>
                    <button type="button" class="selesai-button rounded-md bg-blue-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Print <i class="ri-printer-fill"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
