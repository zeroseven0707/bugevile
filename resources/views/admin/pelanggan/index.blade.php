@extends('layouts.app')
@section('content')
<div class="p-10 max-h-max">
    <div class="flex justify-between items-center">
        <h1 class="text-2xl mb-4">Tambah Data Pelanggan</h1>
        @if(session('success'))
            <div class="alert text-green-400 text-semibold alert-success">{{ session('success') }}</div>
        @endif
    </div>
    <div class="bg-white p-8 rounded-2xl">
        <form action="{{ route('admin.pelanggan.store') }}" method="POST">
            @csrf
            <div class="space-y-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="nama" class="block text-base/6 font-normal text-gray-900">Nama Pelanggan</label>
                        <div class="mt-2">
                            <input type="text" name="nama" id="nama" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="nomor_telepon" class="block text-base/6 font-normal text-gray-900">Nomor Telepon</label>
                        <div class="mt-2">
                            <input type="text" name="nomor_telepon" id="nomor_telepon" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="alamat" class="block text-base/6 font-normal text-gray-900">Alamat</label>
                        <div class="mt-2">
                            <input type="text" name="alamat" id="alamat" autocomplete="postal-code" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
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
                <form class="w-max text-white flex justify-center items-center gap-3">
                    <select id="countries" class="bg-slate-600 text-white border border-slate-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 px-4 py-2.5" onchange="filterPelanggan()">
                        <option selected disabled>Urutkan Berdasarkan</option>
                        <option value="terbaru">Terbaru</option>
                        <option value="terlama">Terlama</option>
                        <option value="a-z">Dari A - Z</option>
                        <option value="z-a">Dari Z - A</option>
                    </select>
                </form>

                <div class="m-max">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" name="search" id="default-search" class="block w-full p-4 py-2.5 ps-10 text-sm text-white border border-gray-300 rounded-lg bg-slate-600 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Pelanggan" oninput="searchPelanggan()" />

                        <button type="button" style="top:50%; transform:translateY(-50%);" class="text-white absolute right-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-normal rounded-lg text-sm px-3 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </div>
                </div>

            </div>
            <div class="px-3 border">
                <table class="border-separate border-0 border-spacing-y-3 w-full" id="pelanggan-table">
                    <thead>
                        <tr>
                            <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-10">No</th>
                            <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Nama Pelanggan</th>
                            <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Nomor Telepon</th>
                            <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-44">Alamat</th>
                            <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-10">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="pelanggan-data">
                    @foreach($pelanggan as $index => $p)
                        <tr>
                            <td class="border bg-slate-200 font-normal py-3 px-1 text-center">{{ $index + 1 }}</td>
                            <td class="border bg-slate-200 font-normal py-3 px-1 text-center">{{ $p->nama }}</td>
                            <td class="border bg-slate-200 font-normal py-3 px-2 text-center">{{ $p->nomor_telepon }}</td>
                            <td class="border bg-slate-200 font-normal py-3 px-1 text-center">{{ $p->alamat }}</td>
                            <td class="border bg-slate-200 font-normal py-3 px-1 text-center">
                                <div class="flex gap-2 justify-center">
                                    <button type="button" onclick="openEditPopup({{ $p->id }}, '{{ $p->nama }}', '{{ $p->nomor_telepon }}', '{{ $p->alamat }}')" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-edit-2-line"></i></button>
                                    <form onsubmit="event.preventDefault(); openDeleteModal('{{ route('admin.pelanggan.destroy', $p->id) }}');">
                                        <button type="submit" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
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

<!-- Modal untuk konfirmasi hapus -->
<div id="deleteConfirmationModal" class="modal hidden">
    <div class="modal-content w-3/12">
        <h2 class="text-lg font-semibold mb-1">Konfirmasi Hapus</h2>
        <p>Apakah Anda yakin ingin menghapus pelanggan ini?</p>
        <div class="flex justify-end mt-4">
            <button id="cancelDelete" class="bg-gray-300 px-4 py-2 rounded-md mr-2">Batal</button>
            <button id="confirmDelete" class="bg-red-500 text-white px-4 py-2 rounded-md">Hapus</button>
        </div>
    </div>
</div>

<div id="editPopup" class="popup">
    <div class="w-4/12 bg-white p-5 rounded-md">
        <form id="editForm" action="{{ route('admin.pelanggan.update') }}" method="post">
            @csrf <!-- Menambahkan token CSRF -->
            <input type="hidden" name="id_user" id="edit_id_user" value="" />

            <div class="block mb-4">
                <label for="edit_nama">Nama Pelanggan :</label>
                <input type="text" name="nama" id="edit_nama" required class="w-full border border-gray-300 p-2 mt-1" placeholder="Nama Pelanggan">
            </div>

            <div class="block mb-4">
                <label for="edit_nomor_telepon">Nomor Telepon :</label>
                <input type="text" name="nomor_telepon" id="edit_nomor_telepon" required class="w-full border border-gray-300 p-2 mt-1" placeholder="Nomor Telepon">
            </div>

            <div class="block mb-4">
                <label for="edit_alamat">Alamat :</label>
                <input type="text" name="alamat" id="edit_alamat" required class="w-full border border-gray-300 p-2 mt-1" placeholder="Alamat">
            </div>

            <div class="flex mt-1 justify-end gap-3">
                <button type="button" onclick="closeEditPopup()" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-700">Batal</button>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-700">Simpan <i class="ri-save-2-fill"></i></button>
            </div>
        </form>
    </div>
