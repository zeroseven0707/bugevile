@extends('layouts.app')
@section('content')
    <!-- DataTables CSS dan Script -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <div class="container mx-auto p-5">
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table id="pemesananTable" class="min-w-full text-sm text-left text-gray-500">
                <thead class="bg-gray-100 text-xs uppercase text-gray-700">
                    <tr>
                        <th class="py-3 px-4">ID Pelanggan</th>
                        <th class="py-3 px-4">No Telepon</th>
                        <th class="py-3 px-4">Alamat</th>
                        <th class="py-3 px-4">Tanggal Masuk</th>
                        <th class="py-3 px-4">Tanggal Selesai</th>
                        <th class="py-3 px-4">Total Waktu Pengerjaan</th>
                        <th class="py-3 px-4">Jenis Produk</th>
                        <th class="py-3 px-4">Jenis Pola</th>
                        <th class="py-3 px-4">Jenis Print</th>
                        <th class="py-3 px-4">Jumlah Produk</th>
                        <th class="py-3 px-4">Harga Satuan</th>
                        <th class="py-3 px-4">Total Harga</th>
                        <th class="py-3 px-4">Pembayaran Awal</th>
                        <th class="py-3 px-4">Sisa Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemesanan as $item)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-4">{{ $item->id_pelanggan }}</td>
                            <td class="py-3 px-4">{{ $item->no_telpon }}</td>
                            <td class="py-3 px-4">{{ $item->alamat }}</td>
                            <td class="py-3 px-4">{{ $item->tanggal_masuk }}</td>
                            <td class="py-3 px-4">{{ $item->tanggal_selesai }}</td>
                            <td class="py-3 px-4">{{ $item->total_waktu_pengerjaan }}</td>
                            <td class="py-3 px-4">{{ $item->jenis_produk }}</td>
                            <td class="py-3 px-4">{{ $item->jenis_pola }}</td>
                            <td class="py-3 px-4">{{ $item->jenis_print }}</td>
                            <td class="py-3 px-4">{{ $item->jumlah_produk }}</td>
                            <td class="py-3 px-4">{{ number_format($item->harga_satuan, 2) }}</td>
                            <td class="py-3 px-4">{{ number_format($item->total_harga, 2) }}</td>
                            <td class="py-3 px-4">{{ number_format($item->pembayaran_awal, 2) }}</td>
                            <td class="py-3 px-4">{{ number_format($item->sisa_pembayaran, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- DataTables Script -->
    <script>
        $(document).ready(function () {
            $('#pemesananTable').DataTable({
                responsive: true,
                pageLength: 10,
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json"
                }
            });
        });
    </script>
@endsection
