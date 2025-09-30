@extends('admin.layout.app')
@section('content')
    <div class="grid grid-rows-2 gap-4">
        <!-- Card besar (Semua) -->
        <div class="rounded-3xl shadow h-32 flex flex-col items-center justify-center">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path d="M2 2h12v12H2z" />
                </svg>
                <span>Semua</span>
            </div>
            <h1 class="text-4xl font-bold">167</h1>
        </div>

        <!-- Card kecil 3 kolom -->
        <div class="grid grid-cols-3 gap-4">
            <div class="rounded-3xl shadow h-28 flex flex-col items-center justify-center">
                <span>Divisi Networking</span>
                <h2 class="text-2xl font-bold">20</h2>
            </div>

            <div class="rounded-3xl shadow h-28 flex flex-col items-center justify-center">
                <span>Divisi Programming</span>
                <h2 class="text-2xl font-bold">67</h2>
            </div>

            <div class="rounded-3xl shadow h-28 flex flex-col items-center justify-center">
                <span>Divisi Multimedia</span>
                <h2 class="text-2xl font-bold">40</h2>
            </div>
        </div>

        <!-- Button -->
        <div class="flex justify-center mt-4">
            <button class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600">
                Tambah Anggota
            </button>
        </div>
    </div>
@endsection
