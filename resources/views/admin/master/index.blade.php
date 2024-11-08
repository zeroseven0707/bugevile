@extends('layouts.app')

@section('content')
<div class="p-10 max-h-max">
    <div class="flex">
        <h1 class="text-2xl mb-4">Tambah Data Produk</h1>
    </div>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif
    <form >
        <div class="bg-white p-8 rounded-2xl">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="kode_produk" class="block text-base/6 font-normal text-gray-900">Kode Produk</label>
                                <div class="mt-2">
                                    <input type="text" name="kode_produk" id="kode_produk" required class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="nama_produk" class="block text-base/6 font-normal text-gray-900">Nama Produk</label>
                                <div class="mt-2">
                                    <input type="text" name="nama_produk" id="nama_produk" required class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-6">
                            <div class="sm:col-span-3">
                                <label for="jenis_pola" class="block text-base/6 font-normal text-gray-900">Jenis Pola</label>
                                <div class="mt-2">
                                    <input type="text" name="jenis_pola" id="jenis_pola" required class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="total_harga_spesifikasi" class="block text-base/6 font-normal text-gray-900">Total Harga Spesifikasi</label>
                                <div class="mt-2">
                                    <div class="relative">
                                        <input type="number" name="total_harga_spesifikasi" id="total_harga_spesifikasi" required readonly
                                            class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6"
                                            >
                                        <button type="button" id="openModal" style="transform:translateY(-50%); top:50%;"
                                        class="absolute right-3 rounded-md bg-blue-500 px-3 py-1 text-sm font-normal text-white shadow-sm hover:bg-blue-700">Tambah Spesifikasi <i class="ri-add-fill"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-6">
                            <div class="sm:col-span-3">
                                <label for="jenis_print" class="block text-base/6 font-normal text-gray-900">Jenis Print</label>
                                <div class="mt-2">
                                    <input type="text" name="jenis_print" id="jenis_print" required class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="total_harga_print" class="block text-base/6 font-normal text-gray-900">Total Harga Print</label>
                                <div class="mt-2">
                                    <div class="relative">
                                        <input type="number" name="total_harga_print" id="total_harga_print" required class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6" oninput="calculateProductionCost()">
                                        <button type="button" id="openModalSpek"  style="transform:translateY(-50%); top:50%;" class="absolute right-3 rounded-md bg-blue-500 px-3 py-1 text-sm font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah Spesifikasi Print <i class="ri-add-fill"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="harga_produksi" class="block text-base/6 font-normal text-gray-900">Harga Produksi</label>
                            <div class="mt-2">
                                <input type="text" name="harga_produksi" id="harga_produksi" readonly class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="harga_jual" class="block text-base/6 font-normal text-gray-900">Harga Jual</label>
                            <div class="mt-2">
                                <input type="number" name="harga_jual" id="harga_jual" required class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6" oninput="calculateProfit()">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="laba" class="block text-base/6 font-normal text-gray-900">Laba</label>
                            <div class="mt-2">
                                <input type="text" name="laba" id="laba" readonly class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-5">
                    <button type="button" id="openModalFoto" class="rounded-md bg-blue-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah Foto Referensi <i class="ri-image-add-fill"></i></button>
                    <button type="submit" id="save-all" class="rounded-md bg-green-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan Data Produk <i class="ri-save-2-fill"></i></button>
                </div>
                <div class="mt-6 bg-white p-8 rounded-2xl sticky top-24 hidden" id="popupModalFoto">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold">Foto Referensi Jersey</h2>
                        <button id="closeModalFoto" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-600">
                            Tutup
                        </button>
                    </div>
                    <div class="col-span-full">
                        {{-- <label for="cover-photo" class="block text-base/6 font-normal text-gray-900">Foto Referensi Jersey</label> --}}
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:40vw;">
                            <div class="text-center flex flex-col items-center justify-center">
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm/6 justify-center text-gray-600 ">
                                <label for="file-upload" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span class="text-center">Klik disini untuk upload</span>
                                <input id="file-upload" name="file" type="file" class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        {{-- popup attributes dan spesifikasi print --}}
        <div class="grid grid-cols-2 gap-4 mt-6">
            <div class="bg-white p-8 rounded-2xl hidden" id="popupModal">
                <div class="px-3 border">
                    <table class="border-separate border-0 border-spacing-y-3 w-full">
                        <thead>
                            <tr>
                                <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">
                                    <input type="checkbox" name="pilih" value="" id="">
                                </th>
                                <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Atribut</th>
                                <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Harga</th>
                                <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="atribut-table-body">
                            @foreach ($attributes as $key => $attribute)
                                <tr>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                                        <input type="checkbox" name="master_attribute_id" class="atribut-checkbox" data-id="{{ $attribute['id'] }}" value="{{ $attribute['harga'] }}" data-nama="{{ $attribute['nama'] }}">
                                    </td>
                                    <td class="bg-slate-200 font-normal py-3 text-start px-5">
                                        <div class="relative flex justify-between">
                                            {{ $attribute['nama'] }}
                                            <button type="button" class="openModalAdd rounded-md bg-blue-500 px-3 py-1 text-xs font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                                data-id="{{ $attribute['id'] }}"
                                                data-photos="{{ json_encode($attribute['attribute_photos']) }}">
                                                Tambah Foto <i class="ri-add-fill"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center">{{ number_format($attribute['harga']) }}</td>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                                        <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-pencil-line"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- Form tambah atribut baru -->
                            <tr id="new-atribut-form" style="display: none;">
                                <td colspan="4">
                                    <div class="p-4 border-t">
                                        <div class="flex space-x-4">
                                            <input type="text" name="nama" id="nama" class="border p-2 rounded-md" placeholder="Nama Atribut" required />
                                            <input type="number" name="harga" id="harga" class="border p-2 rounded-md" placeholder="Harga" required />
                                            <button type="button" id="save-attributes" class="bg-green-500 text-white p-2 rounded-md">Save</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Tombol Tambah Atribut -->
                    <div class="mt-4 text-center">
                        <button id="add-new-atribut-btn" type="button" class="bg-blue-500 text-white py-2 px-4 rounded-md">
                            <i class="ri-add-circle-fill"></i> Tambah Atribut Baru
                        </button>
                    </div>

                </div>
            </div>
            <div class="bg-white p-8 rounded-2xl hidden" id="popupModalSpek">
                <div class="px-3 border">
                    <table class="border-separate border-0 border-spacing-y-3 w-full">
                        <thead>
                            <tr>
                                <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">
                                    <input type="checkbox" name="pilih" value="" id="">
                                </th>
                                <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Spesifikasi Print</th>
                                <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Harga</th>
                                <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="print-table-body">
                            @foreach ($prints as $print)
                                <tr>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                                        <input type="checkbox" name="master_spesifikasi_print_id" class="print-checkbox" data-id="{{ $print['id'] }}" value="{{ $print['harga'] }}" data-nama="{{ $attribute['nama'] }}">
                                    </td>
                                    <td class="bg-slate-200 font-normal py-3 text-start px-5">{{ $print['nama'] }}</td>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center">{{ number_format($print['harga']) }}</td>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                                        <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-pencil-line"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                            <!-- Form tambah atribut baru -->
                            <tr id="new-print-form" style="display: none;">
                                <td colspan="4">
                                    <div class="p-4 border-t">
                                        <div class="flex space-x-4">
                                            <input type="text" id="nama_spek" class="border p-2 rounded-md" placeholder="Spesifikasi Print" required />
                                            <input type="number" id="harga_spek" class="border p-2 rounded-md" placeholder="Harga" required />
                                            <button id="save-button" class="bg-green-500 text-white p-2 rounded-md">Save</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Tombol Tambah Atribut -->
                    <div class="mt-4 text-center">
                        <button id="add-new-print-btn" type="button" class="bg-blue-500 text-white py-2 px-4 rounded-md">
                            <i class="ri-add-circle-fill"></i> Tambah Spesifikasi Print Baru
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Popup Add sub attributes -->
        <div id="popupModalAdd" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 overflow-y-scroll py-5 flex flex-col items-center justify-center z-50">
            <div class="absolute top-0 py-8 w-full flex flex-col items-center gap-5">
                <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
                    <div class="items-start gap-6">
                        <div class="relative">
                                <div class="relative">
                                    <label for="">Foto Kain :</label>
                                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:12vw;">
                                        <div class="text-center flex flex-col items-center justify-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm/6 justify-center text-gray-600 ">
                                            <label for="file-upload" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span class="text-center">Klik disini untuk upload foto</span>
                                            <input id="file-upload" name="image_attributes" type="file" class="sr-only">
                                            </label>
                                        </div>
                                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative mt-5">
                                    <label for="npk">Nama Kain :</label>
                                    <input type="text" name="name_attributes" id="npk" required class="w-full border border-gray-300 p-2 mb-2" placeholder="Isi nama kain">
                                </div>
                            <div class="mt-3 flex justify-start gap-3">
                                <button type="button" id="closeModalAdd" class="px-4 py-2 bg-red-500 text-white rounded-md shadow hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                                    Tutup
                                </button>
                                <button id="saveModalAdd" type="button" class="px-4 py-2 bg-green-500 text-white rounded-md shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md	">
                    <div class="items-start gap-6">
                        <div class="block w-full">
                            <h1 class="text-base mb-2">Data Kain</h1>
                            <div class="px-3 border">
                                <table class="border-separate border-0 border-spacing-y-3 w-full">
                                    <thead>
                                        <tr>
                                            <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-2/6">Foto</th>
                                            <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-2/6">Nama Kain</th>
                                            <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-2/6">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data kain akan dimasukkan di sini -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil semua checkbox atribut
        const atributCheckboxes = document.querySelectorAll('.atribut-checkbox');

        // Fungsi untuk menghitung total harga spesifikasi
        function calculateTotalHargaSpesifikasi() {
            let totalHarga = 0;

                    // Iterasi semua checkbox atribut untuk mengecek yang dicentang
                    atributCheckboxes.forEach(function (checkbox) {
                        if (checkbox.checked) {
                            // Jika checkbox dicentang, tambahkan harga ke totalHarga
                            totalHarga += parseFloat(checkbox.value);
                        }
                    });

                    // Update total harga spesifikasi di input field
                    document.getElementById('total_harga_spesifikasi').value = totalHarga;

                    // Panggil function untuk menghitung biaya produksi dan laba
                    calculateProductionCost();
        }

        // Tambahkan event listener ke setiap checkbox
        atributCheckboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', calculateTotalHargaSpesifikasi);
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const printCheckboxes = document.querySelectorAll('.print-checkbox');

        // Fungsi untuk menghitung total harga spesifikasi
        function calculateTotalHargaSpesifikasiPrint() {
            let totalHarga = 0;
                    // Iterasi semua checkbox print untuk mengecek yang dicentang
                    printCheckboxes.forEach(function (checkbox) {
                        if (checkbox.checked) {
                            // Jika checkbox dicentang, tambahkan harga ke totalHarga
                            totalHarga += parseFloat(checkbox.value);
                        }
                    });

                    // Update total harga spesifikasi di input field
                    document.getElementById('total_harga_print').value = totalHarga;

                    // Panggil function untuk menghitung biaya produksi dan laba
                    calculateProductionCost();
        }

        // Tambahkan event listener ke setiap checkbox
        printCheckboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', calculateTotalHargaSpesifikasiPrint);
        });
    });

    // Menampilkan form attribute
    document.getElementById('add-new-atribut-btn').addEventListener('click', function () {
        document.getElementById('new-atribut-form').style.display = 'table-row';
    });

    // Menampilkan form print
    document.getElementById('add-new-print-btn').addEventListener('click', function () {
        document.getElementById('new-print-form').style.display = 'table-row';
    });

    // Menangani submit form untuk menambah atribut
    document.getElementById('save-attributes').addEventListener('click', function (e) {
        e.preventDefault();

        // Ambil data dari form
        const nama = document.getElementById('nama').value;
        const harga = document.getElementById('harga').value;
        // Validasi input (opsional)
        if (!nama || !harga) {
                alert("Harap isi semua kolom!");
                return;
        }
        // Kirim data menggunakan AJAX
        fetch("{{ route('atribute.store') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                nama: nama,
                harga: harga
            })
        })
        .then(response => response.json())
        .then(data => {
            // Menampilkan atribut baru di tabel
            const tableBody = document.getElementById('atribut-table-body');
            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                    <input type="checkbox" name="pilih" value="" id="">
                </td>
                <td class="bg-slate-200 font-normal py-3 text-start px-5">
                    <div class="relative flex justify-between">
                        ${data.nama}
                        <button type="button" id="openModalAdd"
                            data-id="${data.id}"
                            data-photos="${data.attribute_photos}"
                            class="openModalAdd rounded-md bg-blue-500 px-3 py-1 text-xs font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Tambah Foto <i class="ri-add-fill"></i>
                        </button>
                    </div>
                    </td>
                <td class="bg-slate-200 font-normal py-3 px-2 text-center">${data.harga}</td>
                <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                    <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-pencil-line"></i></button>
                </td>
            `;
            tableBody.appendChild(row);

            // Reset form dan sembunyikan form setelah disubmit
            document.getElementById('nama').value = '';
            document.getElementById('harga').value = '';
            document.getElementById('new-atribut-form').style.display = 'none';
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });

    // Menangani submit form untuk menambah Spek Print
    document.getElementById('save-button').addEventListener('click', function (e) {
    e.preventDefault(); // Mencegah aksi default (misalnya refresh halaman)

    // Ambil data dari input
    const nama = document.getElementById('nama_spek').value;
    const harga = document.getElementById('harga_spek').value;

    // Validasi input (opsional)
    if (!nama || !harga) {
        alert("Harap isi semua kolom!");
        return;
    }

    // Kirim data menggunakan AJAX
    fetch("{{ route('print.store') }}", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            nama: nama,
            harga: harga
        })
    })
    .then(response => response.json())
    .then(data => {
        // Menambahkan data baru ke tabel setelah sukses
        const tableBody = document.getElementById('print-table-body');
        const row = document.createElement('tr');
        row.innerHTML = `
            <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                <input type="checkbox" class="atribut-checkbox" value="${data.harga}" data-nama="${data.nama}">
            </td>
            <td class="bg-slate-200 font-normal py-3 text-start px-5">${data.nama}</td>
            <td class="bg-slate-200 font-normal py-3 px-2 text-center">${data.harga}</td>
            <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-pencil-line"></i></button>
            </td>
        `;
        tableBody.appendChild(row);

        // Reset form input setelah sukses
        document.getElementById('nama_spek').value = '';
        document.getElementById('harga_spek').value = '';
        document.getElementById('new-print-form').style.display = 'none';
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

</script>
{{-- Kalkulasi --}}
<script>
    function calculateProductionCost() {
        const totalHargaSpesifikasi = parseFloat(document.getElementById('total_harga_spesifikasi').value) || 0;
        const totalHargaPrint = parseFloat(document.getElementById('total_harga_print').value) || 0;
        const hargaProduksi = Math.round(totalHargaSpesifikasi + totalHargaPrint); // Menghilangkan desimal

        document.getElementById('harga_produksi').value = hargaProduksi; // Tidak menggunakan toFixed
        calculateProfit(); // Panggil untuk menghitung laba setiap kali harga produksi dihitung
    }

    function calculateProfit() {
        const hargaProduksi = parseFloat(document.getElementById('harga_produksi').value) || 0;
        const hargaJual = parseFloat(document.getElementById('harga_jual').value) || 0;
        const laba = hargaJual - hargaProduksi;

        document.getElementById('laba').value = laba >= 0 ? laba : 0; // Menghilangkan desimal dan memastikan tidak negatif
    }
</script>
{{-- Modal --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Ambil elemen modal
        const openModal = document.getElementById("openModal");
        const openModalFoto = document.getElementById("openModalFoto");
        const openModalSpek = document.getElementById("openModalSpek");

        // Menggunakan class untuk tombol "Tambah Foto"
        const openModalAddButtons = document.querySelectorAll(".openModalAdd"); // Semua tombol dengan class .openModalAdd

        const closeModal = document.getElementById("closeModal");
        const closeModalFoto = document.getElementById("closeModalFoto");
        const closeModalSpek = document.getElementById("closeModalSpek");
        const closeModalAdd = document.getElementById("closeModalAdd");

        const popupModal = document.getElementById("popupModal");
        const popupModalFoto = document.getElementById("popupModalFoto");
        const popupModalSpek = document.getElementById("popupModalSpek");
        const popupModalAdd = document.getElementById("popupModalAdd");

        // Tabel untuk data kain di dalam modal popupModalAdd
        const modalDataTable = popupModalAdd.querySelector('table tbody');

        // Modal - Fungsi untuk membuka dan menutup modal umum
        function toggleModal(modal, action) {
            if (action === 'open') {
                modal.classList.remove('hidden');
            } else if (action === 'close') {
                modal.classList.add('hidden');
            }
        }

        // Modal open-close untuk masing-masing modal
        if (openModal && popupModal) {
            openModal.addEventListener("click", () => toggleModal(popupModal, 'open'));
        }
        if (closeModal && popupModal) {
            closeModal.addEventListener("click", () => toggleModal(popupModal, 'close'));
        }

        if (openModalFoto && popupModalFoto) {
            openModalFoto.addEventListener("click", () => toggleModal(popupModalFoto, 'open'));
        }
        if (closeModalFoto && popupModalFoto) {
            closeModalFoto.addEventListener("click", () => toggleModal(popupModalFoto, 'close'));
        }

        if (openModalSpek && popupModalSpek) {
            openModalSpek.addEventListener("click", () => toggleModal(popupModalSpek, 'open'));
        }
        if (closeModalSpek && popupModalSpek) {
            closeModalSpek.addEventListener("click", () => toggleModal(popupModalSpek, 'close'));
        }

        // Modal untuk Tambah Foto (popupModalAdd) - Menambahkan foto kain sesuai ID atribut yang diklik
        openModalAddButtons.forEach(button => {
            button.addEventListener("click", function () {
                const attributeId = this.dataset.id; // Ambil ID atribut
                const attributePhotos = JSON.parse(this.dataset.photos); // Ambil data foto (attribute_photos)

                // Tampilkan modal untuk tambah foto
                toggleModal(popupModalAdd, 'open');

                // Bersihkan data foto sebelumnya dalam tabel
                modalDataTable.innerHTML = '';

                // Isi data foto ke dalam tabel
                attributePhotos.forEach(photo => {
                    const row = document.createElement('tr');

                    row.innerHTML = `
                        <td class="bg-slate-200 font-normal py-3 px-2 text-center">
                            <img src="{{ asset('storage/${photo.foto}') }}" alt="${photo.name}" class="w-14 h-14 object-cover block m-auto">
                        </td>
                        <td class="bg-slate-200 font-normal py-3 px-2 text-center">${photo.name}</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                            <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </td>
                    `;

                    modalDataTable.appendChild(row);
                });

                // Simpan attributeId ke dalam input field atau simpan di variabel global
                // Agar bisa dikirim melalui AJAX nanti
                window.currentAttributeId = attributeId; // Menyimpan ID atribut yang sedang diproses
            });
        });

        // Menutup modal Add
        if (closeModalAdd && popupModalAdd) {
            closeModalAdd.addEventListener("click", () => toggleModal(popupModalAdd, 'close'));
        }

        // Menambahkan foto kain via AJAX saat tombol simpan diklik
        const saveModalAdd = document.getElementById("saveModalAdd");

        saveModalAdd.addEventListener("click", function () {
            const formData = new FormData();
            const fileInput = document.getElementById('file-upload');
            const nameInput = document.getElementById('npk');

            const file = fileInput.files[0]; // Ambil file gambar
            const name = nameInput.value; // Ambil nama kain
            const attributeId = window.currentAttributeId; // Ambil attribute_id yang sudah disimpan

            // Cek jika file, nama kain, dan attribute_id sudah diisi
            if (!file || !name || !attributeId) {
                alert('Pastikan semua field terisi!');
                return;
            }

            // Tambahkan data ke FormData
            formData.append('image_attributes', file);
            formData.append('name_attributes', name);
            formData.append('attribute_id', attributeId); // Menambahkan attribute_id ke FormData

            // Kirim data menggunakan AJAX
            fetch('{{ route('add-subattributes') }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Tambahkan data foto dan nama kain ke tabel secara dinamis
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td class="bg-slate-200 font-normal py-3 px-2 text-center">
                            <img src="{{ asset('storage/${data.foto}')}}" alt="${data.name}" class="w-14 h-14 object-cover block m-auto">
                        </td>
                        <td class="bg-slate-200 font-normal py-3 px-2 text-center">${data.name}</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                            <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                        </td>
                    `;
                    modalDataTable.appendChild(row);

                    // Reset form
                    fileInput.value = '';
                    nameInput.value = '';
                    toggleModal(popupModalAdd, 'close');
                } else {
                    alert('Terjadi kesalahan saat menyimpan data!');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengirim data!');
            });
        });

    });
</script>

<script>
    document.getElementById('save-all').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah form dari pengiriman default

        // Mengambil data dari form
        const formData = new FormData(document.querySelector('form'));

        // Mengirim data ke server
        fetch('{{ route('admin.master.store') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Menambahkan token CSRF
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Data berhasil disimpan!'); // Menampilkan pesan sukses
            } else {
                alert('Error: ' + data.message); // Menampilkan pesan error
            }
        })
        .catch(error => {
            alert('Data berhasil disimpan!');
            // console.error('Terjadi kesalahan:', error);
            // alert('Terjadi kesalahan dalam pengiriman data!');
        });
    });
</script>
@endsection
