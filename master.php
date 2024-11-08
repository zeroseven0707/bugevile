<?php include 'layout/menu.php' ?>
<div class="p-10 max-h-max">
    <div class="flex">
        <h1 class="text-2xl mb-4">Tambah Data Produk</h1>
    </div>
    <div class="bg-white p-8 rounded-2xl">
        <form>
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-base/6 font-normal text-gray-900">Kode Produk</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-base/6 font-normal text-gray-900">Nama Produk</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-6">
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-base/6 font-normal text-gray-900">Jenis Pola</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-base/6 font-normal text-gray-900">Total Harga Spesifikasi</label>
                            <div class="mt-2">
                                <div class="relative">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                    <button type="button" id="openModal" style="transform:translateY(-50%); top:50%;" class="absolute right-3 rounded-md bg-blue-500 px-3 py-1 text-sm font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah Spesifikasi <i class="ri-add-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-6">
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-base/6 font-normal text-gray-900">Jenis Print</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-base/6 font-normal text-gray-900">Total Harga Print</label>
                            <div class="mt-2">
                                <div class="relative">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                    <button type="button" style="transform:translateY(-50%); top:50%;" class="absolute right-3 rounded-md bg-blue-500 px-3 py-1 text-sm font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah Spesifikasi Print <i class="ri-add-fill"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-base/6 font-normal text-gray-900">Harga Produksi</label>
                        <div class="mt-2">
                            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="region" class="block text-base/6 font-normal text-gray-900">Harga Jual</label>
                        <div class="mt-2">
                            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="postal-code" class="block text-base/6 font-normal text-gray-900">Laba</label>
                        <div class="mt-2">
                            <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-5">
                <button type="button" id="openModalFoto" class="rounded-md bg-blue-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah Foto Referensi <i class="ri-image-add-fill"></i></button>
                <button type="submit" class="rounded-md bg-green-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan Data Produk <i class="ri-save-2-fill"></i></button>
            </div>
        </form>
    </div>

    <div class="grid grid-cols-2 gap-8 mt-6">
        <div class="bg-white p-8 rounded-2xl hidden" id="popupModal">
            <div class="px-3 border">
                <table class="border-separate border-0 border-spacing-y-3 w-full">
                    <tr>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1">No</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Atribut</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Harga</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2">Aksi</th>
                    </tr>
                    <tr>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">1</td>
                        <td class="bg-slate-200 font-normal py-3 text-start px-5">
                            <div class="relative flex justify-between">
                                Kain
                                <button type="button" id="openModalAdd" class="rounded-md bg-blue-500 px-3 py-1 text-xs font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah Foto <i class="ri-add-fill"></i></button>
                            </div>
                        </td>
                        <td class="bg-slate-200 font-normal py-3 px-2 text-center">17.500</td>
                        <td class="bg-slate-200 font-normal py-3 px-1 text-center">
                            <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-pencil-line"></i></button>
                            <button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-slate-200 font-normal py-3 text-center" colspan="4"><button><i class="ri-add-circle-fill"></i> Tambah Atribut Baru</button></td>
                    </tr>
                </table>
            </div>
            <button type="submit" class="mt-5 rounded-md bg-green-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan Spesifikasi <i class="ri-save-2-fill"></i></button>
        </div>
        <div class="bg-white p-8 rounded-2xl sticky top-24 left-0 max-h-max hidden" id="popupModalFoto">
            <div class="col-span-full">
                <label for="cover-photo" class="block text-base/6 font-normal text-gray-900">Foto Referensi Jersey</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:40vw;">
                    <div class="text-center flex flex-col items-center justify-center">
                    <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                    </svg>
                    <div class="mt-4 flex text-sm/6 justify-center text-gray-600 ">
                        <label for="file-upload" class="relative text-center cursor-pointer rounded-md bg-white font-semibold text-slate-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                        <span class="text-center">Klik disini untuk upload</span>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                    </div>
                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                    </div>
                </div>
                </div>
        </div>
    </div>

    <!-- Popup Modal -->
    <div id="popupModalAdd" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 overflow-y-scroll py-5 flex flex-col items-center justify-center z-50">
        <div class="absolute top-0 py-8 w-full flex flex-col items-center gap-5">
            <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md	">
                <div class="items-start gap-6">
                    <div class="relative">
                        <form action="">
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
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                    </div>
                                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF ukuran maksimal 2MB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative mt-5">
                                <label for="npk">Nama Kain :</label>
                                <input type="text" name="npks[]" id="npk" required class="w-full border border-gray-300 p-2 mb-2" placeholder="Isi nama kain">
                            </div>
                        </form>
                        <div class="mt-3 flex justify-start gap-3">
                            <button type="button" class="px-4 py-2 bg-red-500 text-white rounded-md shadow hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                                Tutup
                            </button>
                            <button id="closeModalAdd" type="button" class="px-4 py-2 bg-green-500 text-white rounded-md shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
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
                                <tr>
                                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-2/6">Foto</th>
                                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-2/6">Nama Kain</th>
                                    <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-2/6">Aksi</th>
                                </tr>
                                <tr>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center"><img src="images/kain.png" alt="" class="w-14 h-14 object-cover block m-auto"></td>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center">Milano</td>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center"><button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center"><img src="images/kain.png" alt="" class="w-14 h-14 object-cover block m-auto"></td>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center">Milano</td>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center"><button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center"><img src="images/kain.png" alt="" class="w-14 h-14 object-cover block m-auto"></td>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center">Milano</td>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center"><button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center"><img src="images/kain.png" alt="" class="w-14 h-14 object-cover block m-auto"></td>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center">Milano</td>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center"><button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center"><img src="images/kain.png" alt="" class="w-14 h-14 object-cover block m-auto"></td>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center">Milano</td>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center"><button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center"><img src="images/kain.png" alt="" class="w-14 h-14 object-cover block m-auto"></td>
                                    <td class="bg-slate-200 font-normal py-3 px-2 text-center">Milano</td>
                                    <td class="bg-slate-200 font-normal py-3 px-1 text-center"><button type="button" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script>
    const openModal = document.getElementById("openModal");
    const closeModal = document.getElementById("closeModal");
    const popupModal = document.getElementById("popupModal");

    // Tampilkan modal saat tombol "Selesai" diklik
    openModal.addEventListener("click", () => {
        popupModal.classList.remove("hidden");
    });

    // Sembunyikan modal saat tombol "Tutup" diklik
    closeModal.addEventListener("click", () => {
        popupModal.classList.add("hidden");
    });
</script>

<script>
    const openModalFoto = document.getElementById("openModalFoto");
    const closeModalFoto = document.getElementById("closeModalFoto");
    const popupModalFoto = document.getElementById("popupModalFoto");

    // Tampilkan modal saat tombol "Selesai" diklik
    openModalFoto.addEventListener("click", () => {
        popupModalFoto.classList.remove("hidden");
    });

    // Sembunyikan modal saat tombol "Tutup" diklik
    closeModalFoto.addEventListener("click", () => {
        popupModalFoto.classList.add("hidden");
    });
</script>

<script>
    const openModalAdd = document.getElementById("openModalAdd");
    const closeModalAdd = document.getElementById("closeModalAdd");
    const popupModalAdd = document.getElementById("popupModalAdd");

    // Tampilkan modal saat tombol "Selesai" diklik
    openModalAdd.addEventListener("click", () => {
        popupModalAdd.classList.remove("hidden");
    });

    // Sembunyikan modal saat tombol "Tutup" diklik
    closeModalAdd.addEventListener("click", () => {
        popupModalAdd.classList.add("hidden");
    });
</script>
<?php include 'layout/footer.php' ?>