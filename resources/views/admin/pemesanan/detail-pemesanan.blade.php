@extends('layouts.app')
@section('content')
<div class="p-10 max-h-max">
    <div class="flex justify-between items-start">
        <h1 class="text-2xl mb-4">Data Pemesanan | PO20242510034259</h1>
        <a href="{{ url('admin/master-pemesanan') }}">
            <button type="button" class="selesai-button rounded-md bg-red-500 px-5 py-2 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kembali</button>
        </a>
    </div>
    <div class="grid grid-cols-2 gap-8 mt-2">
        <div>
            <div class="bg-white p-8 rounded-2xl mb-6">
                <table class="border-separate border-spacing-3 border border-slate-500 w-full">
                    <tr>
                        <th class="border border-slate-700 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase" colspan="2">Detail Pekerjaan</th>
                    </tr>
                    @foreach ($attribute as $item)
                    <tr>
                        <td class="border border-slate-400 rounded-xl bg-slate-200 font-normal py-3 text-start px-5 w-2/4">{{ $item->master_attribute->nama }}</td>
                        <td class="border border-slate-200 font-normal py-3 px-1 text-end px-5 w-2/4"><button type="button" id="openModal" class="rounded-md bg-blue-500 px-2 py-1 text-xs font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Pilih Jenis Atribut</button></td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="bg-white p-8 rounded-2xl">
                <div class="mb-6 bg-slate-600 text-white text-center font-normal py-2 px-5 text-lg uppercase">
                    <h1 class="text-white uppercase">Lampiran Nama</h1>
                </div>
                <form action="{{ url('lampiran') }}" method="POST">
                    @csrf
                    <div class="space-y-12">
                        <div class="pb-2">
                            <ul class="grid grid-cols-4 gap-4 mb-6">
                                @if ($pemesanan->qty_xxs != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>XXS :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_xxs }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                                @if ($pemesanan->qty_xs != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>XS :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_xs }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                                @if ($pemesanan->qty_s != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>S :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_s }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                                @if ($pemesanan->qty_m != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>M :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_m }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                                @if ($pemesanan->qty_l != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>L :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_l }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                                @if ($pemesanan->qty_xl != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>XL :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_xl }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                                @if ($pemesanan->qty_2xl != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>2XL :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_2xl }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                                @if ($pemesanan->qty_3xl != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>3XL :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_3xl }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                                @if ($pemesanan->qty_4xl != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>4Xl :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_4xl }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                                @if ($pemesanan->qty_5xl != null)
                                <li>
                                    <button type="button" class="btn-size w-36 inline-flex items-center justify-center text-center w-full p-2 px-5 text-gray-500 bg-white border-0 ring-1 ring-gray-300 rounded-lg">
                                        <div class="flex items-center w-full justify-center gap-3">
                                            <div>5XL :</div>
                                            <div class="text-lg font-semibold text-start">{{ $pemesanan->qty_5xl }}</div>
                                        </div>
                                    </button>
                                </li>
                                @endif
                            </ul>
                            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-6">
                                    <label for="nama" class="block text-base/6 font-normal text-gray-900">Nama</label>
                                    <div class="mt-2">
                                        <input type="text" name="nama" id="nama" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-6">
                                    <div class="sm:col-span-6">
                                        <label for="nomor_punggung" class="block text-base/6 font-normal text-gray-900">Nomor Punggung</label>
                                        <div class="mt-2">
                                            <input type="text" name="nomor_punggung" id="nomor_punggung" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 gap-x-6 gap-y-8 flex sm:grid-cols-6 flex-wrap mt-6">
                                    <div class="sm:col-span-6">
                                        <label for="ukuran" class="block text-base/6 font-normal text-gray-900">Ukuran</label>
                                        <div class="mt-2">
                                            <input type="text" name="ukuran" id="ukuran" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 mt-6">
                                <div class="sm:col-span-6">
                                    <label for="keterangan" class="block text-base/6 font-normal text-gray-900">Keterangan</label>
                                    <div class="mt-2">
                                        <input type="text" name="keterangan" id="keterangan" autocomplete="given-name" class="block w-full rounded-md border-0 px-4 py-3 text-gray-900 shadow-base ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base/6">
                                        <input type="hidden" name="detail_pemesanan_id" id="detail_pemesanan_id" value="{{ $pemesanan->id }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-4">
                        <a href="{{ url('admin/master') }}"><button type="button" class="rounded-md bg-blue-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah Produk <i class="ri-add-line"></i></button></a>
                        <button type="submit" class="rounded-md bg-green-500 px-3 py-2 text-base font-normal text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan Data Nama <i class="ri-save-2-fill"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-white p-8 rounded-2xl sticky top-20 left-0 max-h-max">
            <div class="col-span-full">
                <label for="cover-photo" class="block text-base/6 font-normal text-gray-900">Foto Referensi Jersey</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10" style="height:40vw;">
                    <img src="{{ asset('storage/'.$pemesanan->product->foto) }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Popup Modal -->
    <div id="popupModal" class="fixed inset-0 hidden bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-3xl">
            <h2 class="text-xl font-normal text-gray-800 mb-3">Pilih Jenis Kain</h2>
            <div class="grid grid-cols-3 gap-5">
                <label class="block cursor-pointer">
                    <input type="radio" name="fabric" value="Milano" class="hidden peer" />
                    <div class="bg-gray-100 p-8 rounded-2xl max-h-max border-2 border-transparent peer-checked:border-green-500 transition">
                        <div class="relative popup_atribut w-full" style="height:11vw;">
                            <img src="images/kain.png" style="width:100%;" alt="Kain Milano">
                        </div>
                    </div>
                    <h3 class="text-center text-xl mt-2">Milano</h3>
                </label>
                <label class="block cursor-pointer">
                    <input type="radio" name="fabric" value="Milano" class="hidden peer" />
                    <div class="bg-gray-100 p-8 rounded-2xl max-h-max border-2 border-transparent peer-checked:border-green-500 transition">
                        <div class="relative popup_atribut w-full" style="height:11vw;">
                            <img src="images/kain.png" style="width:100%;" alt="Kain Milano">
                        </div>
                    </div>
                    <h3 class="text-center text-xl mt-2">Milano</h3>
                </label>
                <label class="block cursor-pointer">
                    <input type="radio" name="fabric" value="Milano" class="hidden peer" />
                    <div class="bg-gray-100 p-8 rounded-2xl max-h-max border-2 border-transparent peer-checked:border-green-500 transition">
                        <div class="relative popup_atribut w-full" style="height:11vw;">
                            <img src="images/kain.png" style="width:100%;" alt="Kain Milano">
                        </div>
                    </div>
                    <h3 class="text-center text-xl mt-2">Milano</h3>
                </label>
                <label class="block cursor-pointer">
                    <input type="radio" name="fabric" value="Milano" class="hidden peer" />
                    <div class="bg-gray-100 p-8 rounded-2xl max-h-max border-2 border-transparent peer-checked:border-green-500 transition">
                        <div class="relative popup_atribut w-full" style="height:11vw;">
                            <img src="images/kain.png" style="width:100%;" alt="Kain Milano">
                        </div>
                    </div>
                    <h3 class="text-center text-xl mt-2">Milano</h3>
                </label>
                <label class="block cursor-pointer">
                    <input type="radio" name="fabric" value="Milano" class="hidden peer" />
                    <div class="bg-gray-100 p-8 rounded-2xl max-h-max border-2 border-transparent peer-checked:border-green-500 transition">
                        <div class="relative popup_atribut w-full" style="height:11vw;">
                            <img src="images/kain.png" style="width:100%;" alt="Kain Milano">
                        </div>
                    </div>
                    <h3 class="text-center text-xl mt-2">Milano</h3>
                </label>
                <label class="block cursor-pointer">
                    <input type="radio" name="fabric" value="Milano" class="hidden peer" />
                    <div class="bg-gray-100 p-8 rounded-2xl max-h-max border-2 border-transparent peer-checked:border-green-500 transition">
                        <div class="relative popup_atribut w-full" style="height:11vw;">
                            <img src="images/kain.png" style="width:100%;" alt="Kain Milano">
                        </div>
                    </div>
                    <h3 class="text-center text-xl mt-2">Milano</h3>
                </label>
            </div>
            <div class="mt-6 flex justify-end gap-3">
                <button type="button" class="px-4 py-2 bg-red-500 text-white rounded-md shadow hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    Tutup
                </button>
                <button id="closeModal" type="button" class="px-4 py-2 bg-green-500 text-white rounded-md shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    Simpan
                </button>
            </div>
        </div>
    </div>
    <div class="mt-11 max-h-max">
        <div class="flex">
            <h1 class="text-2xl mb-4">Data Lampiran Nama</h1>
        </div>
        <div class="bg-white p-8 rounded-2xl">
            <div class="flex justify-between items-end mb-4 w-full">
                <form class="w-max flex justify-center items-center gap-3">
                    <select id="countries" class="bg-slate-600 text-white border border-slate-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 px-4 py-2.5">
                        <option selected>Urutkan Berdasarkan</option>
                        <option value="US">Ukuran</option>
                        <option value="DE">Nama A - Z</option>
                        <option value="CA">Nama Z - A</option>
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
                        <input type="search" id="default-search" class="block w-full p-4 py-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-slate-600 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Nama" required />
                        <button type="submit" style="top:50%; transform:translateY(-50%);" class="text-white absolute right-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-normal rounded-lg text-sm px-3 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </div>
                </form>
            </div>
            <div class="px-3 border">
                <table class="border-separate border-0 border-spacing-y-3 w-full">
                    <tr>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-10">No</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-64">Nama</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-44">Nomor Punggung</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-44">Ukuran</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 px-1 w-44">Keterangan</th>
                        <th class="border border-slate-700 bg-slate-600 text-white font-normal py-2 w-10">Aksi</th>
                    </tr>
                    @foreach ($lampiran as $key => $lampiran)
                        <tr>
                            <td class="border-0 border-slate-300 border-slate-400 bg-slate-200 font-normal py-3 px-1 text-center">{{ $key+1 }}</td>
                            <td class="border-0 border-slate-300 border-slate-400 bg-slate-200 font-normal py-3 px-1 text-center">{{ $lampiran['nama'] }}</td>
                            <td class="border-0 border-slate-300 border-slate-400 bg-slate-200 font-normal py-3 px-1 text-center">{{ $lampiran['nomor_punggung'] }}</td>
                            <td class="border-0 border-slate-300 border-slate-400 bg-slate-200 font-normal py-3 px-1 text-center">{{ $lampiran['ukuran'] }}</td>
                            <td class="border-0 border-slate-300 border-slate-400 bg-slate-200 font-normal py-3 px-1 text-center">{{ $lampiran['keterangan'] }}</td>
                            <td class="border-0 border-slate-300 border-slate-400 bg-slate-200 font-normal py-3 px-1 text-center">
                                <div class="flex gap-2 justify-center">
                                    <button type="button" class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-edit-2-line"></i></button>
                                    <form action="{{ url('lampiran/'.$lampiran->id) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="rounded-md bg-red-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-red-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="ri-delete-bin-line"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <a href="{{ url('admin/progress/'.$pemesanan->id) }}">
        <button class="rounded-md bg-blue-500 px-2 py-1 text-base font-normal text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mt-4">Progress</button>
    </a>
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
@endsection
