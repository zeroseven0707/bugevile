@extends('layouts.app')
@section('content')
<div class="p-10 max-h-max">
    <div class="flex">
        <h1 class="text-2xl mb-4">Tambah Data Pemesanan</h1>
    </div>
    @if(session('success'))
    <div class="bg-green-500 text-white p-2 mb-4 rounded">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
        <div class="bg-red-500 text-white p-2 mb-4 rounded">
            {{ session('error') }}
        </div>
    @endif
    <div class="bg-white p-8 rounded-2xl">
        <form action="{{ url('/admin/master-pemesanan') }}" method="POST">
            @csrf
            <div class="space-y-9">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="id_pelanggan" class="block text-base/6 font-normal text-gray-900">Nama Konsumen</label>
                        <div class="mt-2">
                            <select id="id_pelanggan" name="id_pelanggan" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                <option selected>Pilih Konsumen</option>
                                @foreach ($pelanggan as $item)
                                    <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="no_telpon" class="block text-base/6 font-normal text-gray-900">Nomor Telepon</label>
                        <div class="mt-2">
                            <input type="text" name="no_telpon" id="no_telpon" autocomplete="no_telpon" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="alamat" class="block text-base/6 font-normal text-gray-900">Alamat</label>
                        <div class="mt-2">
                            <input type="text" name="alamat" id="alamat" autocomplete="alamat" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                </div>

                <div id="date-range-picker" date-rangepicker class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="relative sm:col-span-2 sm:col-start-1">
                        <label for="datepicker-range-start" class="block text-base/6 font-normal text-gray-900">Tanggal Masuk</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="datepicker-range-start" name="tanggal_masuk" type="text" class="block w-full font-normal rounded-md border-0 ps-10 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="relative sm:col-span-2">
                        <label for="datepicker-range-end" class="block text-base/6 font-normal text-gray-900">Tanggal Selesai</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="datepicker-range-end" name="tanggal_selesai" type="text" class="block w-full font-normal rounded-md border-0 ps-10 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="total_waktu_pengerjaan" class="block text-base/6 font-normal text-gray-900">Total Waktu Pengerjaan</label>
                        <div class="mt-2">
                            <input type="text" name="total_waktu_pengerjaan" id="total_waktu_pengerjaan" autocomplete="total_waktu_pengerjaan" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="jenis_produk" class="block text-base/6 font-normal text-gray-900">Jenis Produk</label>
                        <div class="mt-2">
                            <select id="jenis_produk" name="jenis_produk" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                <option selected>Pilih Produk</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product['nama_produk'] }}">{{ $product['nama_produk'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="jenis_pola" class="block text-base/6 font-normal text-gray-900">Jenis Pola</label>
                        <div class="mt-2">
                            <select id="jenis_pola" name="jenis_pola" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                <option selected>Pilih Pola</option>
                                @foreach ($pola as $pola)
                                    <option value="{{ $pola['jenis_pola'] }}">{{ $pola['jenis_pola'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="jenis_print" class="block text-base/6 font-normal text-gray-900">Jenis Print</label>
                        <div class="mt-2">
                            <select id="jenis_print" name="jenis_print" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                <option selected>Pilih Print</option>
                                @foreach ($print as $print)
                                    <option value="{{ $print['jenis_print'] }}">{{ $print['jenis_print'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-5">
                    <div class="sm:col-span-1 sm:col-start-1">
                        <label for="jumlah_produk" class="block text-base/6 font-normal text-gray-900">Jumlah Produk (QTY)</label>
                        <div class="mt-2">
                            <input type="number" name="jumlah_produk" id="jumlah_produk" autocomplete="address-level1" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6" min="0">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="harga_satuan" class="block text-base/6 font-normal text-gray-900">Harga Satuan Produk</label>
                        <div class="mt-2">
                            <input type="text" name="harga_satuan" id="harga_satuan" autocomplete="address-level1" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="total_harga" class="block text-base/6 font-normal text-gray-900">Total Harga</label>
                        <div class="mt-2">
                            <input type="text" name="total_harga" id="total_harga" autocomplete="total_harga" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="pembayaran_awal" class="block text-base/6 font-normal text-gray-900">Pembayaran Awal (DP)</label>
                        <div class="mt-2">
                            <input type="text" name="pembayaran_awal" id="pembayaran_awal" autocomplete="pembayaran_awal" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="sisa_pembayaran" class="block text-base/6 font-normal text-gray-900">Sisa Pembayaran</label>
                        <div class="mt-2">
                            <input type="text" name="sisa_pembayaran" id="sisa_pembayaran" autocomplete="sisa_pembayaran" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-10 border-b border-t py-9">
                    <div class="sm:col-span-1 sm:col-start-1">
                        <label for="xxs" class="block text-base/6 font-normal text-center text-gray-900">XXS</label>
                        <div class="mt-2">
                            <input type="number" name="qty_xxs" id="size-xxs" autocomplete="xxs" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="xs" class="block text-base/6 font-normal text-center text-gray-900">XS</label>
                        <div class="mt-2">
                            <input type="number"  name="qty_xs" id="size-xs" autocomplete="xs" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="s" class="block text-base/6 font-normal text-center text-gray-900">S</label>
                        <div class="mt-2">
                            <input type="number"  name="qty_s" id="size-s" autocomplete="s" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="m" class="block text-base/6 font-normal text-center text-gray-900">M</label>
                        <div class="mt-2">
                            <input type="number"  name="qty_m" id="size-m" autocomplete="m" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="l" class="block text-base/6 font-normal text-center text-gray-900">L</label>
                        <div class="mt-2">
                            <input type="number"  name="qty_l" id="size-l" autocomplete="l" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="xl" class="block text-base/6 font-normal text-center text-gray-900">XL</label>
                        <div class="mt-2">
                            <input type="number"  name="qty_xl" id="size-xl" autocomplete="xl" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="2xl" class="block text-base/6 font-normal text-center text-gray-900">2XL</label>
                        <div class="mt-2">
                            <input type="number"  name="qty_2xl" id="size-2xl" autocomplete="2xl" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="3xl" class="block text-base/6 font-normal text-center text-gray-900">3XL</label>
                        <div class="mt-2">
                            <input type="number"  name="qty_3xl" id="size-3xl" autocomplete="3xl" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="4xl" class="block text-base/6 font-normal text-center text-gray-900">4XL</label>
                        <div class="mt-2">
                            <input type="number"  name="qty_4xl" id="size-4xl" autocomplete="4xl" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="5xl" class="block text-base/6 font-normal text-center text-gray-900">5XL</label>
                        <div class="mt-2">
                            <input type="number"  name="qty_5xl" id="size-5xl" autocomplete="5xl" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-9 mx-auto flex items-center justify-end gap-x-4">
                <a href="detail-pemesanan.php"><button class="rounded-md bg-blue-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Print <i class="ri-printer-fill"></i></button></a>
                <button type="submit" class="rounded-md bg-green-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan Data Pemesanan <i class="ri-save-2-fill"></i></button>
            </div>
        </form>
    </div>
    <div class="block mt-9">
        <h1 class="text-2xl mb-4">Data Master Pemesanan</h1>
        <div class="bg-white p-6 rounded-2xl">
            <div class="flex justify-between items-end mb-4 w-full">
                <div class="relative">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Cari</label>
                </div>
            </div>
            <div class="px-3 border">
                <table id="datatable" class="display w-full">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Transaksi</th>
                            <th>Tanggal Masuk</th>
                            <th>Produk</th>
                            <th>Pelanggan</th>
                            <th>Progress</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemesanans as $key => $pemesanan)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $pemesanan['nomor_transaksi'] }}</td>
                            <td>{{ $pemesanan['tanggal_masuk'] }}</td>
                            <td>{{ $pemesanan['jenis_produk'] }}</td>
                            <td>{{ $pemesanan->pelanggan->nama }}</td>
                            <td>Desain</td>
                            <td>
                                <div class="flex gap-2 justify-center">
                                    <a href="{{ url('admin/detail-pemesanan/'.$pemesanan['id']) }}">
                                        <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700"><i class="ri-search-line"></i></button>
                                    </a>
                                    <form action="{{ url('/admin/master-pemesanan/'.$pemesanan['id']) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700"><i class="ri-delete-bin-line"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $('#datatable').DataTable();
});

    document.addEventListener('DOMContentLoaded', function () {
    const selectPelanggan = document.getElementById('id_pelanggan');
    const inputNomorTelepon = document.getElementById('no_telpon');
    const inputAlamat = document.getElementById('alamat');

    selectPelanggan.addEventListener('change', function () {
        const pelangganId = this.value;

        // Jika tidak ada pelanggan yang dipilih, keluar dari fungsi
        if (!pelangganId) {
            inputNomorTelepon.value = '';
            inputAlamat.value = '';
            return;
        }

        // Melakukan permintaan ke server untuk mendapatkan data pelanggan
        fetch(`/find-pelanggan/${pelangganId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Mengisi inputan dengan data pelanggan yang diterima
                    inputNomorTelepon.value = data.nomor_telepon || ''; // Sesuaikan dengan nama field dari response
                    inputAlamat.value = data.alamat || ''; // Sesuaikan dengan nama field dari response
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        });
    });
</script>
<script>
    document.getElementById('jumlah_produk').addEventListener('input', function() {
        const qty = parseInt(this.value) || 0; // Ambil nilai qty, default ke 0 jika tidak valid
        const sizeInputs = document.querySelectorAll('input[type="number"][name^="qty_"]'); // Ambil semua input ukuran

        let total = 0; // Total jumlah yang diinput

        // Tambahkan event listener untuk setiap input ukuran
        sizeInputs.forEach(input => {
            input.addEventListener('input', function() {
                total = Array.from(sizeInputs).reduce((sum, input) => sum + (parseInt(input.value) || 0), 0);
                if (total > qty) {
                    alert('Total jumlah produk tidak boleh melebihi ' + qty);
                    this.value = 0; // Reset input yang melebihi
                }
            });
        });
    });
</script>
<script>
    // Fungsi untuk menghitung total harga dan sisa pembayaran
    function hitungTotalHarga() {
        // Ambil nilai dari input jumlah produk dan harga satuan
        const jumlahProduk = parseFloat(document.getElementById('jumlah_produk').value) || 0;
        const hargaSatuan = parseFloat(document.getElementById('harga_satuan').value) || 0;

        // Hitung total harga
        const totalHarga = jumlahProduk * hargaSatuan;

        // Tampilkan total harga di input total_harga
        document.getElementById('total_harga').value = totalHarga.toFixed(2); // Format menjadi 2 desimal

        // Ambil nilai dari input pembayaran awal
        const pembayaranAwal = parseFloat(document.getElementById('pembayaran_awal').value) || 0;

        // Hitung sisa pembayaran
        const sisaPembayaran = totalHarga - pembayaranAwal;

        // Tampilkan sisa pembayaran di input sisa_pembayaran
        document.getElementById('sisa_pembayaran').value = sisaPembayaran.toFixed(2); // Format menjadi 2 desimal
    }

    // Fungsi untuk menghitung sisa pembayaran jika ada perubahan pada pembayaran awal
    function hitungSisaPembayaran() {
        const totalHarga = parseFloat(document.getElementById('total_harga').value) || 0;
        const pembayaranAwal = parseFloat(document.getElementById('pembayaran_awal').value) || 0;

        const sisaPembayaran = totalHarga - pembayaranAwal;

        document.getElementById('sisa_pembayaran').value = sisaPembayaran.toFixed(2); // Format menjadi 2 desimal
    }

    // Tambahkan event listener pada input
    document.getElementById('jumlah_produk').addEventListener('input', hitungTotalHarga);
    document.getElementById('harga_satuan').addEventListener('input', hitungTotalHarga);
    document.getElementById('pembayaran_awal').addEventListener('input', hitungSisaPembayaran);
</script>
@endsection
