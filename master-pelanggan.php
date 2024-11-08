<?php include 'layout/menu.php' ?>
<div class="p-10 max-h-max">
    <div class="flex">
        <h1 class="text-2xl mb-4">Tambah Data Pelanggan</h1>
    </div>
    <div class="bg-white p-8 rounded-2xl">
        <form>
            <div class="space-y-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-base/6 font-normal text-gray-900">Nama Pelanggan</label>
                        <div class="mt-2">
                            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
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
            </div>

            <div class="mt-7 mx-auto flex items-center justify-center gap-x-6">
                <button type="submit" class="rounded-md bg-green-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan Data Pelanggan <i class="ri-save-2-fill"></i></button>
            </div>
        </form>
    </div>
    <div class="block mt-9">
        <h1 class="text-2xl mb-4">Data Master Pelanggan</h1>
        <div class="bg-white p-6 rounded-2xl">
            <div class="flex justify-between items-end mb-4 w-full">
                <form class="w-max flex justify-center items-center gap-3">
                    <select id="countries" class="bg-slate-600 text-white border border-slate-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 px-4 py-2.5">
                        <option selected>Urutkan Berdasarkan</option>
                        <option value="US">Nama</option>
                        <option value="DE">Alamat</option>
                        <option value="DE">Terbaru</option>
                        <option value="DE">Terlama</option>
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
                        <input type="search" id="default-search" class="block w-full p-4 py-2.5 ps-10 text-sm text-white border border-gray-300 rounded-lg bg-slate-600 focus:ring-blue-500 focus:border-blue-500 " placeholder="Cari Pelanggan" required />
                        <button type="submit" style="top:50%; transform:translateY(-50%);" class="text-white absolute right-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-normal rounded-lg text-sm px-3 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </div>
                </form>

            </div>
            <div class="px-3 border">
                <table class="border-separate border-0 border-spacing-y-3 w-full">
                    <tr>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-10">No</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Nama Pelanggan</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Nomor Telepon</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Alamat</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-10">Aksi</th>
                    </tr>
                    <tr>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">1</td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">Pak Oceng</td>
                        <td class="border bg-slate-200 font-normal py-3 px-2 text-center">
                            <div class="relative flex justify-center items-center gap-2">
                                (+62) 87866291056
                                <button type="button" class="rounded-md bg-green-500 px-1 py-0.5 text-xs font-normal text-white shadow-sm hover:bg-green-700"><i class="ri-phone-fill"></i></button>
                            </div>
                        </td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">Cibeureum</td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-edit-2-line"></i></button>
                                <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">2</td>
                        <td class="border bg-slate-200 font-normal py-3 px-2 text-center">Muhamad Rafli</td>
                        <td class="border bg-slate-200 font-normal py-3 px-2 text-center">
                            <div class="relative flex justify-center items-center gap-2">
                                (+62) 895610411991
                                <button type="button" class="rounded-md bg-green-500 px-1 py-0.5 text-xs font-normal text-white shadow-sm hover:bg-green-700"><i class="ri-phone-fill"></i></button>
                            </div>
                        </td>
                        <td class="border bg-slate-200 font-normal py-3 px-2 text-center">Kp. Bojongnangka 02/03 Sukamenak Purbaratu</td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center ">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-edit-2-line"></i></button>
                                <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">3</td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">Abdul Yakub Hasbullah</td>
                        <td class="border bg-slate-200 font-normal py-3 px-2 text-center">
                            <div class="relative flex justify-center items-center gap-2">
                                (+62) 878561357189
                                <button type="button" class="rounded-md bg-green-500 px-1 py-0.5 text-xs font-normal text-white shadow-sm hover:bg-green-700"><i class="ri-phone-fill"></i></button>
                            </div>
                        </td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">Singaparna</td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-edit-2-line"></i></button>
                                <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">4</td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">Muhamad Sihabuddin</td>
                        <td class="border bg-slate-200 font-normal py-3 px-2 text-center">
                            <div class="relative flex justify-center items-center gap-2">
                                (+62) 856716536751
                                <button type="button" class="rounded-md bg-green-500 px-1 py-0.5 text-xs font-normal text-white shadow-sm hover:bg-green-700"><i class="ri-phone-fill"></i></button>
                            </div>
                        </td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">Komplek Eks Kewedanaan Singaparna SINGASARI KEC. SINGAPARNA KAB. TASIKMALAYA</td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-edit-2-line"></i></button>
                                <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">3</td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">Diky Rayi Pamungkas</td>
                        <td class="border bg-slate-200 font-normal py-3 px-2 text-center">
                            <div class="relative flex justify-center items-center gap-2">
                                (+62) 86235624742
                                <button type="button" class="rounded-md bg-green-500 px-1 py-0.5 text-xs font-normal text-white shadow-sm hover:bg-green-700"><i class="ri-phone-fill"></i></button>
                            </div>
                        </td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">Jl. Pataruman Tasikmalaya</td>
                        <td class="border bg-slate-200 font-normal py-3 px-1 text-center">
                            <div class="flex gap-2 justify-center">
                                <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-edit-2-line"></i></button>
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