<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex flex-wrap pb-3 bg-white divide-y rounded-sm shadow-lg xl:divide-x xl:divide-y-0">
        <div class="w-full p-2 xl:w-1/3 sm:w-1/3">
            <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                        <span class="items-center px-4 py-4 m-auto bg-yellow-200 rounded-full hover:bg-yellow-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-yellow-500 hover:text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 2h12m0 0v2a6 6 0 01-6 6 6 6 0 01-6-6V2m6 20v-2a6 6 0 00-6-6 6 6 0 006-6v-2" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-medium text-gray-600">32</div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Pending
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-full p-2 xl:w-1/3 sm:w-1/3">
            <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                        <span class="items-center px-4 py-4 m-auto bg-blue-200 rounded-full hover:bg-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-blue-500 hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l6 6 4-4 4 4 6-6" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15l-6 6H9l-6-6" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-medium text-gray-600">4</div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Gambar
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full p-2 xl:w-1/3 sm:w-1/3">
            <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                        <span class="items-center px-4 py-4 m-auto bg-green-200 rounded-full hover:bg-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-green-500 hover:text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 4" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-medium text-gray-600">11</div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Press
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full p-2 xl:w-1/3 sm:w-1/3">
            <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                        <span class="items-center px-4 py-4 m-auto bg-green-200 rounded-full hover:bg-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-green-500 hover:text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9V6a2 2 0 012-2h8a2 2 0 012 2v3M6 15v-3M6 15a2 2 0 002 2h8a2 2 0 002-2m-10 0H6a2 2 0 01-2-2M6 19h12a2 2 0 002-2v-3M6 19a2 2 0 01-2-2v-3M6 19H4a2 2 0 01-2-2V7a2 2 0 012-2h16a2 2 0 012 2v9a2 2 0 01-2 2H6z" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-medium text-gray-600">11</div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Layout Print
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full p-2 xl:w-1/3 sm:w-1/3">
            <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                        <span class="items-center px-4 py-4 m-auto bg-green-200 rounded-full hover:bg-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-green-500 hover:text-green-600" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.714l-.79-.79L9.7 7.215a7.966 7.966 0 00.34-1.375c.043-.374.081-.725.13-1.058a7.912 7.912 0 00-1.823-.63c-.334-.061-.68-.108-1.031-.17-.33-.057-.663-.124-.996-.19a6.973 6.973 0 00-.793-.96c-.273-.289-.513-.598-.727-.929-.61-.842-.849-1.853-1.159-2.743-.207-.443-.473-.869-.789-1.247-.495-.595-1.111-.931-1.803-.988-.04-.045-.087-.086-.137-.125a.75.75 0 00-.107-.086c-.693-.529-1.593-.731-2.468-.53-1.174-.25-2.221.464-2.8 1.324-.496-.046-.987-.1-1.486-.157-.845-.075-1.68.105-2.443.505-.145.106-.273.228-.395.353l6.99 6.991a4.158 4.158 0 00-.789 1.122c.25-.115.522-.19.793-.23a3.28 3.28 0 002.122 1.331c-.635.555-.83.72-1.066 1.092 0-.045-.046-.065-.065-.097-.332-.4-.566-.878-.736-1.383a2.657 2.657 0 00-.872-.441l-.215-.432c.111-.446-.435-.583-.623-.485z" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-medium text-gray-600">11</div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Jait
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full p-2 xl:w-1/3 sm:w-1/3">
            <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                        <span class="items-center px-4 py-4 m-auto bg-green-200 rounded-full hover:bg-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-green-500 hover:text-green-600" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.122 2.122a5.005 5.005 0 00-7.08 7.08L6.25 11.24a9.018 9.018 0 00-3.767 4.628l-1.694-.705A9.052 9.052 0 019.5 6.75c.83-1.097 1.442-2.58 1.75-4.032.137-.854.313-1.655.587-2.427A5.02 5.02 0 0014.122 2.122z" />
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-medium text-gray-600">11</div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Finishing
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full p-2 xl:w-1/3 sm:w-1/3">
            <div class="flex flex-row items-center justify-between px-4 py-4">
                <div class="flex mr-4">
                    <span class="items-center px-4 py-4 m-auto bg-green-200 rounded-full hover:bg-green-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-green-500 hover:text-green-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 3C5.58 3 2 5.58 2 8C2 8.74 2.4 9.41 3.03 9.83L4.7 12.69C5.03 13.18 5.48 13.5 6 13.64V15.5C6 16.05 6.45 16.5 7 16.5H13C13.55 16.5 14 16.05 14 15.5V13.64C14.52 13.5 14.97 13.18 15.3 12.69L16.97 9.83C17.6 9.41 18 8.74 18 8C18 5.58 14.42 3 10 3ZM10 12.5C9.45 12.5 9 12.05 9 11.5C9 10.95 9.45 10.5 10 10.5C10.55 10.5 11 10.95 11 11.5C11 12.05 10.55 12.5 10 12.5ZM10 5C8.34 5 7 6.34 7 8C7 9.66 8.34 11 10 11C11.66 11 13 9.66 13 8C13 6.34 11.66 5 10 5Z"/>
                        </svg>
                    </span>
                </div>
                <div class="flex-1 pl-1">
                    <div class="text-4xl font-medium text-gray-600">11</div>
                    <div class="text-sm text-gray-400 sm:text-base">Packing</div>
                </div>
            </div>
        </div>
        <div class="w-full p-2 xl:w-1/3 sm:w-1/3">
            <div class="flex flex-col">
                <div class="flex flex-row items-center justify-between px-4 py-4">
                    <div class="flex mr-4">
                        <span class="items-center px-4 py-4 m-auto bg-green-200 rounded-full hover:bg-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="items-center w-8 h-8 m-auto text-green-500 hover:text-green-600" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M2 10c0 3.5 3 6.5 6.5 6.5S15 13.5 15 10 12 3.5 8.5 3.5 2 6.5 2 10zm6.5 3c-1.38 0-2.5-1.12-2.5-2.5S7.12 8 8.5 8 11 9.12 11 10.5 9.88 13 8.5 13zM0 8c0 2.28 1.22 4.34 3 5.52V17h1V9.52C4.78 8.44 5.5 7.28 6 6.17V3h12v3.17c.5 1.11 1.22 2.27 2 3.35V14h1V9.52c1.78-1.18 3-3.24 3-5.52 0-3.5-3-6.5-6.5-6.5S15 4.5 15 8c0 .28.03.56.08.83C13.55 8.31 13 7.7 13 7c0-1.29-1.03-2.34-2.34-2.34H6.34C5.03 4.66 4 5.7 4 7c0 .7-.55 1.31-1.08 1.83C1.03 8.56 0 8.28 0 8z"/>
                            </svg>
                        </span>
                    </div>
                    <div class="flex-1 pl-1">
                        <div class="text-4xl font-medium text-gray-600">11</div>
                        <div class="text-sm text-gray-400 sm:text-base">
                            Kirim
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
