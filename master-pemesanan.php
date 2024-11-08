<?php include 'layout/menu.php' ?>
<div class="p-10 max-h-max">
    <div class="flex">
        <h1 class="text-2xl mb-4">Tambah Data Pemesanan</h1>
    </div>
    <div class="bg-white p-8 rounded-2xl">
        <form>
            <div class="space-y-9">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="countries" class="block text-base/6 font-normal text-gray-900">Nama Konsumen</label>
                        <div class="mt-2">                     
                            <form>
                            <select id="countries" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                <option selected>Pilih Konsumen</option>
                                <option value="US">Pak Oceng</option>
                                <option value="CA">Muhamad Rafli</option>
                                <option value="FR">Abdul Yakub Hasbullah</option>
                                <option value="DE">Muhamad Suhabuddin</option>
                                <option value="DE">Diky Rayi Pamungkas</option>
                            </select>
                            </form>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="region" class="block text-base/6 font-normal text-gray-900">Nomor Telepon</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-base/6 font-normal text-gray-900">Alamat</label>
                        <div class="mt-2">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                </div>
                
                <div id="date-range-picker" date-rangepicker class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="relative sm:col-span-2 sm:col-start-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-gray-900">Tanggal Masuk</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="datepicker-range-start" name="start" type="text" class="block w-full font-normal rounded-md border-0 ps-10 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="relative sm:col-span-2">
                        <label for="postal-code" class="block text-base/6 font-normal text-gray-900">Tanggal Selesai</label>
                        <div class="mt-2 relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="datepicker-range-end" name="end" type="text" class="block w-full font-normal rounded-md border-0 ps-10 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-base/6 font-normal text-gray-900">Total Waktu Pengerjaan</label>
                        <div class="mt-2">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="countries" class="block text-base/6 font-normal text-gray-900">Jenis Produk</label>
                        <div class="mt-2">                     
                            <form>
                            <select id="countries" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                <option selected>Pilih Produk</option>
                                <option value="US">Jersey Roadbike Pendek</option>
                                <option value="CA">Jersey Roadbike Panjang</option>
                            </select>
                            </form>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="countries" class="block text-base/6 font-normal text-gray-900">Jenis Pola</label>
                        <div class="mt-2">                     
                            <form>
                            <select id="countries" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                <option selected>Pilih Pola</option>
                                <option value="US">Pola Classic</option>
                                <option value="CA">Pola Reglan</option>
                            </select>
                            </form>
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="countries" class="block text-base/6 font-normal text-gray-900">Jenis Print</label>
                        <div class="mt-2">                     
                            <form>
                            <select id="countries" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                <option selected>Pilih Print</option>
                                <option value="US">Single Print</option>
                                <option value="CA">Full Print</option>
                            </select>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-5">
                    <div class="sm:col-span-1 sm:col-start-1">
                        <label for="region" class="block text-base/6 font-normal text-gray-900">Jumlah Produk (QTY)</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    
                    <div class="sm:col-span-1">
                        <label for="region" class="block text-base/6 font-normal text-gray-900">Harga Satuan Produk</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-gray-900">Total Harga</label>
                        <div class="mt-2">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-gray-900">Pembayaran Awal (DP)</label>
                        <div class="mt-2">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-gray-900">Sisa Pembayaran</label>
                        <div class="mt-2">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-10 border-b border-t py-9">
                    <div class="sm:col-span-1 sm:col-start-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">XXS</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">XS</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">S</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">M</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">L</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">XL</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">2XL</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">3XL</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">4XL</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                    <div class="sm:col-span-1">
                        <label for="postal-code" class="block text-base/6 font-normal text-center text-gray-900">5XL</label>
                        <div class="mt-2">
                            <input type="number" name="postal-code" id="postal-code" autocomplete="postal-code" class="text-center block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-9 mx-auto flex items-center justify-end gap-x-4">
                <a href="detail-pemesanan.php"><button type="submit" class="rounded-md bg-blue-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Print <i class="ri-printer-fill"></i></button></a>
                <a href="detail-pemesanan.php"><button type="submit" class="rounded-md bg-green-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan Data Pemesanan <i class="ri-save-2-fill"></i></button></a>
            </div>
        </form>
    </div>
    <div class="block mt-9">
        <h1 class="text-2xl mb-4">Data Master Pemesanan</h1>
        <div class="bg-white p-6 rounded-2xl">
            <div class="flex justify-between items-end mb-4 w-full">
                <form class="w-max flex justify-center items-center gap-3">
                    <select id="countries" class="bg-slate-600 text-white border border-slate-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 px-4 py-2.5">
                        <option selected>Urutkan Berdasarkan</option>
                        <option value="US">Tanggal Masuk</option>
                        <option value="DE">Produk</option>
                        <option value="DE">Pelanggan</option>
                        <option value="DE">Progress</option>
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
                        <input type="search" id="default-search" class="block w-full p-4 py-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-slate-600 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Pesanan" required />
                        <button type="submit" style="top:50%; transform:translateY(-50%);" class="text-white absolute right-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-normal rounded-lg text-sm px-3 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </div>
                </form>

            </div>
            <div class="px-3 border">
                <table class="border-separate border-0 border-spacing-y-3 w-full">
                    <tr>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-10">No</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Nomor Transaksi</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Tanggal Masuk</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Produk</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Pelanggan</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Progress</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-10">Aksi</th>
                    </tr>
                    <tr>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">1</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">PO20242510034259</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">26/08/2024</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Jersey Roadbike Pendek</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Pak Oceng</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Desain</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-search-line"></i></button>
                                <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">2</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">PO20242510034259</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">12/10/2024</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Jersey Roadbike Panjang</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Muhamad Rafli</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Pola</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-search-line"></i></button>
                                <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">3</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">PO20242510034259</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">16/11/2024</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Jersey Roadbike Panjang</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Muhamad Sihabuddin</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Layout Print</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-search-line"></i></button>
                                <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">4</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">PO20242510034259</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">05/11/2024</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Jersey Roadbike Pendek</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Abdul Yakup Hasbullah</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">Press</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-search-line"></i></button>
                                <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include 'layout/footer.php' ?>