</div>


<script>
    function filterPelanggan() {
        const filterValue = document.getElementById('countries').value;

        fetch(`{{ route('admin.pelanggan.filterAjax') }}?filter=${filterValue}`)
            .then(response => response.json())
            .then(data => {
                const pelangganData = document.getElementById('pelanggan-data');
                pelangganData.innerHTML = ""; // Kosongkan tabel sebelum menambah data baru

                data.forEach((pelanggan, index) => {
                    const row = `
                        <tr>
                            <td class="border bg-slate-200 font-normal py-3 px-1 text-center">${index + 1}</td>
                            <td class="border bg-slate-200 font-normal py-3 px-1 text-center">${pelanggan.nama}</td>
                            <td class="border bg-slate-200 font-normal py-3 px-2 text-center">${pelanggan.nomor_telepon}</td>
                            <td class="border bg-slate-200 font-normal py-3 px-1 text-center">${pelanggan.alamat}</td>
                            <td class="border bg-slate-200 font-normal py-3 px-1 text-center">
                                <div class="flex gap-2 justify-center">
                                    <button type="button" onclick="openEditPopup(${pelanggan.id}, '${pelanggan.nama}', '${pelanggan.nomor_telepon}', '${pelanggan.alamat}')"
                                        class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        <i class="ri-edit-2-line"></i>
                                    </button>
                                    <form onsubmit="event.preventDefault(); openDeleteModal('/admin/pelanggan/${pelanggan.id}/delete');">
                                        <button type="submit"
                                            class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    `;
                    pelangganData.innerHTML += row;
                });
            })
            .catch(error => console.error('Error:', error));
    }
</script>

<script>
    // Ambil elemen body tabel pelanggan
    const pelangganData = document.getElementById('pelanggan-data');
    // Simpan data asli tabel pelanggan
    const originalData = pelangganData.innerHTML;

    function searchPelanggan() {
        const keyword = document.getElementById('default-search').value;

        if (keyword) {
            // Jika ada keyword, lakukan pencarian AJAX
            fetch(`{{ route('admin.pelanggan.searchAjax') }}?search=${keyword}`)
                .then(response => response.json())
                .then(data => {
                    pelangganData.innerHTML = ""; // Kosongkan tabel sebelum menambah data baru

                    // Jika data ditemukan, tampilkan hasil pencarian
                    if (data.length > 0) {
                        data.forEach((pelanggan, index) => {
                            const row = `
                                <tr>
                                    <td class="border bg-slate-200 font-normal py-3 px-1 text-center">${index + 1}</td>
                                    <td class="border bg-slate-200 font-normal py-3 px-1 text-center">${pelanggan.nama}</td>
                                    <td class="border bg-slate-200 font-normal py-3 px-2 text-center">${pelanggan.nomor_telepon}</td>
                                    <td class="border bg-slate-200 font-normal py-3 px-1 text-center">${pelanggan.alamat}</td>
                                    <td class="border bg-slate-200 font-normal py-3 px-1 text-center">
                                        <div class="flex gap-2 justify-center">
                                            <button type="button" onclick="openEditPopup(${pelanggan.id}, '${pelanggan.nama}', '${pelanggan.nomor_telepon}', '${pelanggan.alamat}')"
                                                class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                <i class="ri-edit-2-line"></i>
                                            </button>
                                            <form onsubmit="event.preventDefault(); openDeleteModal('/admin/pelanggan/${pelanggan.id}/delete');">
                                                <button type="submit"
                                                    class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            `;
                            pelangganData.innerHTML += row;
                        });
                    } else {
                        pelangganData.innerHTML = `<tr><td colspan="5" class="text-center py-3">Tidak ada data yang ditemukan</td></tr>`;
                    }
                })
                .catch(error => console.error('Error:', error));
        } else {
            // Jika keyword kosong, tampilkan data asli
            pelangganData.innerHTML = originalData;
        }
    }

</script>

<script>
    function openEditPopup(id, nama, nomor_telepon, alamat) {
        document.getElementById('edit_id_user').value = id;
        document.getElementById('edit_nama').value = nama;
        document.getElementById('edit_nomor_telepon').value = nomor_telepon;
        document.getElementById('edit_alamat').value = alamat;

        document.getElementById('editPopup').classList.add('active_popup');
    }

    function closeEditPopup() {
        document.getElementById('editPopup').classList.remove('active_popup');
    }
</script>

<script>
    let deleteFormAction = '';

    function openDeleteModal(formAction) {
        deleteFormAction = formAction; // Simpan action dari form yang ingin dihapus
        document.getElementById('deleteConfirmationModal').classList.remove('hidden');
    }

    document.getElementById('cancelDelete').addEventListener('click', function() {
        document.getElementById('deleteConfirmationModal').classList.add('hidden');
    });

    document.getElementById('confirmDelete').addEventListener('click', function() {
        // Jika user mengkonfirmasi, kirim form
        const form = document.createElement('form');
        form.action = deleteFormAction;
        form.method = 'POST';
        form.innerHTML = `
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="DELETE">
        `;
        document.body.appendChild(form);
        form.submit();
    });
</script>

@endsection
