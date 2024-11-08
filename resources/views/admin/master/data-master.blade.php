@extends('layouts.app')

@section('content')
<div class="p-10 max-h-max">
    <div class="flex">
        <h1 class="text-2xl mb-4">Data Master Produk</h1>
    </div>
    <div class="bg-white p-6 rounded-2xl">
        <div class="flex justify-between items-end mb-4 w-full">
            <form class="w-max flex justify-center items-center gap-3">
                <select id="countries" class="bg-slate-600 text-white border border-slate-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 px-4 py-2.5">
                    <option selected>Urutkan Berdasarkan</option>
                    <option value="US">Kode</option>
                    <option value="DE">Nama Produk</option>
                    <option value="CA">Jenis Pola</option>
                    <option value="FR">Jenis Print</option>
                </select>
            </form>

            <form class="m-max">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 py-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-slate-600 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Produk" required />
                    <button type="submit" style="top:50%; transform:translateY(-50%);" class="text-white absolute right-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-normal rounded-lg text-sm px-3 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                </div>
            </form>

        </div>
        <div class="px-3 border">
            <table class="border-separate border-0 border-spacing-y-3 w-full">
                <tr>
                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">No</th>
                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">Kode</th>
                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">Nama Produk</th>
                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">Jenis Pola</th>
                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">Jenis Print</th>
                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">Harga Pola</th>
                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">Harga Print</th>
                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">Harga Jual</th>
                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Aksi</th>
                </tr>
                @foreach ($products as $key => $product)
                    <tr>
                        <td class="font-normal bg-slate-200 py-3 px-1 text-center">{{ $key+1 }}</td>
                        <td class="font-normal bg-slate-200 py-3 px-1 text-center">{{ $product['kode_produk'] }}</td>
                        <td class="font-normal bg-slate-200 py-3 px-1 text-center">{{ $product['nama_produk'] }}</td>
                        <td class="font-normal bg-slate-200 py-3 px-1 text-center">{{ $product['jenis_pola'] }}</td>
                        <td class="font-normal bg-slate-200 py-3 px-1 text-center">{{ $product['jenis_print'] }}</td>
                        <td class="font-normal bg-slate-200 py-3 px-1 text-center">Rp. {{ number_format($product['total_harga_spesifikasi']) }}</td>
                        <td class="font-normal bg-slate-200 py-3 px-1 text-center">Rp. {{ number_format($product['total_harga_print']) }}</td>
                        <td class="font-normal bg-slate-200 py-3 px-1 text-center">Rp. {{ number_format($product['harga_jual']) }}</td>
                        <td class="font-normal bg-slate-200 py-3 px-1 text-center">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-edit-2-line"></i></button>
                                <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
